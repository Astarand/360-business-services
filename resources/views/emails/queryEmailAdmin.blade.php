<!DOCTYPE html>
<html>
<head>
    <title>New Query Notification</title>
</head>
<body>
    <h2>New Query Information:</h2>
    <ul>
        <li>Email: {{ $formData['email'] }}</li>
        <li>Phone: {{ $formData['contact_number'] }}</li>
        <li>Company Name: {{ $formData['company_name'] }}</li>
        <li>Topic: {{ $formData['topic'] }}</li>
        <li>Other Topic: {{ $formData['other_topic'] }}</li>
        
        
    </ul>
</body>
</html>
