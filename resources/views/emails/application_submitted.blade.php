<!DOCTYPE html>
<html>
<head>
    <title>New Application Submitted</title>
</head>
<body>
    <h1>New Application Submitted</h1>
    <p><strong>Name:</strong> {{ $application->name }}</p>
    <p><strong>Email:</strong> {{ $application->email }}</p>
    <p><strong>Phone:</strong> {{ $application->phone }}</p>
    <p><strong>Position:</strong> {{ $application->position }}</p>
    <p><strong>Experience:</strong> {{ $application->experience }}</p>
    <p><strong>Location:</strong> {{ $application->location }}</p>
    @if ($resumeLink)
        <p><strong>Resume:</strong> <a href="{{ $resumeLink }}">{{ $resumeLink }}</a></p>
    @endif
</body>
</html>
