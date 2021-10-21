<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    @foreach($p as $suplier )
    Id : {{$suplier->id_suplier}}<br>
    Nama suplier : {{$suplier->nama}} <br>
    Alamat : {{$suplier->alamat}}<br>
    Kode Pos : {{$suplier->kode_pos}}<br>
    Kota : {{$suplier->kota}}<br>


    <hr>
    @endforeach


</body>
</html>

