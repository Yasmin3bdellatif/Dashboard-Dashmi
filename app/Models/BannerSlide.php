<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerSlide extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'title',
        'details',
        'link',
        'isShown',
        'slideOrder',
    ];


}
