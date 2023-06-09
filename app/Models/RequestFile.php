<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'email',
        'image_buy',
        'image_review',
        'note',
        'status'
    ];
}
