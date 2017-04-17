<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterHelper;

class MasterHelperController extends Controller
{
    //
    public function index(MasterHelper $db)
    {
        $helpers = $db->all();
        
        return view('master-helper/index',['page_title' => 'Master Helper','helpers' => $helpers]);
    }
    
    public function create()
    {
        return view('master-helper/create',['page_title' => 'Tambah Helper Baru']);
    }
    
    public function store(Request $request, MasterHelper $helper)
    {
        $generateID = $helper->generateID()[0]->HelperId;
                
        $helper->HelperId = $generateID;
        $helper->HelperName = $request->helperName;
        $helper->HelperPhone = $request->helperPhone;
        $helper->save();
        
        return redirect()->action('MasterHelperController@index')->with('success','Data Insertion was successfull');
    }
}
