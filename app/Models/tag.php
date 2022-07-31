<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'tag_uz',
        'tag_ru',
        'tag_en',
        'about_uz',
        'about_ru',
        'about_en',
    ];
}
