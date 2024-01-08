@extends('layouts.app', ['activePage' => 'perubatan', 'titlePage' => 'Tambah Butiran Perubatan'])

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
                @foreach ($peribadi as $wrs)
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title"><strong>Peribadi</strong></h4>
                                <br>
                                <div class="form-group">
                                    <label for="nama_penuh">Nama Penuh</label>
                                    <input type="text" name="nama_penuh" disabled class="form-control" placeholder=""
                                        value="{{ $wrs->nama }}">
                                </div>
                                <div class="form-group">
                                    <label for="nokp">No. Kad Pengenalan</label>
                                    <input type="text" name="nokp" disabled class="form-control" placeholder=""
                                        value="{{ $wrs->kadPengenalan }}">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <form method="POST" action="{{ url('tambahperubatan') }}" autocomplete="off">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $wrs->idPeribadi }}">
                            {{-- <input type="text" name="idPesara" value="{{ $wrs->idPesara }}"> --}}
                            <div class="row">
                                <div class="col-md-6"><br>
                                    <h4 class="card-title">Rawatan Di Hospital/ Klinik Kerajaan </h4>
                                    <div class="alert alert-success" role="alert" id="successMsgHsptl"
                                        style="display: none">
                                        Klinik/Hospital Berjaya Ditambah.
                                    </div>
                                    <div class="form-group">
                                        <label for="hospital">Nama Hospital/Klinik Kerajaan</label> <button type="button"
                                            class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#tambahhospital">
                                            <span class="material-icons"> add </span>
                                        </button>
                                        
                                        <select class="custom-select select2" name="hospital" id="namaHospital">
                                            <option value="">SILA PILIH</option>
                                            {{-- @foreach ($hospital as $hptl)
                                            <option value="{{ $hptl->idHospital }}"
                                                {{ $hptl->idHospital == $bp->idHospital ? 'selected' : '' }}>
                                                {{ $hptl->namaHospital }}</option>
                                        @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <select class="alamatHospital custom-select" name="alamat" id="alamat1Hospital" disabled>
                                            {{-- @foreach ($hospital as $h)
                                                <option value="{{ $h->idHospital }}">{{ $h->alamatHospital }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat2">Alamat 2</label>
                                        <select class="alamatHospital custom-select" name="alamat2" id="alamat21Hospital" disabled>
                                            {{-- @foreach ($hospital as $h)
                                                <option value="{{ $h->idHospital }}">
                                                    {{ $h->alamat2 }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat3">Alamat 3</label>
                                        <select class="alamatHospital custom-select" name="alamat3" id="alamat31Hospital" disabled>
                                            {{-- @foreach ($hospital as $h)
                                                <option value="{{ $h->idHospital }}">
                                                    {{ $h->alamat3 }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="bandar">Bandar</label>
                                        <select class="alamatHospital custom-select" name="bandar" id="bandar1hospital" disabled>
                                            {{-- @foreach ($hospital as $h)
                                                <option value="{{ $h->idHospital }}">
                                                    {{ $h->bandar }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="poskod">Poskod</label>
                                        <select class="alamatHospital custom-select" name="poskod" id="poskod1hospital" disabled>
                                            {{-- @foreach ($hospital as $h)
                                                <option value="{{ $h->idHospital }}">
                                                    {{ $h->poskod }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="negeri">Negeri</label>
                                        <select class="alamatHospital custom-select" name="negeri" id="negeri1hospital" disabled>
                                            {{-- @foreach ($hospital as $h)
                                                <option value="{{ $h->idHospital }}">
                                                    {{ $h->negeri }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tarikhRawatan">Tarikh Rawatan</label>
                                        <input type="date" name="tarikhRawatan" class="form-control" value="">
                                    </div>

                                </div>
                                <div class="col-md-6"><br>
                                    <h4 class="card-title">Pembekal Kemudahan Perubatan</h4>
                                    <div class="alert alert-success" role="alert" id="successMsgPmbkl"
                                        style="display: none">
                                        Pembekal Berjaya Ditambah.
                                    </div>
                                    <div class="form-group">
                                        <label for="pembekal">Nama Hospital/ Agensi Swasta</label><button type="button"
                                            class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#tambahpembekal">
                                            <span class="material-icons"> add </span>
                                        </button>
                                        
                                        <select class="alamatPembekal custom-select select2" name="pembekal"
                                            id="namaPembekal">
                                            <option value="">SILA PILIH</option>
                                            {{-- @foreach ($pembekal as $pmbkl)
                                            <option value="{{ $pmbkl->idPembekal }}"
                                                {{ $pmbkl->idPembekal == $bp->idPembekal ? 'selected' : '' }}>
                                                {{ $pmbkl->namaPembekal }}</option>
                                        @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_pembekal">Alamat</label>
                                        <select class="alamatPembekal custom-select" name="alamat_pembekal"
                                            id="alamat_pembekal" disabled>
                                            {{-- @foreach ($pembekal as $pmbkl)
                                                <option value="{{ $pmbkl->idPembekal }}">
                                                    {{ $pmbkl->alamatPembekal }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat2_pembekal">Alamat 2</label>
                                        <select class="alamatPembekal custom-select" name="alamat2_pembekal"
                                            id="alamat2_pembekal" disabled>
                                            {{-- @foreach ($pembekal as $pmbkl)
                                                <option value="{{ $pmbkl->idPembekal }}">
                                                    {{ $pmbkl->alamat2 }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat3_pembekal">Alamat 3</label>
                                        <select class="alamatPembekal custom-select" name="alamat3_pembekal"
                                            id="alamat3_pembekal" disabled>
                                            {{-- @foreach ($pembekal as $pmbkl)
                                                <option value="{{ $pmbkl->idPembekal }}">
                                                    {{ $pmbkl->alamat3 }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="bandar_pembekal">Bandar</label>
                                        <select class="alamatPembekal custom-select" name="bandar_pembekal"
                                            id="bandar_pembekal" disabled>
                                            {{-- @foreach ($pembekal as $pmbkl)
                                                <option value="{{ $pmbkl->idPembekal }}">
                                                    {{ $pmbkl->bandar }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="poskod_pembekal">Poskod</label>
                                        <select class="alamatPembekal custom-select" name="poskod_pembekal"
                                            id="poskod_pembekal" disabled>
                                            {{-- @foreach ($pembekal as $pmbkl)
                                                <option value="{{ $pmbkl->idPembekal }}">
                                                    {{ $pmbkl->poskod }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="negeri_pembekal">Negeri</label>
                                        <select class="alamatPembekal custom-select" name="negeri_pembekal"
                                            id="negeri_pembekal" disabled>
                                            {{-- @foreach ($pembekal as $pmbkl)
                                                <option value="{{ $pmbkl->idPembekal }}">
                                                    {{ $pmbkl->negeri }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tarikhKemudahanPerubatanDiperolehi">Tarikh Kemudahan Perubatan
                                            Diperoleh</label>
                                        <input type="date" name="tarikhKemudahanPerubatanDiperolehi"
                                            class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><br>
                                    <h4 class="card-title">Tuntutan Perubatan</h4>
                                    <div class="form-group">
                                        <label for="kategorituntutan">Kategori Tuntutan</label>
                                        <select class="custom-select select2" name="kategorituntutan" required
                                            id="kategorituntutan">
                                            <option value="">SILA PILIH</option>
                                            @foreach ($kategorituntutan as $kt)
                                                <option value="{{ $kt->idKategori }}">
                                                    {{ $kt->namaKategori }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="alert alert-success" role="alert" id="successMsg"
                                        style="display: none">
                                        Kategori Penyakit Berjaya Ditambah.
                                    </div>
                                    <div class="form-group">
                                        <label for="kategoripenyakit">Kategori Penyakit</label>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#tambahketegoripenyakit">
                                            <span class="material-icons"> add </span>
                                        </button>

                                        <select class="custom-select select2" name="kategoripenyakit"
                                            id="kategoripenyakit" required>
                                            <option value="">SILA PILIH</option>
                                            {{-- @foreach ($kategori_penyakit as $kpy)
                                                <option value="{{ $kpy->kategori }}"
                                                    {{ $kpy->kategori == $bp->kategori_penyakit ? 'selected' : '' }}>
                                                    {{ $kpy->kategori }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="kategoripenyakit">Kategori Penyakit</label>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#tambahketegoripenyakit">
                                            <span class="material-icons"> add </span>
                                        </button>
                                        <select class="custom-select select2" name="kategoripenyakit" required>
                                            <option value="">SILA PILIH</option>
                                            @foreach ($kategori_penyakit as $kpy)
                                            <option value="{{ $kpy->kategori }}">{{ $kpy->kategori }}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="nama_penyakit">Nama/Jenis Penyakit Yang Dihidapi</label>
                                        <input onkeyup="this.value = this.value.toUpperCase();" type="text"
                                            name="nama_penyakit" class="form-control" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="namaubat">Nama Ubat/Alat/Perkhidmatan Perubatan/ Rawatan</label>
                                        <input onkeyup="this.value = this.value.toUpperCase();" type="text"
                                            class="form-control" name="namaubat" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="baucer">No Baucer</label>
                                        <input onkeyup="this.value = this.value.toUpperCase();" type="text"
                                            class="form-control" name="baucer" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="hargatuntutan">Harga Tuntutan (RM)</label>
                                        <input onkeyup="this.value = this.value.toUpperCase();" type="text"
                                            class="form-control" name="hargatuntutan" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="hargalulus">Harga Diluluskan (RM)</label>
                                        <input onkeyup="this.value = this.value.toUpperCase();" type="text"
                                            class="form-control" name="hargalulus" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="tarikh_lulus">Tarikh Kelulusan</label>
                                        <input onkeyup="this.value = this.value.toUpperCase();" type="date"
                                            class="form-control" name="tarikh_lulus" value="">
                                    </div>
                                </div>
                                <div class="col-md-6"><br>
                                    <h4 class="card-title">Maklumat Tambahan</h4>
                                    <div class="form-group">
                                        <label for="jenisPermohonan">Jenis Permohonan</label>
                                        <select class="custom-select select2" name="jenisPermohonan"
                                            id="jenisPermohonan">
                                            <option value="">SILA PILIH</option>
                                            <option value="Permohonan Pembelanjaan">Permohonan Pembelanjaan</option>
                                            <option value="Pembiayaan Rawatan">Pembiayaan Rawatan</option>
                                            <option value="Tuntutan Bayaran Balik">Tuntutan Bayaran Balik</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tarikh_terima_permohonan">Tarikh Terima Permohonan</label>
                                        <input onkeyup="this.value = this.value.toUpperCase();" type="date"
                                            class="form-control" name="tarikh_terima_permohonan" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="catatan_permohonan">Catatan Permohonan</label>
                                        <textarea onkeyup="this.value = this.value.toUpperCase();" class="form-control" name="catatan_permohonan"
                                            id="catatan_permohonan" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="nofail">No Fail</label>
                                        <input onkeyup="this.value = this.value.toUpperCase();" type="text"
                                            name="nofail" class="form-control" value="">
                                    </div>
                                </div>
                                <hr><br>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a name="" id="" class="btn btn-danger"
                                        href="{{ url()->previous() }}" role="button">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Modal Tambah Hospital-->
    <div class="modal fade" id="tambahhospital" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Hospital</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="SubmitFormHospital">
                    {{-- <form action="{{ url('tambah-hospital') }}" method="post"> --}}
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
                                <label for="alamathospital2">Alamat 2</label>
                                <input type="text" class="form-control" name="alamathospital2" id="alamathospital2"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="alamathospital3">Alamat 3</label>
                                <input type="text" class="form-control" name="alamathospital3" id="alamathospital3"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="poskodhospital">Poskod</label>
                                <input type="text" class="form-control" name="poskodhospital" id="poskodhospital"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="bandarhospital">Bandar</label>
                                <input type="text" class="form-control" name="bandarhospital" id="bandarhospital"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="negerihospital">Negeri</label>
                                <select class="form-control custom-select" name="negerihospital" id="negerihospital">
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
    <div class="modal fade" id="tambahpembekal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Pembekal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{-- <form action="{{ url('tambah-pembekal') }}" method="post"> --}}
                <form method="post" id="SubmitFormPembekal">
                    <div class="modal-body">
                        <div class="container-fluid">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="namapembekal">Nama Hospital/ Agensi Swasta:</label>
                                <input type="text" class="form-control" name="namapembekal" id="namapembekal"
                                    aria-describedby="helpId" placeholder="Nama Hospital/Klinik Swasta">
                            </div>
                            <div class="form-group">
                                <label for="alamatpembekal">Alamat</label>
                                <input type="text" class="form-control" name="alamatpembekal" id="alamatpembekal"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="alamatpembekal2">Alamat 2</label>
                                <input type="text" class="form-control" name="alamatpembekal2" id="alamatpembekal2"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="alamatpembekal3">Alamat 3</label>
                                <input type="text" class="form-control" name="alamatpembekal3" id="alamatpembekal3"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="poskodpembekal">Poskod</label>
                                <input type="text" class="form-control" name="poskodpembekal" id="poskodpembekal"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="bandarpembekal">Bandar</label>
                                <input type="text" class="form-control" name="bandarpembekal" id="bandarpembekal"
                                    aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="negeripembekal">Negeri</label>
                                <select class="form-control custom-select" name="negeripembekal" id="negeripembekal">
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
    <!-- Modal Tambah Kategori Penyakit-->
    <div class="modal fade" id="tambahketegoripenyakit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Kategori Penyakit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#" method="post" id="SubmitFormKatagori" autocomplete="off">
                    <div class="modal-body">
                        <div class="container-fluid">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="ktpenyakit">Kategori Penyakit</label>
                                <input type="text" class="form-control" name="ktpenyakit" id="ktpenyakit"
                                    placeholder="Kategori Penyakit" required>
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
@section('script')
    <script>
        fetchpenyakit();
        fetchhospitalklinik();
        fetchpembekal();

        function fetchpenyakit() {
            $.ajax({
                type: "GET",
                url: "{{ route('fetchpenyakit') }}",
                dataType: "json",
                success: function(response) {
                    $('#kategoripenyakit').html("");
                    $.each(response.penyakit, function(key, item) {
                        $('#kategoripenyakit').append('<option value="' + item.kategori + '" >' + item
                            .kategori + '</option>');

                    });
                }
            });
        }

         //senarai hospital kerajaan
         function fetchhospitalklinik() {
            $.ajax({
                type: "GET",
                url: "{{ route('fetchhospitalklinik') }}",
                dataType: "json",
                success: function(response) {
                    $('#namaHospital').html("");
                    $.each(response.hospital, function(key, item) {
                        $('#namaHospital').append('<option value="' + item.idHospital + '" >' + item.namaHospital + '</option>');
                    });

                    $('#alamat1Hospital').html("");
                    $.each(response.hospital, function(key, item) {
                        $('#alamat1Hospital').append('<option value="' + item.idHospital + '" >' + item.alamatHospital + '</option>');
                    });

                    $('#alamat21Hospital').html("");
                    $.each(response.hospital, function(key, item) {
                        $('#alamat21Hospital').append('<option value="' + item.idHospital + '" >' + item.alamat2 + '</option>');
                    });

                    $('#alamat31Hospital').html("");
                    $.each(response.hospital, function(key, item) {
                        $('#alamat31Hospital').append('<option value="' + item.idHospital + '" >' + item.alamat3 + '</option>');
                    });

                    $('#bandar1hospital').html("");
                    $.each(response.hospital, function(key, item) {
                        $('#bandar1hospital').append('<option value="' + item.idHospital + '" >' + item.bandar + '</option>');
                    });

                    $('#poskod1hospital').html("");
                    $.each(response.hospital, function(key, item) {
                        $('#poskod1hospital').append('<option value="' + item.idHospital + '" >' + item.poskod + '</option>');
                    });

                    $('#negeri1hospital').html("");
                    $.each(response.hospital, function(key, item) {
                        $('#negeri1hospital').append('<option value="' + item.idHospital + '" >' + item.negeri + '</option>');
                    });
                }
            });
        }

         //senarai pembekal
        function fetchpembekal() {
            $.ajax({
                type: "GET",
                url: "{{ route('fetchpembekal') }}",
                dataType: "json",
                success: function(response) {
                    $('#namaPembekal').html("");
                    $.each(response.pembekal, function(key, item) {
                        $('#namaPembekal').append('<option value="' + item.idPembekal + '" >' + item.namaPembekal + '</option>');
                     });

                    $('#alamat_pembekal').html("");
                    $.each(response.pembekal, function(key, item) {
                        $('#alamat_pembekal').append('<option value="' + item.idPembekal + '" >' + item.alamatPembekal + '</option>');
                     });

                    $('#alamat2_pembekal').html("");
                    $.each(response.pembekal, function(key, item) {
                        $('#alamat2_pembekal').append('<option value="' + item.idPembekal + '" >' + item.alamat2 + '</option>');
                    });

                    $('#alamat3_pembekal').html("");
                    $.each(response.pembekal, function(key, item) {
                        $('#alamat3_pembekal').append('<option value="' + item.idPembekal + '" >' + item.alamat3 + '</option>');
                    });

                    $('#bandar_pembekal').html("");
                    $.each(response.pembekal, function(key, item) {
                        $('#bandar_pembekal').append('<option value="' + item.idPembekal + '" >' + item.bandar + '</option>');
                    });

                    $('#poskod_pembekal').html("");
                    $.each(response.pembekal, function(key, item) {
                        $('#poskod_pembekal').append('<option value="' + item.idPembekal + '" >' + item.poskod + '</option>');
                    });

                    $('#negeri_pembekal').html("");
                    $.each(response.pembekal, function(key, item) {
                        $('#negeri_pembekal').append('<option value="' + item.idPembekal + '" >' + item.negeri + '</option>');
                    });
                }
            });
        }

        $('#SubmitFormKatagori').on('submit', function(e) {
            e.preventDefault();

            let ktpenyakit = $('#ktpenyakit').val();

            $.ajax({
                url: "{{ route('tambah-kategori') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    ktpenyakit: ktpenyakit,

                },
                success: function(response) {
                    $('#successMsg').show();
                    $('#tambahketegoripenyakit').modal('toggle');
                    fetchpenyakit();
                    // console.log(response);
                },
                error: function(response) {
                    // $('#ktpenyakitErrorMsg').text(response.responseJSON.errors.ktpenyakit);
                    // $('#emailErrorMsg').text(response.responseJSON.errors.email);
                    // $('#mobileErrorMsg').text(response.responseJSON.errors.mobile);
                    // $('#messageErrorMsg').text(response.responseJSON.errors.message);
                },
            });
        });

        $('#SubmitFormHospital').on('submit', function(e) {
            e.preventDefault();

            let namahospital = $('#namahospital').val();
            let alamathospital = $('#alamathospital').val();
            let alamat2 = $('#alamathospital2').val();
            let alamat3 = $('#alamathospital3').val();
            let poskod = $('#poskodhospital').val();
            let bandar = $('#bandarhospital').val();
            let negeri = $('#negerihospital').val();

            $.ajax({
                url: "{{ route('tambah-hospital') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    namahospital: namahospital,
                    alamathospital: alamathospital,
                    alamat2: alamat2,
                    alamat3: alamat3,
                    poskod: poskod,
                    bandar: bandar,
                    negeri: negeri,

                },
                success: function(response) {
                    $('#successMsgHsptl').show();
                    $('#tambahhospital').modal('toggle');
                    fetchhospitalklinik();
                    // console.log(response);
                },
                error: function(response) {
                    // $('#ktpenyakitErrorMsg').text(response.responseJSON.errors.ktpenyakit);
                    // $('#emailErrorMsg').text(response.responseJSON.errors.email);
                    // $('#mobileErrorMsg').text(response.responseJSON.errors.mobile);
                    // $('#messageErrorMsg').text(response.responseJSON.errors.message);
                },
            });
        });

        $('#SubmitFormPembekal').on('submit', function(e) {
            e.preventDefault();

            let namaPembekal = $('#namapembekal').val();
            let alamatPembekal = $('#alamatpembekal').val();
            let alamat2 = $('#alamatpembekal2').val();
            let alamat3 = $('#alamatpembekal3').val();
            let poskod = $('#poskodpembekal').val();
            let bandar = $('#bandarpembekal').val();
            let negeri = $('#negeripembekal').val();

            $.ajax({
                url: "{{ route('tambah-pembekal') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    namaPembekal: namaPembekal,
                    alamatPembekal: alamatPembekal,
                    alamat2: alamat2,
                    alamat3: alamat3,
                    poskod: poskod,
                    bandar: bandar,
                    negeri: negeri,

                },
                success: function(response) {
                    $('#successMsgPmbkl').show();
                    $('#tambahpembekal').modal('toggle');
                    fetchpembekal();
                    // console.log(response);
                },
                error: function(response) {
                    // $('#ktpenyakitErrorMsg').text(response.responseJSON.errors.ktpenyakit);
                    // $('#emailErrorMsg').text(response.responseJSON.errors.email);
                    // $('#mobileErrorMsg').text(response.responseJSON.errors.mobile);
                    // $('#messageErrorMsg').text(response.responseJSON.errors.message);
                },
            });
        });
    </script>
@endsection
