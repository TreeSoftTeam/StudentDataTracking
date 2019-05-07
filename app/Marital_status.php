<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marital_status extends Model
{
  public $timestamps = false;
  public $table = "marital_status";
  protected $primaryKey = 'marital_status_id';
  protected $fillable = [
      'marital_status_id','marital_status_name'
  ];
}
