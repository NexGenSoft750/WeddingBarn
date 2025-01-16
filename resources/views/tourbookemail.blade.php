<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <h1>New Contact Form Submission</h1>
    <p><strong>First Name:</strong> {{ $booking['first_name'] }}</p>
    <p><strong>Last Name:</strong> {{ $booking['last_name'] }}</p>
    <p><strong>Email:</strong> {{ $booking['email'] }}</p>
    <p><strong>Phone:</strong> {{ $booking['phone'] }}</p>
    <p><strong>Fiancé First Name:</strong> {{ $booking['fiance_first_name'] }}</p>
    <p><strong>Fiancé Last Name:</strong> {{ $booking['fiance_last_name'] }}</p>
    <p><strong>Wedding Date:</strong> {{ $booking['wedding_date'] }}</p>
    <p><strong>Message:</strong> {{ $booking['message'] ?? 'No message provided.' }}</p>
    <p><strong>Tour Date:</strong> {{ $booking['tour_date'] }}</p>
    <p><strong>Tour Type:</strong> {{ $booking['tour_type'] }}</p>
    <p><strong>Tour Time:</strong> {{ \Carbon\Carbon::parse($booking['tour_time'])->format('h:i A') }}</p>


</body>

</html>
