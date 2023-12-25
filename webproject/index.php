<!doctype html>
<html lang="en">

<head>
    <title>Welcome to Gurus of Fitness</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Gururs of Fitness| Zumba| Yoga| Sauna">
    <meta name="description" content="Gururs of Fitness| Zumba classes| Yoga Classes| Sauna Classes">
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
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            overflow: hidden;
            /* Hide scroll bars until the timeout expires */
        }

        #spinner-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: whitesmoke;
            /* Set the background color to match your site's background */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        #spinner {
            font-size: 3rem;
        }
    </style>
</head>

<body>
    <div id="spinner-container">
        <div id="spinner" class="spinner-grow text-warning" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <script>
        // Function to hide the spinner and show the content
        function hideSpinnerAndLoadContent() {
            document.getElementById("spinner-container").style.display = "none";
            document.body.style.overflow = "auto"; // Show scroll bars
        }

        // Hide the spinner and load content after a timeout
        setTimeout(function () {
            hideSpinnerAndLoadContent();
        }, 2000); // Adjust the delay as needed (e.g., 3000 milliseconds or 3 seconds)
    </script>

    <!-- header start  -->
    <?php
    include 'header.php';
    ?>
    <!-- header end  -->
    <!-- slide start  -->
    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active  ">
                <img src="assets/img/slide1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Welcome to Gurus of Fitness </h3>
                    <p>One of the best Fitness cneter in Asia</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/slide2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Yoga</h3>
                    <p>We offer yoga classess with best gurus </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/slide3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Sauna</h3>
                    <p>We offer free sauna after workout</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- slide end  -->
    <div class="jumbotron jumbotron-fluid text-center mb-0">
        <div class="container">
            <h1 class="display-4">Welcome to Gurus of Fitness</h1>

            <hr class="my-2">
            <p>"Gurus of Fitness" is not just a gym; it's a state-of-the-art fitness haven designed to elevate your
                wellness experience. Located at the heart of our community, we are committed to helping you achieve your
                fitness goals while promoting a healthy and balanced lifestyle.
            </p>
            <p class="lead">
                <a class="btn btn-warning" href="about-us.php" role="button">Read more</a>
            </p>
        </div>
    </div>
    <div class="container-fluid bg-white text-center mb-0 p-2">
        <h2 class="display-4">We offer</h2>
        <p>
            We offer zumba, Yoga ans Sauna
        </p>
        <br>
        <div class="row">
            <div class="col-md-4">
                <h3>Basic Membership </h3>
                <p>For the basic membership in Gurus of Fitnesss</p>
                <img src="assets/img/offer1.jpg" alt="" class="img-thumbnail">
                <p>Price: Rs.3000</p>
                <a href="book-now.php" class="btn btn-danger">Register Now</a>
            </div>
            <div class="col-md-4">
                <h3>
                    Zumbastic Membership
                </h3>
                <p>
                    Basic Gym + 4 classes a week Zumba
                </p>
                <img src="assets/img/offer2.jpg" alt="" class="img-thumbnail">
                <p>Price: Rs.5000</p>
                <a href="book-now.php" class="btn btn-danger">Register Now</a>
            </div>
            <div class="col-md-4">
                <h3>
                    Yogastic Membership
                </h3>
                <p>Basic Gym + 4 Classes a week Yoga</p>
                <img src="assets/img/offer3.jpg" alt="" class="img-thumbnail">
                <p>Price: Rs.5000</p>
                <a href="book-now.php" class="btn btn-danger">Register Now</a>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-4">
                <h3>Elite </h3>
                <p>Unlimited Classes , GYM - Zumba + Yoga</p>
                <img src="assets/img/offer4.jpg" alt="" class="img-thumbnail">
                <p>Price: Rs.8000</p>
                <a href="book-now.php" class="btn btn-danger">Register Now</a>
            </div>
            <div class="col-md-4">
                <h3>
                    Sauna/ Steam
                </h3>
                <p>
                    per use
                </p>
                <img src="assets/img/offer5.jpg" alt="" class="img-thumbnail">
                <p>Price: Rs.1500</p>
                <a href="book-now.php" class="btn btn-danger">Register Now</a>
            </div>
            <div class="col-md-4">
                <h3>
                    Platinum Membership
                </h3>
                <p>Unlimited access to all facilities</p>
                <img src="assets/img/offer6.jpg" alt="" class="img-thumbnail">
                <p>Price: Rs.12000</p>
                <a href="book-now.php" class="btn btn-danger">Register Now</a>
            </div>
        </div>
       
    </div>
    <!-- news area start  -->
    <div class="jumbotron jumbotron-fluid  mb-0" id="news">
        <div class="container">
            <h2 class="display-4 text-center">News and Events</h1>
                <hr class="my-2">
                <br>
                <div class="row">
                    <?php
                    include 'connection.php';
                    $query = "select * from posts order by rand() limit 3";
                    $run = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($run)) {
                        $a = $row['id'];
                        $b = $row['title'];
                        $c = $row['content'];
                        $d = $row['image'];

                        ?>
                        <div class="col-md-9">
                            <h3>
                                <?php echo $b; ?>
                            </h3>
                            <p>
                                <?php echo $c; ?>
                            <p>
                                <a href="post.php ?id=<?php echo $a; ?>" class="btn btn-warning">Read more</a>
                            </p>
                        </div>
                        <div class="col-md-3">
                            <img src="assets/img/<?php echo $d; ?>" alt="Flood-victim" class="img-thumbnail">
                        </div>
                        <?php
                    }
                    ?>
                </div>
        </div>
    </div>

    <!-- private trainer area start -->
   <div class="container-fluid" style="background-color: white; padding: 40px 0px;">
    <div class="container text-center">
        <h2 class="display-4">Do you want to hire personal trainer?</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ducimus animi quos et neque, porro, hic inventore deleniti, aperiam debitis vitae obcaecati facere veniam eligendi recusandae quo sit voluptatum culpa?
        </p>
        <img src="assets/img/personaltrainer2.jpg" width="1000px" alt="img-thumbnail">
        <p>
            Price: Rs.10,000
        </p>
        <a href="book-now.php"><button type="submit" class="btn btn-success">Register now</button></a>
    </div>

   </div>
    <!-- private trainer area end  -->

    <!-- footer start  -->
    <?php
    include 'footer.php';
    ?>
    <!-- footer end  -->

</body>

</html>