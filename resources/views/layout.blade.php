<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="app.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
  <title>@yield('title', 'default')</title>
</head>
<body>
@yield('content')
<div class="footer">
<a href="/">home</a>
<a href="/about">about</a>
<a href="/contact">contact</a>
</div>
</body>
</html>