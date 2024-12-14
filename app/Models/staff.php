<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    //

    public $table='staff';
    public $primaryKey='id';
    public $fillable=[ 'email', 'password'];
    use HasFactory;
}
