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
<p><strong>First Name:</strong> {{ $formData['first_name'] }}</p>
<p><strong>Last Name:</strong> {{ $formData['last_name'] }}</p>
<p><strong>Email:</strong> {{ $formData['email'] }}</p>
<p><strong>Phone:</strong> {{ $formData['phone'] }}</p>
<p><strong>Fiancé First Name:</strong> {{ $formData['fiance_first_name'] }}</p>
<p><strong>Fiancé Last Name:</strong> {{ $formData['fiance_last_name'] }}</p>
<p><strong>Wedding Date:</strong> {{ $formData['wedding_date'] }}</p>
<p><strong>Message:</strong> {{ $formData['message'] ?? 'No message provided.' }}</p>

</body>
</html>
