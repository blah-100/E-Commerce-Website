<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database = "carefour";

$conn = mysqli_connect($server_name, $username, $password, $database);

if (isset($_POST['submit'])) {
    $username = $_POST['username']; // Fix: Assign the value to $username
    $pass = $_POST['pass'];

    $sql_query = "SELECT * FROM customers2 WHERE username='$username' AND pass='$pass'";
    $result = mysqli_query($conn, $sql_query);

    if (mysqli_num_rows($result) > 0) {
        // User credentials are correct
        echo "Login successful!";
    } else {
        // Invalid credentials
        echo "Invalid username or password";
    }

    mysqli_close($conn);
}
?>