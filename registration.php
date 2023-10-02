<?php


// Database connection
$db_host = 'localhost';
$db_name = 'id21321462_backend';
$db_user = 'id21321462_admin';
$db_password = '25523404As@';

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}


// Establish a database connection
$db = new PDO('mysql:host=localhost;dbname=user_information', 'your_username', 'your_password');

// User registration logic
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$email = $_POST['email'];

$stmt = $db->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
$stmt->execute([$username, $password, $email]);

// Handle success or error
if ($stmt->rowCount() > 0) {
    echo "Registration successful!";
} else {
    echo "Registration failed!";
}



// Example API endpoint for user registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process registration logic
    // Return a JSON response
    echo json_encode(['message' => 'Registration successful']);
}

?>
