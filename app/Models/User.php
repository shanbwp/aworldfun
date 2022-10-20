<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['name','f_name','image','phone','email','paypal_email','address','payment','status','password'];
    use HasFactory;
    public function groups(){
        return $this->hasMany('App\Models\Group','user_id');
    }
    public function accounts(){
        return $this->belongsTo('App\Models\Accounts','user_id');
    }
    public function claims(){
        return $this->hasMany('App\Models\Claim','user_id');
    }
}