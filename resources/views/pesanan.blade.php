<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    @foreach($p as $pesanan )
    Id : {{$pesanan->id}}<br>
    Nama : {{$pesanan->nama_pelanggan}} <br>
    Varian : {{$pesanan->nama_barang}} <br>
    Harga Beli : {{$pesanan->qty}}<br>
    Harga Jual : {{$pesanan->tgl_pesan}}
    <hr>
    @endforeach


</body>
</html>

