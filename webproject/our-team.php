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
            <h1 class="display-3">Our Team</h1>
        </div>
    </div>
    <!-- main body start  -->
    <div class="container-fluid bg-white p-5">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-9">
                    <div class="row  " >
                        <col-md-3 >
                        <img src="assets/images/offer6.jpg" alt="" class="img-thumbnail w-50">
                            <p>CEO</p>
                            <p>Sandesh Thapa</p>
                        </col-md-3>

                        <col-md-3 >
                            <p>Executive Manager</p>
                            <p>Suk maya Thapa</p>
                        </col-md-3>


                        <col-md-3 >
                            <p>Receptionist</p>
                            <p>Santa bahadur Thapa</p>
                        </col-md-3>

                    </div>
                    
                    <br>
                    <div class="row">
                        <col-md-3>
                            <p>personal trainer</p>
                            <p>Asbin Magar</p>
                        </col-md-3>

                        <col-md-3>
                            <p>Yoga Teacher</p>
                            <p>Chandrakala </p>
                        </col-md-3>

                        <col-md-3>
                            <p>Zumba Teacher</p>
                            <p>Susmita Thapa</p>
                        </col-md-3>

                    </div>
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