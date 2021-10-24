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
        font-size: 14px;
    }

    .table tbody td {
        font-size: 12px;
    }

</style>

<body>
    <div class="text-center">
        <h4><strong> PERBELANJAAN PERUBATAN BAGI TAHUN {{ $tahun }}</strong></h4>
    </div>
    <div class="text-center" style="text-transform: uppercase">
        <h5><strong>{{ $kategori }}</strong></h5>
    </div> <br>
    <table class="table table-bordered table-sm">
        <thead class="thead">
            <tr class="text-center">
                <th style="vertical-align: middle">BIL</th>
                <th style="vertical-align: middle">NAMA PESAKIT <br> NO KP</th>
                <th style="vertical-align: middle">STATUS</th>
                <th style="vertical-align: middle">JABATAN</th>
                <th style="vertical-align: middle">JENIS PERMOHONAN</th>
                <th style="vertical-align: middle">TERIMA PERMOHONAN</th>
                <th style="vertical-align: middle">SURAT KELULUSAN</th>
                <th style="vertical-align: middle">KOS (RM)</th>
                <th style="vertical-align: middle">CATATAN</th>
                <th style="vertical-align: middle">NO. FAIL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $index => $d)
                <tr class="text-center">
                    <td style="vertical-align: middle">{{ $index + 1 }}</td>
                    <td style="vertical-align: middle">
                        {{-- {{ $d->nama }} <br> {{ $d->kadPengenalan }} --}}
                        @if ($d->nama_waris != null)
                            {{ $d->nama_waris }} <br>
                            {{ $d->ic_waris }}
                        @else
                            {{ $d->nama }} <br>
                            {{ $d->kadPengenalan }}
                        @endif
                    </td>
                    <td style="vertical-align: middle">
                        @if ($d->nama_waris != null)
                        {{ $d->hubungan }} kepada
                        {{ $d->nama }}
                        @if ($d->pesara == 'Tidak')
                            (Pegawai)
                        @else
                            (Pesara)
                        @endif
                    @else
                        @if ($d->pesara == 'Tidak')
                            Pegawai
                        @else
                            Pesara
                        @endif
                    @endif
                    </td>
                    <td style="vertical-align: middle">{{ $d->namaJabatan }}</td>
                    <td style="vertical-align: middle">{{ $d->jenisPermohonan }}</td>
                    <td style="vertical-align: middle">{{ $d->tarikhTerimaPermohonan }}</td>
                    <td style="vertical-align: middle">{{ $d->tarikhKelulusan }}</td>
                    <td style="vertical-align: middle">{{ $d->jumlahSebenar }}</td>
                    <td style="vertical-align: middle">{{ $d->catatanPermohonan }}</td>
                    <td style="vertical-align: middle">{{ $d->noFail }}</td>
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
