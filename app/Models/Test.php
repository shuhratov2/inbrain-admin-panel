<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $table = 'test';
    protected $primaryKey = 'id';
    protected $fillable = ['curse', 'lesson', 'question', 'answer_1','answer_2', 'answer_3', 'answer_4','variant_1', 'variant_2', 'variant_3', 'variant_4'];

}
