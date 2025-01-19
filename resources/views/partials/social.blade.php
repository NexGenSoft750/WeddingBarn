<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Social Media Bar</title>
    <!-- Include Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Social Bar Styles */
        .social-bar {
            position: fixed;
            bottom: 3;
            right: 0;
            background-color: #a67d5f;
            width: 40px;
            height: 350px; /* Let the height adjust based on content */
            padding: 10px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end; /* Align items from bottom to top */
            z-index: 999;
        }

        /* Styling the icons */
        .social-bar i {
            color: #fff;
            font-size: 24px;
            margin: 8px 0; /* Add margin between icons for space */
            transition: transform 0.3s ease;
        }

        .social-bar i:hover {
            transform: scale(1.2);
        }

        /* Styling the stalk text */
        .stalk-text {
            color: #fff;
            font-size: 12px;
            text-align: center;
            margin-bottom: 20px;
        }

        .stalk-text span {
            display: block; /* Make each word appear in its own line */
            transform: rotate(90deg); /* Rotate each word vertically */
            margin-bottom: 10px; /* Space between words */
        }
    </style>
</head>
<body>

<!-- Your website content goes here -->

<!-- Social Media Bar -->
<div class="social-bar">
    <h2 class="stalk-text">
        <span>Social</span>
        <br>
        <span>Stalk</span>
        <span>Us</span>
    </h2>
    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
    <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
</div>

</body>
</html>
