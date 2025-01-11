<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us - Kendall Point</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<div class="container-fluid custom-bg">
    <div class="row">
        <!-- Announcement Section -->
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

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
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
