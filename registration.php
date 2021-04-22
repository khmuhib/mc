<?php include "conn.php";?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.green.min.css">
    <link rel="stylesheet" href="css/prettyPhoto.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--    <link rel="stylesheet" href="css/uikit.css">-->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container-fluid">
    <div class="container">
        <h1 class="text-center">Registration Form</h1>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="main_header p-3 bg-light m-3">
            <form action="registration.php" enctype="" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" class="form-control" name="user_name" value="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" value="">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="pass">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" name="passcnf">
                </div>
                <button type="submit" class="btn btn-primary" name="regis">Registration</button>
            </form>

            <?php

            if (isset($_POST['regis'])) {
                $user_name = $_POST['user_name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $passcnf = $_POST['passcnf'];

                $query = mysqli_query($link, "INSERT INTO `login`(`id`, `user_name`, `email`, `pass`) VALUES (NULL,'$user_name','$email','$pass')");

                ?>

                <div class="alert alert-success col-12 my-2">
                    Registration successfully
                </div>

                <?php

                header("Location: login.php");
                exit();


            }




            ?>
        </div>
    </div>
</div>
</body>
</html>

