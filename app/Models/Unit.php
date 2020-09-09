<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model {
  protected $fillable = [
      'idUnit', 'electric_unit', 'water_unit', 'water_minimum', 'created_at', 'updated_at'
  ];

  protected $table = 'unit';
  protected $primaryKey = 'idUnit';
  public $timestamps = true;
}
