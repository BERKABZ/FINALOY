<?php
session_start();
include("dbconnect.php");

// Initialize variables
$id = $price = $quantity = $product_updated = false;

// Fetch product details if ID is provided
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch product details from the database
    $sql = "SELECT price, quantity FROM `pastries` WHERE id = ?";
   
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $price = $row['price'];
        $quantity = $row['quantity'];
    } else {
        // Handle error if product with given ID is not found
        // For example, you can redirect to an error page
        // header("Location: error.php");
        // exit();
    }
}

// Handle form submission for updating a product
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $id = $_POST["id"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];

    // Escape special characters to prevent SQL injection
    $price = mysqli_real_escape_string($conn, $price);
    $quantity = mysqli_real_escape_string($conn, $quantity);

    // Prepare and execute SQL query to update the product
    $stmt = $conn->prepare("UPDATE `pastries` SET price = ?, quantity = ? WHERE id = ?");
    $stmt->bind_param("iii", $price, $quantity, $id);
    $stmt->execute();

    // Check if any rows were affected by the update
    if ($stmt->affected_rows > 0) {
        // Set flag to indicate product has been updated
        $product_updated = true;
    } else {
        // Handle case where no rows were affected (e.g., product ID not found)
        // You can set an error message here if needed
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>

<!-- Redirect to the product page -->
<?php if ($product_updated):?>
    <script>
        window.location.href = "PASTRIES.php";
    </script>
<?php endif;?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>
<style>
    .bck img {
        margin-left: 10px;
        margin: 0;
        margin-top: 5px;
        width: 50px;
    }
</style>
<body>
    <div class="bck">
        <a href="PASTRIES.php"> <img src="update.png"></a>
    </div>

    <h2>Update Product</h2>

    <form method="POST" action="pastriesupdate.php">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    Price: <input type="number" name="price" value="<?php echo isset($price)? $price : '';?>"><br><br>
    Quantity: <input type="number" name="quantity" value="<?php echo isset($quantity)? $quantity : '';?>"><br><br>
    <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>
