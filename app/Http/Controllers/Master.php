<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Master extends Controller
{
    public function barang()
    {
    	$data['page_title']='Master Barang';
    	$data['active']='class="active';
        return view('m_barang')->with($data);
    }
}