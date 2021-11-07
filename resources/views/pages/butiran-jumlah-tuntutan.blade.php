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
                                    <a href="{{ url('pdf/pdf-jumlah-permohonan', [$id]) }}" class="btn btn-info"><span
                                            class="material-icons">
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
                                        <th style="width: 50%"><strong>Jenis Tuntuan / Permohonan</strong></th>
                                        <th><strong>Jumlah Permohonan</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td scope="row">Ubatan</td>
                                        <td>
                                            @foreach ($bilpermohonan as $ubat)
                                                @if ($ubat->id_kategori == '01')
                                                    {{ $ubat->jumlah }}
                                                @endif
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
                                {{-- <span class="">Jadual kos tanggungan keseluruhan mengikut bulan. --}}
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th style="width: 16%"></th>
                                            <th style="width: 16%"><strong>Ubatan</strong> </strong></th>
                                            <th style="width: 16%"><strong>Peralatan </strong></th>
                                            <th style="width: 16%"><strong>Rawatan Jantung (IJN) </strong></th>
                                            <th style="width: 16%"><strong>Rawatan Heamodialisis </strong></th>
                                            <th style="width: 16%"><strong>Jumlah </strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td scope="row">Bawah 30</td>
                                            <td>
                                                @foreach ($jumlahumurjenisb30 as $jjub30)
                                                    @if ($jjub30->idKategoriTuntutan == '01')
                                                        {{ $jjub30->bil }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenisb30k2 as $jjub30)
                                                    {{ $jjub30->jumlah }}
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenisb30 as $jjub30)
                                                    @if ($jjub30->idKategoriTuntutan == '12')
                                                        {{ $jjub30->bil }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenisb30 as $jjub30)
                                                    @if ($jjub30->idKategoriTuntutan == '13')
                                                        {{ $jjub30->bil }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($umurk30 as $k30)
                                                    {{ $k30->bil }}
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">30 - 39</td>
                                            <td>
                                                @foreach ($jumlahumurjenis30 as $jju30)
                                                    @if ($jju30->idKategoriTuntutan == '01')
                                                        {{ $jju30->bil }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis30k2 as $jju30)
                                                    {{ $jju30->jumlah }}
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis30 as $jju30)
                                                    @if ($jju30->idKategoriTuntutan == '12')
                                                        {{ $jju30->bil }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis30 as $jju30)
                                                    @if ($jju30->idKategoriTuntutan == '13')
                                                        {{ $jju30->bil }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($umurk3039 as $k3039)
                                                    {{ $k3039->bil }}
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">40 - 49</td>
                                            <td>
                                                @foreach ($jumlahumurjenis40 as $jju40)
                                                    @if ($jju40->idKategoriTuntutan == '01')
                                                        {{ $jju40->bil }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis40k2 as $jju40)
                                                    {{ $jju40->jumlah }}
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis40 as $jju40)
                                                    @if ($jju40->idKategoriTuntutan == '12')
                                                        {{ $jju40->bil }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis40 as $jju40)
                                                    @if ($jju40->idKategoriTuntutan == '13')
                                                        {{ $jju40->bil }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($umurk4049 as $k4049)
                                                    {{ $k4049->bil }}
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">50 - 59</td>
                                            <td>
                                                @foreach ($jumlahumurjenis50 as $jju50)
                                                    @if ($jju50->idKategoriTuntutan == '01')
                                                        {{ $jju50->bil }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis50k2 as $jju50)
                                                    {{ $jju50->jumlah }}
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis50 as $jju50)
                                                    @if ($jju50->idKategoriTuntutan == '12')
                                                        {{ $jju50->bil }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis50 as $jju50)
                                                    @if ($jju50->idKategoriTuntutan == '13')
                                                        {{ $jju50->bil }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($umurk5059 as $k5059)
                                                    {{ $k5059->bil }}
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">60 dan Ke Atas</td>
                                            <td>
                                                @foreach ($jumlahumurjenis60 as $jju60)
                                                    @if ($jju60->idKategoriTuntutan == '01')
                                                        {{ $jju60->bil }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis60k2 as $jju60)
                                                    {{ $jju60->jumlah }}
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis60 as $jju60)
                                                    @if ($jju60->idKategoriTuntutan == '12')
                                                        {{ $jju60->bil }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($jumlahumurjenis60 as $jju60)
                                                    @if ($jju60->idKategoriTuntutan == '13')
                                                        {{ $jju60->bil }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($umura60 as $k60)
                                                    {{ $k60->bil }}
                                                @endforeach
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="text-center">
                                            <th scope="row">Jumlah</th>
                                            <th>
                                                @foreach ($bilpermohonan as $ubat)
                                                    @if ($ubat->id_kategori == '01')
                                                        {{ $ubat->jumlah }}
                                                    @endif
                                                @endforeach
                                            </th>
                                            <th>
                                                @foreach ($bilpermohonan2 as $alat)
                                                    {{ $alat->jumlah }}
                                                @endforeach
                                            </th>
                                            <th>
                                                @foreach ($bilpermohonan as $ijn)
                                                    @if ($ijn->id_kategori == '12')
                                                        {{ $ijn->jumlah }}
                                                    @endif
                                                @endforeach
                                            </th>
                                            <th>
                                                @foreach ($bilpermohonan as $heamo)
                                                    @if ($heamo->id_kategori == '13')
                                                        {{ $heamo->jumlah }}
                                                    @endif
                                                @endforeach
                                            </th>
                                            <th>
                                                @foreach ($jumlahpermohonan as $jumlah)
                                                    {{ $jumlah->jumlah }}
                                                @endforeach
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                {{-- <i class="material-icons">access_time</i> updated 4 minutes ago --}}
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
