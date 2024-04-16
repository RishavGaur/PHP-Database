<?php
echo $rollno = $_POST['rollnoo'];
echo $name = $_POST['name_up'];
echo $marks = $_POST['marks_up'];
echo $grade = $_POST['grade_up'];
echo $city = $_POST['city_up'];

$conn=mysqli_connect("localhost","root","","crud") or die("Connection Failed...");
$query="UPDATE student SET names='{$name}', marks='{$marks}', grade='{$grade}', city='{$city}' WHERE rollno='{$rollno}'";
$result=mysqli_query($conn, $query) or die("Query Failed...");
header("Location: http://localhost/php/Learning/index.php");

mysqli_close($conn);

?>