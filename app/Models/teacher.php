<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // Import the correct class


class teacher extends Model
{
    //
    public $table='teacher';
    public $primaryKey='id';
    public $fillable=['name','email','password','image'];

    protected $hidden = ['password', 'remember_token'];

    use HasFactory;

}
