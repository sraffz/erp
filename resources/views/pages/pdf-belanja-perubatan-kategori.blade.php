
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
}
</style>
<body>
    <div class="text-center">
        <h3><strong> PERBELANJAAN PERUBATAN BAGI TAHUN {{ $tahun }}</strong></h3>
    </div>
    <br><br>
    <div class="text-center" style="text-transform: uppercase">
        <h5><strong>{{ $kategori }}</strong></h5>
    </div> <br>
        <table class="table table-bordered table-sm">
            <thead class="thead">
                <tr  class="text-center">
                    <th>BIL</th>
                    <th>NAMA PESAKIT/NO KP</th>
                    <th>STATUS</th>
                    <th>JABATAN</th>
                    <th>JENIS PERMOHONAN</th>
                    <th>TERIMA PERMOHONAN</th>
                    <th>SURAT KELULUSAN</th>
                    <th>KOS (RM)</th>
                    <th>CATATAN</th>
                    <th>NO. FAIL</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>BIL</td>
                    <td>NAMA PESAKIT/NO KP</td>
                    <td>STATUS</td>
                    <td>JABATAN</td>
                    <td>JENIS PERMOHONAN</td>
                    <td>TERIMA PERMOHONAN</td>
                    <td>SURAT KELULUSAN</td>
                    <td>KOS (RM)</td>
                    <td>CATATAN</td>
                    <td>NO. FAIL</td>
                </tr>
            </tbody>
        </table>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>