<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="app.css" rel="stylesheet">
  <title>@yield('title', 'default')</title>
</head>
<body>
@yield('content')
<a href="/">home</a>
<a href="/about">about us</a>
<a href="/contact">contact us</a>
</body>
</html>