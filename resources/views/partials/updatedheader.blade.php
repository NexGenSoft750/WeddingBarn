<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Kendall Point</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .navbar-toggler-icon {
            background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns%3D"http%3A//www.w3.org/2000/svg" viewBox%3D"0 0 30 30"%3E%3Cpath stroke%3D"rgba%280, 0, 0, 0.5%29" stroke-width%3D"2" stroke-linecap%3D"round" stroke-miterlimit%3D"10" d%3D"M4 7h22M4 15h22M4 23h22"/%3E%3C/svg%3E');
        } .navbar .btn-primary {
        background-color: #6e7158; /* Change to desired color */
        border-color: #b57059;    /* Match border color */
        color: white;             /* Ensure text is visible */
    }.nav-link .btn-primary{
        background-color: #6e7158;
    }

        /* Sticky Navbar Styles */
        /* Sticky Navbar Styles */
.sticky-navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: rgba(181, 112, 89, 0.8); /* 0.8 for 80% opacity */
    z-index: 9999;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    display: none; /* Initially hide it */
    backdrop-filter: blur(10px); /* Optional: Adds a blur effect */
    transition: background-color 0.3s ease;
    color: white; /* Smooth transition */
}

/* Media Query for small screens (below 768px) */
@media (max-width: 768px) {
    .sticky-navbar {
        display: none !important; /* Force hide sticky navbar on smaller screens */
    }
}

/* Media Query for screens larger than 768px */
@media (min-width: 769px) {
    .sticky-navbar {
        display: block; /* Show sticky navbar on larger screens */
    }
}

        .sticky-navbar .nav-link {
            color: black;
            font-weight: bold;
            margin: 20px;
            text-decoration: none;
                color: white; /* Smooth transition */
 /* No underline by default */
        }

        /* Active Navbar Item - Underlined and Bold */
        .navbar-nav .nav-link.active {
            text-decoration: underline;
            font-weight: bold;
            color: black !important; /* Ensure it stays bold even with other styles */
        }

        .sticky-navbar .btn-primary {
        background-color: #6e7158;
        border: #6e7158 /* Change to desired color */
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
                <img src="{{ asset('download8.jpg') }}" alt="Kendall Point Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" onclick="toggleNavbar()">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <!-- Existing Navbar Items -->
                    <li class="nav-item"><a class="nav-link" href="{{ route('microwedding') }}">MICRO WEDDING</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('amenities') }}">THE VENUE</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('gallery') }}" id="galleryDropdown" role="button" aria-expanded="false">GALLERY</a>
                        <ul class="dropdown-menu" aria-labelledby="galleryDropdown">
                            <li><a class="dropdown-item" href="{{ route('venuegallery') }}">The Venue</a></li>
                            <li><a class="dropdown-item" href="{{ route('ceremonygallery') }}">Ceremonies</a></li>
                            <li><a class="dropdown-item" href="{{ route('receptiongallery') }}">Receptions</a></li>
                            <li><a class="dropdown-item" href="{{ route('portraitgallery') }}">Portraits</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('review') }}">REVIEWS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">CONTACT US</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-primary text-white" href="{{ route('book') }}">BOOK A TOUR</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sticky Navbar -->
    <nav class="sticky-navbar">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="{{ route('home') }}">Kendall Point</a>
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item"><a class="nav-link" href="{{ route('microwedding') }}">MICRO WEDDING</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('amenities') }}">THE VENUE</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">CONTACT US</a></li>
            </ul>
            <a class="btn btn-primary text-white" href="{{ route('book') }}">BOOK A TOUR</a>
        </div>
    </nav>

   <script>
   const stickyNavbar = document.querySelector('.sticky-navbar');

// Initially hide the sticky navbar until the user scrolls past a certain point
window.addEventListener('scroll', () => {
    if (window.scrollY > 50 && window.innerWidth > 768) { // Only show sticky navbar on larger screens after scroll
        stickyNavbar.style.display = 'block';
        // Store the state of the navbar in sessionStorage
        sessionStorage.setItem('stickyNavbarVisible', 'true');
    } else {
        // Hide sticky navbar if not scrolled enough
        stickyNavbar.style.display = 'none';
        sessionStorage.setItem('stickyNavbarVisible', 'false');
    }
});

// On page load, check the sessionStorage to decide whether the navbar should be visible
document.addEventListener('DOMContentLoaded', () => {
    const navbarVisible = sessionStorage.getItem('stickyNavbarVisible');

    // If the navbar should be visible (based on scroll), ensure it's displayed
    if (navbarVisible === 'true' && window.innerWidth > 768) {
        stickyNavbar.style.display = 'block';
    } else {
        stickyNavbar.style.display = 'none';
    }
});

// Function to toggle navbar (for mobile view)
function toggleNavbar() {
    const navbar = document.getElementById('navbarSupportedContent');
    navbar.classList.toggle('show');
}

// Add 'active' class to the active link based on the current page
const currentPath = window.location.pathname;
const links = document.querySelectorAll('.nav-link');
links.forEach(link => {
    const linkPath = new URL(link.href).pathname; // Get the path part of the URL
    if (currentPath === linkPath) {
        link.classList.add('active'); // Add 'active' class to the current page's link
    } else {
        link.classList.remove('active'); // Remove the 'active' class from others
    }
});

</script>


</body>

</html>
