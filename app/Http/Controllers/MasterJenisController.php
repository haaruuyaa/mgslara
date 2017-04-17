<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterJenis;

class MasterJenisController extends Controller
{
    //
    public function index()
    {
        $jenis = MasterJenis::all();
        
        return view('master-jenis/index',['page_title' => 'Master Jenis','jenis' => $jenis]);
    }
    
    public function create()
    {
        return view('master-jenis/create',['page_title' => 'Tambah Jenis Baru']);
    }
    
    public function store(Request $request)
    {
        $jenis = new MasterJenis();
        
        $jenis->JenisName = $request->jenisName;
        $jenis->save();
        
        return redirect()->action('MasterJenisController@index')->with('success','Data Insertion was successfull');
    }
}
