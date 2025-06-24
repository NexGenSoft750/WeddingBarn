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
    @include('partials.social')
    <div class="hero-section d-flex " style="height: 100vh; ">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title">Austin Micro Wedding & Elopement Packages</h1>

                <!-- First Paragraph in its own div -->
                <div class="first-paragraph ">
                    <p>
                        Discover intimate micro wedding and elopement packages at Acre 31, just 50 minutes from Austin, Texas. We offer all-inclusive services for meaningful ceremonies, ensuring a stress-free experience and deeper connections with your guests. Let us handle the details for your special day!


                    </p>
                </div>
            </div>
        </div>

        <!-- Second and Third Paragraphs in a flex container -->

        <div class="flex-paragraphs col-12 ">
            <div class="paragraph">
                <p>
                   Consider Acre 31  for your Austin micro wedding or elopement, where stunning hill country views meet a climate-controlled modern barn venue. Exchange vows amidst towering Spanish oak trees and a pond, then celebrate on our outdoor patio or in the barn. Enjoy a full-service, all-inclusive experience, allowing you to savor every moment without stress or hassle.
                </p>
            </div>
            <div class="paragraph">
                <p>
                   Located just 50 minutes from Austin, Acre 31 is easily accessible for you and your guests. Out of town guests can easily make it to Downtown Austin to experience all the city's lively culture and attractions.


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
<!-- Pricing Section -->
<div class="container-fluid pricing py-5">
  <div class="container">
    @foreach ($prices as $price)
      <!-- Each Price record will render its own grid row -->
      <div class="row row-cols-1 row-cols-md-4 text-center g-4 mb-4">
        <div class="col">
          <div class="pricing-card p-3 border rounded">
            <h5 class="mb-2">{{ $price->micro_day_range }}</h5>
            <p class="mb-1">{{ $price->micro_guest_range_1 }}</p>
            <p class="mb-0"><em>${{ number_format($price->micro_price_1, 2) }}</em></p>
          </div>
        </div>
        <div class="col">
          <div class="pricing-card p-3 border rounded">
            <h5 class="mb-2">{{ $price->micro_day_range }}</h5>
            <p class="mb-1">{{ $price->micro_guest_range_2 }}</p>
            <p class="mb-0"><em>${{ number_format($price->micro_price_2, 2) }}</em></p>
          </div>
        </div>
        <div class="col">
          <div class="pricing-card p-3 border rounded">
            <h5 class="mb-2">{{ $price->micro_day_range }}</h5>
            <p class="mb-1">{{ $price->micro_guest_range_3 }}</p>
            <p class="mb-0"><em>${{ number_format($price->micro_price_3, 2) }}</em></p>
          </div>
        </div>
        <div class="col">
          <div class="pricing-card p-3 border rounded">
            <h5 class="mb-2">{{ $price->micro_day_range }}</h5>
            <p class="mb-1">{{ $price->micro_guest_range_4 }}</p>
            <p class="mb-0"><em>${{ number_format($price->micro_price_4, 2) }}</em></p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>


<!-- Rental Included & Add-ins Section -->
<div class="container rental my-5">
  <div class="included-section p-4  rounded">
    <h2 class="text-center mb-4">Included with your rental</h2>
    <p class="text-center  fw-bold mb-4 text-white">
      All inclusive of venue rental, bar staff, cups and ice, catered dinner, table linens
    </p>

    <div class="row">
      <!-- Left Column -->
      <div class="col-12 col-md-6">
        <ul class="list-unstyled">
          <li>Exclusive Rental for ceremony and reception | 4:00 pm - 11pm (10pm end time) Mon-Thur</li>
          <li>2400 Sq Ft climate controlled barn for up to 150 guests with built-in cedar bar area</li>
          <li>2400 Sq Ft Patio with Pergola for outdoor ceremony with pond view</li>
          <li>Outside unlimited space for seating/dining; we can assist in renting more chairs/tables/tents, etc.</li>
          <li>Outdoor gravel patio/bar area for Cocktail Hour and lawn games</li>
          <li>Bridal Suite with private bathroom</li>
          <li>Groom's Suite</li>
          <li>Separate catering kitchen</li>
        </ul>
      </div>
      <!-- Right Column -->
      <div class="col-12 col-md-6">
        <ul class="list-unstyled">
          <li>Gorgeous outdoor portraits area with cedar altar facing our pond</li>
          <li>BYOB (TABC Bartenders are mandatory and security will be provided/scheduled by our staff for an added fee)</li>
          <li>Free parking</li>
          <li>Set up and breakdown of chairs and tables</li>
          <li>Clear chiavari wedding chairs</li>
          <li>60” round tables and table linens</li>
          <li>4 farm style tables (2 8ft and 2 4ft)</li>
          <li>Sign-In table, gift table and buffet tables provided</li>
          <li>No set vendors list*</li>
        </ul>
      </div>
    </div>

    <!-- Add-ins Section -->
    <h2 class="text-center mt-5">Add-ins</h2>
    <div class="row">
      <div class="col-12 col-md-6">
        <ul class="list-unstyled">
          <li>Cocktail hour appetizers starting at $6 pp</li>
          <li>Day of planner $1000</li>
          <li>Mini dessert station $5/person</li>
        </ul>
      </div>
      <div class="col-12 col-md-6">
        <ul class="list-unstyled">
          <li>Professional DJ $1795</li>
          <li>Photobooth starting at $600</li>
        </ul>
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

                    <h3 class="faizan">Book Your Tour</h3>
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

                    <h3 >Book Your Tour</h3>
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
                            <a href="{{route('book')}}" class=" custom-btn mt-2">Book Your Tour</a>
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
                        <a href="{{route('book')}}" class=" custom-btn">Book A Tour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
     @include('partials.newfooter')




</body>

</html>
