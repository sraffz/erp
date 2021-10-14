@extends('layouts.app', ['activePage' => 'perkhidmatan', 'titlePage' => 'Perkhidmatan (Pesara)'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="col-12 text-center">
                <a href="{{ route('page.index', 'perkhidmatan') }}" class="btn btn-success">Sedang Berkhidmat</a>
                <a href="{{ route('page.index', 'perkhidmatan-pesara') }}" class="btn btn-danger">Pesara</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Senarai Perkhidmatan (Pesara)</h4>
            {{-- <p class="card-category"> Here you can manage users</p> --}}
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 text-right">
                    {{-- <a href="#" class="btn btn-sm btn-primary">Add user</a> --}}
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover" id="zero_config">
                    <thead class="text-primary">
                        <tr>
                            <th>
                                Nama Penuh
                            </th>
                            <th>
                                No Kad Pengenalan
                            </th>
                            <th>
                                Jabatan
                            </th>
                            <th>
                                Jawatan
                            </th>
                            <th class="text-right">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perkhidmatan_pesara as $prbd)
                        <tr>
                            <td style="text-transform: uppercase;">
                                {{ $prbd->nama }}
                            </td>
                            <td>
                                {{ $prbd->ic }}
                            </td>
                            <td style="text-transform: uppercase;">
                                {{ $prbd->jabatan }}
                            </td>
                            <td style="text-transform: uppercase;">
                                {{ $prbd->jawatan }}
                            </td>
                            <td class="td-actions text-right">
                                <a name="" id="" class="btn btn-rose" href="{{ url('butiran-perkhidmatan', [$prbd->id]) }}" role="button">Butiran</a>
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
@endsection
