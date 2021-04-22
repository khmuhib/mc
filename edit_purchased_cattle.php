<?php include "header.php";?>

<?php
    $id = $_GET['id'];
    $res = mysqli_query($link, "select * from purchase_cattle where id=$id");
    $row = mysqli_fetch_array($res);


?>


<div class="container-fluid">
    <div class="container">
        <div class="row bg-light py-3 my-2">
            <div class="col-12">
                <form method="post" enctype="multipart/form-data" action="">
                    <div class="py-2"></div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Group</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="p_group" required value="<?php echo $row['ear_tag'];?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Group</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="p_group" required value="<?php echo $row['group_name'];?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Color</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="p_color" required value="<?php echo $row['color'];?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Weight</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputPassword3" name="p_weight" required value="<?php echo $row['weight'];?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputState" class="col-sm-2">Gender</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="p_gender" id="gridRadios1" value="Male" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="p_gender" id="gridRadios2" value="Female">
                                <label class="form-check-label" for="gridRadios2">
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row purchased_market_input_extra_field">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Take Off Milk Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputPassword3" name="p_take_off_milk_date"  required value="<?php echo $row['take_off_milk_date'];?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Birth Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputPassword3" name="p_birth_date" required value="<?php echo $row['birth_date'];?>">
                        </div>
                    </div>
                    <div class="form-group row purchased_market_input_extra_field">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Purchased Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="p_purchased_date" required value="<?php echo $row['purchased_date'];?>">
                        </div>
                    </div>
                    <div class="form-group row purchased_market_input_extra_field">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Purchased Price</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="p_purchased_price" required value="<?php echo $row['purchased_price'];?>">
                        </div>
                    </div>

                    <div class="form-group row purchased_market_input_extra_field">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Owner Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="p_owner_name" required value="<?php echo $row['owner_name'];?>">
                        </div>
                    </div>

                    <div class="form-group row purchased_market_input_extra_field">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Owner Phone Number</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="p_owner_phone_number" required value="<?php echo $row['owner_phone_number'];?>">
                        </div>
                    </div>

                    <div class="form-group row purchased_market_input_extra_field">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Owner Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="p_owner_address" required value="<?php echo $row['owner_address'];?>">
                        </div>
                    </div>




<!--
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Birth Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputPassword3" name="p_birth_date" required value="<?php /*echo $row['birth_date'];*/?>">
                        </div>
                    </div>
                    <div class="form-group row purchased_market_input_extra_field">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Purchased Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="p_purchased_date" required value="<?php /*echo $row['purchased_date'];*/?>">
                        </div>
                    </div>
                    <div class="form-group row purchased_market_input_extra_field">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Purchased Price</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="p_purchased_price" required value="<?php /*echo $row['purchased_price'];*/?>">
                        </div>
                    </div>
-->





                    <div class="form-group row">
                        <label for="inputState" class="col-sm-2">Cattle Photo</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="file" class="form-control-file" name="p_photo">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row purchased_market_input_extra_field">
                        <div class="col-sm-10">
                            <input type="submit" value="Update As Purchased" class="btn btn-primary" name="p_update_as_purchased">
                            <a href="show_purchased_cattle.php" class="btn btn-primary">Show Data</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php

$id = $_GET['id'];

if (isset($_POST['p_update_as_purchased'])) {
    $p_group = $_POST['p_group'];
    $p_color = $_POST['p_color'];
    $p_weight = $_POST['p_weight'];
    $p_gender = $_POST['p_gender'];
    $p_take_off_milk_date = $_POST['p_take_off_milk_date'];
    $p_birth_date = $_POST['p_birth_date'];
    $p_purchased_date = $_POST['p_purchased_date'];
    $p_purchased_price = $_POST['p_purchased_price'];
    $p_owner_name = $_POST['p_owner_name'];
    $p_owner_phone_number = $_POST['p_owner_phone_number'];
    $p_owner_address = $_POST['p_owner_address'];
    $p_photo = $_FILES['p_photo']['name'];
    $target = "images/goat/".basename($_FILES['p_photo']['name']);



    mysqli_query($link, "UPDATE `purchase_cattle` SET `group_name`='$p_group',`color`='$p_color',`purchased_date`='$p_purchased_date',`purchased_price`='$p_purchased_price',`birth_date`='$p_birth_date',`take_off_milk_date`='$p_take_off_milk_date',`owner_name`='$p_owner_name',`owner_phone_number`='$p_owner_phone_number',`owner_address`='$p_owner_address',`weight`='$p_weight',`gender`='$p_gender',`photo`='$p_photo' WHERE id=$id");

    move_uploaded_file($_FILES['p_photo']['tmp_name'], $target);

    ?>

    <script type="text/javascript">
        window.location="show_purchased_cattle.php";
    </script>




    <?php

}




?>

<?php include "footer.php";?>





