<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_store";

$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$user_data = $_SESSION['user_data'];



$sql_query = mysqli_query($con, "SELECT * FROM tblbooks");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>

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

 

    <div class=" pt-5  rgba-blue-grey-strong" style="height: 1500px;">
        <div class="d-flex justify-content-center m-5 ">
            <div class="card text-center" style="width: auto;">
                <div class="card-header" style="background-color: orange;">
                    <p class="lead pt-3">
                        <strong>
                            Shelf
                        </strong>
                    </p>
                </div>
                <div class="card-body">
                    <!-- Login form -->
                    <form action="#" target="_blank" method="POST">
                        <?php
                        //$row = mysqli_fetch_array($sql_query);
                        while ($row = mysqli_fetch_assoc($sql_query)) {
                            // echo sizeof($row);
                            // print("<pre>" . print_r($row, true) . "</pre>");

                        ?>

                            <img src="Resources\Books_Covers\<?php echo $row['cover_image']; ?>" class="img-thumbnail mt-5" style="width: 200px; height: 250px;">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#A<?php echo $row["book_id"]; ?>">
                                Info
                            </button>
                            <div class="modal fade" id="A<?php echo $row["book_id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="book_info_lable" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">

                                        <div class="modal-body center pt-5">
                                            <img src="Resources\Books_Covers\<?php echo $row['cover_image']; ?>" class="img-thumbnail center" style="width: 300px; height: 400px;">
                                            <div class="row center">


                                            </div>
                                            <div class=" pt-5">
                                                <p class="lead"> <strong><?php echo $row['title'] ?></strong>
                                                    <italic><?php echo $row['author'] ?></italic>
                                                </p>
                                                <hr>
                                                <p class="text-justify"><?php echo $row['description'] ?> </p>
                                                <hr>
                                            </div>
                                            <div>
                                                <p class="text-justify"><strong>Nr pagini: </strong><?php echo $row['pages'] ?> </p>
                                                <hr>
                                                <p class="text-justify"><strong>Editura: </strong><?php echo $row['publisher'] ?> </p>
                                                <hr>
                                                <p class="text-justify"><strong>Categorie: </strong><?php echo $row['collection'] ?> </p>
                                                <hr>
                                                <p class="text-justify"><strong>An publicatie: </strong><?php echo $row['publishing_year'] ?> </p>
                                                <hr>
                                                <p class="text-justify"><strong>Tip Coperta: </strong><?php echo $row['cover_type'] ?> </p>
                                                <hr>
                                                <p class="text-justify"><strong> Pret: </strong> <?php echo $row['price'] ?> lei</p>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn " data-dismiss="modal">Close</button>

                                            <!-- List all books form db  -->
                                            <?php

                                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                $speranta = $_POST['book_title'];
                                                $item = $row['title'];
                                                $item_price = $row['price'];;
                                                $quantity = 1;
                                                //singura modalitate prin care cred eu ca pot sa fentez sistemul este sa pun userul sa 
                                                //dea coppy paste la (sau poate automatizez eu asta ) la titlul cartii
                                                //dar cred caeste posibil si sa fac un input invizibil in care se adauga automat titlul cartii
                                                //si apoi sa fac o verifcare if (titlu_bagat_de_user == row['title']){ma bag in baza de date}
                                                $sql_query = "INSERT INTO tblcart (item,item_price,quantity)
                                                VALUES ('$item','$item_price','$quantity')";

                                                if (mysqli_query($con, $sql_query)) {
                                                    echo $speranta;
                                                    echo "<script>window.location = 'Home.php';</script>";
                                                } else {
                                                    echo "Error deleting record: " . mysqli_error($con);
                                                }
                                                break;
                                            }

                                            ?>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        <?php
                        }
                        ?>
                    </form>

                </div>
                <div class="card-footer text-muted">
                    “A room without books is like a body without a soul.”
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