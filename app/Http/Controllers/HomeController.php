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

        $bilpermohonan = DB::table('bil_permohonan_tahun_kategori')
            ->where('tahun', '<>', '')
            ->get();

        $bilpermohonan2 = DB::table('bil_permohonan_tahun_kategori2')
            ->where('tahun', '<>', '')
            ->get();

        $tahunPermohonan = DB::table('jumlah_belanja_ubat')
            ->select('tahun')
            ->where('tahun', '<>', 'null')
            ->groupBy('tahun')
            ->get();

        $jumlahpermohonan = DB::table('bil_permohonan_tahun')
            ->where('tahun', '<>', 'null')
            ->get();

        // SQL mengikut Umur

        $tahunumur = DB::table('bil_permohonan_ikut_umur_tahun')->where('tahun_memohon', '<>', 'null')->get();

        $umurk30 = DB::table('bil_permohonan_ikut_kurang_30')->get();
        $umurk3039 = DB::table('bil_permohonan_ikut_30_39')->get();
        $umurk4049 = DB::table('bil_permohonan_ikut_40_49')->get();
        $umurk5059 = DB::table('bil_permohonan_ikut_50_59')->get();
        $umura60 = DB::table('bil_permohonan_ikut_lebih_60')->get();

            // return dd($tahunumur);
        return view('dashboard', compact('kategorituntutan', 'data', 
            'tahunPermohonan', 'bilpermohonan', 
            'bilpermohonan2', 'jumlahpermohonan', 
            'umurk30', 'umurk3039', 'umurk4049', 'umurk5059', 'umura60', 'tahunumur'
        ));
    }
}
