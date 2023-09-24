<?php
// Connecting with the database
$connection = new mysqli('localhost', 'username', 'password', 'auth_system');

// Checking for database connection errors
if ($mysqli -> connect_errno) {
    echo "Attempt failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }

// Getting user input from the signup form
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Inserting user data into the 'users' table
$sql = "INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
$stmt = $connection->prepare($sql);
$stmt->bind_param("ssss", $first_name, $last_name, $email, $password);
$result = $stmt->execute();

// Checking for success and redirect to login page
if ($result) {
    header("Location: login.html");
} else {
    echo "Error: " . $connection->error;
}

$stmt->close();
$connection->close();
?>
