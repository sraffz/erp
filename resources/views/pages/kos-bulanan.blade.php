@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => 'Halaman Utama'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
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
                                        {{-- <th></th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kos_bulanan as $d)
                                        <tr class="text-center">
                                            <td scope="row">{{ $d->bulan }}</td>
                                            <td>{{ $d->jumlah }}</td>
                                            {{-- <td><a class="btn btn-info btn-sm" href="#" role="button">Butiran</a></td> --}}
                                        </tr>
                                    @endforeach
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
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kos_bulanan as $d)
                                            <tr class="text-center">
                                                <td scope="row">{{ $d->bulan }}</td>
                                                <td>{{ $d->jumlah }}</td>
                                                <td><a class="btn btn-info btn-sm" href="#" role="button">Butiran</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
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
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kos_bulanan as $d)
                                            <tr class="text-center">
                                                <td scope="row">{{ $d->bulan }}</td>
                                                <td>{{ $d->jumlah }}</td>
                                                <td><a class="btn btn-info btn-sm" href="#" role="button">Butiran</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
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
