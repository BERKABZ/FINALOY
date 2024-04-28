<?php
session_start();
$servername = "localhost";
$username = "root"; // Replace with your actual database username
$password = ""; // Replace with your actual database password
$dbname = "bsit2"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are provided (you'll need to have the form fields named "username" and "password")
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // To prevent SQL injection, use prepared statements
        $sql = "SELECT username FROM porma WHERE username=? AND password=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows == 1) {
            $_SESSION['username'] = $username;
            header("Location: accounts.php");
            exit();
        } else {
            echo "Login failed. Invalid username or password.";
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<style>

.btn{
    color: black;
    justify-content: center;
    padding: 5px;
    text-align: center;
    font-size: 40px;
    border: 5px solid black;
    background: rgb(255,49,49);
    width: 60%;
    height: 10%;
    position: absolute;
    margin-left: 17%;
    margin-top: 75%;
    text-decoration: underline;
}
.forgot{
    text-decoration: underline;
    color: black;
   font-size: 20px;
   position: absolute;
  margin-left: 20%;
  margin-top: 70%;
    
}

.img1{
    width: 58px;
    position: absolute;
    margin-top: 49%;
    justify-content: center;
    margin-left: 8%;
}
.img3{
    width: 58px;
    position: absolute;
    margin-top: 60%;
    justify-content: center;
    margin-left: 8%;
}

</style>
<body>
    
    <div class="side">
    
        <div class="whole">
            <img class="img2" src="indexR.jpg">
            <h1>ADMIN</h1>
        
            <input class="one" name="username"></input><br>
            <input class="two" name="password"></input>
        
        </div>

        <img class="img1" src="indexL.png">
        <img class="img3" src="indexP.png">

        <a class="btn" href="dash.php">Login</a>
        <a class="forgot" href="Resetpass1.php">Forgot Password?</a>
    
    </div>

</body>
</html>
