<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model {
  protected $fillable = [
      'idGender', 'Name_TH', 'Name_EN'
  ];

  protected $table = 'gender';
  protected $primaryKey = 'idGender';
  public $timestamps = false;
}
