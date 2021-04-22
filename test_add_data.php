<?php include "header.php";?>

<div class="container-fluid">
    <div class="container">
        <div class="row bg-light py-3 my-2">
            <div class="col-12">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" name="add_data_form" method="post">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email@gmail.com</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="pass" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Phone Number</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="phone_number" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="date" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputState" class="col-sm-2">Area</label>
                        <div class="col-sm-10">
                            <select id="inputState" class="form-control col-sm-10" name="area" required>
                                <option >Choose...</option>
                                <option value="Dhaka" selected>Dhaka</option>
                                <option value="Comilla">Comilla</option>
                                <option value="Bogra">Bogra</option>
                                <option value="Barisal">Barisal</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputState" class="col-sm-2">Gender</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" onclick="show(0)" type="radio" name="gender" value="Male" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" onclick="show(1)" type="radio" name="gender" value="Female">
                                <label class="form-check-label" for="gridRadios2">
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>
                    <fieldset class="form-group row">
                        <legend class="col-form-label col-sm-2 float-sm-left pt-0">Interest</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="interest" value="Football">
                                <label class="form-check-label" for="gridCheck1">
                                    Football
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="interest" value="Cricket" checked>
                                <label class="form-check-label" for="gridCheck1">
                                    Cricket
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="interest" value="Gaming">
                                <label class="form-check-label" for="gridCheck1">
                                    Gaming
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row" id="mm01">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>

                    <div class="form-group row" id="mm02">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="inputState" class="col-sm-2">Choose You Photo</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <!--<label for="exampleFormControlFile1">Example file input</label>-->
                                <input type="file" class="form-control-file" name="photo" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary" name="insert">Insert</button>
                            <a href="test_show_data.php" class="btn btn-primary">Show Data</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $pass = test_input($_POST['pass']);
    $phone_number = test_input($_POST['phone_number']);
    $date = test_input($_POST['date']);
    $area = $_POST['area'];
    $gender = $_POST['gender'];
    $interest = $_POST['interest'];
    $photo = $_FILES['photo']['name'];
    $target = "images/goat/".basename($_FILES['photo']['name']);

    /*    echo $_POST['name'];
        echo "<br>";
        echo $_POST['email'];
        echo "<br>";
        echo $_POST['pass'];
        echo "<br>";
        echo $_POST['phone_number'];
        echo "<br>";
        echo $_POST['date'];
        echo "<br>";
        echo $_POST['area'];
        echo "<br>";
        echo $_POST['gender'];
        echo "<br>";
        echo $_POST['interest'];*/



    mysqli_query($link, "INSERT INTO `entry`(`id`, `name`, `email`, `pass`, `phone_number`, `date`, `area`, `gender`, `interest`, `photo`) VALUES (NULL,'$name','$email','$pass','$phone_number','$date','$area','$gender','$interest','$photo')");

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
        ?>

        <div class="alert-danger">
            <h3>data Insert Successfully</h3>
        </div>

        <?php
        //$massge = "Image Uploaded";
    }else {
        ?>
        <div class="container alert-danger">
            <h3 class="text-center">data Not Inserted</h3>
        </div>

        <?php
        //$massge = "Image Not Uploaded";
    }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



?>











<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/jquery-1.6.1.min.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>

<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>

<script src="js/owl.carousel.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<!--<script src="js/uikit.js"></script>-->

<!--<script src="js/bootstrap.js"></script>-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="js/main.js"></script>

</body>
</html>
