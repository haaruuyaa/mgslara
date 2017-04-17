<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class MasterHelper extends Model
{
    //
    protected $guarded = [''];
    public $timestamps = false;
    protected $table = 'masterhelper';
    
    public function generateID()
    {
      $genID = DB::select("SELECT
        CONCAT(
                'A',
                RIGHT(CONCAT('00',CONVERT(IFNULL(MAX(RIGHT(HelperId,3)),0)+1,CHAR)),3)
        ) AS HelperId 
        FROM MasterHelper
        ;");

      return $genID;
    }
}
