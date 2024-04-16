<?php include ("indexNav.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="container">
        <div class="row" style="margin-top:5vh;">
            <div class="col-md-12 text-center">
                <h2>Students Information</h2>
            </div>
        </div>
        <div class="row" style="margin-top:2vh;">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
                <?php
                $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed");
                $query = "SELECT * FROM student";
                $result = mysqli_query($conn, $query) or die("Query Unsuccessful.");
                if (mysqli_num_rows($result) > 0) {
                    ?>
                    <table>
                        <thead>
                            <tr>
                                <th>Roll.No.</th>
                                <th>Name</th>
                                <th>Marks</th>
                                <th>Grade</th>
                                <th>City</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            while($row=mysqli_fetch_assoc($result)){
                        ?>
                            <tr>
                                <td><?php echo $row['rollno'] ?></td>
                                <td><?php echo $row['names'] ?></td>
                                <td><?php echo $row['marks'] ?></td>
                                <td><?php echo $row['grade'] ?></td>
                                <td><?php echo $row['city'] ?></td>
                                <td><button type="button" onclick="window.location='update_page.php?roll=<?php echo $row['rollno'] ?>'" class="edit">Edit</button>
                                <button type="button" onclick="window.location='delete_data.php?roll=<?php echo $row['rollno'] ?>'" class="delete">Delete</button></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                <?php }else{
                    echo "<h2>Record Not Found...</h2>";
                }
                mysqli_close($conn); ?>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>