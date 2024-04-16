<?php
$rollno = $_POST['add_rollno'];
$name = $_POST['add_name'];
$marks = $_POST['add_marks'];
$grade = $_POST['add_grade'];
$city = $_POST['add_city'];

$conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed");
$query = "INSERT INTO student VALUES('{$rollno}','{$name}','{$marks}','{$grade}','{$city}')";
$result = mysqli_query($conn, $query) or die("Query Unsuccessful.");
header("Location: http://localhost/php/Learning/index.php");

mysqli_close($conn);
?>