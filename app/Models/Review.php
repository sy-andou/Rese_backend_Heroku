<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['evaluation', 'comment', 'reserve_id'];

    public function reserve()
    {
        return $this->belongsTo('App\Models\Reserve');
    }
}
