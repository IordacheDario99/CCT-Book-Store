<?php
//ye ye I know i can create a database connector and import it here ...
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_store";



$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];


    if ($email != null && $pass != null) {
        $sql_query = mysqli_query($con, "SELECT * FROM tbluserdata where email ='$email' and password ='$pass'");
        $row = mysqli_fetch_array($sql_query);
        $_SESSION['user'] = $row['first_name'];
        // redirect the admin to the admin panel
        if ($row['email'] == $email && $row['password'] == $pass) {
            if ($row['email'] == $email && $row['password'] == $pass && $row['user_type'] == 1) {
                // echo ("Hello admin " . $row['last_name']);
                // echo ("<script>window.location.replace('AdminPanel.php');</script>");
                header("Location: AdminPanel.php", true);
                exit();
                //deja am pierdut prea mult timp in incercarea de a gasii o modalitate
                //de a inchide pagina curenta (Login.php) dupa deschiderea noii pagini (AdminPanel.php).
                // echo "<script>window.close();</script>";
            } else {
                echo "<script>document.location.href = 'Home.php';</script>";
                $_SESSION['user_data'] = $row; 
                exit();
            }
        } else {
            echo ("<script>alert('Invalid credentials')</script>");
            echo "<script>window.close();</script>";
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
    <title>Login</title>

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
                            Login
                        </strong>
                    </p>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <!-- Login form -->


                    <form action="#" target="_blank" method="POST">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <div class="row pt-3">
                                <div class="col-sm ">
                                    <input class="btn btn-success float-right" type="submit" value="Login">
                                </div>
                                <div class="col-sm">
                                    <a name="" id="" class="btn btn-success float-left" href="Register.php" role="button">Register</a>
                                </div>
                            </div>
                        </div>
                    </form>
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