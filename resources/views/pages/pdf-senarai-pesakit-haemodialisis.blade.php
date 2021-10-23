<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
        <h4><strong> SENARAI PESAKIT HAEMODIALISIS BAGI TAHUN {{ $tahun }}</strong></h4>
    </div> <br>
    <table class="table table-bordered table-sm">
        <thead class="thead">
            <tr class="text-center">
                <th style="vertical-align: middle">BIL</th>
                <th style="vertical-align: middle">NAMA PESAKIT</th>
                <th style="vertical-align: middle">NO. K/P</th>
                <th style="vertical-align: middle">PUSAT RAWATAN</th>
                <th style="vertical-align: middle">JUMLAH KELULUSAN (RM)</th>
                <th style="vertical-align: middle">TARIKH KELULUSAN</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $index => $item)
                <tr class="text-center">
                    <td>{{ $index + 1 }}</td>
                    <td class="text-left" style="text-transform: uppercase">{{ $item->nama }}</td>
                    <td class="text-center">{{ $item->kadPengenalan }}</td>
                    <td class="text-center" style="text-transform: uppercase">{{ $item->namaPembekal }}</td>
                    <td class="text-center">{{ $item->jumlahSebenar }}</td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($item->tarikhKelulusan)->format('d/m/Y') }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
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
