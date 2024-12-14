<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class batch extends Model
{
    //
    public $table='batch';
    public $primaryKey='id';
    public $fillable=['batch_name','course_name','start_date'];
}
