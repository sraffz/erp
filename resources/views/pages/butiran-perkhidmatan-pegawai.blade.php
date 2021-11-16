@extends('layouts.app', ['activePage' => 'perkhidmatan', 'titlePage' => 'Butiran Perkhidmatan'])

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
                        <a href="{{ route('page.index', 'peribadi') }}" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Butiran Perkhidmatan</h4>
                    {{-- <p class="card-category"> Here you can manage users</p> --}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-right">
                            {{-- <a href="#" class="btn btn-sm btn-primary">Add user</a> --}}
                        </div>
                    </div>
                    @foreach ($peribadi as $pkhtm)
                        <form method="post" action="{{ url('kemaskini-perkhidmatan') }}" autocomplete="off">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $pkhtm->idPeribadi }}">
                            <div class="form-group">
                                <label for="nama">Nama Penuh</label>
                                <input type="text" onkeyup="this.value = this.value.toUpperCase();" class="form-control" name="nama" id="nama" placeholder="Nama Penuh"
                                    value="{{ $pkhtm->nama }}">
                            </div>
                            <div class="form-group">
                                <label for="skim">Skim Perkhidmatan</label>
                                <input type="text" onkeyup="this.value = this.value.toUpperCase();" class="form-control" name="skim" id="skim"
                                    placeholder="Skim Perkhidmatan" value="{{ $pkhtm->idSkimPerkhidmatan }}">
                            </div>
                            <div class="form-group">
                                <label for="gred">Gred</label>
                                <input type="text" class="form-control" name="gred" id="gred" placeholder="Gred" value="{{ $pkhtm->idGred }}">
                            </div>
                            <div class="form-group">
                                <label for="jawatan">Jawatan Terakhir</label>
                                <select class="custom-select select2" name="jawatan" id="jawatan">
                                    <option value="">SILA PILIH</option>
                                    @foreach ($jawatan as $jwtn)
                                        <option value="{{ $jwtn->idJawatan }}" {{ $jwtn->idJawatan == $pkhtm->idJawatan ? 'selected' : '' }}>{{ $jwtn->namaJawatan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jabatan">Jabatan Terakhir</label>
                                <select class="custom-select select2" name="jabatan" id="jabatan">
                                    <option value="">SILA PILIH</option>
                                    @foreach ($jabatan as $jbtn)
                                        <option value="{{ $jbtn->idJabatan }}" {{ $jbtn->idJabatan == $pkhtm->idJabatan ? 'selected' : '' }}>{{ $jbtn->namaJabatan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-danger">Kemaskini</button>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
