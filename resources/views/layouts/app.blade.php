<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/
bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">BAB 5</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a href="{{ route('home') }}" class="navlink">Home</a></li>
                    <li class="nav-item"><a href="{{ route('student.index') }}" class="nav-link">Mahasiswa</a></li>
                    <li class="nav-item"><a href="{{ route('course.index') }}" class="nav-link">Mata Kuliah</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('mark.index') }}" class="navlink">Nilai</a></li>
                </ul>
                @auth
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{ route('logout') }}" class="navlink">Logout</a></li>
                    </ul>
                @endauth
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>
