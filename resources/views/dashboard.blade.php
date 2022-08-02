@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => 'Halaman Utama'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            {{-- <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">content_copy</i>
                    </div>
                    <p class="card-category">Used Space</p>
                    <h3 class="card-title">49/50
                        <small>GB</small>
                    </h3>
                    </div>
                    <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-danger">warning</i>
                        <a href="#pablo">Get More Space...</a>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">Revenue</p>
                    <h3 class="card-title">$34,245</h3>
                    </div>
                    <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">date_range</i> Last 24 Hours
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">info_outline</i>
                    </div>
                    <p class="card-category">Fixed Issues</p>
                    <h3 class="card-title">75</h3>
                    </div>
                    <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">local_offer</i> Tracked from Github
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <p class="card-category">Followers</p>
                    <h3 class="card-title">+245</h3>
                    </div>
                    <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">update</i> Just Updated
                    </div>
                    </div>
                </div>
                </div>
            </div> --}}
            {{-- //Jumlah permohonan mengikut tahun dan Kos --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-chart">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title"><strong>Kos & Pembiayaan Rawatan Pegawai dan Pesara</strong></h4>
                            <p class="card-category">
                                <span class="">Jadual kos & pembiayaan rawatan keseluruhan mengikut tahun.
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered  display1">
                                    <thead class="text-primary">
                                        <tr class="text-center">
                                            <th style="width: 50%">Tahun</th>
                                            <th>Kos (RM)</th>
                                            <th style="width: 5%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kos as $d)
                                            <tr class="text-center">
                                                <td scope="row">{{ $d->tahun }}</td>
                                                <td>{{ number_format($d->jumlah, 2, '.', ',')  }}</td>
                                                {{-- <td>{{ $d->Jumlah }}</td> --}}
                                                <td><a class="btn btn-primary btn-sm"
                                                        href="{{ url('kos-bulanan', [$d->tahun]) }}"
                                                        role="button">Butiran</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
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

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-chart">
                        <div class="card-header card-header-success">
                            <h4 class="card-title"><strong>Bil Rawatan Pegawai dan Pesara</strong></h4>
                            <p class="card-category">
                                <span class="">Jadual bil keseluruhan mengikut tahun.
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered  display1">
                                    <thead class="text-primary">
                                        <tr class="text-center">
                                            <th style="width: 50%">Tahun</th>
                                            <th>Kos (RM)</th>
                                            <th style="width: 5%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $d)
                                            <tr class="text-center">
                                                <td scope="row">{{ $d->tahun }}</td>
                                                <td>{{ number_format($d->jumlah, 2, '.', ',')  }}</td>
                                                {{-- <td>{{ $d->Jumlah }}</td> --}}
                                                <td><a class="btn btn-success btn-sm"
                                                        href="{{ url('bil-bulanan', [$d->tahun]) }}"
                                                        role="button">Butiran</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
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

            {{-- //Jumlah permohonan mengikut tahun dan jenis tuntutan --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-chart">
                        <div class="card-header card-header-danger">
                            <h4 class="card-title"><strong>Jumlah Permohonan dan Tuntutan</strong></h4>
                            <p class="card-category">
                                <span class="">Jumlah permohonan mengikut tahun.
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered display1">
                                    <thead class="text-primary">
                                        <tr class="text-center">
                                            <th style="width: 50%">Tahun</th>
                                            <th>Jumlah</th>
                                            <th style="width: 5%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tahunPermohonan as $d)
                                            <tr class="text-center">
                                                <td scope="row">{{ $d->tahun }}</td>
                                                <td>
                                                    @foreach ($jumlahpermohonan as $jumlah)
                                                        @if ($jumlah->tahun == $d->tahun)
                                                            {{ $jumlah->jumlah }}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td><a class="btn btn-danger btn-sm"
                                                        href="{{ url('butiran-jumlah-tuntutan', [$d->tahun]) }}"
                                                        role="button">Butiran</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
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

            {{-- //Jumlah permohonan mengikut tahun dan umur --}}
            {{-- <div class="row">
                <div class="col-md-12">
                    <div class="card card-chart">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title"><strong> Jumlah Permohonan Mengikut Tahun dan Peringkat Umur</strong>
                            </h4>
                            <p class="card-category">
                                <span class="">Jumlah permohonan mengikut tahun dan peringkat umur
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered display1">
                                    <thead class="text-primary">
                                        <tr class="text-center">
                                            <th rowspan="2">Tahun</th>
                                            <th colspan="5">Umur</th>
                                            <th rowspan="2">Jumlah</th>
                                            <th rowspan="2"></th>
                                        </tr>
                                        <tr class="text-center">
                                            <th>30 Ke bawah</th>
                                            <th>30-39</th>
                                            <th>40-49</th>
                                            <th>50-59</th>
                                            <th>60 Ke atas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tahunumur as $d)
                                            <tr class="text-center">
                                                <td style="width: 12.5%" scope="row">{{ $d->tahun_memohon }}</td>
                                                <td style="width: 13%">
                                                    @foreach ($umurk30 as $k30)
                                                        @if ($k30->tahun == $d->tahun_memohon)
                                                            {{ $k30->bil }}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td style="width: 12%">
                                                    @foreach ($umurk3039 as $k3039)
                                                        @if ($k3039->tahun == $d->tahun_memohon)
                                                            {{ $k3039->bil }}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td style="width: 12.5%">
                                                    @foreach ($umurk4049 as $k4049)
                                                        @if ($k4049->tahun == $d->tahun_memohon)
                                                            {{ $k4049->bil }}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td style="width: 12.5%">
                                                    @foreach ($umurk5059 as $k5059)
                                                        @if ($k5059->tahun == $d->tahun_memohon)
                                                            {{ $k5059->bil }}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td style="width: 12.5%">
                                                    @foreach ($umura60 as $k60)
                                                        @if ($k60->tahun == $d->tahun_memohon)
                                                            {{ $k60->bil }}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td style="width: 12.5%">
                                                    @foreach ($tahunumur as $total)
                                                        @if ($total->tahun_memohon == $d->tahun_memohon)
                                                            {{ $total->bil }}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td style="width: 12.5%" style="width: 5%">
                                                    <a class="btn btn-primary btn-sm"
                                                        href="{{ url('kos-bulanan', [$d->tahun_memohon]) }}"
                                                        role="button">Butiran</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="row">
                <div class="col-md-6">
                    <div class="card card-chart">
                        <div class="card-header card-header-warning">
                            <div class="ct-chart" id="websiteViewsChart"></div>
                            <h4 class="card-title">Kos Tanggungan Rawatan Pegawai</h4>
                            <p class="card-category">Jadual kos tanggungan keseluruhan pegawai mengikut tahun.</p>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                              <table class="table table-striped display">
                                  <thead>
                                      <tr class="text-center">
                                          <th>Tahun</th>
                                          <th>Kos (RM)</th>
                                          <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($data as $d)
                                          <tr class="text-center">
                                              <td scope="row">{{ $d->Tahun }}</td>
                                              <td>{{ $d->Jumlah }}</td>
                                              <td><a class="btn btn-info btn-sm" href="#" role="button">Butiran</a></td>
                                          </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
              </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-chart">
                        <div class="card-header card-header-danger">
                            <div class="ct-chart" id="completedTasksChart"></div>
                            <h4 class="card-title">Kos Tanggungan Rawatan Pesara</h4>
                            <p class="card-category">Jadual kos tanggungan keseluruhan pesara mengikut tahun.</p>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                              <table class="table table-striped display">
                                  <thead>
                                      <tr class="text-center">
                                          <th>Tahun</th>
                                          <th>Kos (RM)</th>
                                          <th></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($data as $d)
                                          <tr class="text-center">
                                              <td scope="row">{{ $d->Tahun }}</td>
                                              <td>{{ $d->Jumlah }}</td>
                                              <td><a class="btn btn-info btn-sm" href="{{ url('kos-bulanan', [$d->Tahun]) }}" role="button">Butiran</a></td>
                                          </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
              </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                {{-- <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header card-header-tabs card-header-primary">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <span class="nav-tabs-title">Tasks:</span>
                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#profile" data-toggle="tab">
                                                <i class="material-icons">bug_report</i> Bugs
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#messages" data-toggle="tab">
                                                <i class="material-icons">code</i> Website
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#settings" data-toggle="tab">
                                                <i class="material-icons">cloud</i> Server
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                checked>
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task"
                                                        class="btn btn-primary btn-link btn-sm">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove"
                                                        class="btn btn-danger btn-link btn-sm">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="">
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task"
                                                        class="btn btn-primary btn-link btn-sm">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove"
                                                        class="btn btn-danger btn-link btn-sm">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="">
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>Flooded: One year later, assessing what was lost and what was found when
                                                    a ravaging rain swept through metro Detroit
                                                </td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task"
                                                        class="btn btn-primary btn-link btn-sm">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove"
                                                        class="btn btn-danger btn-link btn-sm">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                checked>
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task"
                                                        class="btn btn-primary btn-link btn-sm">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove"
                                                        class="btn btn-danger btn-link btn-sm">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="messages">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                checked>
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>Flooded: One year later, assessing what was lost and what was found when
                                                    a ravaging rain swept through metro Detroit
                                                </td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task"
                                                        class="btn btn-primary btn-link btn-sm">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove"
                                                        class="btn btn-danger btn-link btn-sm">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="">
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task"
                                                        class="btn btn-primary btn-link btn-sm">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove"
                                                        class="btn btn-danger btn-link btn-sm">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="settings">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="">
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task"
                                                        class="btn btn-primary btn-link btn-sm">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove"
                                                        class="btn btn-danger btn-link btn-sm">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                checked>
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>Flooded: One year later, assessing what was lost and what was found when
                                                    a ravaging rain swept through metro Detroit
                                                </td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task"
                                                        class="btn btn-primary btn-link btn-sm">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove"
                                                        class="btn btn-danger btn-link btn-sm">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                checked>
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task"
                                                        class="btn btn-primary btn-link btn-sm">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove"
                                                        class="btn btn-danger btn-link btn-sm">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header card-header-warning">
                    <h4 class="card-title">Employees Stats</h4>
                    <p class="card-category">New employees on 15th September, 2016</p>
                    </div>
                    <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead class="text-warning">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Salary</th>
                        <th>Country</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dakota Rice</td>
                            <td>$36,738</td>
                            <td>Niger</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Minerva Hooper</td>
                            <td>$23,789</td>
                            <td>Curaçao</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sage Rodriguez</td>
                            <td>$56,142</td>
                            <td>Netherlands</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Philip Chaney</td>
                            <td>$38,735</td>
                            <td>Korea, South</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div> --}}
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
