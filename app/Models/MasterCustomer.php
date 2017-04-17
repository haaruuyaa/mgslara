<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Model;

class MasterCustomer extends Model
{
    //
    protected $guarded = [''];
    protected $table = 'mastercustomer';
    public $timestamps = false;
    
    public function generateID()
    {
      $genID = DB::select("SELECT
            CONCAT(
                    'CUS',
                    RIGHT(CONCAT('000',CONVERT(IFNULL(MAX(RIGHT(CustomerId,4)),0)+1,CHAR)),4)
            ) AS CustomerId 
            FROM MasterCustomer
            ;");

      return $genID;
    }
}
