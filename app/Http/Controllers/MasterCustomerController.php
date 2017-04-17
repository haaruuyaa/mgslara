<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterCustomer;

class MasterCustomerController extends Controller
{
    //
    public function index(MasterCustomer $db)
    {
        $customers = $db->all();
        
        return view('master-customer/index',['page_title' => 'Master Customer','customers' => $customers]);
    }
    
    public function create()
    {
        return view('master-customer/create',['page_title' => 'Tambah Customer Baru']);
    }
    
    public function store(Request $request, MasterCustomer $db)
    {
        $generateID = $db->generateID()[0]->CustomerId;
                
        $db->CustomerId = $generateID;
        $db->CustomerName = $request->customerName;
        $db->CustomerPhone = $request->customerPhone;
        $db->save();
        
        return redirect()->action('MasterCustomerController@index')->with('success','Data Insertion was successfull');
    }
}
