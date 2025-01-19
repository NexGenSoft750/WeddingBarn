<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us - Kendall Point</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    @include('partials.updatedheader')
          @include('partials.social')

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
                    <div class="want" onclick="window.location.href='{{ route('book') }}';">
                        Want to see it for yourself? <br>Book a tour!
                    </div>
                    <div class="view" onclick="window.location.href='{{ route('price') }}';">
                        View Pricing & Details
                    </div>
                </div>

                <div class="image">
                    <img src="{{ asset('download.jpg') }}" alt="Image">
                </div>
            </div>

            <!-- Right Column (Form) -->
            <div class="col-md-6">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('contactemail') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="first_name"
                            placeholder="Enter first name">
                        @error('first_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="last_name"
                            placeholder="Enter last name">
                        @error('last_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Enter email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone"
                            placeholder="Enter phone number">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="fianceFirstName">Fiancé First Name:</label>
                        <input type="text" class="form-control" name="fiance_first_name" id="fianceFirstName"
                            placeholder="">
                        @error('fiance_first_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="fianceLastName">Fiancé Last Name:</label>
                        <input type="text" class="form-control" name="fiance_last_name" id="fianceLastName"
                            placeholder="">
                        @error('fiance_last_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="weddingDate">What wedding date(s) did you have in mind?</label>
                        <input type="text" class="form-control" name="wedding_date" id="weddingDate" placeholder="">
                        @error('wedding_date')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="message">Any comments, notes, or questions for us?</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder=""></textarea>

                    </div>

                    <p>By clicking submit, you agree to receive emails from us! Don't see the email? Check your spam
                        folder!</p>
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
            <a href="{{ route('review') }}" class="read-more" onclick="window.location.href='{{ route('review') }}';">
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
   @include('partials.customfooter')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
