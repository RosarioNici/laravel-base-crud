<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Are you sure?</title>
</head>

<body>
    <h1>Are you sure?</h1>
    <form method="POST" action="{{ route('comis.destroy', $item->id) }}">
        @csrf
        @method('DELETE')
        <input  type="submit" value="Sì">
    </form>
    <a href="{{ route('comis.index') }}">NO</a>
</body>

</html>
