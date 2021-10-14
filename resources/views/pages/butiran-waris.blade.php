@extends('layouts.app', ['activePage' => 'peribadi', 'titlePage' => 'Butiran Waris'])

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
                        <form method="POST" action="{{ url('kemaskini-waris') }}" autocomplete="off">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $bw->id }}">
                            <div class="form-group">
                                <label for="namapenuh">Nama Penuh</label>
                                <input type="text" onkeyup="this.value = this.value.toUpperCase();" class="form-control"
                                    name="nama" id="namapenuh" placeholder="Nama Penuh" value="{{ $bw->nama }}">
                            </div>
                            <div class="form-group row">
                                <label for="nokp">No Kad Pengenalan</label>
                                <input type="text" class="form-control" name="nokp" id="nokp"
                                    placeholder="No Kad Pengenalan" value="{{ $bw->nokp }}">
                            </div>
                            <div class="form-group row">
                                <label for="tarikhlahir">Tarikh Lahir</label>
                                <input type="date" class="form-control" name="tarikhlahir" id="tarikhlahir"
                                    placeholder="Tarikh Lahir" value="{{ $bw->tarikhLahir }}">
                            </div>
                            <div class="form-group">
                                <label for="jantina">Jantina</label>
                                <select class="custom-select" name="jantina" id="jantina" required>
                                    <option value="">Sila pilih</option>
                                    <option value="Lelaki" {{ $bw->jantina == 'Lelaki' ? 'selected' : '' }}>LELAKI
                                    </option>
                                    <option value="Perempuan" {{ $bw->jantina == 'Perempuan' ? 'selected' : '' }}>
                                        PEREMPUAN</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="hubungan">Hubungan Dengan Kakitangan</label>
                                <select class="custom-select" name="hubungan" id="hubungan" required>
                                    <option value="">Sila pilih</option>
                                    @foreach ($hubungan as $hbgn)
                                        <option value="{{ $hbgn->id }}"
                                            {{ $hbgn->namaHubungan == $bw->hubungan ? 'selected' : '' }}>
                                            {{ $hbgn->namaHubungan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-xs">
                                        <span class="material-icons">save</span> Kemaskini
                                    </button>
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal"
                                        data-id="{{ $bw->id }}" data-target="#padamwaris">
                                        <span class="material-icons">delete</span> hapus
                                    </button>
                                </div>
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Padam Waris-->
    <div class="modal fade" id="padamwaris" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Butiran Pegawai/Pesara</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('padam-waris') }}" method="post">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="container-fluid">
                            Hapus maklumat waris ini?
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
