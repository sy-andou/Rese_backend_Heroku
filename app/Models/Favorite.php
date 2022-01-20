<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'shop_id'];

    public static $rules = array();

    public function shop()
    {
        return $this->belongsTo('App\Models\Shop');
    }
}
