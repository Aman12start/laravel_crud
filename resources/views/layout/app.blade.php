<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Crud</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-light fs-2 ps-5 text-decoration-none" href="/">Products</a>
        </li>
    </ul>
</nav>

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
</div>

@endif



@yield('main')


</body>

</html>
