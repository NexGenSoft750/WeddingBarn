<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Footer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .footer {
            background-color: #667462;
            color: white;
            padding: 20px 0;
        }

        .column-border {
            border-right: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer .row {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin: 0;
            padding-bottom: 15px;
        }

        .footer .row:last-child {
            border-bottom: none;
        }

        .links ul {
            list-style: none;
            padding: 0;
            text-align: center;
            font-size: 10px;
            text-transform: uppercase;
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            line-height: 2;
            letter-spacing: 0.2em;
        }

        .links a {
            color: white;
            text-decoration: none;
        }

        .logo-footer-new {
            background-image: url("{{ asset('logo.png') }}");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            height: 200px;

        }

        .social-container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }

        .social-icons {
            display: flex;
            gap: 10px;
        }

        .social-icons a {
            color: white;
            font-size: 20px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #ddd;
        }

        .stalk {
            font-size: 10px;
            text-transform: uppercase;
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
        }

        .h3 {
            font-size: 12px;
            text-transform: uppercase;
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            letter-spacing: 0.2em;
            text-align: center;
            margin-top: 20px;
        }

        .h1 {
            font-size: 24px;
            font-style: italic;
            text-align: center;
            font-family: 'Libre Baskerville', serif;
        }

        .footer p {
            font-size: 10px;
            margin: 0;
            text-align: center;
            font-style: italic;
            font-family: 'Libre Baskerville', serif;
        }

        /* Responsive Design */
        @media (max-width: 768px) {

            .footer a,
            p {
                font-size: 9px;
            }
        }

        @media (max-width: 425px) {

            .h3,
            .h1 {
                font-size: 10px;
                letter-spacing: 0.1em;
            }

            .logo-footer-new {
                height: 100px;
            }

            .h1 {
                font-size: 10px;
            }

            .links ul {
                font-size: 8px;
            }

            .stalk {
                font-size: 8px;
            }

            .footer a,
            p {
                font-size: 8px;
            }
        }
    </style>
</head>

<body>
    <footer class="footer">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 pb-4 column-border links">
                    <ul>
                        <li><a href="{{ route('about') }}">ABOUT</a></li>
                        <li><a href="{{ route('amenities') }}">AMENITIES</a></li>
                        <li><a href="{{ route('gallery') }}">GALLERY</a></li>
                        <li><a href="{{ route('vendor') }}">VENDORS</a></li>
                        <li><a href="{{ route('price') }}">PRICING</a></li>
                        <li><a href="{{ route('microwedding') }}">Micro Wedding Packages</a></li>
                        <li><a href="{{ route('contact') }}">CONTACT US</a></li>
                        <li><a href="{{ route('blog') }}">BLOG</a></li>
                        <li><a href="{{ route('FAQ') }}">FAQ'S</a></li>
                        <li><a href="#">RESOURCES</a></li>
                    </ul>
                </div>
                <div class="col-md-4 column-border pb-4 text-center">
                    <div class="logo-footer-new"></div>
                </div>
                <div class="col-md-4 pb-4">
                    <h3 class="h3">Like What You See?</h3>
                    <h1 class="h1">Reach Out To Us</h1>
                    <div class="social-container">
                        <p class="stalk">Social Stalk Us</p>
                        <div class="social-icons">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4 column-border">
                    <p>kristin@kendallpoint.com</p>
                    <p>(830) 229-5090</p>
                </div>
                <div class="col-md-4 column-border">
                    <p>2024 <a href="#">Kendall Point</a></p>
                    <a href="#">Click Here For Photo Credits</a>
                </div>
                <div class="col-md-4">
                    <p>20 GUTHRIE ROAD<br> SAN ANTONIO, TX 78215</p>
                </div>
            </div>
        </div>
    </footer>
</body>
