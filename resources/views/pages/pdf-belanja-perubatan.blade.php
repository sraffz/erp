
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
        <h3><strong> JUMLAH PERBELANJAAN PERUBATAN PEGAWAI/PESARA PERKHIDMATAN AWAM <br>
            NEGERI KELANTAN BAGI {{ $tahun }}</strong></h3>
    </div>
    <br><br>
        <table class="table table-bordered table-sm">
            <thead class="thead">
                <tr  class="text-center">
                    <th style="vertical-align: middle">BIL</th>
                    <th style="vertical-align: middle">PERKARA</th>
                    <th style="vertical-align: middle">JUMLAH PERBELANJAAN (RM)</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>1</td>
                    <td class="text-left">PEMBEKALAN UBATAN</td>
                    <td class="text-right">14486.00</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th class="text-center" colspan="2">JUMLAH KESELURUHAN PERUBATAN</th>
                    <th class="text-right">0.0</th>
                </tr>
            </tfoot>
        </table>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>