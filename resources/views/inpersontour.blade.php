<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Tour</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('tour.css') }}">

</head>

<body>
    <div class="d-flex justify-content-center align-items-center h-100 text-dark">
        <h1 class="display-5">Let's Schedule Your Tour!</h1>
    </div>

    <div class="container">
        <div class="tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="availability-tab" data-bs-toggle="tab"
                        data-bs-target="#availability" type="button" role="tab" aria-controls="availability"
                        aria-selected="true">Availability</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="form-tab" data-bs-toggle="tab" data-bs-target="#form" type="button"
                        role="tab" aria-controls="form" aria-selected="false">Form</button>
                </li>
            </ul>
        </div>

        <div class="tab-content" id="myTabContent">
            <!-- Availability Tab Content -->
            <div class="tab-pane fade show active" id="availability" role="tabpanel" aria-labelledby="availability-tab">
                <div class="content-container" data-tour-type="in_person">
                    <div class="left-column">
                        <h3>1st Step Venue Tour - In-Person</h3>
                        <h3>Kendell Point</h3>
                        <i class="bi bi-clock-fill">
                            <p>Appointment Duration: 35 minutes</p>
                        </i>
                        <i class="bi bi-geo-alt-fill">
                            <p>Kendall Point - 20 Guthrie Rd. Boerne, TX 78006</p>
                        </i>
                    </div>

                    <div class="right-column">
                        <p id="timezone-display"></p>
                        <div class="calendar">
                            <div class="calendar-container">
                                <i class="bi bi-calendar calendar-icon"></i>
                                <input type="text" id="calendar-input" placeholder="Select Date">
                            </div>
                        </div>

                        <div class="time-select" id="timeSelect">
                            <h3>Select Time</h3>
                            <input type="time" id="timeInput" />
                            <button class="btn btn-primary " id="nextForm">Next</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Tab Content -->
            <div class="tab-pane fade" id="form" role="tabpanel" aria-labelledby="form-tab">
                <div class="content-container">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('touremail') }}" method="POST">
                        @csrf
                        <input type="hidden" id="selectedDate" name="tour_date">
                        <input type="hidden" id="selectedTime" name="tour_time">
                        <input type="hidden" id="tourType" name="tour_type">
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
                            <input type="text" class="form-control" name="wedding_date" id="weddingDate"
                                placeholder="">
                            @error('wedding_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="message">Any comments, notes, or questions for us?</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder=""></textarea>
                        </div>

                        <p>By clicking submit, you agree to receive emails from us! Don't see the email? Check your
                            spam folder!</p>
                        <button type="submit" class="submit-button">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 full-width-swiper mt-4" id="swiper-container">
                    <div class="swiper-container" id="dateSwiper">
                        <div class="swiper-wrapper" id="dateSwiperWrapper"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <!-- Swiper Container for Dates -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Automatically determine and set the tour type
            const activeContainer = document.querySelector(
                '.content-container'); // Assuming only one container is relevant
            const tourType = activeContainer.getAttribute('data-tour-type');

            // Set the value in the hidden input
            const tourTypeInput = document.getElementById('tourType');
            tourTypeInput.value = tourType;
            console.log("Tour Type Automatically Set:", tourType);
        });





        let selectedDate = null; // Store the selected date

        document.addEventListener('DOMContentLoaded', () => {
            const swiperContainer = document.getElementById('swiper-container');
            const availabilityTab = document.getElementById('availability-tab');
            const formTab = document.getElementById('form-tab');

            // Toggle Swiper visibility based on the active tab
            const toggleSwiperVisibility = () => {
                swiperContainer.style.display = availabilityTab.classList.contains('active') ? 'block' : 'none';
            };

            // Add event listeners for tab changes
            availabilityTab.addEventListener('click', toggleSwiperVisibility);
            formTab.addEventListener('click', toggleSwiperVisibility);

            // Initial state
            toggleSwiperVisibility();

            // Display user's timezone
            const userTimezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
            document.getElementById('timezone-display').textContent = `Your Timezone: ${userTimezone}`;

            // Initialize Flatpickr
            flatpickr("#calendar-input", {
                dateFormat: "Y-m-d",
                minDate: "today",
                onChange: function(selectedDates) {
                    const selectedDate = selectedDates[0];
                    populateDatesSwiper(selectedDate.getMonth(), selectedDate.getFullYear());
                }
            });

            // Populate Swiper on page load
            const today = new Date();
            populateDatesSwiper(today.getMonth(), today.getFullYear());
        });

        let availability = @json($tourAvailability); // Original availability object
        let existingBookings = @json($bookedDates); // Get already booked dates from the backend
        console.log(existingBookings)

        function populateDatesSwiper(month, year) {
            const dateSwiperWrapper = document.getElementById("dateSwiperWrapper");
            dateSwiperWrapper.innerHTML = ''; // Clear previous slides

            const daysInMonth = new Date(year, month + 1, 0).getDate();
            const weekdays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

            const today = new Date();
            const isCurrentMonth = month === today.getMonth() && year === today.getFullYear();

            let hasAvailableDates = false;

            // Iterate through the days in the current month
            for (let i = 1; i <= daysInMonth; i++) {
                const date = new Date(year, month, i);
                const dayName = weekdays[date.getDay()];
                const dateStr =
                    `${date.getFullYear()}-${String(date.getMonth() + 1).padStart(2, '0')}-${String(i).padStart(2, '0')}`; // Ensure consistent date format

                // Skip past dates for the current month
                if (isCurrentMonth && i < today.getDate()) continue;

                // Get availability for the day
                const dayAvailability = availability[dayName.toLowerCase()];

                // Check if the date is already booked
                const isBooked = existingBookings.includes(dateStr);

                // Create a swiper slide
                const swiperSlide = document.createElement('div');
                swiperSlide.classList.add('swiper-slide');
                swiperSlide.innerHTML = `<strong>${dayName}</strong><br>${i}`;
                swiperSlide.setAttribute('data-date', dateStr);

                // Disable unavailable or booked dates
                if (isBooked || dayAvailability === 0) {
                    swiperSlide.classList.add('disabled');
                    swiperSlide.style.pointerEvents = 'none';
                } else {
                    hasAvailableDates = true;
                    swiperSlide.addEventListener('click', () => handleDateSelection(dateStr, swiperSlide));
                }

                // Append the slide to the swiper wrapper
                dateSwiperWrapper.appendChild(swiperSlide);

                // Highlight the selected date
                if (selectedDate === dateStr) swiperSlide.classList.add('active');
            }


            // Initialize or update Swiper instance
            if (!window.swiperInstance) {
                window.swiperInstance = new Swiper('#dateSwiper', {
                    slidesPerView: 'auto',
                    spaceBetween: 10,
                    loop: true,
                    freeMode: true,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    }
                });
            } else {
                window.swiperInstance.update();
            }
        }

        function handleDateSelection(dateStr, swiperSlide) {
            console.log("Selected date:", dateStr);

            // Deselect previous selection
            if (selectedDate) {
                const prevSlide = document.querySelector(`[data-date='${selectedDate}']`);
                if (prevSlide) prevSlide.classList.remove('active');
            }

            // Highlight new selection
            selectedDate = dateStr;
            swiperSlide.classList.add('active');

            // Get the position of the selected swiper slide
            const slideRect = swiperSlide.getBoundingClientRect();
            const timeSelect = document.getElementById('timeSelect');

            // Position the time select dropdown just below the selected date
            timeSelect.style.left = `${slideRect.left}px`;
            timeSelect.style.top = `${slideRect.bottom + window.scrollY}px`;

            // Show the time select dropdown
            showTimeSelect();
        }



        function showTimeSelect() {
            const timeSelect = document.getElementById('timeSelect');
            if (timeSelect) {
                timeSelect.style.display = 'block';

                const timeDropdown = `
            <select id="timeDropdown" class="form-select">
                <option value="09:00 AM">09:00 AM</option>
                <option value="11:00 AM">11:00 AM</option>
                <option value="02:00 PM">02:00 PM</option>
                <option value="04:00 PM">04:00 PM</option>
            </select>
            <button class="btn btn-primary" id="nextForm">Next</button>
        `;

                timeSelect.innerHTML = timeDropdown;

                // Handle 'Next' button click
                document.getElementById('nextForm').addEventListener('click', function() {
                    const selectedTime = document.getElementById('timeDropdown').value;
                    if (!selectedTime) {
                        alert('Please select a time');
                        return;
                    }

                    // Set the selected date and time to the hidden inputs
                    document.getElementById('selectedDate').value = selectedDate;
                    document.getElementById('selectedTime').value = selectedTime;

                    // Pass the selected date and time for further processing
                    console.log("Selected date and time:", selectedDate, selectedTime);

                    // Proceed to the form tab
                    goToFormTab();
                });
            }
        }


        function goToFormTab() {
            // Hide Swiper when switching to the form tab
            document.getElementById('swiper-container').style.display = 'none';

            // Switch to the form tab
            const formTab = new bootstrap.Tab(document.getElementById('form-tab'));
            formTab.show();
        }
    </script>


</body>

</html>
