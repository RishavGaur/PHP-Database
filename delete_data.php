<?php
    $stu_roll= $_GET['roll'];
    $conn=mysqli_connect("localhost","root","","crud");
    $query=("DELETE FROM student WHERE rollno={$stu_roll}");
    $result=mysqli_query($conn,$query);

    header("Location: http://localhost/php/Learning/index.php");
?>