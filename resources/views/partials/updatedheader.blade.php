<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Kendall Point</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .navbar-toggler-icon {
            background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns%3D"http%3A//www.w3.org/2000/svg" viewBox%3D"0 0 30 30"%3E%3Cpath stroke%3D"rgba%280, 0, 0, 0.5%29" stroke-width%3D"2" stroke-linecap%3D"round" stroke-miterlimit%3D"10" d%3D"M4 7h22M4 15h22M4 23h22"/%3E%3C/svg%3E');
        }
    </style>
</head>

<body>
    <div class="container-fluid custom-bg">
        <div class="row">
            <div class="col-12 announcement-header">
                <h1>open house<br>sunday february 2nd 12:00-3:00</h1>
                <a href="https://forms.gle/VXMdyEYTWB2YAF3w5" target="_blank" class="button-link">
                    <button class="rsvp">RSVP</button>
                </a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('download.png') }}" alt="Kendall Point Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" onclick="toggleNavbar()">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('microwedding') }}">MICRO WEDDING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('amenities') }}">THE VENUE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('gallery') }}">GALLERY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('review') }}">REVIEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white" href="{{ route('book') }}">BOOK A TOUR</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        function toggleNavbar() {
            const navbar = document.getElementById('navbarSupportedContent');
            if (navbar.classList.contains('show')) {
                navbar.classList.remove('show');
            } else {
                navbar.classList.add('show');
            }
        }
    </script>
</body>

</html>
