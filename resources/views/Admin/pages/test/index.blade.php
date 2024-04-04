<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    {{-- list --}}

    {{-- <ul> --}}
    @foreach ($data as $key => $deo)
        Bản ghi số {{ $key++ }}-
        number: {{ $deo->number }}
        data2: {{ $deo->data2 }}
        <form action="{{ route('Deletetest', $deo->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-primary">Xóa</button>
        </form>
        <br>
    @endforeach
    {{-- </ul> --}}
</body>

</html>
