<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
<form action="">
    @csrf
    @method('PUT')
    @foreach($brand as $brands)
        Name: <input type="text" name="name" value="{{ $brand->name }}">
        Country: <input type="text" name="country" value="{{ $brand->country }}">
    @endforeach
    Name: <input type="text" name="name">
    Country: <input type="text" name="name">
    <button>Edit</button>
</form>
</body>
</html>
