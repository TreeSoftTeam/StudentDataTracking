<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public $timestamps = false;
    public $table = "faculty";
    protected $primaryKey = 'faculty_id';
    protected $fillable = ['faculty_name'];
}
