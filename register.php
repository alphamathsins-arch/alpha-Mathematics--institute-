<?php

include("config.php");

$fullname=$_POST['fullname'];

$email=$_POST['email'];

$username=$_POST['username'];

$password=password_hash($_POST['password'],PASSWORD_DEFAULT);

$grade=$_POST['grade'];

$session=$_POST['session'];

$maths=$_POST['maths'];

$science=$_POST['science'];

$sql="INSERT INTO students(fullname,email,username,password,grade,session_type,maths,science)

VALUES('$fullname','$email','$username','$password','$grade','$session','$maths','$science')";

if(mysqli_query($conn,$sql)){

header("Location: student-login.html");

}else{

echo "Registration Failed.";

}

?>
