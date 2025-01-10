<!DOCTYPE html>
<html lang="en">

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

<body>

    <div class="container-fluid custom-bg">
        <div class="row">
            <!-- Announcement Section -->
            <div class="col-12 announcement-header">
                <h1>open house<br>sunday february 2nd 12:00-3:00</h1>
                <button class="rsvp">RSVP</button>
            </div>

        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('download.png') }}" alt="Kendall Point Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">THE VENUE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">GALLERY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">REVIEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white" href="#">BOOK A TOUR</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-5">
        <div class="row">
            <!-- Left Column (Text and Image) -->
            <div class="col-md-6">
                <div class="love">
                    <p>love what you see?</p>
                </div>
                <div class="lets-marry">
                    <h2>let's get you married!</h2>
                </div>
                <div class="info">
                    <p>For more information, pricing, and tour dates fill out our contact form!
                        Prefer to talk? Can’t wait to hear from you! 830-229-5090
                        FOR OTHER SPECIAL EVENTS PLEASE EMAIL kristin@kendallpoint.com
                    </p>
                </div>
                <div class="office">
                    <p>Our office is closed on Mondays.</p>
                </div>
                <div class="flex-container">
                    <div class="want">
                        Want to see it for yourself? <br>Book a tour!
                    </div>
                    <div class="view">
                        View Pricing & Details
                    </div>
                </div>
                <div class="image">
                    <img src="{{ asset('download.jpg') }}" alt="Image">
                </div>
            </div>

            <!-- Right Column (Form) -->
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Enter last name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Enter phone number">
                    </div>
                    <div class="form-group">
                        <label for="fianceFirstName">Fiancé First Name:</label>
                        <input type="text" class="form-control" id="fianceFirstName" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="fianceLastName">Fiancé Last Name:</label>
                        <input type="text" class="form-control" id="fianceLastName" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="weddingDate">What wedding date(s) did you have in mind?</label>
                        <input type="text" class="form-control" id="weddingDate" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="message">Any comments, notes, or questions for us?</label>
                        <textarea class="form-control" id="message" rows="5" placeholder=""></textarea>
                    </div>
                    <p>By clicking submit, you agree to receive emails from us!
                        Don't see the email? Check your spam folder!
                    </p>
                    <button type="submit" class="submit-button">Submit</button>
                </form>
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="background-image">
            <div class="testimonial">
                "This venue made for the best wedding<br> I could have dreamed of!"<br>Nicolette C.
            </div>
            <a href="#" class="read-more">
                READ MORE REVIEWS
            </a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="image-grid">
            <div class="image-item">
                <img src="{{ asset('download.jpg') }}" alt="Image 1">
            </div>
            <div class="image-item">
                <img src="{{ asset('download.jpg') }}" alt="Image 2">
            </div>
            <div class="image-item">
                <img src="{{ asset('download.jpg') }}" alt="Image 3">
            </div>
            <div class="image-item">
                <img src="{{ asset('download.jpg') }}" alt="Image 4">
            </div>
        </div>

    </div>
    <footer>
        <div class="container">
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-4">
                    <ul class="footer-link list-unstyled">
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">AMENITIES</a></li>
                        <li><a href="#">GALLERY</a></li>
                        <li><a href="#">PRICING</a></li>
                        <li><a href="#">VENDORS</a></li>
                        <li><a href="#">CONTACT US</a></li>
                        <li><a href="#">BLOG</a></li>
                        <li><a href="#">RESOURCES</a></li>

                    </ul>
                </div>
                <!-- Middle Column -->
                <div class="col-md-4">
                    <img src="{{ asset('download.png') }}">
                </div>
                <!-- Right Column -->
                <div class="col-md-4">

                    <p>Like what you see?</p>
                    <p>reach out to us!</p>
                    <!-- Contact Information -->
                    <div class="address">
                        <p>Email: <a href="mailto:twitter@kradallysitu.com">twitter@kradallysitu.com</a></p>
                        <p>Phone: <a href="tel:+13202256890">(320)225-6890</a></p>
                        <p>Address: 2024 Kradall Point, 20 CUTTRILE ROAD, BOZENE, TEXAS 710000</p>
                    </div>
                    <!-- Photo Credit -->
                    <p><a href="#">Click Here for Photo Credit</a></p>
                    <!-- Instagram Link -->
                    <p><a
                            href="https://www.instagram.com/rest_02569883052/">http://www.instagram.com/rest/02569883052</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
