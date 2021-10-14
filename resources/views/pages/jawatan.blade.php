@extends('layouts.app', ['activePage' => 'jawatan', 'titlePage' =>'Jawatan'])

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
                    <h4 class="card-title ">Senarai Jawatan</h4>
                    {{-- <p class="card-category"> Here you can manage users</p> --}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-right">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#tambahjawatan">
                                Tambah Jawatan
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover" id="zero_config">
                            <thead class="text-primary">
                                <tr>
                                    <th>
                                        Bil
                                    </th>
                                    <th>
                                        Nama Jawatan
                                    </th>
                                    <th>
                                        Tindakan
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jawatan as $index => $jwtn)
                                    <tr>
                                        <td>
                                            {{ $index+1 }}
                                        </td>
                                        <td style="text-transform: uppercase;">
                                            {{ $jwtn->namaJawatan }}
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                                data-id="{{ $jwtn->idJawatan }}" data-jawatan="{{ $jwtn->namaJawatan }}" data-target="#kemaskinijawatan">
                                                Kemaskini
                                            </button>
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


    <!-- Modal Tambah Jabatan-->
    <div class="modal fade" id="tambahjawatan" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Jawatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('tambah-jawatan') }}" method="POST" autocomplete="off">
                    <div class="modal-body">
                        <div class="container-fluid">
                            {{ csrf_field() }}
                            <div class="form-group">
                                {{-- <label for="singkatan">Singkatan </label> --}}
                                <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();"
                                    name="jawatan" aria-describedby="helpId"
                                    placeholder="Jawatan" required autofocus>
                                <small id="helpId" class="form-text text-muted">contoh :
                                    Pegawai Tadbir</small>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal kemaskini Jabatan-->
    <div class="modal fade" id="kemaskinijawatan" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Kemaskini Jawatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('kemaskini-jawatan') }}" method="POST" autocomplete="off">
                    <div class="modal-body">
                        <div class="container-fluid">
                            {{ csrf_field() }}
                            <div class="form-group">
                                {{-- <label for="singkatan">Singkatan </label> --}}
                                <input type="hidden" id="id" name="id">
                                <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();"
                                    name="jawatan" id="jawatan" aria-describedby="helpId"
                                    placeholder="Jawatan" required autofocus>
                                <small id="helpId" class="form-text text-muted">contoh :
                                    Pegawai Tadbir</small>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Kemaskini</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
