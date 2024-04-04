<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <form action="{{ route('Testupdate', @$data->id) }}"  method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="text" name="number" value="{{$data->number}}">
            <input type="text" name="data2" value="{{$data->data2}}">
            <input type="text" name="data3" value="{{$data->data3}}">
            <button type="submit">Gửi</button>
        </form>
</body>
</html>