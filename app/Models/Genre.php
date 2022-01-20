<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['genre'];

    public static $rules = array(
        'genre' => 'required',
    );
    public function shop()
    {
        return $this->hasMany('App\Models\Shop');
    }
}
