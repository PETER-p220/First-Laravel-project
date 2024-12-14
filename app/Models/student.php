<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    public $table='student';
    public $primaryKey='id';
    public $fillable=['name', 'email', 'password'];
    use HasFactory;
}
