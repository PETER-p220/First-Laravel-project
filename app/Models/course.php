<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //
    public $table='course';
    public $primaryKey='id';
    public $fillable=['name','syllabus','duration'];
    use HasFactory;
public function duration(){
    return $this->duration." hours";
}

}
