@extends('layouts.app', ['activePage' => 'pengguna', 'titlePage' => 'Pengguna'])

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
                        <a href="{{ route('page.index', 'pengguna') }}" class="btn btn-success">Pengguna Aktif</a>
                        <a href="{{ route('page.index', 'pengguna-tidak-aktif') }}" class="btn btn-danger">Pengguna Tidak
                            Aktif</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Petadbir</h4>
                    <p class="card-category"> Senarai Pentadbir</p>
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
                                    @if ($ptbr->status == 'Aktif')
                                        <tr>
                                            <td>
                                                {{ $ptbr->nama }}
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
                                                <a rel="tooltip" class="btn btn-success btn-link" href="#"
                                                    data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
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
                          <input type="email"
                            class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Alamat Email">
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

    <script>
        $('#tambahpentadbir').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM

        });
    </script>
@endsection
