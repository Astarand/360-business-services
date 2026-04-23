<!DOCTYPE html>
<html>
<head>
    <title>New Lead Notification</title>
</head>
<body>
    <h2>New Quotation:</h2>
    <ul>
        <li>Name: {{ $formData['name'] }}</li>
        <li>Email: {{ $formData['email'] }}</li>
        <li>Phone: {{ $formData['phone'] }}</li>
        <li>Subject: {{ $formData['subject'] }}</li>
        <li>Comments: {{ $formData['comments'] }}</li>
        
    </ul>
</body>
</html>
