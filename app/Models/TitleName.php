<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TitleName extends Model {
  protected $fillable = [
      'IDTitleName', 'TitleNameTH', 'TitleNameEN',
  ];

  protected $table = 'title_name';
  protected $primaryKey = 'IDTitleName';
  public $timestamps = false;
}
