<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <form action="{{ route('Teststore') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="number"  >
            <input type="text" name="data2" >
            <input type="text" name="data3" >
            <button type="submit">Gửi</button>
        </form>
</body>
</html>