<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class MasterStock extends Model
{
    //
    protected $guarded = [''];
    protected $table = 'masterstock';
    public $timestamps = false;
    
    
    public function stockJenis()
    {
        $result = DB::table($this->table)
                ->select('*')
                ->from('masterstock as stock')
                ->leftJoin('masterjenis as mj', 'mj.JenisId', '=', 'stock.JenisId')
                ->get()
                ;
        return $result;
    }   
}
