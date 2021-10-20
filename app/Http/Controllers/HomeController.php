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
<<<<<<< HEAD
        $kategorituntutan = DB::table('kategorituntutan')->get();
        $data = DB::table('jumlah_kos_tahunan')->get();

        return view('dashboard', compact('kategorituntutan', 'data'));
=======
        $data = DB::table('jumlah_kos_tahunan')->get();

        return view('dashboard', compact('data'));
>>>>>>> 8a2d1888459997e78b45957268f9bef6743c3c67
    }
}
