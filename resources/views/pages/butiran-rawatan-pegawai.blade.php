@extends('layouts.app', ['activePage' => 'bil-rawatan', 'titlePage' => 'Butiran Rawatan'])

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
                        @foreach ($butiranrawatan as $bp)
                        <a href="{{ url('senarai-rawatan', [$bp->idPeribadi]) }}" class="btn btn-warning">Kembali</a>
                        @endforeach                    
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-header-primary">
                    <h3 class="card-title">Butiran Bil Rawatan</h3>
                </div>
                @foreach ($butiranrawatan as $bp)
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Peribadi</h4>
                                <br>
                                @if ($bp->id_waris != null)
                                    <div class="form-group">
                                        <label for="nama_penuh_waris">Nama Penuh</label>
                                        <input type="text" name="nama_penuh_waris" disabled class="form-control"
                                            placeholder="" value="{{ $bp->nama_waris }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nokp_waris">No. Kad Pengenalan</label>
                                        <input type="text" name="nokp_waris" disabled class="form-control" placeholder=""
                                            value="{{ $bp->nokp_waris }}">
                                    </div>
                                @else
                                    <div class="form-group">
                                        <label for="nama_penuh">Nama Penuh</label>
                                        <input type="text" name="nama_penuh" disabled class="form-control" placeholder=""
                                            value="{{ $bp->nama }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nokp">No. Kad Pengenalan</label>
                                        <input type="text" name="nokp" disabled class="form-control" placeholder=""
                                            value="{{ $bp->kadPengenalan }}">
                                    </div>
                                @endif
                            </div>
                        </div>
                        <br>
                        <hr>
                        <form method="POST" action="{{ url('kemaskini-bilrawatan') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6"><br>
                                    <input type="hidden" name="id" value="{{ $bp->idRawatan }}">
                                    <div class="form-group">
                                        <label for="no_bil">No Bil</label>
                                        <input type="text" class="form-control" name="no_bil"
                                            value="{{ $bp->no_bil }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="tarikh_bil">Tarikh Bil</label>
                                        <input type="date" class="form-control" name="tarikh_bil"
                                            value="{{ $bp->tarikh_bil }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah_bil">Jumlah Tuntutan</label>
                                        <input type="number" class="form-control" step='0.01' name="jumlah_bil"
                                            value="{{ $bp->jumlah_bil }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-12 text-center"><br>
                                    <button type="submit" class="btn btn-success"><span class="material-icons">save</span>
                                        Kemaskini</button>
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal"
                                        data-id="{{ $bp->idRawatan }}" data-target="#padambil">
                                        <span class="material-icons">delete</span> hapus
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Modal Padam Waris-->
                    <div class="modal fade" id="padambil" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Hapus Bil Rawatan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ url('padam-bil') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            Hapus bil rawatan ini?
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
                @endforeach
            </div>
        </div>
    </div>
@endsection
