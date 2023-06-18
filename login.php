<?php
session_start();
include("connect.php");

$errorMsg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['firstname'] = $row['first_name'];
        $_SESSION['lastname'] = $row['last_name'];
        $_SESSION['phone_number'] = $row['phone_number'];
        header('Location: index.php');
        exit(); 
    } else {
        $errorMsg = 'Invalid username or password!';
        header('Location: loginin.php?error=' . urlencode($errorMsg));
        exit();
    }
}

// Close the database connection
mysqli_close($conn);
?>