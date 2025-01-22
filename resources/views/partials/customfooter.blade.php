<head>
    <style>
        /* Footer container styling */
        #footer {
            display: flex;
            justify-content: space-between;
            background-color: #6e7158;
            padding: 20px;
            border-top: 1px solid #ddd; /* Add line to the top */
            margin-bottom: 20px;
            margin-top: 20px;
            flex-wrap: wrap; /* Allow columns to wrap on smaller screens */
        }

        .footer-column {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            border-right: 1px solid #ddd;
            min-width: 250px; /* Ensure columns have a minimum width */
        }

        .footer-column:last-child {
            border-right: none; /* Remove line from the last column */
        }

        .footer-column p {
            margin: 10px 0;
            font-size: 14px;
            color: white;
        }

        .footer-column a {
            text-decoration: none;
            color: white;
        }

        .footer-column a:hover {
            color: black; /* Hover color for links */
        }

        .logo img {
            max-width: 300px;
            height: auto;
            margin-top: 30px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .social-links a {
            display: inline-block;
            margin: 0 10px;
        }

        .se-icon {
            width: 30px;
            height: 30px;
        }

        .copyright {
            text-align: center;
            background-color: #6e7158;
            color: white;
            padding: 10px 0;
            margin-top: 20px;
        }

        /* Media Query for medium screens (tablet) */
        @media (max-width: 768px) {
            #footer {
                flex-direction: column; /* Stack columns vertically */
                align-items: center; /* Center the items */
            }

            .footer-column {
                border-right: none; /* Remove border between columns */
                padding: 10px; /* Reduce padding */
                min-width: 100%; /* Columns take up full width */
                text-align: center; /* Center-align text */
            }

            .logo img {
                max-width: 200px; /* Adjust logo size for smaller screens */
            }
        }

        /* Media Query for extra small screens (mobile devices) */
        @media (max-width: 480px) {
            .footer-column p {
                font-size: 12px; /* Reduce text size for smaller screens */
            }
 .logo img {
                max-width: 150px; /* Adjust logo size for smaller screens */
            }
            .social-links {
                flex-direction: column; /* Stack social media icons vertically */
                align-items: center; /* Center the icons */
            }

            .social-links a {
                margin: 5px 0; /* Reduce space between social icons */
            }

            .se-icon {
                width: 25px; /* Make social media icons smaller */
                height: 25px;
            }
        }
    </style>
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div id="footer">
        <!-- First Column: Page Links -->
        <div class="footer-column">
            <p><a href="{{ route('about') }}">About</a></p>
            <p><a href="{{ route('amenities') }}">Amenities</a></p>
            <p><a href="{{ route('gallery') }}">Gallery</a></p>
            <p><a href="{{ route('vendor') }}">Vendors</a></p>
            <p><a href="{{ route('price') }}">Pricing</a></p>
            <p><a href="{{ route('contact') }}">Contact Us</a></p>
            <p><a href="{{ route('blog') }}">Blog</a></p>
            <p><a href="/resources">Resources</a></p>
            <p><a href="{{ route('FAQ') }}">FAQs</a></p>
            <p><a href="/san-antonio-wedding-venue">San Antonio Wedding Venue</a></p>
        </div>

        <!-- Second Column: Logo -->
        <div class="footer-column logo">
            <img src="{{ asset('download14.png') }}" alt="Company Logo">
        </div>

        <!-- Third Column: Social Media Links -->
        <div class="footer-column">
            <p>Like What You See?<br>Reach Out To Us!</p>
            <p>Follow Us</p>
            <div class="social-links">
                <a href="https://www.tiktok.com/@texasweddingvenue" target="_blank">
                    <i class="fab fa-tiktok se-icon"></i>
                </a>
                <a href="http://instagram.com/kendallpointvenue" target="_blank">
                    <i class="fab fa-instagram se-icon"></i>
                </a>
                <a href="https://www.facebook.com/kendallpointvenue" target="_blank">
                    <i class="fab fa-facebook se-icon"></i>
                </a>
                <a href="https://www.pinterest.com/kendallpointvenue/" target="_blank">
                    <i class="fab fa-pinterest se-icon"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="copyright">
        © 2024 Kendall Point
    </div>
</body>
