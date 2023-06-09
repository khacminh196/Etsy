<?php

namespace App\Http\Controllers;

use App\Models\RequestFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect()->route('request.index');
        } else {
            return redirect()->back();
        }
    }

    public function getListRequest()
    {
        $list = RequestFile::where('status', 0)->paginate(10);
        return view('request.list', compact('list'));
    }

    public function detailRequest($id)
    {
        $detail = RequestFile::find($id);
        dd($detail);
    }
}
