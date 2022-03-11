<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_store";

$user = $_SESSION['user'];

$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // cover_image
    // title
    // author
    // description
    // pages
    // publisher
    // collection
    // publishing_year
    // cover_type
    // price

    $cover_image = $_REQUEST['cover_image'];
    $title = $_REQUEST['title'];;
    $author = $_REQUEST['author'];
    $description = $_REQUEST['description'];
    $pages = $_REQUEST['pages'];
    $publisher = $_REQUEST['publisher'];
    $collection = $_REQUEST['collection'];
    $publishing_year = $_REQUEST['publishing_year'];
    $cover_type = $_REQUEST['cover_type'];
    $price = $_REQUEST['price'];




    $sql_query = "INSERT INTO tblbooks (cover_image,title,
    author,description,pages,publisher,collection,publishing_year,cover_type,price)
    VALUES ('$cover_image','$title','$author','$description','$pages','$publisher',
    '$collection', '$publishing_year', '$cover_type', '$price')";
    if (mysqli_query($con, $sql_query)) {
        echo ("GOOD JOOB");
        echo "<script>window.close();</script>";
    } else {
        echo ("Error: " . mysqli_error($con));
    }
    // if (
    //     $email != null && $password != null && $first_name != null && $last_name != null &&
    //     $phone_number != null && $address != null && $zip_code != null
    // ) {

    // } else {
    //     echo ("<script>alert('All fields are mandatory')</script>");
    //     echo "<script>window.close();</script>";
    // }
}

mysqli_close($con);


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Panel</title>

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

    <div class=" pt-5  rgba-blue-grey-strong" style="height: 1100px;">
        <div class="d-flex justify-content-center m-5 ">

            <div class="card text-center" style="width: 1000px;">
                <div class="card-header" style="background-color: orange;">
                    <p class="lead pt-3">
                        <strong>
                            Add a new book !
                        </strong>
                    </p>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Hope it's good</h5>
                    <!-- Login form -->



                    <form action="#" target="_blank" method="POST">

                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="Book title" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="author" placeholder="Book author" required>
                        </div>

                        <div class="form-group float-left">
                            <textarea name="description" rows="5" placeholder="Book description?" required style="width: 960px;"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="pages" placeholder="Number of pages" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="publisher" placeholder="Publisher" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="collection" placeholder="Collection" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="publishing_year" placeholder="Year of publication" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="cover_type" placeholder="Cover type" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="price" placeholder="Price" required>
                        </div>

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="cover_image" required>
                            <label class="custom-file-label" for="customFile">Choose book cover</label>
                        </div>

                        <!-- conecteaza-te la baza de date, incarca poza in baza de date si extrage pozele din baza de date
                            intr-o alta pagin html sau poti sa incerci sa faci asta si in pagina asta doar pentru test -->
     
                        

                        <div class="row pt-3">
                            <div class="col-sm ">
                                <input class="btn btn-success float-right" type="submit" value="Add">
                            </div>
                            <div class="col-sm">
                            <a name="" id="" class="btn btn-success float-left" href="Books.php" role="button">Shelf</a>
                            <a class="float-right" href="Login.php">Log out <?php echo $user; ?></a>.
                        </div>
                        </div>

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