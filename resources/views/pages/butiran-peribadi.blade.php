@extends('layouts.app', ['activePage' => 'peribadi', 'titlePage' => 'Butiran Peribadi'])

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
                <div class="card-body">
                    <div class="col-12 text-right">
                        <a href="{{ route('page.index', 'peribadi') }}" class="btn btn-warning">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Butiran Peribadi</h4>
                    {{-- <p class="card-category"> Here you can manage users</p> --}}
                </div>
                <div class="card-body">
                    @foreach ($peribadi as $prbd)
                        <form method="POST" action="{{ url('kemaskini-peribadi') }}" autocomplete="off">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $prbd->idPeribadi }}">
                            <div class="form-group">
                                <label for="namapenuh">Nama Penuh</label>
                                <input type="text" onkeyup="this.value = this.value.toUpperCase();" class="form-control"
                                    name="nama" id="namapenuh" placeholder="Nama Penuh" value="{{ $prbd->nama }}">
                            </div>
                            <div class="form-group row">
                                <label for="nokp">No Kad Pengenalan</label>
                                <input type="text" class="form-control" name="nokp" id="nokp"
                                    placeholder="No Kad Pengenalan" value="{{ $prbd->kadPengenalan }}">
                            </div>
                            <div class="form-group row">
                                <label for="tarikhlahir">Tarikh Lahir</label>
                                <input type="date" class="form-control" name="tarikhlahir" id="tarikhlahir"
                                    placeholder="Tarikh Lahir" value="{{ $prbd->tarikhLahir }}">
                            </div>
                            <div class="form-group">
                                <label for="jantina">Jantina</label>
                                <select class="custom-select" name="jantina" id="jantina" required>
                                    <option value="">Sila pilih</option>
                                    <option value="Lelaki" {{ $prbd->jantina == 'Lelaki' ? 'selected' : '' }}>LELAKI
                                    </option>
                                    <option value="Perempuan" {{ $prbd->jantina == 'Perempuan' ? 'selected' : '' }}>
                                        PEREMPUAN</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="statusPesara">Status Pesara</label>
                                <select class="custom-select" name="statusPesara" id="statusPesara" required>
                                    <option value="">Sila pilih</option>
                                    <option value="Ya" {{ $prbd->pesara == 'Ya' ? 'selected' : '' }}>YA</option>
                                    <option value="Tidak" {{ $prbd->pesara == 'Tidak' ? 'selected' : '' }}>TIDAK</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-xs">
                                        <span class="material-icons">save</span> Kemaskini
                                    </button>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal"
                                        data-id="{{ $prbd->idPeribadi }}" data-target="#padampagawai">
                                        <span class="material-icons">delete</span> hapus
                                    </button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>

            {{-- Waris --}}
            <div class="card">
                <div class="card-header card-header-rose">
                    <h4 class="card-title ">Waris</h4>
                    {{-- <p class="card-category"> Here you can manage users</p> --}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-right">
                            <!-- Button trigger modal Tambah Waris-->
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                data-target="#tambahwaris">
                                Tambah Waris
                            </button>
                            @endforeach
                        </div>
                    </div> <br>
                    <div class="table-responsive">
                        <table class="table table-hover" id="non_export">
                            <thead class="text-primary">
                                <tr>
                                    <th>Nama Penuh</th>
                                    {{-- <th>Kad Pengenalan</th> --}}
                                    <th>Hubungan</th>
                                    {{-- <th>Tarikh Lahir</th> --}}
                                    <th class="text-center">Butiran</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($waris as $wrs)
                                    <tr>
                                        <td scope="row">{{ $wrs->nama }}</td>
                                        {{-- <td>{{ $wrs->nokp }}</td> --}}
                                        <td>{{ $wrs->hubungan }}</td>
                                        {{-- <td>{{ \Carbon\Carbon::parse($wrs->tarikhLahir)->format('d/m/Y') }} ({{ \Carbon\Carbon::parse($wrs->tarikhLahir)->age }})</td> --}}
                                        <td class="text-center">
                                            <a rel="tooltip" class="btn btn-sm btn-primary"
                                                href="{{ url('butiran-waris', [$wrs->id]) }}" data-original-title=""
                                                title="Maklumat Peribadi">
                                                <i class="material-icons">person</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                            <a rel="tooltip" class="btn btn-sm btn-danger btn-full"
                                                href="{{ url('senarai-perubatan-waris', [$wrs->id]) }}"
                                                data-original-title="" title="Maklumat Perubatan">
                                                <i class="material-icons">medical_services</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                            <a rel="tooltip" class="btn btn-sm btn-warning btn-full"
                                                href="{{ url('senarai-rawatan-waris', [$wrs->id]) }}"
                                                data-original-title="" title="Maklumat Rawatan">
                                                <i class="material-icons">receipt</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Waris -->
    <div class="modal fade" id="tambahwaris" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Waris</h5>
                    <button type="button" class="close" data-dismiss="modal" data-id="{{ $prbd->idPeribadi }}"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ url('tambah-waris') }}" autocomplete="off">
                    <div class="modal-body">
                        <div class="container-fluid">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $prbd->idPeribadi }}">
                            <div class="form-group">
                                <label for="namapenuh">Nama Penuh</label>
                                <input type="text" onkeyup="this.value = this.value.toUpperCase();" class="form-control"
                                    name="nama" id="namapenuh" placeholder="Nama Penuh" value="" required>
                            </div>
                            {{-- <div class="form-group row">
                                <label for="nokp">No Kad Pengenalan</label>
                                <input type="text" class="form-control" name="nokp" id="nokp"
                                    placeholder="No Kad Pengenalan" value="">
                            </div> --}}
                            {{-- <div class="form-group row">
                                <label for="tarikhlahir">Tarikh Lahir</label>
                                <input type="date" class="form-control" name="tarikhlahir" id="tarikhlahir"
                                    placeholder="Tarikh Lahir" value="">
                            </div> --}}
                            <div class="form-group">
                                <label for="jantina">Jantina</label>
                                <select class="custom-select" name="jantina" id="jantina" required>
                                    <option value="">Sila pilih</option>
                                    <option value="Lelaki">LELAKI</option>
                                    <option value="Perempuan">PEREMPUAN</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="hubungan">Hubungan Dengan Pegawai</label>
                                <select class="custom-select" name="hubungan" id="hubungan" required>
                                    <option value="">Sila pilih</option>
                                    @foreach ($hubungan as $hbgn)
                                        <option value="{{ $hbgn->id }}">{{ $hbgn->namaHubungan }}</option>
                                    @endforeach
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

    <!-- Modal Padam Pegawai-->
    <div class="modal fade" id="padampagawai" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Butiran Pegawai/Pesara</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('padam-pegawai-pesara') }}" method="post">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="container-fluid">
                            Hapus maklumat pegawai / pesara ini?
                            <input type="hidden" name="id" id="id" value="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Padam</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
