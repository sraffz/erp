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
            <h4><strong>JUMLAH PERBELANJAAN RAWATAN PEGAWAI DAN PESARA BAGI TAHUN {{ $id }}</strong></h4>
        </div>
        <br>
        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <th>Bulan</th>
                    <th>Pegawai (RM)</th>
                    <th>Pesara (RM)</th>
                    <th>Jumlah (RM)</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td scope="row">JANUARI</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '1')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '1')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '1')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>

                </tr>
                <tr class="text-center">
                    <td scope="row">FEBRUARI</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '2')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '2')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '2')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">MAC</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '3')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '3')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '3')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">APRIL</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '4')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '4')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '4')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">MEI</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '5')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '5')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '5')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">JUN</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '6')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '6')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '6')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">JULAI</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '7')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '7')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '7')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">OGOS</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '8')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '8')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '8')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">SEPTEMBER</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '9')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '9')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '9')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">OKTOBER</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '10')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '10')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '10')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">NOVEMBER</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '11')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '11')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '11')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">DISEMBER</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '12')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @else
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '12')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '12')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">JUMLAH</td>
                    <td>
                        {{ number_format($jumlah_kos_pegawai, 2, '.', ',') }}
                    </td>
                    <td>
                        {{ number_format($jumlah_kos_pesara, 2, '.', ',') }}
                    </td>
                    <td>
                        @foreach ($total as $jk)
                            {{ number_format($jk->jumlah, 2, '.', ',') }}
                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
        {{-- <table class="table table-bordered table-sm break-page">
            <thead class="thead-success">
                <tr class="text-center">
                    <th style="width: 50%">BULAN</th>
                    <th>KOS (RM)</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td scope="row">JANUARI</td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '1')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">FEBRUARI</td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '2')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">MAC</td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '3')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">APRIL</td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '4')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">MEI</td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '5')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">JUN</td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '6')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">JULAI</td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '7')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">OGOS</td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '8')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">SEPTEMBER</td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '9')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">OKTOBER</td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '10')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">NOVEMBER</td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '11')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">DISEMBER</td>
                    <td>
                        @foreach ($kos_bulanan as $d)
                            @if ($d->bulan == '12')
                                {{ number_format($d->jumlah, 2, '.', ',') }}
                            @endif
                        @endforeach
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th class="text-center">JUMLAH KESELURUHAN</th>
                    <th class="text-center">
                        @foreach ($total as $t)
                            {{ number_format($t->jumlah, 2, '.', ',') }}
                        @endforeach
                    </th>
                </tr>
            </tfoot>
        </table> --}}
    </div>
    {{-- <div class="page-break"></div>
    <div>
        <div class="text-center">
            <h4><strong>JUMLAH PERBELANJAAN RAWATAN PEGAWAI BAGI TAHUN {{ $id }}</strong></h4>
        </div>
        <br>
        <table class="table table-bordered table-sm break-page">
            <thead class="thead-success">
                <tr class="text-center">
                    <th style="width: 50%">BULAN</th>
                    <th>KOS RM)</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td scope="row">JANUARI</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '1')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">FEBRUARI</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '2')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">MAC</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '3')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">APRIL</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '4')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">MEI</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '5')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">JUN</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '6')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">JULAI</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '7')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">OGOS</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '8')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">SEPTEMBER</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '9')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">OKTOBER</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '10')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">NOVEMBER</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '11')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">DISEMBER</td>
                    <td>
                        @foreach ($kos_bulanan_pegawai as $d)
                            @if ($d->bulan == '12')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th class="text-center">JUMLAH KESELURUHAN</th>
                    <th class="text-center">{{ number_format($jumlah_kos_pegawai, 2, '.', ',')  }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="page-break"></div>
    <div>
        <div class="text-center">
            <h4><strong>JUMLAH PERBELANJAAN RAWATAN PESARA BAGI TAHUN {{ $id }}</strong></h4>
        </div>
        <br>
        <table class="table table-bordered table-sm break-page">
            <thead class="thead-success">
                <tr class="text-center">
                    <th style="width: 50%">BULAN</th>
                    <th>KOS (RM)</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td scope="row">JANUARI</td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '1')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">FEBRUARI</td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '2')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">MAC</td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '3')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">APRIL</td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '4')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">MEI</td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '5')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">JUN</td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '6')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">JULAI</td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '7')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">OGOS</td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '8')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">SEPTEMBER</td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '9')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">OKTOBER</td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '10')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">NOVEMBER</td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '11')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">DISEMBER</td>
                    <td>
                        @foreach ($kos_bulanan_pesara as $d)
                            @if ($d->bulan == '12')
                                {{ number_format($d->jumlah, 2, '.', ',')  }}
                            @endif
                        @endforeach
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th class="text-center">JUMLAH KESELURUHAN</th>
                    <th class="text-center">{{ number_format($jumlah_kos_pesara, 2, '.', ',')  }}</th>
                </tr>
            </tfoot>
        </table>
    </div> --}}
    {{-- <div class="page-break"></div>
    <div>
        <div class="text-center">
            <h4><strong>JUMLAH PERBELANJAAN RAWATAN MENGIKUT JENIS PERMOHONAN BAGI TAHUN {{ $id }}</strong>
            </h4>
        </div>
        <br>
        <table class="table table-bordered table-sm break-page">
            <thead class="thead-success">
                <tr class="text-center">
                    <th style="width: 50%">JENIS PERMOHONAN</th>
                    <th>KOS</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td scope="row">Ubatan</td>
                    <td> </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">Peralatan</td>
                    <td> </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">Rawatan Jantung (IJN)</td>
                    <td> </td>
                </tr>
                <tr class="text-center">
                    <td scope="row">Rawatan Heamodialisis</td>
                    <td> </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th class="text-center">JUMLAH KESELURUHAN</th>
                    <th class="text-center">0.0</th>
                </tr>
            </tfoot>
        </table>
    </div> --}}

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
