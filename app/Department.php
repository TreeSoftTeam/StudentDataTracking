<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $timestamps = false;
    public $table = "department";
    protected $primaryKey = 'department_id';
    protected $fillable = ['department_id','department_name','faculty_id'];
}
