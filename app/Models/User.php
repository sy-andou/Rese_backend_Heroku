<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
        'permission_id',
        'email_verified_at',
        'email_verify_token',
    ];

    public static $rules = array(
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'permission_id' => 'required'
    );

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }


    public function getJWTCustomClaims()
    {
        return [];
    }

    public function favorite()
    {
        return $this->hasMany('App\Models\Favorite');
    }
    public function reserve()
    {
        return $this->hasMany('App\Models\Reserve')->withTrashed();
    }
    public function permission()
    {
        return $this->belongsTo('App\Models\Permission');
    }
    public function shop()
    {
        return $this->hasMany('App\Models\Shop');
    }
}
