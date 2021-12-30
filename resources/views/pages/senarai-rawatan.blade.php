@extends('layouts.app', ['activePage' => 'peribadi', 'titlePage' => 'Senarai Rawatan'])

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
                        <a href="{{ url('peribadi') }}" class="btn btn-warning">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Butiran Peribadi</h4>
                    {{-- <p class="card-category"> Here you can manage users</p> --}}
                </div>
                <div class="card-body">
                    @foreach ($peribadi as $bw)
                        <form>
                            <div class="form-group">
                                <label for="namapenuh">Nama Pegawai/Kakitangan</label>
                                <input type="text" onkeyup="this.value = this.value.toUpperCase();" class="form-control"
                                    name="nama" disabled id="namapenuh" placeholder="Nama Penuh"
                                    value="{{ $bw->nama }}">
                            </div>
                            <div class="form-group">
                                <label for="ic">No Kad Pengenalan</label>
                                <input type="text" onkeyup="this.value = this.value.toUpperCase();" class="form-control"
                                    name="ic" disabled id="ic" placeholder="No Kad Pengenalan"
                                    value="{{ $bw->kadPengenalan }}">
                            </div>
                            <div class="form-group">
                                <label for="jawatan">Jawatan Terakhir</label>
                                <input type="text" onkeyup="this.value = this.value.toUpperCase();" class="form-control"
                                    name="jawatan" disabled id="jawatan" placeholder="Jawatan" value="">
                            </div>
                        </form>

                </div>
            </div>
            {{-- Perubatan --}}
            <div class="card">
                <div class="card-header card-header-rose">
                    <h4 class="card-title ">Senarai Bil Rawatan</h4>
                    {{-- <p class="card-category"> Here you can manage users</p> --}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-right">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                data-id="{{ $bw->idPeribadi }}" data-target="#tambahbil">
                                Tambah Bil Rawatan
                            </button>
                        </div>
                        @endforeach
                    </div> <br>
                    <div class="table-responsive">
                        <table class="table table-hover" id="non_export">
                            <thead class="text-primary">
                                <tr>
                                    <th>Bil</th>
                                    <th>Nama Pegawai/pesara & Jawatan</th>
                                    <th>Nama Pesakit</th>
                                    <th>Jabatan Terkini</th>
                                    <th>Tarikh bil</th>
                                    <th>Jumlah Tuntutan / No bil</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($senaraibilpegawai as $index => $bil)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $bil->nama }}</td>
                                        <td>
                                            @if ($bil->nama_waris != '')
                                                {{ $bil->nama_waris }}
                                            @else
                                                {{ $bil->nama }}
                                            @endif
                                        </td>
                                        <td>{{ $bil->namaJabatan }}</td>
                                        <td>{{ $bil->tarikh_bil }}</td>
                                        <td>RM {{ $bil->jumlah_bil }} <br> No Bil : {{ $bil->no_bil }}</td>
                                        <td><a class="btn btn-info btn-sm"
                                                href="{{ url('butiran-rawatan-pegawai', [$bil->idRawatan]) }}"
                                                role="button">Butiran</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Bil Rawatam-->
    <div class="modal fade" id="tambahbil" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ url('tambah-bilrawatan') }}">
                    <div class="modal-body">
                        <div class="container-fluid">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" id="id" value="">
                            <input type="hidden" name="id_waris" _waris="id_waris" value="">
                            <div class="form-group">
                                <label for="no_bil">No Bil (Jika perlu)</label>
                                <input type="text" class="form-control" name="no_bil" value="">
                            </div>
                            <div class="form-group">
                                <label for="tarikh_bil">Tarikh Bil</label>
                                <input type="date" class="form-control" name="tarikh_bil" value="">
                            </div>
                            <div class="form-group">
                                <label for="jumlah_bil">Jumlah Tuntutan</label>
                                <input type="number" step='0.01' class="form-control" name="jumlah_bil" value="" required>
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
