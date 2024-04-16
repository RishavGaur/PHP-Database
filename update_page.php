<?php include ("indexNav.php"); ?>
<style>
    form {
        background-color: lightpink;
        padding: 50px;
        margin-top: 50px;
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
            <div class="col-md-12 text-center">
                <?php
                $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed");
                $fetch_roll = $_GET['roll'];
                $query = "SELECT * FROM student WHERE rollno={$fetch_roll}";

                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($rows = mysqli_fetch_assoc($result)) {

                        ?>
                        <form action="update_data.php" method="post" id="add-form">
                            <h3 style="margin-bottom:5vh;">Edit Student Record</h3>
                            <input type="hidden" name="rollnoo" value="<?php echo $rows['rollno'] ?>">
                            <input type="text" placeholder="Name" name="name_up" value="<?php echo $rows['names'] ?>">
                            <input type="text" placeholder="Marks" name="marks_up" value="<?php echo $rows['marks'] ?>">
                            <input type="text" placeholder="Grade" name="grade_up" value="<?php echo $rows['grade'] ?>">
                            <input type="text" placeholder="City" name="city_up" value="<?php echo $rows['city'] ?>">
                            <button type="submit" class="update-btn">Update</button>
                        </form>
                    <?php
                    }
                } else {
                    echo "No Record Found";
                }
                ?>
            </div>
        </div>
    </div>
</body>