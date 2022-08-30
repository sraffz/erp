<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Pengurusan Rawatan Perubatan</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
    .table thead th {
        background-color: #227292;
        color: white;
        font-size: 13px;
    }

    .table tfoot th {
        font-size: 13px;
    }

    .table tbody td {
        font-size: 12px;
        font-weight: bold;
    }

    .page-break {
        page-break-after: always;
    }

</style>

<body>
    <div>
        <div class="text-center">
            <h4><strong>JUMLAH PERMOHONAN MENGIKUT JENIS PERMOHONAN BAGI TAHUN {{ $id }}</strong></h4>
        </div>
        <br>
        <table class="table table-bordered table-sm break-page">
            <thead class="thead-success">
                <tr class="text-center">
                    <th style="width: 50%">JENIS PERMOHONAN</th>
                    <th>BILANGAN</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td scope="row">Ubatan</td>
                    <td>
                        @foreach ($bilpermohonan18 as $alat)
                            {{ $alat->jumlah }}
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">Peralatan</td>
                    <td>
                        @foreach ($bilpermohonan2 as $alat)
                            {{ $alat->jumlah }}
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">Rawatan Jantung (IJN)</td>
                    <td>
                        @foreach ($bilpermohonan as $jantung)
                            @if ($jantung->id_kategori == '12')
                                {{ $jantung->jumlah }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">Rawatan Heamodialisis</td>
                    <td>
                        @foreach ($bilpermohonan as $heamo)
                            @if ($heamo->id_kategori == '13')
                                {{ $heamo->jumlah }}
                            @endif
                        @endforeach
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th class="text-right">JUMLAH KESELURUHAN</th>
                    <th class="text-center">
                        @foreach ($jumlahpermohonan as $jumlah)
                            {{ $jumlah->jumlah }}
                        @endforeach
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="page-break"></div>

    <div>
        <div class="text-center">
            <h4><strong>JUMLAH PERMOHONAN MENGIKUT UMUR BAGI TAHUN {{ $id }}</strong></h4>
        </div>
        <br>
        <table class="table table-bordered table-sm break-page">
            <thead>
                <tr class="text-center">
                    <th style="width: 50%"><strong>PERINGKAT UMUR</strong></th>
                    <th><strong>BILANGAN</strong></th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td scope="row">Bawah 30</td>
                    <td>
                        @foreach ($umurk30 as $k30)
                            {{ $k30->bil }}
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">30 - 39</td>
                    <td>
                        @foreach ($umurk3039 as $k3039)
                            {{ $k3039->bil }}
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">40 - 49</td>
                    <td>
                        @foreach ($umurk4049 as $k4049)
                            {{ $k4049->bil }}
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">50 - 59</td>
                    <td>
                        @foreach ($umurk5059 as $k5059)
                            {{ $k5059->bil }}
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">60 dan Ke Atas</td>
                    <td>
                        @foreach ($umura60 as $k60)
                            {{ $k60->bil }}
                        @endforeach
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th class="text-right">JUMLAH KESELURUHAN</th>
                    <th class="text-center">
                        @foreach ($tahunumur as $total)
                            {{ $total->bil }}
                        @endforeach
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="page-break"></div>

    <div>
        <div class="text-center">
            <h4><strong>JUMLAH PERMOHONAN MENGIKUT UMUR DAN JENIS PERMOHONAN BAGI TAHUN {{ $id }}</strong>
            </h4>
        </div>
        <br>
        <table class="table table-sm table-bordered">
            <thead>
                <tr class="text-center">
                    <th style="width: 15%"></th>
                    <th style="width: 15%"><strong>Ubatan</strong> </strong></th>
                    <th style="width: 15%"><strong>Peralatan </strong></th>
                    <th style="width: 15%"><strong>Rawatan Kepakaran</strong></th>
                    <th style="width: 15%"><strong>Rawatan Jantung (IJN) </strong></th>
                    <th style="width: 15%"><strong>Rawatan Heamodialisis </strong></th>
                    <th style="width: 15%"><strong>Jumlah </strong></th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    @php
                        $jumlah_ubatan_b30 = 0;
                        $jumlah_peralatan_b30 = 0;
                        $jumlah_rawatan_pakar_b30 = 0;
                        $jumlah_ijn_b30 = 0;
                        $jumlah_buah_pinggang_b30 = 0;
                        $jumlah_30 = 0;
                    @endphp
                    <td scope="row">Bawah 30</td>
                    <td>
                        @foreach ($jumlahumurjenisb30 as $jjub30)
                            @if ($jjub30->idKategoriTuntutan == '01')
                                @php
                                    $jumlah_ubatan_b30 = $jumlah_ubatan_b30 + $jjub30->bil;
                                @endphp
                            @endif
                        @endforeach
                        {{ $jumlah_ubatan_b30 }}
                    </td>
                    <td>
                        @foreach ($jumlahumurjenisb30k2 as $jjub30)
                            @php
                                $jumlah_peralatan_b30 = $jumlah_peralatan_b30 + $jjub30->jumlah;
                                
                            @endphp
                        @endforeach
                        {{ $jumlah_peralatan_b30 }}
                    </td>
                    <td>
                        @foreach ($jumlahumurjenisb30 as $jjub30)
                            @if ($jjub30->idKategoriTuntutan == '11' || $jjub30->idKategoriTuntutan == '10')
                                @php
                                    $jumlah_rawatan_pakar_b30 = $jumlah_rawatan_pakar_b30 + $jjub30->bil;
                                @endphp
                            @endif
                        @endforeach
                        {{ $jumlah_rawatan_pakar_b30 }}
                    </td>
                    <td>
                        @foreach ($jumlahumurjenisb30 as $jjub30)
                            @if ($jjub30->idKategoriTuntutan == '12')
                                @php
                                    $jumlah_ijn_b30 = $jumlah_ijn_b30 + $jjub30->bil;
                                    
                                @endphp
                            @endif
                        @endforeach
                        {{ $jumlah_ijn_b30 }}
                    </td>
                    <td>
                        @foreach ($jumlahumurjenisb30 as $jjub30)
                            @if ($jjub30->idKategoriTuntutan == '13' || $jjub30->idKategoriTuntutan == '09')
                                @php
                                    $jumlah_buah_pinggang_b30 = $jumlah_buah_pinggang_b30 + $jjub30->bil;
                                @endphp
                            @endif
                        @endforeach
                        {{ $jumlah_buah_pinggang_b30 }}
                    </td>
                    <td>
                        @foreach ($umurk30 as $k30)
                            @php
                                $jumlah_30 = $jumlah_30 + $k30->bil;
                            @endphp
                        @endforeach
                        {{ $jumlah_30 }}
                    </td>
                </tr>
                <tr class="text-center">
                    @php
                        $jumlah_ubatan_3039 = 0;
                        $jumlah_peralatan_3039 = 0;
                        $jumlah_rawatan_pakar_3039 = 0;
                        $jumlah_ijn_3039 = 0;
                        $jumlah_buah_pinggang_3039 = 0;
                        $jumlah_3039 = 0;
                    @endphp
                    <td scope="row">30 - 39</td>
                    <td>
                        @foreach ($jumlahumurjenis30k18 as $jju30)
                            @php
                                $jumlah_ubatan_3039 = $jumlah_ubatan_3039 + $jju30->jumlah;
                            @endphp
                        @endforeach
                        {{ $jumlah_ubatan_3039 }}
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis30k2 as $jju30)
                            @php
                                $jumlah_peralatan_3039 = $jumlah_peralatan_3039 + $jju30->jumlah;
                            @endphp
                        @endforeach
                        {{ $jumlah_peralatan_3039 }}
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis30 as $jju30)
                            @if ($jju30->idKategoriTuntutan == '11')
                                @php
                                    $jumlah_rawatan_pakar_3039 = $jumlah_rawatan_pakar_3039 + $jju30->bil;
                                @endphp
                            @endif
                        @endforeach
                        {{ $jumlah_rawatan_pakar_3039 }}
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis30 as $jju30)
                            @if ($jju30->idKategoriTuntutan == '12')
                                @php
                                    $jumlah_ijn_3039 = $jumlah_ijn_3039 + $jju30->bil;
                                @endphp
                            @endif
                        @endforeach
                        {{ $jumlah_ijn_3039 }}
                    </td>
                    <td>
                        @php
                            $jumlah_buah_pinggang_3039 = 0;
                        @endphp
                        @foreach ($jumlahumurjenis30 as $jju30)
                            @if ($jju30->idKategoriTuntutan == '13' || $jju30->idKategoriTuntutan == '09')
                                @php
                                    $jumlah_buah_pinggang_3039 = $jumlah_buah_pinggang_3039 + $jju30->bil;
                                @endphp
                            @endif
                        @endforeach
                        {{ $jumlah_buah_pinggang_3039 }}
                    </td>
                    <td>
                        @foreach ($umurk3039 as $k3039)
                            @php
                                $jumlah_3039 = $jumlah_3039 + $k3039->bil;
                            @endphp
                        @endforeach
                        {{ $jumlah_3039 }}
                    </td>
                </tr>
                <tr class="text-center">
                    @php
                        $jumlah_ubatan_4049 = 0;
                        $jumlah_peralatan_4049 = 0;
                        $jumlah_rawatan_pakar_4049 = 0;
                        $jumlah_ijn_4049 = 0;
                        $jumlah_buah_pinggang_4049 = 0;
                        $jumlah_4049 = 0;
                    @endphp
                    <td scope="row">40 - 49</td>
                    <td>
                        @foreach ($jumlahumurjenis40k18 as $jju40)
                            @php
                                $jumlah_ubatan_4049 = $jumlah_ubatan_4049 + $jju40->jumlah;
                            @endphp
                        @endforeach
                        {{ $jumlah_ubatan_4049 }}
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis40k2 as $jju40)
                            @php
                                $jumlah_peralatan_4049 = $jumlah_peralatan_4049 + $jju40->jumlah;
                            @endphp
                        @endforeach
                        {{ $jumlah_peralatan_4049 }}
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis40 as $jju40)
                            @if ($jju40->idKategoriTuntutan == '11')
                                @php
                                    $jumlah_rawatan_pakar_4049 = $jumlah_rawatan_pakar_4049 + $jju40->bil;
                                @endphp
                            @endif
                        @endforeach
                        {{ $jumlah_rawatan_pakar_4049 }}
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis40 as $jju40)
                            @if ($jju40->idKategoriTuntutan == '12')
                                @php
                                    $jumlah_ijn_4049 = $jumlah_ijn_4049 + $jju40->bil;
                                @endphp
                            @endif
                        @endforeach
                        {{ $jumlah_ijn_4049 }}
                    </td>
                    <td>
                        @php
                            $jumlah_buah_pinggang_4049 = 0;
                        @endphp
                        @foreach ($jumlahumurjenis40 as $jju40)
                            @if ($jju40->idKategoriTuntutan == '13' || $jju40->idKategoriTuntutan == '09')
                                @php
                                    $jumlah_buah_pinggang_4049 = $jumlah_buah_pinggang_4049 + $jju40->bil;
                                @endphp
                            @endif
                        @endforeach
                        {{ $jumlah_buah_pinggang_4049 }}
                    </td>
                    <td>
                        @foreach ($umurk4049 as $k4049)
                            @php
                                $jumlah_4049 = $jumlah_4049 + $k4049->bil;
                            @endphp
                        @endforeach
                        {{ $jumlah_4049 }}
                    </td>
                </tr>
                <tr class="text-center">
                    @php
                        $jumlah_ubatan_5059 = 0;
                        $jumlah_peralatan_5059 = 0;
                        $jumlah_rawatan_pakar_5059 = 0;
                        $jumlah_ijn_5059 = 0;
                        $jumlah_buah_pinggang_5059 = 0;
                        $jumlah_5059 = 0;
                    @endphp
                    <td scope="row">50 - 59</td>
                    <td>
                        @foreach ($jumlahumurjenis50k18 as $jju50)
                            @php
                                $jumlah_ubatan_5059 = $jumlah_ubatan_5059 + $jju50->jumlah;
                            @endphp
                        @endforeach
                        {{ $jumlah_ubatan_5059 }}
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis50k2 as $jju50)
                            @php
                                $jumlah_peralatan_5059 = $jumlah_peralatan_5059 + $jju50->jumlah;
                            @endphp
                        @endforeach
                        {{ $jumlah_peralatan_5059 }}
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis50 as $jju50)
                            @if ($jju50->idKategoriTuntutan == '11')
                                @php
                                    $jumlah_rawatan_pakar_5059 = $jumlah_rawatan_pakar_5059 + $jju50->bil;
                                @endphp
                            @endif
                        @endforeach
                        {{ $jumlah_rawatan_pakar_5059 }}
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis50 as $jju50)
                            @if ($jju50->idKategoriTuntutan == '12')
                                @php
                                    $jumlah_ijn_5059 = $jumlah_ijn_5059 + $jju50->bil;
                                @endphp
                            @endif
                        @endforeach
                        {{ $jumlah_ijn_5059 }}
                    </td>
                    <td>
                        @php
                            $jumlah_buah_pinggang_5059 = 0;
                        @endphp
                        @foreach ($jumlahumurjenis50 as $jju50)
                            @if ($jju50->idKategoriTuntutan == '13' || $jju50->idKategoriTuntutan == '09')
                                @php
                                    $jumlah_buah_pinggang_5059 = $jumlah_buah_pinggang_5059 + $jju50->bil;
                                @endphp
                            @endif
                        @endforeach
                        {{ $jumlah_buah_pinggang_5059 }}
                    </td>
                    <td>
                        @foreach ($umurk5059 as $k5059)
                            @php
                                $jumlah_5059 = $jumlah_5059 + $k5059->bil;
                            @endphp
                        @endforeach
                        {{ $jumlah_5059 }}
                    </td>
                </tr>

                <tr class="text-center">
                    @php
                        $jumlah_ubatan_60 = 0;
                        $jumlah_peralatan_60 = 0;
                        $jumlah_rawatan_pakar_60 = 0;
                        $jumlah_ijn_60 = 0;
                        $jumlah_buah_pinggang_60 = 0;
                        $jumlah_60 = 0;
                    @endphp
                    <td scope="row">60 dan Ke Atas</td>
                    <td>
                        @foreach ($jumlahumurjenis60k18 as $jju60)
                            @php
                                $jumlah_ubatan_60 = $jumlah_ubatan_60 + $jju60->jumlah;
                            @endphp
                        @endforeach
                        {{ $jumlah_ubatan_60 }}
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis60k2 as $jju60)
                            @php
                                $jumlah_peralatan_60 = $jumlah_peralatan_60 + $jju60->jumlah;
                            @endphp
                        @endforeach
                        {{ $jumlah_peralatan_60 }}
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis60 as $jju60)
                            @if ($jju60->idKategoriTuntutan == '11')
                                @php
                                    $jumlah_rawatan_pakar_60 = $jumlah_rawatan_pakar_60 + $jju60->bil;
                                @endphp
                            @endif
                        @endforeach
                        {{ $jumlah_rawatan_pakar_60 }}
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis60 as $jju60)
                            @if ($jju60->idKategoriTuntutan == '12')
                                @php
                                    $jumlah_ijn_60 = $jumlah_ijn_60 + $jju60->bil;
                                @endphp
                            @endif
                        @endforeach
                        {{ $jumlah_ijn_60 }}
                    </td>
                    <td>
                        @php
                            $jumlah_buah_pinggang_60 = 0;
                        @endphp
                        @foreach ($jumlahumurjenis60 as $jju60)
                            @if ($jju60->idKategoriTuntutan == '13' || $jju60->idKategoriTuntutan == '09')
                                @php
                                    $jumlah_buah_pinggang_60 = $jumlah_buah_pinggang_60 + $jju60->bil;
                                @endphp
                            @endif
                        @endforeach
                        {{ $jumlah_buah_pinggang_60 }}
                    </td>
                    <td>
                        @foreach ($umura60 as $k60)
                            @php
                                $jumlah_60 = $jumlah_60 + $k60->bil;
                            @endphp
                        @endforeach
                        {{ $jumlah_60 }}
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="text-center">
                    @php
                        $j_ubat = 0;
                        $j_alat = 0;
                        $j_pakar = 0;
                        $j_ijn = 0;
                        $jumlah_hemoa = 0;
                        $total = 0;
                    @endphp
                    <th scope="row">Jumlah</th>
                    <th>
                        @foreach ($bilpermohonan18 as $alat)
                            @php
                                $j_ubat = $j_ubat + $alat->jumlah;
                            @endphp
                        @endforeach
                        {{ $j_ubat }}
                    </th>
                    <th>
                        @foreach ($bilpermohonan2 as $alat)
                            @php
                                $j_alat = $j_alat + $alat->jumlah;
                            @endphp
                        @endforeach
                        {{ $j_alat }}
                    </th>
                    <th>
                        @foreach ($bilpermohonan as $ijn)
                            @if ($ijn->id_kategori == '11')
                                @php
                                    $j_pakar = $j_pakar + $ijn->jumlah;
                                @endphp
                            @endif
                        @endforeach
                        {{ $j_pakar }}
                    </th>
                    <th>
                        @foreach ($bilpermohonan as $ijn)
                            @if ($ijn->id_kategori == '12')
                                @php
                                    $j_ijn = $j_ijn + $ijn->jumlah;
                                @endphp
                            @endif
                        @endforeach
                        {{ $j_ijn }}
                    </th>
                    <th>
                        @foreach ($bilpermohonan as $heamo)
                            @if ($heamo->id_kategori == '13' || $heamo->id_kategori == '09')
                                @php
                                    $jumlah_hemoa = $jumlah_hemoa + $heamo->jumlah;
                                @endphp
                            @endif
                        @endforeach
                        {{ $jumlah_hemoa }}
                    </th>
                    <th>
                        @foreach ($jumlahpermohonan as $jumlah)
                            @php
                                $total = $total + $jumlah->jumlah;
                            @endphp
                        @endforeach
                        {{ $total }}
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
