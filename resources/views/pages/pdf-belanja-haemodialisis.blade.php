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
        font-size: 12px;
    }

    .table tfoot th {
        font-size: 12px;
    }

    .table tbody td {
        font-size: 11px;
    }

    .page-break {
        page-break-after: always;
    }

</style>

<body>
    <div class="text-center">
        <h4><strong>PERBELANJAAN RAWATAN HAEMODIALISIS BAGI TAHUN {{ $tahun }}</strong></h4>
    </div> <br>
    @foreach ($pembekal as $pmbkl)
        <div class="text-center" style="text-transform: uppercase">
            <h6><strong>{{ $pmbkl->namaPembekal }}</strong></h6>
        </div>
        <table class="table table-bordered table-sm break-page">
            <thead class="thead-success">
                <tr class="text-center">
                    <th rowspan="2" style="vertical-align: middle; width:3%;">BIL</th>
                    <th rowspan="2" style="vertical-align: middle; width:30%;">NAMA PESAKIT</th>
                    <th rowspan="2" style="vertical-align: middle; width:8%;">NO. K/P</th>
                    <th colspan="12" class="text-center" style="vertical-align: middle">KOS RAWATAN SETIAP BULAN (RM)
                    </th>
                </tr>
                <tr class="text-center">
                    <th style="width: 5%;">JAN</th>
                    <th style="width: 5%;">FEB</th>
                    <th style="width: 5%;">MAC</th>
                    <th style="width: 5%;">APR</th>
                    <th style="width: 5%;">MEI</th>
                    <th style="width: 5%;">JUN</th>
                    <th style="width: 5%;">JUL</th>
                    <th style="width: 5%;">OGS</th>
                    <th style="width: 5%;">SEP</th>
                    <th style="width: 5%;">OKT</th>
                    <th style="width: 5%;">NOV</th>
                    <th style="width: 5%;">DIS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($belanja as $index => $bi)
                    @if ($pmbkl->idPembekal == $bi->idPembekal)
                        <tr class="text-center">
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td class="text-left">
                                @if ($bi->nama_waris != null)
                                    {{ $bi->nama_waris }}
                                @else
                                    {{ $bi->nama }}
                                @endif
                            </td>
                            <td class="text-center">
                                @if ($bi->nama_waris != null)
                                    {{ $bi->kp_waris }}
                                @else
                                    {{ $bi->kadPengenalan }}
                                @endif
                            </td>
                            <td>
                                @if ($bi->bulan == 1)
                                    {{ $bi->jumlahSebenar }}
                                @else

                                @endif
                            </td>
                            <td>
                                @if ($bi->bulan == 2)
                                    {{ $bi->jumlahSebenar }}
                                @else

                                @endif
                            </td>
                            <td>
                                @if ($bi->bulan == 3)
                                    {{ $bi->jumlahSebenar }}
                                @else

                                @endif
                            </td>
                            <td>
                                @if ($bi->bulan == 4)
                                    {{ $bi->jumlahSebenar }}
                                @else

                                @endif
                            </td>
                            <td>
                                @if ($bi->bulan == 5)
                                    {{ $bi->jumlahSebenar }}
                                @else

                                @endif
                            </td>
                            <td>
                                @if ($bi->bulan == 6)
                                    {{ $bi->jumlahSebenar }}
                                @else

                                @endif
                            </td>
                            <td>
                                @if ($bi->bulan == 7)
                                    {{ $bi->jumlahSebenar }}
                                @else

                                @endif
                            </td>
                            <td>
                                @if ($bi->bulan == 8)
                                    {{ $bi->jumlahSebenar }}
                                @else

                                @endif
                            </td>
                            <td>
                                @if ($bi->bulan == 9)
                                    {{ $bi->jumlahSebenar }}
                                @else

                                @endif
                            </td>
                            <td>
                                @if ($bi->bulan == 10)
                                    {{ $bi->jumlahSebenar }}
                                @else

                                @endif
                            </td>
                            <td>
                                @if ($bi->bulan == 11)
                                    {{ $bi->jumlahSebenar }}
                                @else

                                @endif
                            </td>
                            <td>
                                @if ($bi->bulan == 12)
                                    {{ $bi->jumlahSebenar }}
                                @else

                                @endif
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
            <tfoot>
                @foreach ($bulanan as $blnn)
                    @if ($pmbkl->idPembekal == $blnn->idPembekal)
                        <tr class="text-center">
                            <th colspan="3">JUMLAH</th>
                            <th>
                                @if ($blnn->bulan == 1)
                                    {{ $blnn->jumlah }}
                                @else
                                    0.00
                                @endif
                            </th>
                            <th>
                                @if ($blnn->bulan == 2)
                                    {{ $blnn->jumlah }}
                                @else
                                    0.00
                                @endif
                            </th>
                            <th>
                                @if ($blnn->bulan == 3)
                                    {{ $blnn->jumlah }}
                                @else
                                    0.00
                                @endif
                            </th>
                            <th>
                                @if ($blnn->bulan == 4)
                                    {{ $blnn->jumlah }}
                                @else
                                    0.00
                                @endif
                            </th>
                            <th>
                                @if ($blnn->bulan == 5)
                                    {{ $blnn->jumlah }}
                                @else
                                    0.00
                                @endif
                            </th>
                            <th>
                                @if ($blnn->bulan == 6)
                                    {{ $blnn->jumlah }}
                                @else
                                    0.00
                                @endif
                            </th>
                            <th>
                                @if ($blnn->bulan == 7)
                                    {{ $blnn->jumlah }}
                                @else
                                    0.00
                                @endif
                            </th>
                            <th>
                                @if ($blnn->bulan == 8)
                                    {{ $blnn->jumlah }}
                                @else
                                    0.00
                                @endif
                            </th>
                            <th>
                                @if ($blnn->bulan == 9)
                                    {{ $blnn->jumlah }}
                                @else
                                    0.00
                                @endif
                            </th>
                            <th>
                                @if ($blnn->bulan == 10)
                                    {{ $blnn->jumlah }}
                                @else
                                    0.00
                                @endif
                            </th>
                            <th>
                                @if ($blnn->bulan == 11)
                                    {{ $blnn->jumlah }}
                                @else
                                    0.00
                                @endif
                            </th>
                            <th>
                                @if ($blnn->bulan == 12)
                                    {{ $blnn->jumlah }}
                                @else
                                    0.00
                                @endif
                            </th>
                        </tr>
                    @elseif (!empty($pmbkl->idPembekal == $blnn->idPembekal))
                        <tr class="text-center">
                            <th colspan="3">JUMLAH</th>
                            <th>
                                0.00
                            </th>
                            <th>
                                0.00
                            </th>
                            <th>
                                0.00
                            </th>
                            <th>
                                0.00
                            </th>
                            <th>
                                0.00
                            </th>
                            <th>
                                0.00
                            </th>
                            <th>
                                0.00
                            </th>
                            <th>
                                0.00
                            </th>
                            <th>
                                0.00
                            </th>
                            <th>
                                0.00
                            </th>
                            <th>
                                0.00
                            </th>
                            <th>
                                0.00
                            </th>
                        </tr>
                    @endif
                @endforeach
                <tr>
                    <th class="text-center" colspan="3">JUMLAH KESELURUHAN</th>
                    <th class="text-right" colspan="12">0.0</th>
                </tr>
            </tfoot>
        </table>
        <div class="page-break"></div>
    @endforeach
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
