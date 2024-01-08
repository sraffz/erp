@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => 'Jumlah Tuntutan'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="float-right">
                                    <a target="_blank" href="{{ url('pdf/pdf-jumlah-permohonan', [$id]) }}"
                                        class="btn btn-info"><span class="material-icons">
                                            print
                                        </span>
                                    </a>
                                </div>
                                <a href="{{ route('halaman-utama') }}" class="btn btn-warning"><span class="material-icons">
                                        arrow_back_ios
                                    </span>Kembali</a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-chart">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Jumlah Permohonan Mengikut Jenis Permohonan</h4>
                            <p class="card-category">
                                {{-- <span class="">Jadual kos tanggungan keseluruhan mengikut bulan. --}}
                            </p>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th style="width: 50%"><strong>Jenis Tuntutan / Permohonan</strong></th>
                                        <th><strong>Jumlah Permohonan</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td scope="row">Ubatan</td>
                                        <td>
                                            @foreach ($bilpermohonan18 as $alat)
                                                {{ $alat->jumlah }}
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">Peralatan</td>
                                        <td>
                                            @foreach ($bilpermohonan2 as $alat)
                                                {{ $alat->jumlah }}
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">Rawatan Jantung (IJN)</td>
                                        <td>
                                            @foreach ($bilpermohonan as $jantung)
                                                @if ($jantung->id_kategori == '12')
                                                    {{ $jantung->jumlah }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">Rawatan Heamodialisis</td>
                                        <td>
                                            @foreach ($bilpermohonan as $heamo)
                                                @if ($heamo->id_kategori == '13')
                                                    {{ $heamo->jumlah }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">Jumlah</td>
                                        <td>
                                            @foreach ($jumlahpermohonan as $jumlah)
                                                {{ $jumlah->jumlah }}
                                            @endforeach
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                {{-- <i class="material-icons">access_time</i> updated 4 minutes ago --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-chart">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Jumlah Permohonan Mengikut Umur</h4>
                            <p class="card-category">
                                {{-- <span class="">Jadual kos tanggungan keseluruhan mengikut bulan. --}}
                            </p>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th style="width: 50%"><strong>Peringkat Umur</strong></th>
                                        <th><strong>Jumlah Permohonan</strong></th>
                                        {{-- <th></th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td scope="row">Bawah 30</td>
                                        <td>
                                            @foreach ($umurk30 as $k30)
                                                {{ $k30->bil }}
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">30 - 39</td>
                                        <td>
                                            @foreach ($umurk3039 as $k3039)
                                                {{ $k3039->bil }}
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">40 - 49</td>
                                        <td>
                                            @foreach ($umurk4049 as $k4049)
                                                {{ $k4049->bil }}
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">50 - 59</td>
                                        <td>
                                            @foreach ($umurk5059 as $k5059)
                                                {{ $k5059->bil }}
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">60 dan Ke Atas</td>
                                        <td>
                                            @foreach ($umura60 as $k60)
                                                {{ $k60->bil }}
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">Jumlah</td>
                                        <td>
                                            @foreach ($tahunumur as $total)
                                                {{ $total->bil }}
                                            @endforeach
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                {{-- <i class="material-icons">access_time</i> updated 4 minutes ago --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-chart">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Jumlah Permohonan Mengikut Umur dan Jenis Permohonan</h4>
                            <p class="card-category">
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th style="width: 15%"></th>
                                            <th style="width: 15%"><strong>Ubatan</strong> </strong></th>
                                            <th style="width: 15%"><strong>Peralatan </strong></th>
                                            <th style="width: 15%"><strong>Rawatan Kepakaran</strong></th>
                                            <th style="width: 15%"><strong>Rawatan Jantung (IJN) </strong></th>
                                            <th style="width: 15%"><strong>Rawatan Heamodialisis </strong></th>
                                            <th style="width: 15%"><strong>Jumlah </strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            @php
                                                $jumlah_ubatan_b30 = 0;
                                                $jumlah_peralatan_b30 = 0;
                                                $jumlah_rawatan_pakar_b30 = 0;
                                                $jumlah_ijn_b30 = 0;
                                                $jumlah_buah_pinggang_b30 = 0;
                                                $jumlah_30 = 0;
                                            @endphp
                                            <td scope="row">Bawah 30</td>
                                            <td>
                                                @foreach ($jumlahumurjenisb30 as $jjub30)
                                                    @if ($jjub30->idKategoriTuntutan == '01')
                                                        @php
                                                            $jumlah_ubatan_b30 = $jumlah_ubatan_b30 + $jjub30->bil;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ $jumlah_ubatan_b30 }}
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenisb30k2 as $jjub30)
                                                    @php
                                                        $jumlah_peralatan_b30 = $jumlah_peralatan_b30 + $jjub30->jumlah;
                                                        
                                                    @endphp
                                                @endforeach
                                                {{ $jumlah_peralatan_b30 }}
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenisb30 as $jjub30)
                                                    @if ($jjub30->idKategoriTuntutan == '11' || $jjub30->idKategoriTuntutan == '10')
                                                        @php
                                                            $jumlah_rawatan_pakar_b30 = $jumlah_rawatan_pakar_b30 + $jjub30->bil;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ $jumlah_rawatan_pakar_b30 }}
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenisb30 as $jjub30)
                                                    @if ($jjub30->idKategoriTuntutan == '12')
                                                        @php
                                                            $jumlah_ijn_b30 = $jumlah_ijn_b30 + $jjub30->bil;
                                                            
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ $jumlah_ijn_b30 }}
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenisb30 as $jjub30)
                                                    @if ($jjub30->idKategoriTuntutan == '13' || $jjub30->idKategoriTuntutan == '09')
                                                        @php
                                                            $jumlah_buah_pinggang_b30 = $jumlah_buah_pinggang_b30 + $jjub30->bil;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ $jumlah_buah_pinggang_b30 }}
                                            </td>
                                            <td>
                                                @foreach ($umurk30 as $k30)
                                                    @php
                                                        $jumlah_30 = $jumlah_30 + $k30->bil;
                                                    @endphp
                                                @endforeach
                                                {{ $jumlah_30 }}
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            @php
                                                $jumlah_ubatan_3039 = 0;
                                                $jumlah_peralatan_3039 = 0;
                                                $jumlah_rawatan_pakar_3039 = 0;
                                                $jumlah_ijn_3039 = 0;
                                                $jumlah_buah_pinggang_3039 = 0;
                                                $jumlah_3039 = 0;
                                            @endphp
                                            <td scope="row">30 - 39</td>
                                            <td>
                                                @foreach ($jumlahumurjenis30k18 as $jju30)
                                                    @php
                                                        $jumlah_ubatan_3039 = $jumlah_ubatan_3039 + $jju30->jumlah;
                                                    @endphp
                                                @endforeach
                                                {{ $jumlah_ubatan_3039 }}
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis30k2 as $jju30)
                                                    @php
                                                        $jumlah_peralatan_3039 = $jumlah_peralatan_3039 + $jju30->jumlah;
                                                    @endphp
                                                @endforeach
                                                {{ $jumlah_peralatan_3039 }}
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis30 as $jju30)
                                                    @if ($jju30->idKategoriTuntutan == '11')
                                                        @php
                                                            $jumlah_rawatan_pakar_3039 = $jumlah_rawatan_pakar_3039 + $jju30->bil;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ $jumlah_rawatan_pakar_3039 }}
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis30 as $jju30)
                                                    @if ($jju30->idKategoriTuntutan == '12')
                                                        @php
                                                            $jumlah_ijn_3039 = $jumlah_ijn_3039 + $jju30->bil;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ $jumlah_ijn_3039 }}
                                            </td>
                                            <td>
                                                @php
                                                    $jumlah_buah_pinggang_3039 = 0;
                                                @endphp
                                                @foreach ($jumlahumurjenis30 as $jju30)
                                                    @if ($jju30->idKategoriTuntutan == '13' || $jju30->idKategoriTuntutan == '09')
                                                        @php
                                                            $jumlah_buah_pinggang_3039 = $jumlah_buah_pinggang_3039 + $jju30->bil;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ $jumlah_buah_pinggang_3039 }}
                                            </td>
                                            <td>
                                                @foreach ($umurk3039 as $k3039)
                                                    @php
                                                        $jumlah_3039 = $jumlah_3039 + $k3039->bil;
                                                    @endphp
                                                @endforeach
                                                {{ $jumlah_3039 }}
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            @php
                                                $jumlah_ubatan_4049 = 0;
                                                $jumlah_peralatan_4049 = 0;
                                                $jumlah_rawatan_pakar_4049 = 0;
                                                $jumlah_ijn_4049 = 0;
                                                $jumlah_buah_pinggang_4049 = 0;
                                                $jumlah_4049 = 0;
                                            @endphp
                                            <td scope="row">40 - 49</td>
                                            <td>
                                                @foreach ($jumlahumurjenis40k18 as $jju40)
                                                    @php
                                                        $jumlah_ubatan_4049 = $jumlah_ubatan_4049 + $jju40->jumlah;
                                                    @endphp
                                                @endforeach
                                                {{ $jumlah_ubatan_4049 }}
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis40k2 as $jju40)
                                                    @php
                                                        $jumlah_peralatan_4049 = $jumlah_peralatan_4049 + $jju40->jumlah;
                                                    @endphp
                                                @endforeach
                                                {{ $jumlah_peralatan_4049 }}
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis40 as $jju40)
                                                    @if ($jju40->idKategoriTuntutan == '11')
                                                        @php
                                                            $jumlah_rawatan_pakar_4049 = $jumlah_rawatan_pakar_4049 + $jju40->bil;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ $jumlah_rawatan_pakar_4049 }}
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis40 as $jju40)
                                                    @if ($jju40->idKategoriTuntutan == '12')
                                                        @php
                                                            $jumlah_ijn_4049 = $jumlah_ijn_4049 + $jju40->bil;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ $jumlah_ijn_4049 }}
                                            </td>
                                            <td>
                                                @php
                                                    $jumlah_buah_pinggang_4049 = 0;
                                                @endphp
                                                @foreach ($jumlahumurjenis40 as $jju40)
                                                    @if ($jju40->idKategoriTuntutan == '13' || $jju40->idKategoriTuntutan == '09')
                                                        @php
                                                            $jumlah_buah_pinggang_4049 = $jumlah_buah_pinggang_4049 + $jju40->bil;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ $jumlah_buah_pinggang_4049 }}
                                            </td>
                                            <td>
                                                @foreach ($umurk4049 as $k4049)
                                                    @php
                                                        $jumlah_4049 = $jumlah_4049 + $k4049->bil;
                                                    @endphp
                                                @endforeach
                                                {{ $jumlah_4049 }}
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            @php
                                                $jumlah_ubatan_5059 = 0;
                                                $jumlah_peralatan_5059 = 0;
                                                $jumlah_rawatan_pakar_5059 = 0;
                                                $jumlah_ijn_5059 = 0;
                                                $jumlah_buah_pinggang_5059 = 0;
                                                $jumlah_5059 = 0;
                                            @endphp
                                            <td scope="row">50 - 59</td>
                                            <td>
                                                @foreach ($jumlahumurjenis50k18 as $jju50)
                                                    @php
                                                        $jumlah_ubatan_5059 = $jumlah_ubatan_5059 + $jju50->jumlah;
                                                    @endphp
                                                @endforeach
                                                {{ $jumlah_ubatan_5059 }}
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis50k2 as $jju50)
                                                    @php
                                                        $jumlah_peralatan_5059 = $jumlah_peralatan_5059 + $jju50->jumlah;
                                                    @endphp
                                                @endforeach
                                                {{ $jumlah_peralatan_5059 }}
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis50 as $jju50)
                                                    @if ($jju50->idKategoriTuntutan == '11')
                                                        @php
                                                            $jumlah_rawatan_pakar_5059 = $jumlah_rawatan_pakar_5059 + $jju50->bil;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ $jumlah_rawatan_pakar_5059 }}
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis50 as $jju50)
                                                    @if ($jju50->idKategoriTuntutan == '12')
                                                        @php
                                                            $jumlah_ijn_5059 = $jumlah_ijn_5059 + $jju50->bil;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ $jumlah_ijn_5059 }}
                                            </td>
                                            <td>
                                                @php
                                                    $jumlah_buah_pinggang_5059 = 0;
                                                @endphp
                                                @foreach ($jumlahumurjenis50 as $jju50)
                                                    @if ($jju50->idKategoriTuntutan == '13' || $jju50->idKategoriTuntutan == '09')
                                                        @php
                                                            $jumlah_buah_pinggang_5059 = $jumlah_buah_pinggang_5059 + $jju50->bil;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ $jumlah_buah_pinggang_5059 }}
                                            </td>
                                            <td>
                                                @foreach ($umurk5059 as $k5059)
                                                    @php
                                                        $jumlah_5059 = $jumlah_5059 + $k5059->bil;
                                                    @endphp
                                                @endforeach
                                                {{ $jumlah_5059 }}
                                            </td>
                                        </tr>

                                        <tr class="text-center">
                                            @php
                                                $jumlah_ubatan_60 = 0;
                                                $jumlah_peralatan_60 = 0;
                                                $jumlah_rawatan_pakar_60 = 0;
                                                $jumlah_ijn_60 = 0;
                                                $jumlah_buah_pinggang_60 = 0;
                                                $jumlah_60 = 0;
                                            @endphp
                                            <td scope="row">60 dan Ke Atas</td>
                                            <td>
                                                @foreach ($jumlahumurjenis60k18 as $jju60)
                                                    @php
                                                        $jumlah_ubatan_60 = $jumlah_ubatan_60 + $jju60->jumlah;
                                                    @endphp
                                                @endforeach
                                                {{ $jumlah_ubatan_60 }}
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis60k2 as $jju60)
                                                    @php
                                                        $jumlah_peralatan_60 = $jumlah_peralatan_60 + $jju60->jumlah;
                                                    @endphp
                                                @endforeach
                                                {{ $jumlah_peralatan_60 }}
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis60 as $jju60)
                                                    @if ($jju60->idKategoriTuntutan == '11')
                                                        @php
                                                            $jumlah_rawatan_pakar_60 = $jumlah_rawatan_pakar_60 + $jju60->bil;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ $jumlah_rawatan_pakar_60 }}
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis60 as $jju60)
                                                    @if ($jju60->idKategoriTuntutan == '12')
                                                        @php
                                                            $jumlah_ijn_60 = $jumlah_ijn_60 + $jju60->bil;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ $jumlah_ijn_60 }}
                                            </td>
                                            <td>
                                                @php
                                                    $jumlah_buah_pinggang_60 = 0;
                                                @endphp
                                                @foreach ($jumlahumurjenis60 as $jju60)
                                                    @if ($jju60->idKategoriTuntutan == '13' || $jju60->idKategoriTuntutan == '09')
                                                        @php
                                                            $jumlah_buah_pinggang_60 = $jumlah_buah_pinggang_60 + $jju60->bil;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ $jumlah_buah_pinggang_60 }}
                                            </td>
                                            <td>
                                                @foreach ($umura60 as $k60)
                                                    @php
                                                        $jumlah_60 = $jumlah_60 + $k60->bil;
                                                    @endphp
                                                @endforeach
                                                {{ $jumlah_60 }}
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="text-center">
                                            @php
                                                $j_ubat = 0;
                                                $j_alat = 0;
                                                $j_pakar = 0;
                                                $j_ijn = 0;
                                                $jumlah_hemoa = 0;
                                                $total = 0;
                                            @endphp
                                            <th scope="row">Jumlah</th>
                                            <th>
                                                @foreach ($bilpermohonan18 as $alat)
                                                    @php
                                                        $j_ubat = $j_ubat + $alat->jumlah;
                                                    @endphp
                                                @endforeach
                                                {{ $j_ubat }}
                                            </th>
                                            <th>
                                                @foreach ($bilpermohonan2 as $alat)
                                                    @php
                                                        $j_alat = $j_alat + $alat->jumlah;
                                                    @endphp
                                                @endforeach
                                                {{ $j_alat }}
                                            </th>
                                            <th>
                                                @foreach ($bilpermohonan as $ijn)
                                                    @if ($ijn->id_kategori == '11')
                                                        @php
                                                            $j_pakar = $j_pakar + $ijn->jumlah;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ $j_pakar }}
                                            </th>
                                            <th>
                                                @foreach ($bilpermohonan as $ijn)
                                                    @if ($ijn->id_kategori == '12')
                                                        @php
                                                            $j_ijn = $j_ijn + $ijn->jumlah;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ $j_ijn }}
                                            </th>
                                            <th>
                                                @foreach ($bilpermohonan as $heamo)
                                                    @if ($heamo->id_kategori == '13' || $heamo->id_kategori == '09')
                                                        @php
                                                            $jumlah_hemoa = $jumlah_hemoa + $heamo->jumlah;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                {{ $jumlah_hemoa }}
                                            </th>
                                            <th>
                                                @foreach ($jumlahpermohonan as $jumlah)
                                                    @php
                                                        $total = $total + $jumlah->jumlah;
                                                    @endphp
                                                @endforeach
                                                {{ $total }}
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
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
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
        });
    </script>
@endpush
