<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
  public $timestamps = false;
  public $table = "status";
  protected $primaryKey = 'status_id';
  protected $fillable = [
      'status_id','status_name'
  ];
}
