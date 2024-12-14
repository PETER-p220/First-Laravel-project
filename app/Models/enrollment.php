<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enrollment extends Model
{
    //
    protected $table='enrollment';
    protected $primaryKey='id';
    protected $fillable=['enrollment_no','batch','student','join_date','fee'];
    use HasFactory;
}
