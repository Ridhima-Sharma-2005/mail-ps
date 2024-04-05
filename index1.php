<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compose Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .email-form {
            padding: 20px;
        }
        .email-form input[type="text"], 
        .email-form input[type="email"], 
        .email-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .email-form textarea {
            height: 200px;
        }
        .email-form .heading {
            font-weight: bold;
        }
        .email-form input[type="submit"] {
            background-color: #007bff;
            color:#fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
        }
        .email-form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Compose Email</h1>
        </div>
        <form class="email-form">
            <span class="heading">To:</span>
            <input type="text" name="name" placeholder="Recipient(s)">
            <span class="heading">Subject:</span>
            <input type="email" name="email" placeholder="Subject">
            <span class="heading">Body:</span>
            <textarea name="message" placeholder="Body"></textarea>
            <input type="submit" value="Send Email">
        </form>
    </div>
</body>
</html>
