<?php
// Assuming you have already established a database connection

$servername = "localhost";
$email = "root";
$password = "";
$dbname = "ecommerce";

$conn = new mysqli($servername, $email, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Function to sanitize input data
function sanitize($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $email = sanitize($_POST["Email"]);
    $password = sanitize($_POST["password"]);

    // Query the database to check if the user exists
    $query = "SELECT * FROM customers WHERE Email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // User exists, fetch the data
        $row = mysqli_fetch_assoc($result);
        $storedPassword = $row['password'];

        // Verify the password
        if (password_verify($password, $storedPassword)) {
            // Password is correct, login successful
            // Perform any additional actions, such as setting session variables

            // Redirect the user to the homepage or a dashboard
            header("Location: index.php");
            exit();
        }
    }

    // Login failed
    $error = "Invalid email or password.";
}
?>

