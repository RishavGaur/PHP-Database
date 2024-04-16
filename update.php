<?php include ("indexNav.php"); ?>
<style>
    form {
        
        
    }

    .search-form {
        background-color: lightpink;
        margin-top: 50px;
        padding-top: 20px;
    }

    .detail-form {
        background-color: lightpink;
        padding: 50px;
        margin-top: 5px;
    }

    input {
        maring-top: 5px;
        border: none;
        outline: none;
        background-color: lightcyan;
        padding: 5px 10px;
        border-radius: 5px;
    }

    input::placeholder {
        font-size: 1.2rem;
        color: black;
    }

    .update_data {
        background-color: #2c3034;
    }

    .details {
        padding: 5px 15px;
        border: none;
        outline: none;
        background-color: cadetblue;
        color: white;
        font-weight: 500;
        border-radius: 3px;
        margin-left: 3vw;
    }

    .details:hover {
        text-decoration: underline;
    }

    .update-btn {
        padding: 5px 15px;
        border: none;
        outline: none;
        background-color: seagreen;
        color: white;
        font-weight: 500;
        border-radius: 3px;
        margin-left: 3vw;
    }

    .update-btn:hover {
        text-decoration: underline;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center all-form">
                <form action="" class="search-form" method="post">
                    <h3 style="margin-bottom:5vh;">Edit Student Record</h3>
                    <input type="text" name="roll" placeholder="Roll No." style="margin-bottom:5vh">
                    <button type="submit" name="show_btn" class="details">Show Details</button>
                </form>
                <?php 
                    if(isset($_POST['show_btn'])){
                        $stu_roll= $_POST['roll'];
                        $conn= mysqli_connect("localhost","root","","crud") or die("Connection Failed");
                        $query="SELECT * FROM student WHERE rollno= '{$stu_roll}'";
                        $result=mysqli_query($conn, $query) or die("Query Unsuccessful");

                        if(mysqli_num_rows($result)>0){
                            while($rows= mysqli_fetch_assoc($result)){
                ?>
                <form action="update_data.php" method="post" id="add-form" class="detail-form">
                    <input type="hidden" name="rollnoo" value="<?php echo $rows['rollno']; ?>">
                    <input type="text" name="name_up" value="<?php echo $rows['names']; ?>" placeholder="Name">
                    <input type="text" name="marks_up" value="<?php echo $rows['marks']; ?>" placeholder="Marks">
                    <input type="text" name="grade_up" value="<?php echo $rows['grade']; ?>" placeholder="Grade">
                    <input type="text" name="city_up" value="<?php echo $rows['city']; ?>" placeholder="City">
                    <button type="submit" onclick="window.location='update_data.php?roll=<?php echo $rows['rollno']; ?>'" name="update_btn" class="update-btn">Update</button>
                </form>
                <?php 
                    }
                }
            }
                ?>
            </div>
        </div>
    </div>
</body>