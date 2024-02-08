<?php

// Connect to database (replace with your details)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Build query with placeholders
$sql = "SELECT * FROM products WHERE 1";
$params = [];

// Add filter conditions based on user input
if (!empty($_GET["category"])) {
    $sql .= " AND category = ?";
    $params[] = $_GET["category"];
}

if (!empty($_GET["price_from"])) {
    $sql .= " AND price >= ?";
    $params[] = $_GET["price_from"];
}

if (!empty($_GET["price_to"])) {
    $sql .= " AND price <= ?";
    $params[] = $_GET["price_to"];
}

// Prepare and execute the query
$stmt = $conn->prepare($sql);
$stmt->bind_param(...$params);
$stmt->execute();

// Fetch and display data
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    // Loop through results and display them
    while($row = $result->fetch_assoc()) {
        echo "Product ID: " . $row["id"] . ", Name: " . $row["name"] . ", Price: $" . $row["price"] . "<br>";
    }
} else {
    echo "No products found.";
}

$conn->close();

?>
