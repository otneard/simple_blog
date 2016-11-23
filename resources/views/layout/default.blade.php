<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple blog</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
</head>
<body>
    @yield('content')
    <script src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>
