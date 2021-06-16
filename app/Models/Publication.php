<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\HomeController;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'image_path',
        'video_path',
        'user_id'
    ];

}
