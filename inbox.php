<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox Window</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .inbox {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .inbox-header {
            background-color: #007bff;
            color: #fff;
            padding: 15px;
            text-align: center;
        }
    
        .email-list {
            padding: 20px;
        }
        .email-item {
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .email-item:hover {
            background-color: #f9f9f9;
        }
        .email-item:last-child {
            border-bottom: none;
        }
        .email-item .sender {
            font-weight: bold;
            padding: 100px 0;
        }
        .email-item .subject {
            color: #333;
        }
        .email-item .date {
            color: #777;
            
            
        }
    </style>
</head>
<body>
    <div class="inbox">
        <div class="inbox-header">
            <h2>Inbox</h2>
        </div>
        <?php
// Step 1: Establish a connection to the MySQL database
$servername = "localhost";
$username = "root";
$password = "KittuKaka@123";
$dbname = "data";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Execute a query to retrieve data
$sql = "SELECT * FROM emails";
$result = $conn->query($sql);

// Step 3: Fetch and display the data in HTML format
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>subject</th><th>time</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["sender_id"]."</td><td>".$row["subject"]."</td><td>".$row["timestamp"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Step 4: Close the connection
$conn->close();
?>
    </div>
</body>
</html>
