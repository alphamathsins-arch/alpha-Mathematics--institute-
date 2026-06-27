<?php
session_start();

include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM students WHERE username='$username'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $student = mysqli_fetch_assoc($result);

        if (password_verify($password, $student['password'])) {

            $_SESSION['student_id'] = $student['id'];
            $_SESSION['username'] = $student['username'];

            header("Location: student-dashboard.php");
            exit();

        } else {

            echo "<script>
            alert('Incorrect password');
            window.location='student-login.html';
            </script>";

        }

    } else {

        echo "<script>
        alert('Username not found');
        window.location='student-login.html';
        </script>";

    }

}
?>
