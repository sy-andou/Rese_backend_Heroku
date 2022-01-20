<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representative extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    public static $rules = array(
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
    );
}
