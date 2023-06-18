<?php
    session_start();
    include("connect.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $firstName = $_POST['first-name'];
        $lastName = $_POST['last-name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phone-number'];
        $password = $_POST['password'];
    
        
        $sql = "INSERT INTO users (first_name, last_name, age, gender, email, phone_number, password) VALUES ('$firstName', '$lastName', '$age', '$gender', '$email', '$phoneNumber', '$password')";
    
        if (mysqli_query($conn, $sql)) {
            
            echo 'Registration successful!';
        } else {
            
            echo 'Error: ' . mysqli_error($conn);
        }
    }
    
    
    mysqli_close($conn);
?>