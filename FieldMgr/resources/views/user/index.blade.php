<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Field</title>
</head>
<body style="background-color: white">

{{--NavBar--}}
<nav class="navbar navbar-expand-lg" style="background-color: green">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('user.index') }}" style="color: black">Đức Anh 88</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('user.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Login</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('admin.index') }}">Admin</a></li>
                        <li><a class="dropdown-item" href="#">Contact</a></li>
                        <li><a class="dropdown-item" href="#">About</a></li>
                    </ul>
                </li>
                <li class = nav-item>
                    <a class="nav-link active" href="">Cart</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{--FieldCard--}}
<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Sân bóng cỏ nhân tạo</h5>
        <p class="card-text">Mô tả sân bóng cỏ nhân tạo.</p>
        <a href="#" class="btn btn-primary">Đặt sân</a>
    </div>
</div>
{{--EndFieldCard--}}

{{--EndNavBar--}}

{{--FooterBar--}}
{{--EndFooterBar--}}

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
