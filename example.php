<?php
if(isset($_POST['material'])&&isset($_POST['amount'])&&isset($_POST['price'])&&isset($_POST['phone'])&&isset($_POST['locality'])&&isset($_POST['file'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sns";

    $con = mysqli_connect($server, $username, $password, $dbname);

    if(mysqli_connect_error()){
        die("connection to this database failed due to" .mysqli_connect_error());
    }
    // echo "Success connecting to db";
    
    $material = $_POST['material'];
    $amount = $_POST['amount'];
    $price = $_POST['price'];
    $phone = $_POST['phone'];
    $locality = $_POST['locality'];
    $file = $_POST['file'];
    $sql="INSERT INTO sscrap VALUES (DEFAULT,'$material', '$amount', '$price', '$phone', '$locality', DEFAULT, current_timestamp())";
    echo $sql;

    if(mysqli_query($con,$sql)){
        echo "Successfully inserted";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
    
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <title>Spare'n'scrap website</title>
</head>

<body>
    <!-- Navbar starts here -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SnS</a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#services">Services</a>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown"
                            aria-expanded="false">Buy</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown03">
                            <li><a class="dropdown-item" href="bspare.html">Spare parts</a></li>
                            <li><a class="dropdown-item" href="bscrap.html">Scrap</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown"
                            aria-expanded="false">Sell</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown03">
                            <li><a class="dropdown-item" href="sspare.html">Spare parts</a></li>
                            <li><a class="dropdown-item" href="sscrap.html">Scrap</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#contact">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar ends here -->

    <!-- form starts here -->
    <form action="./sscrap.php" method="post">
        <div class="mx-auto" style="width: 200px;">
            Buy spare parts here!
        </div>
        <p class="fs-1 mx-auto fw-bolder" style="width: 300px;">Sell Scrap here!</p>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"></span>
            <input type="text" name="material" class="form-control" placeholder="What kind of material is your scrap"
                aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"></span>
            <input type="text" name="amount" class="form-control" placeholder="What is the amount of scrap you want to sell(in KG)"
                aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"></span>
            <input type="text" name="price" class="form-control" placeholder="Enter the rate you want to fix to the scrap(in Rs.)"
                aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"></span>
            <input type="text" name="phone" class="form-control" placeholder="Enter your phone number" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"></span>
            <input type="text" name="locality" class="form-control" placeholder="Enter your locality" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">upload the pitcure :</span>
            <input type="file" name="file" class="form-control" placeholder="Upload the pitcure of scrap" aria-label="Upload"
                aria-describedby="basic-addon1">
        </div>

        <div class="mx-auto" style="width: 100px;">
            <button class="btn btn-danger">Upload</button>
        </div>
    </form>
    <!-- form endss here -->
</body>

</html>