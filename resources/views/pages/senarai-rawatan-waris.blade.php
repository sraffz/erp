@extends('layouts.app', ['activePage' => 'peribadi', 'titlePage' => 'Senarai Rawatan Waris'])

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
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                data-id="{{ $bw->idPesara }}" data-idwaris="{{ $bw->id }}"
                                data-target="#tambahbilwaris">
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
                                    <th>Tarikh bil</th>
                                    <th>Jumlah Tuntutan / No bil</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($senaraibilwaris as $index => $bil)
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
                                        <td>{{ $bil->tarikh_bil }}</td>
                                        <td>RM {{ $bil->jumlah_bil }} <br> No Bil : {{ $bil->no_bil }}</td>
                                        <td><a class="btn btn-info btn-sm"
                                                href="{{ url('butiran-rawatan-waris', [$bil->idRawatan]) }}"
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
    <!-- Modal Tambah Bil Rawatan Waris-->
    <div class="modal fade" id="tambahbilwaris" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ url('tambah-bilrawatanwaris') }}">
                    <div class="modal-body">
                        <div class="container-fluid">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" id="id" value="">
                            <input type="hidden" name="idwaris" id="idwaris" value="">
                            <div class="form-group">
                                <label for="no_bil">No Bil</label>
                                <input type="text" class="form-control" name="no_bil" value="">
                            </div>
                            <div class="form-group">
                                <label for="tarikh_bil">Tarikh Bil</label>
                                <input type="date" class="form-control" name="tarikh_bil" value="">
                            </div>
                            <div class="form-group">
                                <label for="jumlah_bil">Jumlah Tuntutan</label>
                                <input type="number" step='0.01' class="form-control" name="jumlah_bil" value="">
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
