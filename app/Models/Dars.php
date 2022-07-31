<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Dars extends Model
{
    use HasFactory;

    protected $table = 'dars';
    public function categories()
    {

        return $this->belongsTo(Category::class);
    }
}
