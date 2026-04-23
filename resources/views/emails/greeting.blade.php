<!DOCTYPE html>
<html>
<head>
    <title>Welcome to 360 Business and Services</title>
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
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .content {
            padding: 20px 0;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2 style="color: #007bff; margin: 0;">Welcome to 360 Business and Services</h2>
    </div>
    
    <div class="content">
        <p>Dear {{ $name ?? 'Valued Customer' }},</p>
        
        <p>Thank you for your interest in 360 Business and Services. We have received your inquiry and our team of experts will review your requirements carefully.</p>
        
        <p>Our dedicated professionals will contact you shortly to discuss your business needs and provide you with the best solutions tailored to your requirements.</p>
        
        <p>We appreciate your patience and look forward to building a successful long-term partnership with you.</p>
        
        <p>If you have any immediate questions, please feel free to contact us at <strong>contact@360bizservice.com</strong></p>
    </div>
    
    <div class="footer">
        <p><strong>Best regards,</strong><br>
        360 Business and Services Team<br>
        <em>Your Complete Business Solution Partner</em></p>
        
        <p style="font-size: 12px; color: #999;">
            This is an automated message. Please do not reply to this email.
        </p>
    </div>
</body>
</html>
