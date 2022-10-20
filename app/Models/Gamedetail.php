<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gamedetail extends Model
{
    protected $fillable=['category_id','name','image','vedio_url','embeded','slug','meta_tag','meta_title','meta_description'];
    use HasFactory;
}
