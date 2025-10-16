<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PWL App')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">PWL App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/user') }}">Daftar User</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/user/create') }}">Tambah User</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/matakuliah') }}">Daftar Mata Kuliah</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/matakuliah/create') }}">Tambah Mata Kuliah</a></li>
                </ul>
            </div>
        </div>
    </nav>

    
    </main>
</body>
</html>
