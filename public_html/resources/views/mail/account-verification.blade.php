<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333333;
        }

        p {
            color: #666666;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            text-decoration: none;
            color: white !important;
            border-radius: 4px;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Email Verification</h2>
        <p>
            To complete your registration, please click the button below to verify your email address.
        </p>
        <a href="{{ $verificationUrl }}" target="_blank" class="btn">Verify Email</a>
        <p>
            If you didn't register on our site, you can safely ignore this email.
        </p>
    </div>
</body>
</html>
