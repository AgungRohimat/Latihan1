<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
@foreach($p as $barang )
    Id : {{$barang->id}}<br>
     Nama  : {{$barang->nama}} <br>
    Varian : {{$barang->varian}} <br>
    Harga Beli : {{$barang->harga_beli}}<br>
    Harga Jual : {{$barang->harga_jual}}
    <hr>
@endforeach


</body>
</html>

