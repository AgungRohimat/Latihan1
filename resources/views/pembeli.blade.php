<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    @foreach($p as $pembeli )
    Id : {{$pembeli->id_pembeli}}<br>
    Nama Barang : {{$pembeli->nama}} <br>
    Jenis Kelamin : {{$pembeli->jns_kelamin}}<br>
    Alamat : {{$pembeli->alamat}}<br>
    Kode Pos : {{$pembeli->kode_pos}}<br>
    Kota : {{$pembeli->kota}}<br>
    TTL : {{$pembeli->tgl_lahir}}<br>


    <hr>
    @endforeach


</body>
</html>

