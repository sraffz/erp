@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => 'Butiran Kos Tahunan'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="float-right">
                                    <a target="_blank" href="{{ url('pdf/pdf-jumlah-kos', [$id]) }}" class="btn btn-info">
                                        <span class="material-icons">print</span>
                                    </a>
                                </div>
                                <a href="{{ route('halaman-utama') }}" class="btn btn-warning">
                                    <span class="material-icons">arrow_back_ios</span>Kembali
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-chart">
                        <div class="card-header card-header-success">
                            <h4 class="card-title">Kos Tanggungan Rawatan Pegawai dan Pesara</h4>
                            <p class="card-category">
                                <span class="">Jadual kos tanggungan keseluruhan mengikut bulan.
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @php
                                    // use App\Charts\SampleChart;

                       
                                    // foreach ($jumlah_kos as $jk) {
                                    //     $jumlah =$jk->jumlah;
                                    // }
                                    // $chart2 = new SampleChart;
                                    // $chart2->labels(['Pegawai', 'Pesara', 'Jumlah']);
                                    // $chart2->dataset('Jumlah Keseluruhan', 'polarArea', [$jumlah_kos_pegawai, $jumlah_kos_pesara, $jumlah])->options([
                                    //     'borderColor' => 'white',
                                    //     'fill' => false,
                                    //     'backgroundColor' => [
                                    //     '#F34848',
                                    //     '#EACF46',
                                    //     '#8336b6']
                                    // ]);

                                    $pesara1 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Ya')->where('bulan', '1')->pluck('jumlah')->first();
                                    if ($pesara1 == null) {
                                        $pesara1 = 0;
                                    }else {
                                        $pesara1 = $pesara1;
                                    }
                                    $pesara2 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Ya')->where('bulan', '2')->pluck('jumlah')->first();
                                    if ($pesara2 == null) {
                                        $pesara2 = 0;
                                    }else {
                                        $pesara2 = $pesara2;
                                    }
                                    $pesara3 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Ya')->where('bulan', '3')->pluck('jumlah')->first();
                                    if ($pesara3 == null) {
                                        $pesara3 = 0;
                                    }else {
                                        $pesara3 = $pesara3;
                                    }
                                    $pesara4 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Ya')->where('bulan', '4')->pluck('jumlah')->first();
                                    if ($pesara4 == null) {
                                        $pesara4 = 0;
                                    }else {
                                        $pesara4 = $pesara4;
                                    }
                                    $pesara5 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Ya')->where('bulan', '5')->pluck('jumlah')->first();
                                    if ($pesara5 == null) {
                                        $pesara5 = 0;
                                    }else {
                                        $pesara5 = $pesara5;
                                    }
                                    $pesara6 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Ya')->where('bulan', '6')->pluck('jumlah')->first();
                                    if ($pesara6 == null) {
                                        $pesara6 = 0;
                                    }else {
                                        $pesara6 = $pesara6;
                                    }
                                    $pesara7 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Ya')->where('bulan', '7')->pluck('jumlah')->first();
                                    if ($pesara7 == null) {
                                        $pesara7 = 0;
                                    }else {
                                        $pesara7 = $pesara7;
                                    }
                                    $pesara8 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Ya')->where('bulan', '8')->pluck('jumlah')->first();
                                    if ($pesara8 == null) {
                                        $pesara8 = 0;
                                    }else {
                                        $pesara8 = $pesara8;
                                    }
                                    $pesara9 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Ya')->where('bulan', '9')->pluck('jumlah')->first();
                                    if ($pesara9 == null) {
                                        $pesara9 = 0;
                                    }else {
                                        $pesara9 = $pesara9;
                                    }
                                    $pesara10 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Ya')->where('bulan', '10')->pluck('jumlah')->first();
                                    if ($pesara10 == null) {
                                        $pesara10 = 0;
                                    }else {
                                        $pesara10 = $pesara10;
                                    }
                                    $pesara11 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Ya')->where('bulan', '11')->pluck('jumlah')->first();
                                    if ($pesara11 == null) {
                                        $pesara11 = 0;
                                    }else {
                                        $pesara11 = $pesara11;
                                    }
                                    $pesara12 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Ya')->where('bulan', '12')->pluck('jumlah')->first();
                                    if ($pesara12 == null) {
                                        $pesara12 = 0;
                                    }else {
                                        $pesara12 = $pesara12;
                                    }

                                    //pegawai
                                    $pegawai1 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Tidak')->where('bulan', '1')->pluck('jumlah')->first();
                                    if ($pegawai1 == null) {
                                        $pegawai1 = 0;
                                    }else {
                                        $pegawai1 = $pegawai1;
                                    }
                                    $pegawai2 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Tidak')->where('bulan', '2')->pluck('jumlah')->first();
                                    if ($pegawai2 == null) {
                                        $pegawai2 = 0;
                                    }else {
                                        $pegawai2 = $pegawai2;
                                    }
                                    $pegawai3 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Tidak')->where('bulan', '3')->pluck('jumlah')->first();
                                    if ($pegawai3 == null) {
                                        $pegawai3 = 0;
                                    }else {
                                        $pegawai3 = $pegawai3;
                                    }
                                    $pegawai4 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Tidak')->where('bulan', '4')->pluck('jumlah')->first();
                                    if ($pegawai4 == null) {
                                        $pegawai4 = 0;
                                    }else {
                                        $pegawai4 = $pegawai4;
                                    }
                                    $pegawai5 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Tidak')->where('bulan', '5')->pluck('jumlah')->first();
                                    if ($pegawai5 == null) {
                                        $pegawai5 = 0;
                                    }else {
                                        $pegawai5 = $pegawai5;
                                    }
                                    $pegawai6 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Tidak')->where('bulan', '6')->pluck('jumlah')->first();
                                    if ($pegawai6 == null) {
                                        $pegawai6 = 0;
                                    }else {
                                        $pegawai6 = $pegawai6;
                                    }
                                    $pegawai7 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Tidak')->where('bulan', '7')->pluck('jumlah')->first();
                                    if ($pegawai7 == null) {
                                        $pegawai7 = 0;
                                    }else {
                                        $pegawai7 = $pegawai7;
                                    }
                                    $pegawai8 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Tidak')->where('bulan', '8')->pluck('jumlah')->first();
                                    if ($pegawai8 == null) {
                                        $pegawai8 = 0;
                                    }else {
                                        $pegawai8 = $pegawai8;
                                    }
                                    $pegawai9 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Tidak')->where('bulan', '9')->pluck('jumlah')->first();
                                    if ($pegawai9 == null) {
                                        $pegawai9 = 0;
                                    }else {
                                        $pegawai9 = $pegawai9;
                                    }
                                    $pegawai10 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Tidak')->where('bulan', '10')->pluck('jumlah')->first();
                                    if ($pegawai10 == null) {
                                        $pegawai10 = 0;
                                    }else {
                                        $pegawai10 = $pegawai10;
                                    }
                                    $pegawai11 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Tidak')->where('bulan', '11')->pluck('jumlah')->first();
                                    if ($pegawai11 == null) {
                                        $pegawai11 = 0;
                                    }else {
                                        $pegawai11 = $pegawai11;
                                    }
                                    $pegawai12 = DB::table('jumlah_kos_bulanan_status')->where('Tahun', $id)->where('pesara', 'Tidak')->where('bulan', '12')->pluck('jumlah')->first();
                                    if ($pegawai12 == null) {
                                        $pegawai12 = 0;
                                    }else {
                                        $pegawai12 = $pegawai12;
                                    }

                                    // jumlah
                                    $jumlah1 = $pesara1 + $pegawai1;
                                    $jumlah2 = $pesara2 + $pegawai2;
                                    $jumlah3 = $pesara3 + $pegawai3;
                                    $jumlah4 = $pesara4 + $pegawai4;
                                    $jumlah5 = $pesara5 + $pegawai5;
                                    $jumlah6 = $pesara6 + $pegawai6;
                                    $jumlah7 = $pesara7 + $pegawai7;
                                    $jumlah8 = $pesara8 + $pegawai8;
                                    $jumlah9 = $pesara9 + $pegawai9;
                                    $jumlah10 = $pesara10 + $pegawai10;
                                    $jumlah11 = $pesara11 + $pegawai11;
                                    $jumlah12 = $pesara12 + $pegawai12;


                                    // // dd($pesara4);
                                    // $chart = new SampleChart;
                                    // $chart->labels(['Januari', 'Februari', 'Mac','April', 'Mei', 'Jun', 'Julai', 'Ogos', 'September', 'Oktober', 'November', 'Disember']);
                                    // $chart->dataset('Pegawai', 'line', [$pegawai1,$pegawai2,$pegawai3,$pegawai4,$pegawai5,$pegawai6,$pegawai7,$pegawai8,$pegawai9,$pegawai10,$pegawai11,$pegawai12])->options([
                                    //     'borderColor' => '#EACF46',
                                    //     'fill' => false,
                                    // ]);
                                    // $chart->dataset('Pesara', 'line', [$pesara1,$pesara2,$pesara3,$pesara4,$pesara5,$pesara6,$pesara7,$pesara8,$pesara9,$pesara10,$pesara11,$pesara12])->options([
                                    //     'borderColor' => '#F34848',
                                    //     'fill' => false,
                                    // ]);
                                    // $chart->dataset('Jumlah', 'line', [$jumlah1,$jumlah2,$jumlah3,$jumlah4,$jumlah5,$jumlah6,$jumlah7,$jumlah8,$jumlah9,$jumlah10,$jumlah11,$jumlah12])->options([
                                    //     'borderColor' => '#8336b6',
                                    //     'fill' => false,
                                    // ]);
                                @endphp
                                {{-- <div class="col-md-4"><div class="ct-chart">{!! $chart2->container() !!}</div></div>
                                <div class="col-md-8"><div class="ct-chart">{!! $chart->container() !!}</div></div>                                --}}
                            </div>
                            <hr>
                            <table class="table table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>Bulan</th>
                                        <th>Pegawai (RM)</th>
                                        <th>Pesara (RM)</th>
                                        <th>Jumlah (RM)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td scope="row">JANUARI</td>
                                        <td>
                                            {{ number_format($pegawai1, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($pesara1, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($jumlah1, 2, '.', ',')  }}
                                        </td>
                                        
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">FEBRUARI</td>
                                        <td>
                                            {{ number_format($pegawai2, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($pesara2, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($jumlah2, 2, '.', ',')  }}
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">MAC</td>
                                        <td>
                                            {{ number_format($pegawai3, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($pesara3, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($jumlah3, 2, '.', ',')  }}
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">APRIL</td>
                                        <td>
                                            {{ number_format($pegawai4, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($pesara4, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($jumlah4, 2, '.', ',')  }}
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">MEI</td>
                                        <td>
                                            {{ number_format($pegawai5, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($pesara5, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($jumlah5, 2, '.', ',')  }}
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">JUN</td>
                                        <td>
                                            {{ number_format($pegawai6, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($pesara6, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($jumlah6, 2, '.', ',')  }}
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">JULAI</td>
                                        <td>
                                            {{ number_format($pegawai7, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($pesara7, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($jumlah7, 2, '.', ',')  }}
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">OGOS</td>
                                        <td>
                                            {{ number_format($pegawai8, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($pesara8, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($jumlah8, 2, '.', ',')  }}
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">SEPTEMBER</td>
                                        <td>
                                            {{ number_format($pegawai9, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($pesara9, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($jumlah9, 2, '.', ',')  }}
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">OKTOBER</td>
                                        <td>
                                            {{ number_format($pegawai10, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($pesara10, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($jumlah10, 2, '.', ',')  }}
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">NOVEMBER</td>
                                        <td>
                                            {{ number_format($pegawai11, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($pesara11, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($jumlah11, 2, '.', ',')  }}
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">DISEMBER</td>
                                        <td>
                                            {{ number_format($pegawai12, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($pesara12, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($jumlah12, 2, '.', ',')  }}
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">JUMLAH</td>
                                        <td>
                                            {{ number_format($jumlah_kos_pegawai, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            {{ number_format($jumlah_kos_pesara, 2, '.', ',')  }}
                                        </td>
                                        <td>
                                            @foreach ($jumlah_kos as $jk)
                                                {{ number_format($jk->jumlah, 2, '.', ',')  }}
                                            @endforeach
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush

@section('script')
{{-- {!! $chart->script() !!}
{!! $chart2->script() !!} --}}
 @endsection
