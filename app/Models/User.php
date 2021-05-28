<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    public $timestamps = false;
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function sinhvien()
    {
        return $this->hasOne('App\Models\SinhVien','id_user','id');
    }
    public function giangvien()
    {
        return $this->hasOne('App\Models\GiangVien','id_user','id');
    }
    public function binhluan()
    {
        return $this->hasMany('App\Models\BinhLuan','id_users','id');
    }
    public function tintuc()
    {
        return $this->hasMany('App\Models\TinTuc','id_user','id');
    }
}
