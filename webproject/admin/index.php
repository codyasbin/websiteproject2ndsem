<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Login to United Limited</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <div class="container-fluid ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-4">
                    <h2 class="display-4">Login to </h2>
                    <h1 class="display-2">United Limited </h1>
                    <p>Book properties online from us </p>
                    <img src="../assets/img/home.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="col-md-6 mt-lg-5 bg-info  " style="border-radius: 10px; padding:100px 50px;">

                    <form action="" method="post">
                        <div class="form-group ">
                            <label for="Username">username:</label>
                            <input type="username" class="form-control" name="username" id="username"
                                placeholder="username">
                        </div>
                        <div class="form-group ">
                            <label for="password">password:</label>
                            <input type="password" class="form-control " name="password" id="password"
                                placeholder="password">
                                <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword">Show</button>
                                </div>
                                <script>
                                    const passwordInput = document.getElementById('password');
                                    const togglePasswordButton = document.getElementById('togglePassword');
                                
                                    togglePasswordButton.addEventListener('click', () => {
                                        if (passwordInput.type === 'password') {
                                            passwordInput.type = 'text';
                                            togglePasswordButton.textContent = 'Hide';
                                        } else {
                                            passwordInput.type = 'password';
                                            togglePasswordButton.textContent = 'Show';
                                        }
                                    });
                                </script>
                                
                        </div>
                        
                            <div class="g-recaptcha" data-sitekey="6Leei2AoAAAAAFcQOfwIcx4kCHg8FbHdMOKexmZB"></div>                            
                            
                        <br>
                        <button type="submit" class="btn  btn-warning" name="submit">Login</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                        <div class="form-group mt-3">
                            <a href="signup.php" class="btn btn-primary btn-block">Create new account</a>
                        </div>
                    </form>
                    <?php
                    // connecting database  with file name 'connection.php'
                    include "../connection.php";
                    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['g-recaptcha-response'])) {
                        $secretkey="6Leei2AoAAAAAIhxCM6r-o5TquBrZyHWQyLYAQtg";
                        $ip=$_SERVER['REMOTE_ADDR'];
                        $response=$_POST['g-recaptcha-response'];
                        $url="https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
                        $request=file_get_contents($url);
                        $data=json_decode($request);
                        $a = $_POST['username'];
                        $b = md5($_POST['password']);
                        if ($a == '' || $b == '') {
                            echo "<div class='alert alert-warning'> some fields are empty! </div>";
                        } 
                        else {
                            $query = "select * from users where username='$a' and password='$b'";
                            $run = mysqli_query($conn, $query);
                            if (mysqli_num_rows($run) > 0) 
                            
                            {
                                $_SESSION ['username']=$a;
                                echo "<script>window.open('main.php','_self') </script>";
                            }
                            else{
                                echo "<div class='alert alert-danger'> Invalid User! </div>";
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>