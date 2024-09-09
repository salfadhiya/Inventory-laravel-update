<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk barang keluar</title>
    <style>
        table {
            border-style: solid;
        }
    </style>
</head>
<body>
<center>
    Fast Direct
<br>

    <table style="width: 50%";>
        <tr>
            <td align="left">Barang :</td>
            <td align="right">{{$barangKeluar->barang->nama_barang}}</td>
        </tr>
        <tr>
            <td align="left">Customer :</td>
            <td align="right">{{$barangKeluar->nama_customer}}</td>
        </tr>
    </table>
</center>
</body>
</html>
