<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestFileForm;
use App\Models\RequestFile;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Services\ImageService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $imageService;

    public function __construct(
        ImageService $imageService
    )
    {
        $this->imageService = $imageService;
    }

    public function requestFile(RequestFileForm $request)
    {
        DB::beginTransaction();
        try {
            $credentials = $request->only('text', 'email', 'note');
            $credentials['image_buy'] = $this->imageService->upload($request->image_buy, 'images');
            if ($request->image_review) {
                $credentials['image_review'] = $this->imageService->upload($request->image_buy, 'images');
            }
            RequestFile::create($credentials);
            DB::commit();
            Session::flash("success", "Request success");
        } catch (\Exception $e) {
            DB::rollBack();
            Session::flash("error", "Request error. Please try again!");
        }
        return redirect()->back();
    }
}
