<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data_tentang = DB::table('data')->get();
        return view('home',['data_tentang'=> $data_tentang]);
    }
    public function edit($id)
    {
        $tentang = \App\Models\Data::find($id);
        return view('edit',['tentang'=>$tentang]);
    }
    public function update(Request $request,$id)
    {
        $tentang = \App\Models\Data::find($id);
        $tentang->update($request->all());
        return redirect('/home')->with('Data berhasil di update');
    }
}
