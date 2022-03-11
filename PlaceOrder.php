<?php

use function PHPSTORM_META\type;

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_store";

$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$sql_query = mysqli_query($con, "SELECT * FROM tblbooks");
$user_data = $_SESSION['user_data'];






?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Place Order</title>

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
    <!-- trebuie sa ai un folder source pentru poze ca dupa ce fac extragerea pozei din baza de date sa 
        am referinta (numele ex:briks.jpg) pentru ca atunci cand adaug o imagine eu defapt adaug numele fisierului (briks.jpg)
        extragerea o sa fie ceva de genul
        <image source = "Resources/Books Covers/ <//?php echo(array['book_cover']) />"
    -->

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
                        echo ("<script>alert('An email with informations on how to reset your password was sent to your associated account email !')</script>");
                        echo "<script>window.close();</script>";
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
            <div class="card text-center" style="width: 1000px">
                <div class="card-header" style="background-color: orange;">
                    <p class="lead pt-3">
                        <strong>
                            Place order
                        </strong>
                    </p>
                </div>
                <div class="card-body">
                    <h1 class="mb-3">To place an order please complete the form below</h1>
                    <form action="#" target="_blank" method="POST">
                        <input type="text" class="form-control" name="first_name" placeholder="Book name">
                        <select name='book' class="form-select" aria-label="Default select example">
                            <option selected>Select a book</option>
                            <?php
                            while ($row = mysqli_fetch_assoc($sql_query)) {
                                print("<pre>" . print_r($row, true) . "</pre>");
                                echo $row['author'];

                            ?>
                                <option value="<?php echo $row['title'] . '@' . $row['price']; ?>"><?php echo $row['title'] . " " . $row['price']; ?></option>


                            <?php
                            }
                            ?>
                        </select>

                        <select name='pcs' class="form-select" aria-label="Default select example">
                            <option selected>How many</option>

                            <?php
                            $iter = 0;
                            while ($iter < 10) {
                                $iter++;
                            ?>
                                <option><?php echo $iter; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <input class="btn btn-success float-right" type="submit" value="Add">
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $book = $_POST['book'];
                            $item = explode('@', $book);
                            $item_price = explode('@', $book);
                            $quantity = $_POST['pcs'];

                            $sql_query = "INSERT INTO tblcart (item,item_price,quantity)
                            VALUES ('$item[0]','$item_price[1]','$quantity')";
                            if (mysqli_query($con, $sql_query)) {
                                echo ("GOOD JOOB");

                                echo "<script>window.close();</script>";
                            } else {
                                echo ("Error: " . mysqli_error($con));
                            }

                            echo "<pre>" . $item_price[1];
                            "</pre>";
                        }
                        ?>
                    </form>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Item</th>
                                <th scope="col">Item Price</th>
                                <th scope="col">Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                            </tr>
                            <tr>
                                <?php
                                $sql_query = mysqli_query($con, "SELECT * FROM tblcart");
                                while ($row = mysqli_fetch_assoc($sql_query)) {

                                ?>
                                    <th scope="row"><?php echo $row['id']; ?></th>
                                    <td><?php echo $row['item']; ?></td>
                                    <td><?php echo $row['item_price']; ?></td>
                                    <td><?php echo $row['quantity']; ?></td>
                            </tr>
                            <?php


                            ?>
                        <?php } ?>


                        </tbody>
                    </table>
                    <a name="" id="" class="btn btn-success float-right" href="PlaceOrder.php?order=true" role="button">Order</a>

                    <?php 
                        if (isset($_REQUEST['order'])) {
                             echo "<script>alert('You order is my command! We have registerd you request.');</script>";
                            $sql_query = "DELETE FROM tblcart";
                            if (mysqli_query($con, $sql_query)) {
                                // echo "<script>window.location = 'AdminPanel.php';</script>";
                                echo $row['book_id'];
                            } else {
                                echo "Error deleting record: " . mysqli_error($conn);
                            }
                        }
                    ?>

                </div>
                <div class="card-footer text-muted">
                    “Wear the old coat and buy the new book.”
                </div>
            </div>
        </div>
        <div class="py-3 text-center">
            </footer>

</body>

</html>
<?php



mysqli_close($con);


?>