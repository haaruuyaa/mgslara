<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterStock;

class MasterStockController extends Controller
{
    //
    public function index(MasterStock $db)
    {
        $stock = $db->stockJenis();
        
        return view('master-stock/index',['page_title' => 'Master Stock','stock' => $stock]);
    }
}
