<?php
if (isset($POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
    $server = "sql305.epizy.com";
    $username = "epiz_31437316";
    $password = "#Sujith@19";
    $dbname = "epiz_31437316_mydb";

    $con = mysqli_connect($server, $username, $password, $dbname);

    if (!$con) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    //echo "Success connecting to the db";

    $name = $_POST['name'];
    $email = $_POST['gender'];
    $password = $_POST['password'];
    $sql = "INSERT INTO register VALUES (DEFAULT,'$name', 
    '$email', '$password',DEFAULT, current_timestamp());";
    echo $sql;

    if ($con->query($sql) == true) {
        echo "Successfully inserted";
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books - BOOKS STORE</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <!--------------header------------------------->
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="logo.png" width="125px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="books.html">Books</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="account.html">Account</a></li>
                </ul>
            </nav>
            <a href="cart.html"><img src="cart.png" width="30px" height="30px"></a>
            <img src="menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>
    <!----------------account page--------->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="banner.jpg" width="100%">
                </div>

                <form action="account.php" method="POST">
                    <h7>
                        Register
                    </h7>
                    <input type="text" name="name" placeholder="Enter Username" id="name">
                    <input type="email" name="email" placeholder="Enter mail" id="email">
                    <input type="password" name="password" placeholder="Enter password" id="password">
                    <button class="btn">Submit</button>
                    <h8>
                        Thank U for registration !
                    </h8>
                    <p>If you are have account please login</p>
                    <a href="login.html" class="btn ">Login Now &#8594;</a>
                </form>

            </div>
        </div>
    </div>
    <!-----------------------footer-------------->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h4>Download Our App</h4>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="play-store.png">
                        <img src="app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="logo.png">
                    <p>Oue purpose is to get books to very person who is willing to read.</p>
                </div>
                <div class="footer-col-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Store</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h4>Follow Us</h4>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2021 - Book Store</p>
        </div>
    </div>


    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
    <!--------------------js for toggle form------------->

</html>