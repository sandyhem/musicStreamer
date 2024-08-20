<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Check if the passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match. Please try again.";
    } else {
        // Check if the username already exists in the database
        $check_query = "SELECT * FROM users WHERE username = '$username'";
        $check_result = mysqli_query($connect, $check_query);

        if (mysqli_num_rows($check_result) > 0) {
            echo "Username already exists. Please choose a different username.";
        } else {
            // Insert the new user into the database
            $insert_query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
            if (mysqli_query($connect, $insert_query)) {
                echo "Registration successful. You can now log in.";
            } else {
                echo "Error: " . mysqli_error($connect);
            }
        }
    }
}

mysqli_close($connect);
?>
