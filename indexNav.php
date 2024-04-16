<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
        nav {
                background-color: black;
                color: white;
                font-size: 1.2rem;
                font-weight: 500;
                display: flex;
                justify-content: center;
                align-items: center;
                column-gap: 20px;
                height: 6vh;
        }

        nav div {
                padding: 5px 10px;
                cursor: pointer;
        }

        nav div:hover {
                background-color: #2c3034;
                text-decoration: underline;
                transition: .1s ease-in;
        }
</style>
<nav>
        <div class="home_data" onclick="window.location='index.php'">Home</div>
        <div class="add_data" onclick="window.location='add.php'">Add</div>
        <div class="update_data" onclick="window.location='update.php'">Update</div>
        <div class="delete_data" onclick="window.location='delete.php'">Delete</div>
</nav>