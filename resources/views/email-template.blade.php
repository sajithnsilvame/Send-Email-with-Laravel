<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <style>
        /* Reset some default styles */
        body, div, p {
            margin: 0;
            padding: 0;
        }
        /* Set a background color and default font for the email */
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        /* Create a container for the email */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        }
        /* Style the header */
        .header {
            text-align: center;
            padding: 20px 0;
        }
        .header h1 {
            color: #333333;
        }
        /* Style the content */
        .content {
            padding: 20px;
        }
        /* Style form fields */
        .field {
            margin-bottom: 20px;
        }
        .field label {
            display: block;
            font-weight: bold;
        }
        .field p {
            margin: 0;
        }
        /* Style the footer */
        .footer {
            background-color: #333333;
            color: #ffffff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Form Submission</h1>
            <p>You have received a new form submission:</p>
        </div>
        <div class="content">
            <p>{{ $body }}</p>
        </div>
    </div>

</body>
</html>

