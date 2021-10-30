@extends('layouts.app', ['activePage' => 'perubatan', 'titlePage' => 'Butiran Perubatan'])

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
                    <h3 class="card-title">Butiran Perubatan</h3>
                </div>
                @foreach ($butiranperubatan as $bp)
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Peribadi</h4>
                                <br>
                                @if ($bp->nama_waris != null)
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
                        <form method="POST" action="{{ url('kemaskini-perubatan') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $bp->idTuntutan }}">
                            <div class="row">
                                <div class="col-md-6"><br>
                                    <h4 class="card-title">Rawatan Di Hospital/ Klinik Kerajaan </h4>
                                   
                                    <div class="form-group">
                                        <label for="hospital">Nama Hospital/Klinik Kerajaan</label> <button type="button"  class="btn btn-primary btn-sm" 
                                        data-toggle="modal" data-target="#tambahhospital">
                                        <span class="material-icons"> add </span>
                                    </button>
                                        <select class="custom-select select2" name="hospital" id="namaHospital">
                                            <option value="">SILA PILIH</option>
                                            @foreach ($hospital as $hptl)
                                                <option value="{{ $hptl->idHospital }}"
                                                    {{ $hptl->idHospital == $bp->idHospital ? 'selected' : '' }}>
                                                    {{ $hptl->namaHospital }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <select class="alamatHospital custom-select" name="alamat" id="alamat" disabled>
                                            @foreach ($hospital as $h)
                                                <option value="{{ $h->idHospital }}"
                                                    {{ $h->idHospital == $bp->idHospital ? 'selected' : '' }}>
                                                    {{ $h->alamatHospital }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat2">Alamat 2</label>
                                        <select class="alamatHospital custom-select" name="alamat2" id="alamat2" disabled>
                                            @foreach ($hospital as $h)
                                                <option value="{{ $h->idHospital }}"
                                                    {{ $h->idHospital == $bp->idHospital ? 'selected' : '' }}>
                                                    {{ $h->alamat2 }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat3">Alamat 3</label>
                                        <select class="alamatHospital custom-select" name="alamat3" id="alamat3" disabled>
                                            @foreach ($hospital as $h)
                                                <option value="{{ $h->idHospital }}"
                                                    {{ $h->idHospital == $bp->idHospital ? 'selected' : '' }}>
                                                    {{ $h->alamat3 }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="bandar">Bandar</label>
                                        <select class="alamatHospital custom-select" name="bandar" id="bandar" disabled>
                                            @foreach ($hospital as $h)
                                                <option value="{{ $h->idHospital }}"
                                                    {{ $h->idHospital == $bp->idHospital ? 'selected' : '' }}>
                                                    {{ $h->bandar }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="poskod">Poskod</label>
                                        <select class="alamatHospital custom-select" name="poskod" id="poskod" disabled>
                                            @foreach ($hospital as $h)
                                                <option value="{{ $h->idHospital }}"
                                                    {{ $h->idHospital == $bp->idHospital ? 'selected' : '' }}>
                                                    {{ $h->poskod }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="negeri">Negeri</label>
                                        <select class="alamatHospital custom-select" name="negeri" id="negeri" disabled>
                                            @foreach ($hospital as $h)
                                                <option value="{{ $h->idHospital }}"
                                                    {{ $h->idHospital == $bp->idHospital ? 'selected' : '' }}>
                                                    {{ $h->negeri }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tarikhRawatan">Tarikh Rawatan</label>
                                        <input type="date" name="tarikhRawatan" class="form-control"
                                            value="{{ $bp->tarikhRawatan }}">
                                    </div>

                                </div>
                                <div class="col-md-6"><br>
                                    <h4 class="card-title">Pembekal Kemudahan Perubatan</h4>

                                    <div class="form-group">
                                        <label for="pembekal">Nama Hospital/ Agensi Swasta</label><button type="button"
                                        class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#tambahpembekal">
                                        <span class="material-icons"> add </span>
                                    </button>
                                        <select class="alamatPembekal custom-select select2" name="pembekal" id="namaPembekal">
                                            <option value="">SILA PILIH</option>
                                            @foreach ($pembekal as $pmbkl)
                                                <option value="{{ $pmbkl->idPembekal }}"
                                                    {{ $pmbkl->idPembekal == $bp->idPembekal ? 'selected' : '' }}>
                                                    {{ $pmbkl->namaPembekal }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_pembekal">Alamat</label>
                                        <select class="alamatPembekal custom-select" name="alamat_pembekal"
                                            id="alamat_pembekal" disabled>
                                            @foreach ($pembekal as $pmbkl)
                                                <option value="{{ $pmbkl->idPembekal }}"
                                                    {{ $pmbkl->idPembekal == $bp->idPembekal ? 'selected' : '' }}>
                                                    {{ $pmbkl->alamatPembekal }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat2_pembekal">Alamat 2</label>
                                        <select class="alamatPembekal custom-select" name="alamat2_pembekal"
                                            id="alamat2_pembekal" disabled>
                                            @foreach ($pembekal as $pmbkl)
                                                <option value="{{ $pmbkl->idPembekal }}"
                                                    {{ $pmbkl->idPembekal == $bp->idPembekal ? 'selected' : '' }}>
                                                    {{ $pmbkl->alamat2 }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat3_pembekal">Alamat 3</label>
                                        <select class="alamatPembekal custom-select" name="alamat3_pembekal"
                                            id="alamat3_pembekal" disabled>
                                            @foreach ($pembekal as $pmbkl)
                                                <option value="{{ $pmbkl->idPembekal }}"
                                                    {{ $pmbkl->idPembekal == $bp->idPembekal ? 'selected' : '' }}>
                                                    {{ $pmbkl->alamat3 }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="bandar_pembekal">Bandar</label>
                                        <select class="alamatPembekal custom-select" name="bandar_pembekal"
                                            id="bandar_pembekal" disabled>
                                            @foreach ($pembekal as $pmbkl)
                                                <option value="{{ $pmbkl->idPembekal }}"
                                                    {{ $pmbkl->idPembekal == $bp->idPembekal ? 'selected' : '' }}>
                                                    {{ $pmbkl->bandar }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="poskod_pembekal">Poskod</label>
                                        <select class="alamatPembekal custom-select" name="poskod_pembekal"
                                            id="poskod_pembekal" disabled>
                                            @foreach ($pembekal as $pmbkl)
                                                <option value="{{ $pmbkl->idPembekal }}"
                                                    {{ $pmbkl->idPembekal == $bp->idPembekal ? 'selected' : '' }}>
                                                    {{ $pmbkl->poskod }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="negeri_pembekal">Negeri</label>
                                        <select class="alamatPembekal custom-select" name="negeri_pembekal"
                                            id="negeri_pembekal" disabled>
                                            @foreach ($pembekal as $pmbkl)
                                                <option value="{{ $pmbkl->idPembekal }}"
                                                    {{ $pmbkl->idPembekal == $bp->idPembekal ? 'selected' : '' }}>
                                                    {{ $pmbkl->negeri }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tarikhKemudahanPerubatanDiperolehi">Tarikh Kemudahan Perubatan
                                            Diperoleh</label>
                                        <input type="date" name="tarikhKemudahanPerubatanDiperolehi" class="form-control"
                                            value="{{ $bp->tarikhKemudahanPerubatanDiperolehi }}">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><br>
                                    <h4 class="card-title">Tuntutan Perubatan</h4>
                                    <div class="form-group">
                                        <label for="kategorituntutan">Kategori Tuntutan</label>
                                        <select class="custom-select select2" name="kategorituntutan" id="kategorituntutan">
                                            <option value="">SILA PILIH</option>
                                            @foreach ($kategorituntutan as $kt)
                                                <option value="{{ $kt->idKategori }}"
                                                    {{ $kt->idKategori == $bp->idKategori ? 'selected' : '' }}>
                                                    {{ $kt->namaKategori }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="namaubat">Nama Ubat/Alat/Perkhidmatan Perubatan/ Rawatan</label>
                                        <input type="text" class="form-control" name="namaubat"
                                            value="{{ $bp->detailTuntutan }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="baucer">No Baucer</label>
                                        <input type="text" class="form-control" name="baucer"
                                            value="{{ $bp->noRujukanKewangan }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="hargatuntutan">Harga Tuntuan (RM)</label>
                                        <input type="number" class="form-control" name="hargatuntutan"
                                            value="{{ $bp->jumlahTuntutan }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="hargalulus">Harga Diluluskan (RM)</label>
                                        <input type="text" class="form-control" name="hargalulus"
                                            value="{{ $bp->jumlahSebenar }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="tarikh_lulus">Tarikh Kelulusan</label>
                                        <input type="date" class="form-control" name="tarikh_lulus"
                                            value="{{ $bp->tarikhKelulusan }}">
                                    </div>
                                </div>
                                <div class="col-md-6"><br>
                                    <h4 class="card-title">Maklumat Tambahan</h4>
                                    <div class="form-group">
                                        <label for="jenisPermohonan">Jenis Permohonan</label>
                                        <select class="custom-select select2" name="jenisPermohonan" id="jenisPermohonan">
                                            <option value="">SILA PILIH</option>
                                            <option value="Permohonan Pembelanjaan"
                                                {{ 'Permohonan Pembelanjaan' == $bp->jenisPermohonan ? 'selected' : '' }}>
                                                Permohonan Pembelanjaan</option>
                                            <option value="Pembiayaan Rawatan"
                                                {{ 'Pembiayaan Rawatan' == $bp->jenisPermohonan ? 'selected' : '' }}>
                                                Pembiayaan Rawatan</option>
                                            <option value="Tuntutan Bayaran Balik"
                                                {{ 'Tuntutan Bayaran Balik' == $bp->jenisPermohonan ? 'selected' : '' }}>
                                                Tuntutan Bayaran Balik</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tarikh_terima_permohonan">Tarikh Terima Permohonan</label>
                                        <input type="date" class="form-control" name="tarikh_terima_permohonan"
                                            value="{{ $bp->tarikhTerimaPermohonan }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="catatan_permohonan">Catatan Permohonan</label>
                                        <textarea class="form-control" name="catatan_permohonan" id="catatan_permohonan"
                                            rows="3"> {{ $bp->catatanPermohonan }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="nofail">No Fail</label>
                                        <input type="text" name="nofail" class="form-control"
                                            value="{{ $bp->noFail }}">
                                    </div>
                                </div>
                                <hr><br>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-success"><span class="material-icons">save</span>
                                        Kemaskini</button>
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal"
                                        data-id="{{ $bp->idTuntutan }}" data-target="#padamperubatan">
                                        <span class="material-icons">delete</span> hapus
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Modal Padam Waris-->
                    <div class="modal fade" id="padamperubatan" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Hapus Butiran Pegawai/Pesara</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ url('padam-perubatan') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            Hapus maklumat perubatan ini?
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

       <!-- Modal Tambah Hospital-->
       <div class="modal fade" id="tambahhospital" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Hospital</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('tambah-hospital') }}" method="post">
                    <div class="modal-body">
                        <div class="container-fluid">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="namahospital">Nama Hospital/Klinik Kerajaan:</label>
                                <input type="text" class="form-control" name="namahospital" id="namahospital"
                                    aria-describedby="helpId" placeholder="Nama Hospital/Klinik Kerajaan">
                            </div>
                            <div class="form-group">
                                <label for="alamathospital">Alamat</label>
                                <input type="text" class="form-control" name="alamathospital" id="alamathospital"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="alamat2">Alamat 2</label>
                                <input type="text" class="form-control" name="alamat2" id="alamat2"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="alamat3">Alamat 3</label>
                                <input type="text" class="form-control" name="alamat3" id="alamat3"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="poskod">Poskod</label>
                                <input type="text" class="form-control" name="poskod" id="poskod"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="bandar">Bandar</label>
                                <input type="text" class="form-control" name="bandar" id="bandar"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="negeri">Negeri</label>
                                <select class="form-control custom-select" name="negeri" id="negeri">
                                    <option value="">SILA PILIH</option>
                                    <option value="JOHOR">JOHOR </option>
                                    <option value="KEDAH">KEDAH</option>
                                    <option value="KELANTAN">KELANTAN</option>
                                    <option value="MELAKA">MELAKA</option>
                                    <option value="NEGERI SEMBILAN">NEGERI SEMBILAN</option>
                                    <option value="PAHANG">PAHANG</option>
                                    <option value="PERAK">PERAK</option>
                                    <option value="PERLIS">PERLIS</option>
                                    <option value="PULAU PINANG">PULAU PINANG</option>
                                    <option value="SABAH">SABAH</option>
                                    <option value="SARAWAK">SARAWAK</option>
                                    <option value="SELANGOR">SELANGOR</option>
                                    <option value="TERENGGANU">TERENGGANU</option>
                                    <option value="W.P KUALA LUMPUR">W.P KUALA LUMPUR</option>
                                    <option value="W.P LABUAN">W.P LABUAN</option>
                                    <option value="W.P PUTRAJAYA">W.P PUTRAJAYA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Tambah Pembekal-->
    <div class="modal fade" id="tambahpembekal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Pembekal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('tambah-pembekal') }}" method="post">
                    <div class="modal-body">
                        <div class="container-fluid">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="namaPembekal">Nama Hospital/ Agensi Swasta:</label>
                                <input type="text" class="form-control" name="namaPembekal" id="namaPembekal"
                                    aria-describedby="helpId" placeholder="Nama Hospital/Klinik Swasta">
                            </div>
                            <div class="form-group">
                                <label for="alamatPembekal">Alamat</label>
                                <input type="text" class="form-control" name="alamatPembekal" id="alamatPembekal"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="alamat2">Alamat 2</label>
                                <input type="text" class="form-control" name="alamat2" id="alamat2"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="alamat3">Alamat 3</label>
                                <input type="text" class="form-control" name="alamat3" id="alamat3"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="poskod">Poskod</label>
                                <input type="text" class="form-control" name="poskod" id="poskod"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="bandar">Bandar</label>
                                <input type="text" class="form-control" name="bandar" id="bandar"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="negeri">Negeri</label>
                                <select class="form-control custom-select" name="negeri" id="negeri">
                                    <option value="">SILA PILIH</option>
                                    <option value="JOHOR">JOHOR </option>
                                    <option value="KEDAH">KEDAH</option>
                                    <option value="KELANTAN">KELANTAN</option>
                                    <option value="MELAKA">MELAKA</option>
                                    <option value="NEGERI SEMBILAN">NEGERI SEMBILAN</option>
                                    <option value="PAHANG">PAHANG</option>
                                    <option value="PERAK">PERAK</option>
                                    <option value="PERLIS">PERLIS</option>
                                    <option value="PULAU PINANG">PULAU PINANG</option>
                                    <option value="SABAH">SABAH</option>
                                    <option value="SARAWAK">SARAWAK</option>
                                    <option value="SELANGOR">SELANGOR</option>
                                    <option value="TERENGGANU">TERENGGANU</option>
                                    <option value="W.P KUALA LUMPUR">W.P KUALA LUMPUR</option>
                                    <option value="W.P LABUAN">W.P LABUAN</option>
                                    <option value="W.P PUTRAJAYA">W.P PUTRAJAYA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
