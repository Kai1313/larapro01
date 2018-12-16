<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Master_barang;
use Illuminate\Http\Request;

class Master extends Controller
{
    public function barang()
    {
    	$data['page_title']='Master Barang';
    	$data['active']='class="active';
        return view('m_barang')->with($data);
    }

    public function addBarang(Request $request)
    {
        $m_barang = new Master_barang;
        $m_barang->kode_barang = $request->kode_barang;
        $m_barang->nama_barang = $request->nama_barang;
        $m_barang->part_number = $request->part_number;
        $m_barang->nama_satuan = $request->nama_satuan;
        $m_barang->min_qty = $request->min_qty;
        $m_barang->qty_perset = $request->qty_perset;
        $m_barang->no_rak = $request->no_rak;
        $m_barang->save();
        $data['status'] = TRUE;
        return response()->json($data);
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

    public function karyawan()
    {
    	$data['page_title']='Master Karyawan';
    	$data['active']='class="active';
    	$data['scriptsJs']=
    	'<script>
    		$(function ()
    		{
		    	$("#m_karyawan").DataTable({});
		  	})
    	</script>';
        return view('m_karyawan')->with($data);
    }

    public function driver()
    {
        $data['page_title']='Master Driver';
        $data['active']='class="active';
        $data['scriptsJs']=
        '<script>
            $(function ()
            {
                $("#m_driver").DataTable({});
            })
        </script>';
        return view('m_driver')->with($data);
    }

    public function biaya_driver()
    {
        $data['page_title']='Master Biaya Driver';
        $data['active']='class="active';
        $data['scriptsJs']=
        '<script>
            $(function ()
            {
                $("#m_biaya_driver").DataTable({});
            })
        </script>';
        return view('m_biaya_driver')->with($data);
    }

    public function tujuan()
    {
        $data['page_title']='Master Tujuan';
        $data['active']='class="active';
        $data['scriptsJs']=
        '<script>
            $(function ()
            {
                $("#m_tujuan").DataTable({});
            })
        </script>';
        return view('m_tujuan')->with($data);
    }

    public function supplier()
    {
        $data['page_title']='Master Supplier';
        $data['active']='class="active';
        $data['scriptsJs']=
        '<script>
            $(function ()
            {
                $("#m_supplier").DataTable({});
            })
        </script>';
        return view('m_supplier')->with($data);
    }
}