<?php include "header.php";?>


<div class="container-fluid">
    <div class="container">
        <div class="row bg-light py-3 my-2">
            <div class="col-12">
                <div class="tab-content" id="nav-tabContent">
                    <form method="post" enctype="multipart/form-data" action="">
                        <div class="py-2"></div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Group</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" name="f_group" required>
                            </div>
                        </div>
                        <div class="form-group row born_in_frame_input_extra_field">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Mother Ear Tag</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" name="f_mather_ear_tag" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Color</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" name="f_color" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Weight</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputPassword3" name="f_weight" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputState" class="col-sm-2">Gender</label>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="f_gender" id="gridRadios1" value="Male" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="f_gender" id="gridRadios2" value="Female">
                                    <label class="form-check-label" for="gridRadios2">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Birth Date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="inputPassword3" name="f_birth_date" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputState" class="col-sm-2">Cattle Photo</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <input type="file" class="form-control-file" name="f_photo">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row born_in_frame_input_extra_field">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary" name="f_insert_as_frame_born">Insert As Frame Born</button>
                                <a href="show_purchased_cattle.php" class="btn btn-primary">Show Data</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php

    if (isset($_POST['f_insert_as_frame_born'])) {

    $f_group = $_POST['f_group'];
    $f_mather_ear_tag = $_POST['f_mather_ear_tag'];
    $f_color = $_POST['f_color'];
    $f_weight = $_POST['f_weight'];
    $f_gender = $_POST['f_gender'];
    $f_birth_date = $_POST['f_birth_date'];
    $f_photo = $_FILES['f_photo']['name'];
    $target = "images/goat/".basename($_FILES['f_photo']['name']);




    mysqli_query($link, "INSERT INTO `born_in_frame`(`id`, `group_name`, `mother_ear_tag`, `color`, `weight`, `gender`, `birthdate`, `photo`) VALUES (NULL,'$f_group','$f_mather_ear_tag','$f_color','$f_weight','$f_gender','$f_birth_date','$f_photo')");

    move_uploaded_file($_FILES['f_photo']['tmp_name'], $target);


    }


?>




<?php include "footer.php";?>





