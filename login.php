<?php include "conn.php";?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

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
        <h1 class="text-center">Login Form</h1>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="main_header p-3 bg-light m-3">
            <form method="post" action="" enctype="">
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" class="form-control" name="user_name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="pass">
                </div>
                <input type="submit" value="Login" class="btn btn-primary" name="login">
                <input type="submit" value="Registration" class="btn btn-primary">
            </form>

            <?php

            if (isset($_POST['login'])) {
                $count=0;
                $user_name = $_POST['user_name'];
                $pass = $_POST['pass'];

                $res = mysqli_query($link , "select * from login where user_name='$user_name' && pass='$pass'");
                $count = mysqli_num_rows($res);

                if ($count==0) {
                    ?>

                    <div class="alert alert-danger col-lg-12 my-2">
                        <strong style="color:red">Invalid</strong> Username Or Password.
                    </div>


                    <?php
                }else {
                    ?>

                    <script type="text/javascript">

                        window.location = "index.php";

                    </script>


                    <?php
                }

            }

            ?>
        </div>
    </div>
</div>

</body>
</html>