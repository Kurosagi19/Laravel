<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brand</title>
</head>
<body>
<a href="{{ route('create') }}">Create</a>
    <table border="1px" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Country</th>
            @foreach($brand as $brands)
            <tr>
                <td>
                    {{ $brands -> id }}
                </td>
                <td>
                    {{ $brands -> name }}
                </td>
                <td>
                    {{ $brands -> country}}
                </td>
                <td>
                    <a href="{{ route('edit') }}">Edit</a>
                </td>
            </tr>
            @endforeach
        </tr>
    </table>
</body>
</html>
