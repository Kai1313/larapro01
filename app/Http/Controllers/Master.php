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
    	$data['scriptsJs']=
    	'<script>
    		$(function ()
    		{
		    	$("#m_barang").DataTable({});
		  	})
    	</script>';
        return view('m_barang')->with($data);
    }

    public function customer()
    {
    	$data['page_title']='Master Customer';
    	$data['active']='class="active';
    	$data['scriptsJs']=
    	'<script>
    		$(function ()
    		{
		    	$("#m_customer").DataTable({});
		  	})
    	</script>';
        return view('m_customer')->with($data);
    }

    public function kendaraan()
    {
    	$data['page_title']='Master Kendaraan';
    	$data['active']='class="active';
    	$data['scriptsJs']=
    	'<script>
    		$(function ()
    		{
		    	$("#m_kendaraan").DataTable({});
		  	})
    	</script>';
        return view('m_kendaraan')->with($data);
    }
}