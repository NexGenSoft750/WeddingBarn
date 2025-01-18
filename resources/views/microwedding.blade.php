<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=@, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('micro.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Meddon&family=Pacifico&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
</head>

<body>
    @include('partials.updatedheader')
    <div class="hero-section d-flex " style="height: 100vh; ">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title">Austin Micro Wedding & Elopement Packages</h1>

                <!-- First Paragraph in its own div -->
                <div class="first-paragraph ">
                    <p>
                        Austin micro weddings and elopements are becoming increasingly popular. At Red Ridge Receptions,
                        we have over a decade of experience hosting small weddings and elopements at our venue near
                        Austin,
                        Texas,
                        and we’ve helped couples book as few as two weeks before their wedding date!
                    </p>
                </div>
            </div>
        </div>

        <!-- Second and Third Paragraphs in a flex container -->

        <div class="flex-paragraphs col-12 ">
            <div class="paragraph">
                <p>
                    If you are dreaming of an intimate and meaningful ceremony, our all-inclusive micro
                    wedding
                    and
                    elopement packages are perfect for you. With a smaller guest list and reduced stress
                    compared to
                    larger weddings, these packages allow for more intimate moments and deeper
                    interactions with
                    your
                    guests.
                </p>
            </div>
            <div class="paragraph">
                <p>
                    These all-inclusive services include a comprehensive online planning portal
                    accessible upon
                    booking,
                    help with the creation of timelines, floor plans, processionals, and customized
                    wedding
                    music. On
                    the
                    wedding day, our dedicated team manages every detail seamlessly.
                </p>
            </div>

        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="photo-grid">
        @foreach ($images as $image)
            <div class=" photo">
                <img src="{{ Storage::url($image->image_path) }}" alt="{{ $image->alt_text ?? 'Photo' }}">
            </div>
        @endforeach
    </div>
    <div class="container four">

        <div class="grid">
            <div class="images">
                <img src="{{ asset('download5.jpg') }}" alt="Image 1">
                <img src="{{ asset('download6.jpg') }}" alt="Image 2">
                <img src="{{ storage::url('download1.jpg') }}" alt="Image 3">
                <img src="{{ asset('download7.jpg') }}" alt="Image 4">
            </div>
            <div class="text">
                <div class="title-paragraph">
                    <h2>Why should you consider Red Ridge Receptions for your Austin Micro Wedding or Austin
                        Elopement?
                    </h2>
                </div>
                <div class="title-paragraph">
                    <p>Red Ridge Receptions offers the best blend of beautiful hill country views surrounded by
                        nature,
                        a climate controlled venue, and elegant grand room. </p>
                </div>
                <div class="title-paragraph">
                    <p>You’ll love our breathtaking panoramic views as you say your vows from one of our hilltop
                        ceremony locations among the towering pines and full oak trees of the Colorado River Valley.
                        You
                        can choose between our ceremony lawn or the custom iron arbor, with both options providing a
                        beautiful backdrop.</p>
                </div>
                <div class="title-paragraph">
                    <p>Following your intimate ceremony guests will continue your celebrations taking in the epic
                        hill
                        country views from our outdoor deck with bistro lighting and our elegant Grande Room with
                        awe-inspiring vaulted ceilings and exposed beams. </p>
                </div>
                <div class="title-paragraph">
                    <p>We offer a full-service, all-inclusive experience for our couples planning your micro-wedding
                        or
                        elopement from start to finish, allowing you to fully enjoy your wedding without having to
                        do
                        any "work" on your wedding day. Our staff will make sure you have the time and peace of mind
                        to
                        truly enjoy every moment of your wedding experience. </p>
                </div>
                <div class="title-paragraph">
                    <p>You can still have a beautiful wedding ceremony and photos without the cost of a full wedding
                        reception or the impersonal experience of going to a courthouse or chapel. </p>
                </div>
                <div class="title-paragraph">
                    <h2>Convenient location</h2>
                </div>
                <div class="title-paragraph">
                    <p>Our location is close to Austin-Bergstrom International Airport, making it easy for out of
                        town
                        guests to attend. Downtown Austin is just over 45 minutes away, allowing guests to
                        experience
                        all the history and charm of Austin while also enjoying the picturesque views of the
                        Colorado
                        River valley at Red Ridge Receptions. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <!-- Row and Column to center content -->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <!-- Heading Section -->


                <!-- Main Content Section -->
                <div class="content">
                    <h2>Austin Micro Weddings at Red Ridge Receptions</h2>
                    <p>
                        Couples looking for an intimate celebration with up to 30 guests of your closest friends and
                        family members
                        will find Red Ridge Receptions ideal for a micro wedding. These weekday events feature a
                        condensed schedule
                        while still offering the essential wedding elements such as the ceremony, first dance, cake
                        cutting, toasts,
                        dinner, and dancing.
                        <br><br>
                        This 3-hour timeline includes your ceremony followed by photos, dinner, cake cutting, toast,
                        and
                        bride & groom's
                        first dance.
                    </p>

                    <h3>Book Your Tour</h3>
                    <h2>All-Inclusive Micro Wedding Package - $4500</h2>
                    <p>
                        6-hour rental is from start to finish at the venue and includes time for rehearsal, getting
                        dressed, photography,
                        ceremony, and food/drink service.
                    </p>

                    <h3>Sample Timeline:</h3>
                    <ul>
                        <li>30 Minute rehearsal</li>
                        <li>2.5 Hour get dressed/photos</li>
                        <li>30 Minute ceremony</li>
                        <li>2.5 Hour mini-reception (Dinner, cake, toast, special dances)</li>
                    </ul>

                    <h3>What’s Included?</h3>
                    <ul>
                        <li>Venue rental for up to 30 guests on a Wednesday or Thursday</li>
                        <li>6 Hour Rental (3 event hours)</li>
                        <li>All Tables, Chairs, Linens</li>
                        <li>Décor + Faux Floral (bouquet, corsages, Boutonnieres, floral sprays for gazebo)</li>
                        <li>
                            Event staff to handle bartending, set up/breakdown, and coordination
                            (beer/wine/champagne only to be provided by couple)
                        </li>
                        <li>Indoor and outdoor Music + Microphone</li>
                        <li>Use of bridal and groom suites to get dressed</li>
                    </ul>

                    <p>
                        Dressing rooms are available to change on-site. Hair and makeup may be completed on-site if
                        the
                        timeline allows.
                    </p>
                    <p>
                        <strong>Just bring:</strong> Alcohol (beer/wine/champagne only), finishing touches,
                        officiant,
                        and photographer!
                    </p>
                    <p>Reference our preferred vendor list for affordable food and cake options!</p>

                    <h3>Reserve Your Date</h3>
                    <h2>Elope in Austin at Red Ridge Receptions</h2>
                    <p>
                        Your Austin elopement doesn’t have to be in a courthouse or rushed through a chapel. Choose
                        Red
                        Ridge Receptions
                        for a beautiful elopement location, where we’ll take care of everything for you.
                    </p>
                    <p>
                        Elopements at Red Ridge Receptions are an intimate gathering of up to 20 guests, scheduled
                        midweek and with a smaller
                        timeline. The main focus of your elopement is having a beautiful ceremony and photos to
                        treasure. Elopements can
                        include traditional elements such as a toast, cake cutting, and first dance.
                    </p>

                    <h3>Book Your Tour</h3>
                    <h2>Austin Texas Elopement Package - $2500</h2>
                    <p>
                        This 2-hour timeline includes a ceremony followed by photos, snacks, cake cutting, toast,
                        and
                        the couple’s first dance.
                    </p>

                    <h3>Sample Timeline:</h3>
                    <ul>
                        <li>30 Minute rehearsal</li>
                        <li>1.5 Hour get dressed/photos</li>
                        <li>30 Minute ceremony</li>
                        <li>1.5 Hour mini-reception (Snacks/Apps, cake, toast, special dances)</li>
                    </ul>

                    <h3>What’s Included?</h3>
                    <ul>
                        <li>Venue rental for up to 20 guests on a Wednesday or Thursday</li>
                        <li>4 Hour Rental (to include 2 event hours)</li>
                        <li>2 outdoor ceremony options (Indoor rain plan available)</li>
                        <li>All Tables, Chairs, Linens</li>
                        <li>Décor + Faux Floral (bouquet, corsages, Boutonnieres, floral sprays for gazebo)</li>
                        <li>
                            Event staff to handle bartending, set up/breakdown, and coordination
                            (beer/wine/champagne only to be provided by couple)
                        </li>
                        <li>Indoor and outdoor Music + Microphone</li>
                    </ul>

                    <p>
                        Dressing rooms are available to change on-site. Hair and makeup must be completed off-site.
                    </p>
                    <p>
                        <strong>Just bring:</strong> Lite snacks, alcohol (beer/wine/champagne only), finishing
                        touches,
                        officiant, and photographer!
                    </p>
                    <p>
                        This package is not suitable for couples wanting a dinner or meal. The timeline allows for
                        light
                        snacks or appetizers
                        only. If you would like a meal at your mini-reception, see our micro wedding packages above.
                    </p>
                    <p>Reference our preferred vendor list for affordable food and cake options!</p>

                    <h3>Reserve Your Date</h3>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="content">
                    <h2 class="text-center">Micro Wedding and Elopement Package FAQ</h2>
                    <div class="faq row">
                        <!-- Left Column -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h3>Can I add more people to my package?</h3>
                            <p>You may add up to an additional 10 people for $500, not to exceed 30 for mini or 40
                                for
                                micro.</p>

                            <h3>What hours are available for my event?</h3>
                            <p>You are allotted a 4-hour rental for the elopement or 6-hour rental for a
                                micro-wedding
                                package. All weekday events end by 8pm.</p>

                            <h3>What payment options are available?</h3>
                            <ul>
                                <li><strong>Option 1:</strong> 3 payments due at booking, 6 months before the event,
                                    and
                                    1 month before the event.</li>
                                <li><strong>Option 2:</strong> Half down, half due 30 days before your event.</li>
                            </ul>

                            <h3>How much coordination is provided by Red Ridge?</h3>
                            <p>
                                When you book with us, we’ll give you access to a personal planning portal with
                                forms
                                specific to micro and mini weddings!
                                The forms include floorplan, timeline, processional, music, vendor list, bar menu,
                                and
                                décor selections.
                            </p>
                        </div>

                        <!-- Right Column -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h3>Can I add more time to my package?</h3>
                            <p>Additional getting ready time is available for $150 per hour.</p>
                            <p>We are not able to add any additional event hours to these packages. If you’re
                                interested
                                in a longer rental time, check out our weekend all-inclusive packages.</p>

                            <h3>How far in advance should I book my date?</h3>
                            <p>We allow bookings for mini and micro weddings up to 1 year in advance! Our
                                experienced
                                team can help you plan in just a few short weeks if you’re on a tight timeline!</p>

                            <h3>What are your vendor and catering requirements?</h3>
                            <p>You’re welcome to use any photographer and officiant of your choice! You may bring in
                                store-bought, pre-packaged appetizer platters or snacks.</p>
                            <p>For a micro-wedding with a dinner buffet, an approved caterer must be hired. Please
                                see
                                our preferred list.</p>

                            <h3>Do I get to pick out my own music?</h3>
                            <p>
                                Yes! We provide a music survey online where you can select songs for your ceremony,
                                special dances, cake cutting, and more.
                                You can even provide a "must play" and "do not play" list.
                            </p>
                        </div>
                        <div class="button-container text-center">
                            <a href="{{route('book')}}" class="btn btn-secondary mt-2">Book Your Tour</a>
                        </div>

                        <!-- Image Example -->
                        <div class="image-container text-center my-4">
                            <img src="{{ asset('download4.jpg') }}" alt="Wedding Image" class="img-fluid rounded" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="content faizan text-center">
                    <h3>Feel The Red Ridge Difference</h3>
                    <p class="text-align justify">Whether your wedding is intimate or grand, our goal is to ensure
                        your
                        planning process is both
                        effortless and delightful. Book a property tour with us and get started designing your
                        special
                        day!</p>

                    <!-- Button to Book a Tour -->
                    <div class="button-container">
                        <a href="{{route('book')}}" class="btn btn-secondary">Book A Tour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="styled-line">
    <div class="container my-5">
        <div class="row">
            <!-- Left Column: Contact Image and Content -->
            <div class="col-lg-6 col-md-12 d-flex flex-row  align-items-center ">
                <!-- Image container -->
                <div class="image-container mb-4">
                    <img src="{{ asset('wedding-color.jpg') }}" alt="Red Ridge Receptions" class="contact-image">
                </div>

                <!-- Text Content after Image -->
                <div class="left-content ml-5">
                    <h2>Contact Us</h2>
                    <p>Red Ridge Receptions is an indoor-outdoor Texas Hill Country wedding venue, located less than
                        an
                        hour from Austin. Schedule a property tour, inquire about a date, or say hello.</p>
                    <h3>Get in Touch</h3>
                </div>
            </div>

            <!-- Right Column: Contact Information -->
            <div class="col-lg-6 col-md-12">
                <div class="right-column">
                    <p>Find your way around:</p>
                    <ul>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="#">Weddings</a></li>
                        <li><a href="{{route('microwedding')}}">Micro Weddings</a></li>
                        <li><a href="{{route('gallery')}}">Galleries</a></li>
                    </ul>

                    <hr>

                    <h3>Share the Love</h3>
                    <p>Follow us on social media!</p>
                    <ul>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Pinterest</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr class="styled-line">
    <p class="text-center">© 2022-2024 Red Ridge Receptions. web design: hawthorn creative.</p>




</body>

</html>
