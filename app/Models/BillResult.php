<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillResult extends Model {
  protected $fillable = [
    'idBillResult', 'idUnit', 'idRoom','unit_date_lastmonth','unit_date_current', 'water_unit_lastmonth',
    'water_unit_current', 'electric_unit_lastmonth','electric_unit_current', 'res_electric','res_electric_price',
    'res_service_price','res_water', 'res_water_price','result_bill','created_at','updated_at'
  ];

  protected $table = 'bill_result';
  protected $primaryKey = 'idBillResult';
  public $timestamps = true;
}
