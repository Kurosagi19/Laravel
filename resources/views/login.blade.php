<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Demo - Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <a href="{{ route('register') }}">Register</a>
        <form>
            Email: <input type="text" name="" value=""><br>
            Password: <input type="password" name="" value=""><br>
            <button type="button">Login</button>
        </form>
    </body>
</html>
