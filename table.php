<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display MySQL Table in HTML</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

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
    echo "<table><tr><th>ID</th><th>Name</th><th>Password</th></tr>";
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
</body>
</html>
