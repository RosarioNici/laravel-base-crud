<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info {{ $item->title }}</title>
</head>

<body>
    <h1>{{ $item->title }}</h1>
    <div>
        <img src="{{ $item->thumb }}" alt="{{ $item->title }} cover">
    </div>
    <p>{{ $item->description }}</p>
</body>

</html>
