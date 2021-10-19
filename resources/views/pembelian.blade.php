<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    @foreach($p as $pembelian )
    Id : {{$pembelian->id}}<br>
    Nama Barang : {{$pembelian->nama_barang}} <br>
    Harga Beli : {{$pembelian->nama_suplier}}<br>
    Harga Beli : {{$pembelian->qty}}<br>
    Harga Jual : {{$pesanan->tgl}}
    <hr>
    @endforeach


</body>
</html>

