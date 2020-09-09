<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model {
  protected $fillable = [
    'idRoom', 'IDTitleName', 'idGender', 'cable_price', 'trash_price', 'profile_picture', 'fullname', 'nickname',
    'age','dob', 'contact', 'room_number', 'room_price', 'remark', 'check_in_date', 'created_at','updated_at'
  ];

  protected $table = 'room';
  protected $primaryKey = 'idRoom';
  public $timestamps = true;
}
