
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
    .table thead th {
        background-color: #227292;
        color: white;
        font-size: 14px;
    }

    .table tfoot th {
        font-size: 14px;
    }

    .table tbody td {
        font-size: 12px;
    }
</style>
<body>
    <div class="text-center">
        <h4><strong>PERBELANJAAN RAWATAN HAEMODIALISIS BAGI TAHUN {{ $tahun }}</strong></h4>
    </div>
    <br><br>
        @foreach ($pembekal as $pmbkl)
        <div class="text-center" style="text-transform: uppercase">
            <h5><strong>{{ $pmbkl->namaPembekal }}</strong></h5>
        </div> <br>
        <table class="table table-bordered table-sm">
            <thead class="thead-success">
                <tr  class="text-center">
                    <th rowspan="2" style="vertical-align: middle">BIL</th>
                    <th rowspan="2" style="vertical-align: middle">NAMA PESAKIT</th>
                    <th rowspan="2" style="vertical-align: middle">NO. K/P</th>
                    <th colspan="12" class="text-center" style="vertical-align: middle">KOS RAWATAN SETIAP BULAN (RM)</th>
                </tr>
                <tr class="text-center">
                    <th>JAN</th>
                    <th>FEB</th>
                    <th>MAC</th>
                    <th>APR</th>
                    <th>MEI</th>
                    <th>JUN</th>
                    <th>JUL</th>
                    <th>OGS</th>
                    <th>SEP</th>
                    <th>OKT</th>
                    <th>NOV</th>
                    <th>DIS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($belanja as $index => $bi)
                @if ($pmbkl->idPembekal == $bi->idPembekal)
                <tr class="text-center">
                    <td class="text-center">{{ $index+1 }}</td>
                    <td class="text-left">{{ $bi->nama }}</td>
                    <td class="text-center">{{ $bi->kadPengenalan }}</td>
                    <td>
                        @if ($bi->bulan == 1)
                            {{ $bi->jumlahSebenar }}
                        @else
                            0.00
                        @endif
                    </td>
                    <td>
                        @if ($bi->bulan == 2)
                        {{ $bi->jumlahSebenar }}
                        @else
                            0.00
                        @endif
                    </td>
                    <td>
                        @if ($bi->bulan == 3)
                        {{ $bi->jumlahSebenar }}
                        @else
                            0.00
                        @endif
                    </td>
                    <td>
                        @if ($bi->bulan == 4)
                        {{ $bi->jumlahSebenar }}
                        @else
                            0.00
                        @endif
                    </td>
                    <td>
                        @if ($bi->bulan == 5)
                        {{ $bi->jumlahSebenar }}
                        @else
                            0.00
                        @endif
                    </td>
                    <td>
                        @if ($bi->bulan == 6)
                        {{ $bi->jumlahSebenar }}
                        @else
                            0.00
                        @endif
                    </td>
                    <td>
                        @if ($bi->bulan == 7)
                        {{ $bi->jumlahSebenar }}
                        @else
                            0.00
                        @endif
                    </td>
                    <td>
                        @if ($bi->bulan == 8)
                        {{ $bi->jumlahSebenar }}
                        @else
                            0.00
                        @endif
                    </td>
                    <td>
                        @if ($bi->bulan == 9)
                        {{ $bi->jumlahSebenar }}
                        @else
                            0.00
                        @endif
                    </td>
                    <td>
                        @if ($bi->bulan == 10)
                        {{ $bi->jumlahSebenar }}
                        @else
                            0.00
                        @endif
                    </td>
                    <td>
                        @if ($bi->bulan == 11)
                        {{ $bi->jumlahSebenar }}
                        @else
                            0.00
                        @endif
                    </td>
                    <td>
                        @if ($bi->bulan == 12)
                        {{ $bi->jumlahSebenar }}
                        @else
                            0.00
                        @endif
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
            <tfoot>
                <tr class="text-center">
                    <th colspan="3">JUMLAH</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th class="text-center" colspan="3">JUMLAH KESELURUHAN</th>
                    <th class="text-right" colspan="12">0.0</th>
                </tr>
            </tfoot>
        </table>
        @endforeach
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>