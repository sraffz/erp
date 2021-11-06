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
                                    <a href="{{ url('pdf/pdf-jumlah-kos', [$id]) }}" class="btn btn-info">
                                        <span class="material-icons">print</span>
                                    </a>
                                </div>
                                <a href="{{ route('home') }}" class="btn btn-warning">
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
                            <table class="table table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>Bulan</th>
                                        <th>Kos (RM)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td scope="row">JANUARI</td>
                                        <td>
                                            @foreach ($kos_bulanan as $d)
                                                @if ($d->bulan == '1')
                                                    {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">FEBRUARI</td>
                                        <td>
                                            @foreach ($kos_bulanan as $d)
                                                @if ($d->bulan == '2')
                                                    {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">MAC</td>
                                        <td>
                                            @foreach ($kos_bulanan as $d)
                                                @if ($d->bulan == '3')
                                                    {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">APRIL</td>
                                        <td>
                                            @foreach ($kos_bulanan as $d)
                                                @if ($d->bulan == '4')
                                                    {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">MEI</td>
                                        <td>
                                            @foreach ($kos_bulanan as $d)
                                                @if ($d->bulan == '5')
                                                    {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">JUN</td>
                                        <td>
                                            @foreach ($kos_bulanan as $d)
                                                @if ($d->bulan == '6')
                                                    {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">JULAI</td>
                                        <td>
                                            @foreach ($kos_bulanan as $d)
                                                @if ($d->bulan == '7')
                                                    {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">OGOS</td>
                                        <td>
                                            @foreach ($kos_bulanan as $d)
                                                @if ($d->bulan == '8')
                                                    {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">SEPTEMBER</td>
                                        <td>
                                            @foreach ($kos_bulanan as $d)
                                                @if ($d->bulan == '9')
                                                    {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">OKTOBER</td>
                                        <td>
                                            @foreach ($kos_bulanan as $d)
                                                @if ($d->bulan == '10')
                                                    {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">NOVEMBER</td>
                                        <td>
                                            @foreach ($kos_bulanan as $d)
                                                @if ($d->bulan == '11')
                                                    {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">DISEMBER</td>
                                        <td>
                                            @foreach ($kos_bulanan as $d)
                                                @if ($d->bulan == '12')
                                                    {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">JUMLAH</td>
                                        <td>
                                            @foreach ($jumlah_kos as $jk)
                                                {{ number_format($jk->Jumlah, 2, '.', ',')  }}
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
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-chart">
                        <div class="card-header card-header-warning">
                            {{-- <div class="ct-chart" id="websiteViewsChart"></div> --}}
                            <h4 class="card-title">Kos Tanggungan Rawatan Pegawai</h4>
                            <p class="card-category">Jadual kos tanggungan keseluruhan pegawai mengikut tahun.</p>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Bulan</th>
                                            <th>Kos (RM)</th>
                                            {{-- <th></th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td scope="row">JANUARI</td>
                                            <td>
                                                @foreach ($kos_bulanan_pegawai as $d)
                                                    @if ($d->bulan == '1')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">FEBRUARI</td>
                                            <td>
                                                @foreach ($kos_bulanan_pegawai as $d)
                                                    @if ($d->bulan == '2')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">MAC</td>
                                            <td>
                                                @foreach ($kos_bulanan_pegawai as $d)
                                                    @if ($d->bulan == '3')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">APRIL</td>
                                            <td>
                                                @foreach ($kos_bulanan_pegawai as $d)
                                                    @if ($d->bulan == '4')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">MEI</td>
                                            <td>
                                                @foreach ($kos_bulanan_pegawai as $d)
                                                    @if ($d->bulan == '5')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">JUN</td>
                                            <td>
                                                @foreach ($kos_bulanan_pegawai as $d)
                                                    @if ($d->bulan == '6')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">JULAI</td>
                                            <td>
                                                @foreach ($kos_bulanan_pegawai as $d)
                                                    @if ($d->bulan == '7')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">OGOS</td>
                                            <td>
                                                @foreach ($kos_bulanan_pegawai as $d)
                                                    @if ($d->bulan == '8')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">SEPTEMBER</td>
                                            <td>
                                                @foreach ($kos_bulanan_pegawai as $d)
                                                    @if ($d->bulan == '9')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">OKTOBER</td>
                                            <td>
                                                @foreach ($kos_bulanan_pegawai as $d)
                                                    @if ($d->bulan == '10')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">NOVEMBER</td>
                                            <td>
                                                @foreach ($kos_bulanan_pegawai as $d)
                                                    @if ($d->bulan == '11')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">DISEMBER</td>
                                            <td>
                                                @foreach ($kos_bulanan_pegawai as $d)
                                                    @if ($d->bulan == '12')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">JUMLAH</td>
                                            <td>
                                                {{ number_format($jumlah_kos_pegawai, 2, '.', ',')  }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-chart">
                        <div class="card-header card-header-danger">
                            {{-- <div class="ct-chart" id="completedTasksChart"></div> --}}
                            <h4 class="card-title">Kos Tanggungan Rawatan Pesara</h4>
                            <p class="card-category">Jadual kos tanggungan keseluruhan pesara mengikut tahun.</p>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Bulan</th>
                                            <th>Kos (RM)</th>
                                            {{-- <th></th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td scope="row">JANUARI</td>
                                            <td>
                                                @foreach ($kos_bulanan_pesara as $d)
                                                    @if ($d->bulan == '1')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">FEBRUARI</td>
                                            <td>
                                                @foreach ($kos_bulanan_pesara as $d)
                                                    @if ($d->bulan == '2')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">MAC</td>
                                            <td>
                                                @foreach ($kos_bulanan_pesara as $d)
                                                    @if ($d->bulan == '3')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">APRIL</td>
                                            <td>
                                                @foreach ($kos_bulanan_pesara as $d)
                                                    @if ($d->bulan == '4')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">MEI</td>
                                            <td>
                                                @foreach ($kos_bulanan_pesara as $d)
                                                    @if ($d->bulan == '5')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">JUN</td>
                                            <td>
                                                @foreach ($kos_bulanan_pesara as $d)
                                                    @if ($d->bulan == '6')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">JULAI</td>
                                            <td>
                                                @foreach ($kos_bulanan_pesara as $d)
                                                    @if ($d->bulan == '7')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">OGOS</td>
                                            <td>
                                                @foreach ($kos_bulanan_pesara as $d)
                                                    @if ($d->bulan == '8')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">SEPTEMBER</td>
                                            <td>
                                                @foreach ($kos_bulanan_pesara as $d)
                                                    @if ($d->bulan == '9')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">OKTOBER</td>
                                            <td>
                                                @foreach ($kos_bulanan_pesara as $d)
                                                    @if ($d->bulan == '10')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">NOVEMBER</td>
                                            <td>
                                                @foreach ($kos_bulanan_pesara as $d)
                                                    @if ($d->bulan == '11')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">DISEMBER</td>
                                            <td>
                                                @foreach ($kos_bulanan_pesara as $d)
                                                    @if ($d->bulan == '12')
                                                        {{ number_format($d->jumlah, 2, '.', ',')  }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td scope="row">JUMLAH</td>
                                            <td>
                                                {{ number_format($jumlah_kos_pesara, 2, '.', ',')  }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-12">
                    <div class="card card-chart">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Kos Tanggungan Rawatan Mengikut Jenis Permohonan</h4>
                            <p class="card-category">
                            </p>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>Jenis Tuntuan / Permohonan</th>
                                        <th>Kos (RM)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td scope="row">Ubatan</td>
                                        <td> </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">Peralatan</td>
                                        <td> </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">Rawatan Jantung (IJN)</td>
                                        <td> </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td scope="row">Rawatan Heamodialisis</td>
                                        <td> </td>
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
            </div> --}}
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
