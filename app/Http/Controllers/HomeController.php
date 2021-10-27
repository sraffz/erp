<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $kategorituntutan = DB::table('kategorituntutan')->get();
        $data = DB::table('jumlah_kos_tahunan')
        ->where('tahun', '<>', '')
        ->orderBy('tahun', 'DESC')
        ->get();

        return view('dashboard', compact('kategorituntutan', 'data'));
    }
}
