<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'img_pass', 'summary', 'opening_time', 'closing_time', 'min_number', 'max_number', 'user_id', 'area_id', 'genre_id'];

    public static $rules = array(
        'name' => 'required',
        'summary' => 'required|max:200'
    );
    public function area()
    {
        return $this->belongsTo('App\Models\Area');
    }
    public function genre()
    {
        return $this->belongsTo('App\Models\Genre');
    }
    public function favorite()
    {
        return $this->hasMany('App\Models\Favorite');
    }
    public function reserve()
    {
        return $this->hasMany('App\Models\Reserve');
    }
}
