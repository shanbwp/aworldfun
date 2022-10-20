<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable=['title1','title2','btn_name','btn2_name','url','url_2','detail','image','bg_image'];
    use HasFactory;
}
