<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    public $table='images';
    public $primaryKey='id';

    public $fillable=['id','image'];

}
