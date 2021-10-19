<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <center>
        <h1>Data Bio</h1>
    </center>


    @foreach($query as $bio)
    <h2>Nama : {{$bio->nama}}</h2>
    <h2>TTL : {{$bio->bornDate}}</h2>
    <h2>Jenis Kelamin : {{$bio->gender}}</h2>
    <h2>Alamat : {{$bio->address}}</h2>
    <h2>Agama : {{$bio->religion}}</h2>
 <h2>Umur : {{$bio->age}}</h2>
 <h2>Hobby : {{$bio->hobby}}</h2>



    <hr>


    @endforeach


</body>
</html>

