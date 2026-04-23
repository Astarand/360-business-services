<!DOCTYPE html>
<html>

<head>
    <title>New Lead Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #dc3545;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }

        .content {
            background-color: #f8f9fa;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-top: none;
            border-radius: 0 0 5px 5px;
        }

        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        .info-table th,
        .info-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        .info-table th {
            background-color: #e9ecef;
            font-weight: bold;
            width: 30%;
        }

        .alert {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            color: #856404;
            padding: 10px;
            border-radius: 4px;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h2 style="margin: 0;">🚨 New Lead Alert</h2>
        <p style="margin: 5px 0 0 0;">360 Business and Services</p>
    </div>

    <div class="content">
        <p><strong>A new lead has been generated from your website!</strong></p>

        <table class="info-table">
            <tr>
                <th>Email:</th>
                <td>{{ $formData['email'] ?? 'Not provided' }}</td>
            </tr>
            <tr>
                <th>Phone:</th>
                <td>{{ $formData['phone'] ?? 'Not provided' }}</td>
            </tr>
            <tr>
                <th>City:</th>
                <td>{{ $formData['city'] ?? 'Not provided' }}</td>
            </tr>
            <tr>
                <th>Page Name:</th>
                <td>{{ $formData['page_name'] ?? 'Not provided' }}</td>
            </tr>
            <tr>
                <th>WhatsApp Updates:</th>
                <td>
                    <span style="color: {{ ($formData['whatsapp_update'] ?? null) === 'on' ? '#28a745' : '#dc3545' }};">
                        {{ ($formData['whatsapp_update'] ?? null) === 'on' ? '✅ Yes' : '❌ No' }}
                    </span>
                </td>
            </tr>
            <tr>
                <th>Submitted At:</th>
                <td>{{ now()->format('d M Y, h:i A') }}</td>
            </tr>
        </table>

        <div class="alert">
            <strong>Action Required:</strong> Please follow up with this lead within 24 hours for best conversion rates.
        </div>
    </div>
</body>

</html>