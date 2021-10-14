@extends('layouts.app', ['activePage' => 'jabatan', 'titlePage' => 'Jabatan'])

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
                    <h4 class="card-title ">Senarai Jabatan</h4>
                    {{-- <p class="card-category"> Here you can manage users</p> --}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-right">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#tambahjabatan">
                                Tambah Jabatan
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="ui celled table" id="zero_config">
                            <thead class="text-primary">
                                <tr>
                                    {{-- <th>
                                        Bil
                                    </th> --}}
                                    <th>
                                        Singkatan Nama Jabatan
                                    </th>
                                    <th>
                                        Nama Jabatan
                                    </th>
                                    <th>
                                        Tindakan
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jabatan as $index => $jbtn)
                                    <tr>
                                        {{-- <td>
                                            {{ $index+1 }}
                                        </td> --}}
                                        <td style="text-transform: uppercase;">
                                            {{ $jbtn->singkatanJabatan }}
                                        </td>
                                        <td style="text-transform: uppercase;">
                                            {{ $jbtn->namaJabatan }}
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                                data-id="{{ $jbtn->idJabatan }}" data-singkatan="{{ $jbtn->singkatanJabatan }}" data-nama="{{ $jbtn->namaJabatan }}" data-target="#kemaskinijabatan">
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
    <div class="modal fade" id="tambahjabatan" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Jabatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('tambah-jabatan') }}" method="POST" autocomplete="off">
                    <div class="modal-body">
                        <div class="container-fluid">
                            {{ csrf_field() }}
                            <div class="form-group">
                                {{-- <label for="singkatan">Singkatan </label> --}}
                                <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();"
                                    name="singkatan" aria-describedby="helpId"
                                    placeholder="Singkatan Nama Jabatan" required autofocus>
                                <small id="helpId" class="form-text text-muted">contoh :
                                    BPSM</small>
                            </div>
                            <div class="form-group">
                                {{-- <label for="nama_jabatan">Nama Jabatan</label> --}}
                                <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();"
                                    name="nama_jabatan" id="nama_jabatan" aria-describedby="helpId"
                                    placeholder="Nama Jabatan" required>
                                <small id="helpId" class="form-text text-muted">contoh : Bahagian
                                    Pengurusan Sumber Manusia</small>
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
    <div class="modal fade" id="kemaskinijabatan" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Kemaskini Jabatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('kemaskini-jabatan') }}" method="POST" autocomplete="off">
                    <div class="modal-body">
                        <div class="container-fluid">
                            {{ csrf_field() }}
                            <div class="form-group">
                                {{-- <label for="singkatan">Singkatan </label> --}}
                                <input type="hidden" id="id" name="id">
                                <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();"
                                    name="singkatan" id="singkatan" aria-describedby="helpId"
                                    placeholder="Singkatan Nama Jabatan" value="" required autofocus>
                                <small id="helpId" class="form-text text-muted">contoh :
                                    BPSM</small>
                            </div>
                            <div class="form-group">
                                {{-- <label for="nama_jabatan">Nama Jabatan</label> --}}
                                <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();"
                                    name="nama_jabatan" id="nama" aria-describedby="helpId"
                                    placeholder="Nama Jabatan" value="" required>
                                <small id="helpId" class="form-text text-muted">contoh : Bahagian
                                    Pengurusan Sumber Manusia</small>
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

    <script>
        $('#tambahjabatan').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM

        });
    </script>
@endsection
