<?php
//ye ye I know i can create a database connector and import it here ...
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_store";

$current_user = $_SESSION['user_data'];
$user_data = $_SESSION['user_data'];

$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $current_user['id'];
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $email = $_REQUEST['email'];
    $phone_number = $_REQUEST['phone_number'];
    $address = $_REQUEST['address'];
    $zip_code = $_REQUEST['zip_code'];

    $sql_query = "UPDATE tbluserdata SET 
    `first_name` = '$first_name',
    `last_name` = '$last_name',
    `email` = '$email',
    `phone_number` = '$phone_number',
    `address` = '$address',
    `zip_code` = '$zip_code'
    WHERE id = '$user_id'";
    if (true) {
        if (mysqli_query($con, $sql_query)) {
            echo ("<script>alert('Data heve been modified! In order to view the new data, please close this sesion (log out)')</script>");
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    } else {
        echo ("<script>alert('All fields are mandatory')</script>");
        echo "<script>window.close();</script>";
    }
}

mysqli_close($con);


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Profile</title>

    <!-- MDB icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="Icons/css/bootstrap.min.css">
    <link rel="stylesheet" href="Icons/css/mdb.min.css">

    <link rel="stylesheet" type="text/css" href="Resources/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script id="shoutscript" type="text/javascript" src="https://freeonlinesurveys.com/ShoutEmbed/embed.min.js"></script>
</head>

<body class="parallax">

    <!-- Navigatie -->
    <nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="Home.php">
            <img src="Resources\Images\Logo.png" alt="logo" class="img-fluid" style="width: 70px; height: 70px;">

        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation" style="background-color: rgb(0, 69, 71);">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">

            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <li class="nav-item ">
                    <p class="lead text-white">The books you love</p>
                </li>

                <li class="nav-item ">

                </li>

            </ul>
            <div class="dropdown show float-right">
                <a class="btn btn-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hi <?php echo $user_data['first_name'] ?>
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="Home.php">Home</a>
                    <a class="dropdown-item" href="Profile.php">Profile</a>
                    <a class="dropdown-item" href="Home.php?reset_pass=true">Change password</a>
                    <?php

                    if (isset($_REQUEST['reset_pass'])) {
                        echo "<script>alert('An email with informations on how to reset your password was sent to your associated account email !')</script>";
                        // echo "<script>window.close();</script>";
                    }

                    ?>
                    <a class="dropdown-item" href="PlaceOrder.php">Place order</a>
                    <a href="Login.php">Log out</a>
                </div>
            </div>

        </div>
    </nav>



    <!-- Container Quiz -->

    <div class=" pt-5  rgba-blue-grey-strong" style="height: 1200px;">
        <div class="d-flex justify-content-center m-5 ">

            <div class="card text-center">
                <div class="card-header" style="background-color: orange;">
                    <p class="lead pt-3">
                        <strong>
                            Hi <?php echo ($current_user['first_name']) ?>
                        </strong>
                    </p>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Your profile data is: </h5>
                    <!-- Login form -->
                    <p><strong>Full name: </strong><?php echo $current_user['first_name'] . " " . $current_user['last_name']; ?></p>
                    <p><strong>Email: </strong><?php echo $current_user['email']; ?></p>
                    <p><strong>Phone number: </strong><?php echo $current_user['phone_number']; ?></p>
                    <p><strong>Address: </strong><?php echo $current_user['address']; ?></p>
                    <p><strong>Zip Code: </strong><?php echo $current_user['zip_code']; ?></p>

                </div>

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit">Edit</button>
                <a name="" id="" class="btn " href="Home.php" role="button">Back</a>
                <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="book_info_lable" aria-hidden="true">
                    <div class="modal-dialog " role="document">
                        <div class="modal-content float-right">

                            <div class="modal-body p-5">
                                <div class="row center">
                                    <form action="#" target="_blank" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="first_name" value="<?php echo $current_user['first_name']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="last_name" value="<?php echo $current_user['last_name']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" value="<?php echo $current_user['email']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone_number" value="<?php echo $current_user['phone_number']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="address" value="<?php echo $current_user['address']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="zip_code" value="<?php echo $current_user['zip_code']; ?>">
                                        </div>
                                        <div class="col-sm ">
                                            <input class="btn btn-success" type="submit" value="Edit">
                                        </div>
                                    </form>

                                </div>

                                <div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="card-footer text-muted">
                    “Rainy days should be spent at home with a cup of tea and a good book.”
                </div>
            </div>
        </div>
        <div class="py-3 text-center">
            </footer>

</body>

</html>