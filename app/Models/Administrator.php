<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password', 'permission_id'];

    public static $rules = array(
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'permission_id' => 'required'
    );
}
