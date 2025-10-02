<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEj5Iy5wARU9oFeRpok6YctNmDr5pNLyJTb2RjKhJ0hMjY6hiw+ALEWH" 
          crossorigin="anonymous">
</head>
<body>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0Yy31hB6BNxmC5s9Pd2wL2SAASSMDZoXhy9GkcIds1KelzN7NjfIeH2" 
            crossorigin="anonymous"></script>
</body>
</html>
