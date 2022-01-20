<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reserve extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = ['name', 'user_id', 'shop_id', 'date', 'time', 'number'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function shop()
    {
        return $this->belongsTo('App\Models\Shop');
    }
    public function review()
    {
        return $this->hasOne('App\Models\Review');
    }
}
