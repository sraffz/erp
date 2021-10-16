@extends('layouts.app', ['activePage' => 'peribadi', 'titlePage' => 'Peribadi'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            @if (session('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                    <span>
                        <b>{{ session()->get('success') }}</span>
                </div>
            @endif
            <div class="card">
                <div class="card-header card-header-primary">

                    <h4 class="card-title ">Senarai Peribadi</h4>
                    {{-- <p class="card-category"> Here you can manage users</p> --}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-right">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                data-target="#tambahperibadi">
                                Tambah Peribadi
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover" id="zero_config">
                            <thead class="text-primary">
                                <tr>
                                    <th>
                                        Nama Penuh
                                    </th>
                                    <th>
                                        No Kad Pengenalan
                                    </th>
                                    <th>
                                        Jantina
                                    </th>
                                    <th>
                                        Tarikh Lahir
                                    </th>
                                    <th class="text-right">
                                        Maklumat
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peribadi as $prbd)
                                    <tr>
                                        <th style="text-transform: uppercase;">
                                            {{ $prbd->nama }}
                                        </th>
                                        <th>
                                            {{ $prbd->ic }}
                                        </th>
                                        <th style="text-transform: uppercase;">
                                            {{ $prbd->jantina }}
                                        </th>
                                        <th>
                                            {{ \Carbon\Carbon::parse($prbd->tarikhLahir)->format('j F, Y') }}
                                        </th>
                                        <th class="td-actions text-right">
                                            <a rel="tooltip" class="btn btn-primary"
                                                href="{{ url('butiran-peribadi', [$prbd->id]) }}" data-original-title=""
                                                title="Maklumat Peribadi">
                                                <i class="material-icons">person</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                            <a rel="tooltip" class="btn btn-success btn-full"
                                                href="{{ url('butiran-perkhidmatan', [$prbd->id]) }}"
                                                data-original-title="" title="Maklumat Perkhidmatan">
                                                <i class="material-icons">business_center</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                            <a rel="tooltip" class="btn btn-danger btn-full"
                                                href="{{ url('senarai-perubatan', [$prbd->id]) }}" data-original-title=""
                                                title="Maklumat Perubatan">
                                                <i class="material-icons">medical_services</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                            <a rel="tooltip" class="btn btn-warning btn-full"
                                                href="{{ url('senarai-rawatan', [$prbd->id]) }}" data-original-title=""
                                                title="Maklumat Rawatan">
                                                <i class="material-icons">receipt</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Peribadi -->
    <div class="modal fade" id="tambahperibadi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Maklumat Peribadi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('tambah-peribadi') }}" method="post" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="namapenuh">Nama Penuh</label>
                                <input type="text" onkeyup="this.value = this.value.toUpperCase();" class="form-control"
                                    name="namapenuh" id="namapenuh" placeholder="Nama Penuh" value="" required>
                            </div>
                            <div class="form-group row">
                                <label for="nokp">No Kad Pengenalan</label>
                                <input type="text" class="form-control" name="nokp" id="nokp"
                                    placeholder="No Kad Pengenalan" value="" required>
                            </div>
                            <div class="form-group row">
                                <label for="tarikhlahir">Tarikh Lahir</label>
                                <input type="date" class="form-control" name="tarikhlahir" id="tarikhlahir"
                                    placeholder="Tarikh Lahir" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="jantina">Jantina</label>
                                <select class="custom-select" name="jantina" id="jantina" required>
                                    <option value="">Sila pilih</option>
                                    <option value="Lelaki">LELAKI</option>
                                    <option value="Perempuan">PEREMPUAN</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status_perkhidmatan">Status Perkhidmatan</label>
                                <select class="custom-select" name="status_perkhidmatan" id="status_perkhidmatan" required>
                                    <option value="">Sila pilih</option>
                                    <option value="Tidak">SEDANG BERKHIDMAT</option>
                                    <option value="Ya">PESARA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
