<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    //
    public $table='payment';
    public $primaryKey='id';
    public $fillable=['enrollment_no','paid_date','amount'];
    use HasFactory;
}
