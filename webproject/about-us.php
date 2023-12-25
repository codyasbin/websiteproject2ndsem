<!doctype html>
<html lang="en">

<head>
    <title>Welcome to United limited</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php 
    include 'header.php';
    ?>

    <div class="jumbotron jumbotron-fluid mb-0">
        <div class="container text-center">
            <h1 class="display-3">About us</h1>
        </div>
    </div>
    <!-- main body start  -->
    <div class="container-fluid bg-white p-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <h2>About Gurus of Fitness</h2>
                    <p>
                    "Gurus of Fitness" is not just a gym; it's a state-of-the-art fitness haven designed to elevate your wellness experience. Located at the heart of our community, we are committed to helping you achieve your fitness goals while promoting a healthy and balanced lifestyle.
                    </p>
                    <img src="assets/img/gym.jpg" alt="United limited " class="img-thumbnail">
                    <p> At "Gurus of Fitness," we believe in supporting you not just in achieving your fitness goals but also in leading a healthier, more balanced life. Join our vibrant community today and embark on a journey to wellness, where every visit to our gym is an opportunity to nourish your body, mind, and soul. Welcome to the future of fitness!</p>
                    <h2>
                        Our vision
                    </h2>
                    <p>
                    Our vision at "Gurus of Fitness" is to be your premier fitness destination, offering a holistic approach to well-being. We aspire to provide an all-encompassing fitness experience that includes cardio and strength training in a cutting-edge gym facility, invigorating Zumba and tranquil yoga classes in both morning and evening sessions, as well as luxurious amenities to enhance your overall wellness journey
                    </p>
                </div>
                <div class="col-md-3">
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