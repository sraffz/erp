@extends('layouts.app', ['activePage' => 'pengguna', 'titlePage' => 'Pengguna'])

@section('content')
    <div class="content">
        <div class="container-fluid">
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
                    <h4 class="card-title ">Users</h4>
                    <p class="card-category"> Here you can manage users</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-right">
                            <a href="#" class="btn btn-sm btn-primary">Tambah Pentadbir</a>
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
                                        <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title=""
                                            title="">
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
@endsection
