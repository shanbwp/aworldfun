<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable=['category_id','name','slug','date','upload_by','upload_by','short_description','description','image','meta_title','meta_tag','meta_description'];
    use HasFactory;
    public function category(){
        return $this->belongsTo('App\Models\Category','category_id');
    }
}
