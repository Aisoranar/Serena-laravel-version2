<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S.E.R.E.N.A</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
</head>
<body>

    @include('layaouts.partials.navbar')

<main class="containet">
    @yield('content')
</main>

<script src="{{ url('assets/js/bootstrap.bundle.min.js')}}"></script>
    
</body>
</html>