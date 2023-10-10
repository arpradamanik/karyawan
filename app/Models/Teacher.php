<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use UConverter;

class Teacher extends Model
{
    protected $table='karyawan';
    protected $primaryKey = 'karyawanid';
    use HasFactory;

////////////////////// this is mutator which is used to send the modify data
    // function setTeacherEducationAttribute($value){
    //             $this->attributes["teacher_education"] = ucfirst($value);
    // }
////////////////////// this is Accessor which is used to get the modify data

    

}
