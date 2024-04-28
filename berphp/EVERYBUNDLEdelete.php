<?php
$servername = "localhost";
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "bsit2"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if ID parameter is set
if (isset($_GET['id'])) {
    // Escape special characters to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Check if the product with the provided ID exists in the database
    $check_sql = "SELECT id FROM `everyday bundle` WHERE id='$id'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        // Construct SQL query to delete the product
        $sql = "DELETE FROM `everyday bundle` WHERE id='$id'";

        // Execute the SQL query
        if ($conn->query($sql) === TRUE) {
            // Redirect back to the product list page
            header("Location: EVERYBUNDLE.php");
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        // Handle case where product with provided ID does not exist
        echo "Product with ID $id does not exist.";
    }
}

// Close the database connection
$conn->close();
?>
