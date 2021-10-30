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

        $j1 = DB::table('jumlah_belanja_ubat')
            ->whereIn('id_kategori', ['01'])
            ->sum('total');

        $j2 = DB::table('jumlah_belanja_ubat')
            ->whereIn('id_kategori', ['02', '03', '04', '05', '06', '07'])
            ->sum('total');

        $j3 = DB::table('jumlah_belanja_ubat')
            ->whereIn('id_kategori', ['12'])
            ->sum('total');

        $j4 = DB::table('jumlah_belanja_ubat')
            ->whereIn('id_kategori', ['13'])
            ->sum('total');

        return view('dashboard', compact('kategorituntutan', 'data'));
    }
}
