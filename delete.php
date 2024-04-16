<?php include ("indexNav.php"); ?>
<style>
    form{
        background-color: lightsalmon;
        padding:50px;
        margin-top: 50px;
    }
    input {
        maring-top: 5px;
        border: none;
        outline:none;
        background-color: lightcyan;
        padding: 5px 10px;
        border-radius: 5px;
    }
    input::placeholder{
        font-size: 1.2rem;
        color:black;
    }

    .delete_data {
        background-color: #2c3034;
    }

    .delete-btn {
        padding: 5px 15px;
        border: none;
        outline: none;
        background-color: red;
        color: white;
        font-weight: 500;
        border-radius: 3px;
        margin-left: 3vw;
    }

    .delete-btn:hover {
        background-color: rgb(222, 9, 9);
        text-decoration: underline;
        transition: .2s ease-in;
    }
</style>

<?php
    if(isset($_POST['delete_btn'])){
        $stu_roll=$_POST['roll'];
        $conn=mysqli_connect("localhost","root","","crud");
        $query=("DELETE FROM student WHERE rollno={$stu_roll}");
        $result=mysqli_query($conn,$query);
        header("Location: http://localhost/php/Learning/index.php");
    }
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" id="add-form">
                    <h3 style="margin-bottom:5vh;">Delete Student Record</h3>
                    <input type="text" name="roll" placeholder="Roll No.">
                    <button type="submit" name="delete_btn" class="delete-btn">Delete</button>
                </form>
            </div>
        </div>
    </div>
</body>