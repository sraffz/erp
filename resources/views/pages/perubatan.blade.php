@extends('layouts.app', ['activePage' => 'perubatan', 'titlePage' => 'Perubatan'])

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
                    <form action="{{ url('laporan') }}" id="formLaporan" name="formLaporan" method="post">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col">
                                <label for="jenisLaporan">Jenis Laporan</label>
                                <select class="custom-select" name="jenisLaporan" id="jenisLaporan" required>
                                    <option value=""></option>
                                    <option value="1">Pembelanjaan Perubatan</option>
                                    <option value="2">Jumlah Pembelanjaan Perubatan</option>
                                    <option value="3">Pembelanjaan Haemodialisis</option>
                                    <option value="4">Senarai Pesakit Haemodialisis</option>
                                </select>
                            </div>
                            <div class="col" id="divKategoriLaporan" style="display:none;">
                                <label for="kategoriLaporan">Kategori Laporan</label>
                                <select class="custom-select" name="kategoriLaporan" id="kategoriLaporan" required>
                                    <option value=""></option>
                                    <option value="1">Ubatan</option>
                                    <option value="2">Alatan</option>
                                    <option value="3">Institut Jantung Negara</option>
                                    <option value="4">Haemodialisis</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="tahunLaporan">Tahun</label>
                                <select class="custom-select" name="tahunLaporan" id="tahunLaporan" required>
                                    <option value=""></option>
                                    <?php
                                    foreach (range(date('Y'), 1950) as $value) {
                                        echo '<option value=' . $value . '>' . $value . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span12">
                                <button type="submit" class="btn btn-success btn-sm  pull-right" target="_blank">Jana
                                    Laporan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Senarai Tuntutan Perubatan</h4>
                    {{-- <p class="card-category"> Here you can manage users</p> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover text-center" id="zero_config">
                            <thead class="text-primary">
                                <tr>
                                    <th style="width: 17%">
                                        Nama Pesakit / No. KP
                                    </th>
                                    <th style="width: 12%">
                                        Status
                                    </th>
                                    <th>
                                        Jabatan Terkini
                                    </th>
                                    <th>
                                        Jenis Permohonan
                                    </th>
                                    <th>
                                        Terima Permohonan
                                    </th>
                                    <th>
                                        Surat Kelulusan
                                    </th>
                                    <th>
                                        Kos Dituntut (RM)
                                    </th>
                                    <th>
                                        Kos Diluluskan (RM)
                                    </th>
                                    <th>
                                        Catatan
                                    </th>
                                    <th>
                                        No. Fail
                                    </th>
                                    <th>
                                        Tindakan
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($perubatan as $prbtn)
                                    <tr>
                                        <th class="text-left">
                                            @if ($prbtn->nama_waris != null)
                                                {{ $prbtn->nama_waris }} <br>
                                                {{ $prbtn->ic_waris }}
                                            @else
                                                {{ $prbtn->nama }} <br>
                                                {{ $prbtn->kadPengenalan }}
                                            @endif
                                        </th>
                                        <th>
                                            @if ($prbtn->nama_waris != null)
                                                {{ $prbtn->hubungan }} kepada
                                                {{ $prbtn->nama }}
                                                (@if ($prbtn->pesara == 'Tidak')
                                                    Pegawai
                                                @else
                                                    Pesara
                                                @endif)
                                            @else
                                                @if ($prbtn->pesara == 'Tidak')
                                                    Pegawai
                                                @else
                                                    Pesara
                                                @endif
                                            @endif
                                        </th>
                                        <th>
                                            {{ $prbtn->namaJabatan }}
                                        </th>
                                        <th>
                                            {{ $prbtn->jenisPermohonan }}
                                        </th>
                                        <th>
                                            {{ \Carbon\Carbon::parse($prbtn->tarikhTerimaPermohonan)->format('d/m/Y') }}
                                        </th>
                                        <th>
                                            {{ \Carbon\Carbon::parse($prbtn->tarikhKelulusan)->format('d/m/Y') }}
                                        </th>
                                        <th>
                                            {{ $prbtn->jumlahTuntutan }}
                                        </th>
                                        <th>
                                            {{ $prbtn->jumlahSebenar }}
                                        </th>
                                        <th>
                                            {{ $prbtn->catatanPermohonan }}
                                        </th>
                                        <th>
                                            {{ $prbtn->noFail }}
                                        </th>
                                        <th class="td-actions text-center">
                                            <a rel="tooltip" class="btn btn-success"
                                                href="{{ url('butiran-perubatan', [$prbtn->idTuntutan]) }}"
                                                data-original-title="" title="">
                                                Butiran
                                                <div class="ripple-container"></div>
                                            </a>
                                        </th>
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
