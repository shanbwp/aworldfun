<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    public function portfolios(){
        return $this->hasMany('App\Models\Portfolio','portfolio_category_id');
    }
}