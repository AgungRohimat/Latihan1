<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Tampilkan Data</h2>

    <ul>
        @foreach($data as $data2)
        NIS             : {{$data2['nis']}} <br>
        Nama            : {{$data2['nama']}} <br>
        Jenis Kelamin   : {{$data2['jk']}}<br>
        Jurusan         : {{$data2['jurusan']}}<br>
        Kelas           : {{$data2['kelas']}} <br>
        Wali Kelas      : {{$data2['wali']}}<br>


        <hr>


        @endforeach
    </ul>

</body>
</html>

