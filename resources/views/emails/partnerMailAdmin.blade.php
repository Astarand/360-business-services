<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject }}</title>
</head>
<body>
    <h2>{{ $subject }}</h2>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Phone:</strong> {{ $phone }}</p>
    <p><strong>State:</strong> {{ $state }}</p>
    <p><strong>City:</strong> {{ $city }}</p>
    <p><strong>File Link:</strong> <a href="{{ $fileLink }}">{{ $fileLink }}</a></p>
</body>
</html>