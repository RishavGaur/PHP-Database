<?php include ("indexNav.php"); ?>
<style>
    form{
        background-color: lightblue;
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

    .add_data {
        background-color: #2c3034;
    }

    .save {
        padding: 5px 15px;
        border: none;
        outline: none;
        background-color: mediumseagreen;
        color: white;
        font-weight: 500;
        border-radius: 3px;
        margin-left: 3vw;
    }

    .save:hover {
        text-decoration: underline;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <form action="add_data.php" method="post" id="add-form">
                    <h3 style="margin-bottom:5vh;">Add New Student Record</h3>
                    <input type="text" name="add_rollno" placeholder="Roll No.">
                    <input type="text" name="add_name" placeholder="Name">
                    <input type="text" name="add_marks" placeholder="Marks">
                    <input type="text" name="add_grade" placeholder="Grade">
                    <input type="text" name="add_city" placeholder="City">
                    <button type="submit" class="save">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>