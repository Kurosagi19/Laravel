<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Demo - Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <a href="{{ route('login') }}">Login</a>
    <form>
            Email: <input type="text" name="" value=""><br>
            Password: <input type="password" name="" value=""><br>
            Re-Password: <input type="password" name="" value=""><br>
            <button type="button">Register</button>    
        </form>
    </body>
</html>