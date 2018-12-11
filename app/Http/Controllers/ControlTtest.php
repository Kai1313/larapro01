<?php 
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControlTtest extends Controller
{
    public function index()
    {
        $data['page_title']='Dashboard';
        return view('dashboard')->with($data);
    }
}
