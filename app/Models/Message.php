<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    public $table='message';
    public $primaryKey='id';


    protected $fillable=['email','subject','message'];

    use HasFactory;

}
