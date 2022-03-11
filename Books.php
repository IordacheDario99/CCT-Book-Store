<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_store";

$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}



$sql_query = mysqli_query($con, "SELECT * FROM tblbooks");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Books</title>

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
    <!-- Container Quiz -->

    <div class=" pt-5  rgba-blue-grey-strong" style="height: 1500px;">
        <div class="d-flex justify-content-center m-5 ">
            <div class="card text-center" style="width: auto;">
                <div class="card-header" style="background-color: orange;">
                    <p class="lead pt-3">
                        <strong>
                            Add a new booOOOk !
                        </strong>
                    </p>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Hope it's good</h5>
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
                                            <a name="remove" id="" class="btn btn-danger float-left" href="Books.php?remove=true" role="button">Remove</a>
                                            <?php

                                            if (isset($_REQUEST['remove'])) {
                                                $sql_query = "DELETE FROM tblbooks WHERE book_id='" . $row['book_id'] . "'";
                                                if (mysqli_query($con, $sql_query)) {
                                                    echo "<script>window.location = 'AdminPanel.php';</script>";
                                                    echo $row['book_id'];
                                                } else {
                                                    echo "Error deleting record: " . mysqli_error($conn);
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

                    <a name="" id="" class="btn btn-success float-right mt-5" href="AdminPanel.php" role="button">Admin panel</a>
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