@extends('layouts.app', ['activePage' => 'pengguna', 'titlePage' => 'Pengguna'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="col-12 text-center">
                        <a href="{{ route('page.index', 'pengguna') }}" class="btn btn-success">Pengguna Aktif</a>
                        <a href="{{ route('page.index', 'pengguna-tidak-aktif') }}" class="btn btn-danger">Pengguna Tidak
                            Aktif</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Users</h4>
                    <p class="card-category"> Here you can manage users</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-right">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#tambahpentadbir">
                                Tambah Pentadbir
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="zero_config">
                            <thead class="text-primary">
                                <tr>
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        Kad Pengenalan
                                    </th>
                                    <th>
                                        Peranan
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th class="text-right">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pentadbir as $ptbr)
                                    @if ($ptbr->status == 'Tidak Aktif')
                                        <tr>
                                            <td>
                                                {{ $ptbr->name }}
                                            </td>
                                            <td>
                                                {{ $ptbr->kad_pengenalan }}
                                            </td>
                                            <td>
                                                {{ $ptbr->level }}
                                            </td>
                                            <td>
                                                {{ $ptbr->status }}
                                            </td>
                                            <td class="td-actions text-right">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary"
                                                    data-status='{{ $ptbr->status }}' data-level="{{ $ptbr->level }}"
                                                    data-id="{{ $ptbr->id }}" data-email="{{ $ptbr->email }}" data-nama="{{ $ptbr->name }}"
                                                    data-ic="{{ $ptbr->kad_pengenalan }}" data-toggle="modal"
                                                    data-target="#kemaskinipengguna">
                                                    <i class="material-icons">edit</i> Kemaskini
                                                </button>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Pentadbir-->
    <div class="modal fade" id="tambahpentadbir" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Pentadbir</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('tambahpentadbir') }}" method="post" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Nama Penuh</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                                placeholder="Nama Penuh" onkeyup="this.value = this.value.toUpperCase();">
                        </div>
                        <div class="form-group">
                            <label for="kp">No Kad Pengenalan</label>
                            <input type="text" class="form-control" name="kp" id="kp" aria-describedby="helpId"
                                placeholder="">
                            <small id="helpId" class="form-text text-muted">Tanpa "-". Contoh:XXXXXXXXXXXX</small>
                        </div>
                        <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId"
                                placeholder="Alamat Email">
                            <small id="helpId" class="form-text text-muted">Bertujuan untuk menukar kata laluan.</small>
                        </div>
                        <div class="form-group">
                            <label for="level">Peranan</label>
                            <select class="form-control" name="level" id="level">
                                <option value="">Sila Pilih</option>
                                <option value="Pentadbir Sistem">Pentadbir Sistem</option>
                                <option value="Pentadbir Pencen">Pentadbir Pencen</option>
                                <option value="Pentadbir Perubatan">Pentadbir Perubatan</option>
                                <option value="Pentadbir Kewangan">Pentadbir Kewangan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="">Sila Pilih</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                            </select>
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

    <!-- Modal Kemaskini Pentadbir-->
    <div class="modal fade" id="kemaskinipengguna" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Kemaskini Pengguna/Pentadbir</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('kemaskinipentadbir') }}" method="post" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id" value="">
                        <div class="form-group">
                            <label for="nama">Nama Penuh</label>
                            <input type="text" class="form-control" name="nama" id="nama" aria-describedby="helpId"
                                placeholder="Nama Penuh" onkeyup="this.value = this.value.toUpperCase();" value="">
                        </div>
                        <div class="form-group">
                            <label for="ic">No Kad Pengenalan</label>
                            <input type="text" class="form-control" name="ic" id="ic" aria-describedby="helpId"
                                placeholder="">
                            <small id="helpId" class="form-text text-muted">Tanpa "-". Contoh:XXXXXXXXXXXX</small>
                        </div>
                        <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId"
                                placeholder="Alamat Email">
                            <small id="helpId" class="form-text text-muted">Bertujuan untuk menukar kata laluan.</small>
                        </div>
                        <div class="form-group">
                            <label for="level">Peranan</label>
                            <select class="form-control" name="level" id="level">
                                <option value="">Sila Pilih</option>
                                <option value="Pentadbir Sistem">Pentadbir Sistem</option>
                                <option value="Pentadbir Pencen">Pentadbir Pencen</option>
                                <option value="Pentadbir Perubatan">Pentadbir Perubatan</option>
                                <option value="Pentadbir Kewangan">Pentadbir Kewangan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="">Sila Pilih</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                            </select>
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
