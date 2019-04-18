<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //public $timestamps = false;
    public $table = "student";
    protected $primaryKey = 'student_code';
    const CREATED_AT = 'create_date';  
    const UPDATED_AT = 'last_update'; 
    protected $fillable = [
        'student_code','fullname', 'current_address', 'address','country','department_id','course_id','status_id','create_date','last_update'
    ];
}
