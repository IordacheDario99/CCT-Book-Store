<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_store";

$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_type = 0;
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $email = $_REQUEST['email'];
    $phone_number = $_REQUEST['phone_number'];
    $password = $_REQUEST['password'];
    $address = $_REQUEST['address'];
    $zip_code = $_REQUEST['zip_code'];


    $sql_query = "INSERT INTO tbluserdata (user_type,first_name,
    last_name,email,phone_number,password,address,zip_code)
    VALUES ('$user_type','$first_name','$last_name','$email','$phone_number','$password','$address', '$zip_code')";

    if (
        $email != null && $password != null && $first_name != null && $last_name != null &&
        $phone_number != null && $address != null && $zip_code != null
    ) {
        if (mysqli_query($con, $sql_query)) {
            echo ("GOOD JOOB");
            
            echo "<script>window.close();</script>";
        } else {
            echo ("Error: " . mysqli_error($con));
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
    <title>Register</title>

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




    <!-- Container Quiz -->

    <div class=" pt-5  rgba-blue-grey-strong" style="height: 1200px;">
        <div class="d-flex justify-content-center m-5 ">

            <div class="card text-center">
                <div class="card-header" style="background-color: orange;">
                    <p class="lead pt-3">
                        <strong>
                            Register
                        </strong>
                    </p>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <!-- Login form -->


                    <form action="#" target="_blank" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="first_name" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone_number" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="zip_code" placeholder="Zip Code">
                        </div>
                        <div class="form-group">

                            <div class="col-sm ">
                                <input class="btn btn-success" type="submit" value="Register">
                            </div>

                            <p>Already have an account? <a href="Login.php">Login here</a>.
                        </div>
                    </form>
                </div>
                <div class="card-footer text-muted">
                    “Reading is essential for those who seek to rise above the ordinary.”
                </div>
            </div>
        </div>
        <div class="py-3 text-center">
            </footer>

</body>

</html>