@extends('layouts.app', ['activePage' => 'perubatan', 'titlePage' => 'Tambah Butiran Perubatan'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h3 class="card-title">Butiran Perubatan</h3>
                </div>
                @foreach ($peribadi as $wrs)
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Peribadi</h4>
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
                        <br>
                        <hr>
                        <form method="POST" action="{{ url('tambahperubatan') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $wrs->idPeribadi }}">
                            {{-- <input type="text" name="idPesara" value="{{ $wrs->idPesara }}"> --}}
                            <div class="row">
                                <div class="col-md-6"><br>
                                    <h4 class="card-title">Rawatan Di Hospital/ Klinik Kerajaan </h4>
                                    <div class="form-group">
                                        <label for="hospital">Nama Hospital/Klinik Kerajaan</label> 
                                        <button type="button"  class="btn btn-primary btn-sm" 
                                            data-toggle="modal" data-target="#tambahhospital">
                                            <span class="material-icons"> add </span>
                                        </button>
                                        {{-- <button type="button"
                                            class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#kemaskinipembekal">
                                            <span class="material-icons"> edit </span>
                                        </button> --}}
                                        <select class="custom-select select2" name="hospital" id="namaHospital">
                                            <option value="">SILA PILIH</option>
                                            @foreach ($hospital as $hptl)
                                                <option value="{{ $hptl->idHospital }}">{{ $hptl->namaHospital }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <select class="alamatHospital custom-select" name="alamat" id="alamat" disabled>
                                            @foreach ($hospital as $h)
                                                <option value="{{ $h->idHospital }}">{{ $h->alamatHospital }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat2">Alamat 2</label>
                                        <select class="alamatHospital custom-select" name="alamat2" id="alamat2" disabled>
                                            @foreach ($hospital as $h)
                                                <option value="{{ $h->idHospital }}">
                                                    {{ $h->alamat2 }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat3">Alamat 3</label>
                                        <select class="alamatHospital custom-select" name="alamat3" id="alamat3" disabled>
                                            @foreach ($hospital as $h)
                                                <option value="{{ $h->idHospital }}">
                                                    {{ $h->alamat3 }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="bandar">Bandar</label>
                                        <select class="alamatHospital custom-select" name="bandar" id="bandar" disabled>
                                            @foreach ($hospital as $h)
                                                <option value="{{ $h->idHospital }}">
                                                    {{ $h->bandar }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="poskod">Poskod</label>
                                        <select class="alamatHospital custom-select" name="poskod" id="poskod" disabled>
                                            @foreach ($hospital as $h)
                                                <option value="{{ $h->idHospital }}">
                                                    {{ $h->poskod }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="negeri">Negeri</label>
                                        <select class="alamatHospital custom-select" name="negeri" id="negeri" disabled>
                                            @foreach ($hospital as $h)
                                                <option value="{{ $h->idHospital }}">
                                                    {{ $h->negeri }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tarikhRawatan">Tarikh Rawatan</label>
                                        <input type="date" name="tarikhRawatan" class="form-control" value="">
                                    </div>

                                </div>
                                <div class="col-md-6"><br>
                                    <h4 class="card-title">Pembekal Kemudahan Perubatan</h4>
                                    <div class="form-group">
                                        <label for="pembekal">Nama Hospital/ Agensi Swasta</label>
                                        <button type="button"
                                            class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#tambahpembekal">
                                            <span class="material-icons"> add </span>
                                        </button>
                                        {{-- <button type="button"
                                            class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#kemaskinipembekal">
                                            <span class="material-icons"> edit </span>
                                        </button> --}}
                                        <select class="alamatPembekal custom-select select2" name="pembekal"
                                            id="namaPembekal">
                                            <option value="">SILA PILIH</option>
                                            @foreach ($pembekal as $pmbkl)
                                                <option value="{{ $pmbkl->idPembekal }}">
                                                    {{ $pmbkl->namaPembekal }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_pembekal">Alamat</label>
                                        <select class="alamatPembekal custom-select" name="alamat_pembekal"
                                            id="alamat_pembekal" disabled>
                                            @foreach ($pembekal as $pmbkl)
                                                <option value="{{ $pmbkl->idPembekal }}">
                                                    {{ $pmbkl->alamatPembekal }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat2_pembekal">Alamat 2</label>
                                        <select class="alamatPembekal custom-select" name="alamat2_pembekal"
                                            id="alamat2_pembekal" disabled>
                                            @foreach ($pembekal as $pmbkl)
                                                <option value="{{ $pmbkl->idPembekal }}">
                                                    {{ $pmbkl->alamat2 }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat3_pembekal">Alamat 3</label>
                                        <select class="alamatPembekal custom-select" name="alamat3_pembekal"
                                            id="alamat3_pembekal" disabled>
                                            @foreach ($pembekal as $pmbkl)
                                                <option value="{{ $pmbkl->idPembekal }}">
                                                    {{ $pmbkl->alamat3 }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="bandar_pembekal">Bandar</label>
                                        <select class="alamatPembekal custom-select" name="bandar_pembekal"
                                            id="bandar_pembekal" disabled>
                                            @foreach ($pembekal as $pmbkl)
                                                <option value="{{ $pmbkl->idPembekal }}">
                                                    {{ $pmbkl->bandar }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="poskod_pembekal">Poskod</label>
                                        <select class="alamatPembekal custom-select" name="poskod_pembekal"
                                            id="poskod_pembekal" disabled>
                                            @foreach ($pembekal as $pmbkl)
                                                <option value="{{ $pmbkl->idPembekal }}">
                                                    {{ $pmbkl->poskod }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="negeri_pembekal">Negeri</label>
                                        <select class="alamatPembekal custom-select" name="negeri_pembekal"
                                            id="negeri_pembekal" disabled>
                                            @foreach ($pembekal as $pmbkl)
                                                <option value="{{ $pmbkl->idPembekal }}">
                                                    {{ $pmbkl->negeri }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tarikhKemudahanPerubatanDiperolehi">Tarikh Kemudahan Perubatan
                                            Diperoleh</label>
                                        <input type="date" name="tarikhKemudahanPerubatanDiperolehi" class="form-control"
                                            value="">
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
                                    <div class="form-group">
                                        <label for="namaubat">Nama Ubat/Alat/Perkhidmatan Perubatan/ Rawatan</label>
                                        <input type="text" class="form-control" name="namaubat" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="baucer">No Baucer</label>
                                        <input type="text" class="form-control" name="baucer" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="hargatuntutan">Harga Tuntuan (RM)</label>
                                        <input type="text" class="form-control" name="hargatuntutan" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="hargalulus">Harga Diluluskan (RM)</label>
                                        <input type="text" class="form-control" name="hargalulus" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="tarikh_lulus">Tarikh Kelulusan</label>
                                        <input type="date" class="form-control" name="tarikh_lulus" value="">
                                    </div>
                                </div>
                                <div class="col-md-6"><br>
                                    <h4 class="card-title">Maklumat Tambahan</h4>
                                    <div class="form-group">
                                        <label for="jenisPermohonan">Jenis Permohonan</label>
                                        <select class="custom-select select2" name="jenisPermohonan" id="jenisPermohonan">
                                            <option value="">SILA PILIH</option>
                                            <option value="Permohonan Pembelanjaan">Permohonan Pembelanjaan</option>
                                            <option value="Pembiayaan Rawatan">Pembiayaan Rawatan</option>
                                            <option value="Tuntutan Bayaran Balik">Tuntutan Bayaran Balik</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tarikh_terima_permohonan">Tarikh Terima Permohonan</label>
                                        <input type="date" class="form-control" name="tarikh_terima_permohonan" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="catatan_permohonan">Catatan Permohonan</label>
                                        <textarea class="form-control" name="catatan_permohonan" id="catatan_permohonan"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="nofail">No Fail</label>
                                        <input type="text" name="nofail" class="form-control" value="">
                                    </div>
                                </div>
                                <hr><br>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a name="" id="" class="btn btn-danger" href="{{ url()->previous() }}"
                                        role="button">Batal</a>
                                </div>
                            </div>
                        </form>
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
                                    aria-describedby="helpId" placeholder="Nama Hospital/Klinik Kerajaan">
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
