@extends('layouts.app', ['activePage' => 'peribadi', 'titlePage' => 'Senarai Perubatan Waris'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="col-12 text-right">
                        @foreach ($butiranwaris as $bw)
                            <a href="{{ url('butiran-peribadi', [$bw->idPesara]) }}" class="btn btn-warning">Kembali</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Butiran Waris</h4>
                    {{-- <p class="card-category"> Here you can manage users</p> --}}
                </div>
                <div class="card-body">
                    @foreach ($butiranwaris as $bw)
                        <form>
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $bw->id }}">
                            <div class="form-group">
                                <label for="namapenuh">Nama Penuh</label>
                                <input disabled type="text" onkeyup="this.value = this.value.toUpperCase();"
                                    class="form-control" name="nama" id="namapenuh" placeholder="Nama Penuh"
                                    value="{{ $bw->nama }}">
                            </div>
                            <div class="form-group row">
                                <label for="nokp">No Kad Pengenalan</label>
                                <input disabled type="text" class="form-control" name="nokp" id="nokp"
                                    placeholder="No Kad Pengenalan" value="{{ $bw->nokp }}">
                            </div>
                            <div class="form-group">
                                <label for="hubungan">Hubungan Dengan Pegawai/Kakitangan</label>
                                <select class="custom-select" name="hubungan" id="hubungan" disabled required>
                                    <option value="">Sila pilih</option>
                                    @foreach ($hubungan as $hbgn)
                                        <option value="{{ $hbgn->id }}"
                                            {{ $hbgn->namaHubungan == $bw->hubungan ? 'selected' : '' }}>
                                            {{ $hbgn->namaHubungan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <hr> <br>
                            <div class="form-group">
                                <label for="namapenuh">Nama Pegawai/Kakitangan</label>
                                <input type="text" onkeyup="this.value = this.value.toUpperCase();" class="form-control"
                                    name="nama" disabled id="namapenuh" placeholder="Nama Penuh"
                                    value="{{ $bw->nama_pegawai }}">
                            </div>
                            <div class="form-group">
                                <label for="ic">No Kad Pengenalan</label>
                                <input type="text" onkeyup="this.value = this.value.toUpperCase();" class="form-control"
                                    name="ic" disabled id="ic" placeholder="No Kad Pengenalan"
                                    value="{{ $bw->ic_pegawai }}">
                            </div>
                            <div class="form-group">
                                <label for="jawatan">Jawatan Terakhir</label>
                                <input type="text" onkeyup="this.value = this.value.toUpperCase();" class="form-control"
                                    name="jawatan" disabled id="jawatan" placeholder="Jawatan"
                                    value="{{ $bw->namaJawatan }}">
                            </div>
                        </form>
                  
                </div>
            </div>
            {{-- Waris --}}
            <div class="card">
                <div class="card-header card-header-rose">
                    <h4 class="card-title ">Senarai Perubatan Waris</h4>
                    {{-- <p class="card-category"> Here you can manage users</p> --}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-right">
                            <a class="btn btn-primary btn-sm" href="{{ url('tambah-perubatan-waris', [$bw->id]) }}" role="button">Tambah Perubatan</a>
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
                                @foreach ($senaraiperubatanwaris as $wrs)
                                    <tr>
                                        <td>{{ $wrs->namaKategori }}</td>
                                        <td>{{ $wrs->jenisPermohonan }}</td>
                                        <td>{{ $wrs->tarikhTerimaPermohonan }}</td>
                                        <td>{{ $wrs->tarikhKelulusan }}</td>
                                        <td>{{ $wrs->jumlahTuntutan }}</td>
                                        <td>{{ $wrs->jumlahSebenar }}</td>
                                        <td>{{ $wrs->catatanPermohonan }}</td>
                                        <td>{{ $wrs->noFail }}</td>
                                        <td><a  class="btn btn-info btn-sm" href="{{ url('butiran-perubatan-waris', [$wrs->idTuntutan]) }}" role="button">Butiran</a></td>
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
