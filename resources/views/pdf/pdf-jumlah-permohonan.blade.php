<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
        <table class="table table-bordered table-sm break-page">
            <thead style="text-transform: uppercase">
                <tr class="text-center">
                    <th style="width: 16%"></th>
                    <th style="width: 16%; vertical-align:middle;"><strong>Ubatan</strong> </strong></th>
                    <th style="width: 16%; vertical-align:middle;"><strong>Peralatan </strong></th>
                    <th style="width: 16%; vertical-align:middle;"><strong>Rawatan Jantung (IJN) </strong></th>
                    <th style="width: 16%; vertical-align:middle;"><strong>Rawatan Heamodialisis </strong></th>
                    <th style="width: 16%; vertical-align:middle;"><strong>Jumlah </strong></th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td scope="row">Bawah 30</td>
                    <td>
                        @foreach ($jumlahumurjenisb30k18 as $jjub30)
                            {{ $jjub30->jumlah }}
                        @endforeach
                    </td>
                    <td>
                        @foreach ($jumlahumurjenisb30k2 as $jjub30)
                            {{ $jjub30->jumlah }}
                        @endforeach
                    </td>
                    <td>
                        @foreach ($jumlahumurjenisb30 as $jjub30)
                            @if ($jjub30->idKategoriTuntutan == '12')
                                {{ $jjub30->bil }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($jumlahumurjenisb30 as $jjub30)
                            @if ($jjub30->idKategoriTuntutan == '13')
                                {{ $jjub30->bil }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($umurk30 as $k30)
                            {{ $k30->bil }}
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">30 - 39</td>
                    <td>
                        @foreach ($jumlahumurjenis30k18 as $jju30)
                            {{ $jju30->jumlah }}
                        @endforeach
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis30k2 as $jju30)
                            {{ $jju30->jumlah }}
                        @endforeach
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis30 as $jju30)
                            @if ($jju30->idKategoriTuntutan == '12')
                                {{ $jju30->bil }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis30 as $jju30)
                            @if ($jju30->idKategoriTuntutan == '13')
                                {{ $jju30->bil }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($umurk3039 as $k3039)
                            {{ $k3039->bil }}
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">40 - 49</td>
                    <td>
                        @foreach ($jumlahumurjenis40k18 as $jju40)
                            {{ $jju40->jumlah }}
                        @endforeach
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis40k2 as $jju40)
                            {{ $jju40->jumlah }}
                        @endforeach
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis40 as $jju40)
                            @if ($jju40->idKategoriTuntutan == '12')
                                {{ $jju40->bil }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis40 as $jju40)
                            @if ($jju40->idKategoriTuntutan == '13')
                                {{ $jju40->bil }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($umurk4049 as $k4049)
                            {{ $k4049->bil }}
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">50 - 59</td>
                    <td>
                        @foreach ($jumlahumurjenis50k18 as $jju50)
                            {{ $jju50->jumlah }}
                        @endforeach
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis50k2 as $jju50)
                            {{ $jju50->jumlah }}
                        @endforeach
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis50 as $jju50)
                            @if ($jju50->idKategoriTuntutan == '12')
                                {{ $jju50->bil }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis50 as $jju50)
                            @if ($jju50->idKategoriTuntutan == '13')
                                {{ $jju50->bil }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($umurk5059 as $k5059)
                            {{ $k5059->bil }}
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">60 dan Ke Atas</td>
                    <td>
                        @foreach ($jumlahumurjenis60k18 as $jju60)
                            {{ $jju60->jumlah }}
                        @endforeach
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis60k2 as $jju60)
                            {{ $jju60->jumlah }}
                        @endforeach
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis60 as $jju60)
                            @if ($jju60->idKategoriTuntutan == '12')
                                {{ $jju60->bil }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($jumlahumurjenis60 as $jju60)
                            @if ($jju60->idKategoriTuntutan == '13')
                                {{ $jju60->bil }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($umura60 as $k60)
                            {{ $k60->bil }}
                        @endforeach
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="text-center">
                    <th scope="row">Jumlah</th>
                    <th>
                        @foreach ($bilpermohonan18 as $alat)
                            {{ $alat->jumlah }}
                        @endforeach
                    </th>
                    <th>
                        @foreach ($bilpermohonan2 as $alat)
                            {{ $alat->jumlah }}
                        @endforeach
                    </th>
                    <th>
                        @foreach ($bilpermohonan as $ijn)
                            @if ($ijn->id_kategori == '12')
                                {{ $ijn->jumlah }}
                            @endif
                        @endforeach
                    </th>
                    <th>
                        @foreach ($bilpermohonan as $heamo)
                            @if ($heamo->id_kategori == '13')
                                {{ $heamo->jumlah }}
                            @endif
                        @endforeach
                    </th>
                    <th>
                        @foreach ($jumlahpermohonan as $jumlah)
                            {{ $jumlah->jumlah }}
                        @endforeach
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
