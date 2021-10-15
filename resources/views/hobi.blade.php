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
        @foreach($hobis as $data)
        nis : {{$data['nis']}} <br>
        nama : {{$data['nama']}} <br>
        Kelas : {{$data['kelas']}} <br>




Hobi :
        <ul>
            @foreach($data['hobi'] as $hobi)
            <li>{{$hobi}}</li>

            @endforeach
        </ul>
        <hr>


        @endforeach
    </ul>

</body>
</html>

