<!doctype html>
<html lang="en">

<head>
    <title>Welcome to United limited</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="United Limited| Real State Business| Buy House| Buy Land">
    <meta name="description" content="United Limited| Real State Business| Buy House| Buy Land">
    <meta name="author" content="Asbin Magar">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/logo2.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Monoton&family=Roboto:wght@100;300;400&display=swap"
        rel="stylesheet">
    <!-- <style>
        /* Add the desired height and width for carousel images */
        .carousel-item img {
            width: 100%; /* Set the width as you like, it will scale proportionally */
            height: 500px; /* Set the height as you like */
            object-fit: cover; /* This property ensures the image covers the entire container */
        }
    </style> -->
</head>

<body>
    <?php
    include 'header.php';
    ?>

    <div class="jumbotron jumbotron-fluid  mb-0" id="news">
        <div class="container">
            <h2 class="display-4 text-center">News and Events</h1>
                <hr class="my-2">
                <br>
        </div>
    </div>
    <div class="container-fluid text-center bg-white p-4">

        <div class="row">
            <?php
            include 'connection.php';
            $query = "select * from posts ";
            $run = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($run)) {
                $a = $row['id'];
                $b = $row['title'];
                $c =substr($row['content'],0,300);
                $d = $row['image'];
                ?>
                <div class="col-md-5">
                    <h3>
                        <?php echo $b; ?>
                    </h3>
                    <p>
                        <?php echo $c; ?>..........
                    <p>
                        <a href="post.php ?id=<?php echo  $a; ?>" class='btn btn-warning' >Read more</a>
                    </p>
                </div>
                
                <div class="col-md-5">
                    <img src="assets/img/<?php echo $d; ?>" alt="Flood-victim" class="img-thumbnail">
                </div>
                <?php
            }
            ?>
                 <div class="col-md-2">
                <?php
                include 'rightbar.php';
                ?> 
                </div>

        </div>
    </div>
    </div>

    <!-- main body end  -->

    <?php
    include 'footer.php';
    ?>
</body>

</html>