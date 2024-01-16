<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
// Use Charts;
use App\Charts\SampleChart;

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

        $kos = DB::table('jumlah_kos_tahunan')
            ->where('tahun', '<>', '')
            ->orderBy('tahun', 'DESC')
            ->get();
        
        $graphkos = DB::table('jumlah_kos_tahunan')
            ->where('tahun', '<>', '')
            ->orderBy('tahun', 'ASC')
            ->get();

        $data = DB::table('jumlah_bil_tahunan')
            ->where('tahun', '<>', '')
            ->orderBy('tahun', 'DESC')
            ->get();
       
       $graphdata = DB::table('jumlah_bil_tahunan')
            ->where('tahun', '<>', '')
            ->orderBy('tahun', 'ASC')
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
     
        $chart = new SampleChart;
        $chart->labels($graphkos->pluck('tahun'));
        $chart->dataset('Jumlah Keseluruhan', 'line', $graphkos->pluck('jumlah'))->options([
            'borderColor' => '#8336b6',
            'fill' => false,
        ]);

        $chart2 = new SampleChart;
        $chart2->labels($graphdata->pluck('tahun'));
        $chart2->dataset('Bil Rawatan', 'line', $graphdata->pluck('jumlah'))->options([
            'borderColor' => '#126444',
            'backgroundColor' => [
                'rgb(255, 99, 132)',
                'rgb(75, 192, 192)',
                'rgb(255, 205, 86)',
                'rgb(201, 203, 207)',
                'rgb(54, 162, 235)'
            ],
            'hoverOffset' => 4,
            'fill' => false,
        ]);

        // return dd($tahunumur);
        return view('dashboard', compact(
            'kategorituntutan',
            'data',
            'tahunPermohonan',
            'bilpermohonan',
            'bilpermohonan2',
            'jumlahpermohonan',
            'umurk30',
            'umurk3039',
            'umurk4049',
            'umurk5059',
            'umura60',
            'tahunumur',
            'kos',
            'chart',
            'chart2'
        ));
    }
}
