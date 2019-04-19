<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  public $timestamps = false;
  public $table = "student";
  protected $primaryKey = 'course_id';
  protected $fillable = [
    'course_id','course_name'
  ];
}
