@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => 'Halaman Utama'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12 text-right">
                                <a href="{{ route('home') }}" class="btn btn-warning">Kembali</a>
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
                                        {{-- <th></th> --}}
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
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">30 - 39</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">40 - 49</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">50 - 59</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">60 dan Ke Atas</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="text-center">
                                        <th scope="row">Jumlah</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </tfoot>
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
