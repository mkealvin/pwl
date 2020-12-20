<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index()
    {
        $data_tentang = DB::table('data')->get();
        return view('index',['data_tentang'=> $data_tentang]);
    }
    
    public function selidik()
    {
        return view('selidik');
    }
    public function peralatan()
    {
        return view('peralatan');
    }
    public function anunh500()
    {
        return view('anunh500');
    }

    public function galery()
    {
        return view('galery');
    }

    public function login()
    {
        return view('login');
    }
}
