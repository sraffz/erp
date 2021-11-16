@extends('layouts.app', ['activePage' => 'peribadi', 'titlePage' => 'Senarai Perubatan'])

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
                    <h4 class="card-title ">Senarai Perubatan</h4>
                    {{-- <p class="card-category"> Here you can manage users</p> --}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-right">
                            <!-- Button trigger modal Tambah Perubatan-->
                            <a class="btn btn-primary btn-sm" href="{{ url('tambah-perubatan', [$bw->idPeribadi]) }}"
                                role="button">Tambah Perubatan</a>
                        </div>
                        @endforeach
                    </div> <br>
                    <div class="table-responsive">
                        <table class="table table-hover" id="non_export">
                            <thead class="text-primary">
                                <tr>
                                    <th>Kategori Tuntutan</th>
                                    <th>Jenis Permohonan</th>
                                    <th>Terima Permohonan</th>
                                    <th>Surat Kelulusan&nbsp;&nbsp;</th>
                                    <th>Kos Dituntut (RM)</th>
                                    <th>Kos Diluluskan (RM)</th>
                                    <th>Catatan</th>
                                    <th>No Fail</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($senaraiperubatanpegawai as $wrs)
                                    <tr>
                                        <td>{{ $wrs->namaKategori }}</td>
                                        <td>{{ $wrs->jenisPermohonan }}</td>
                                        <td>{{ $wrs->tarikhTerimaPermohonan }}</td>
                                        <td>{{ $wrs->tarikhKelulusan }}</td>
                                        <td>{{ $wrs->jumlahTuntutan }}</td>
                                        <td>{{ $wrs->jumlahSebenar }}</td>
                                        <td>{{ $wrs->catatanPermohonan }}</td>
                                        <td>{{ $wrs->noFail }}</td>
                                        <td><a class="btn btn-info btn-sm"
                                                href="{{ url('butiran-perubatan-pegawai', [$wrs->idTuntutan]) }}"
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
@endsection
