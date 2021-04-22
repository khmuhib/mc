<?php include "header.php";?>

<div class="container-fluid">
    <div class="">
        <div class="row bg-light py-3 my-2">
            <div class="col-sm-3 col-12">
                <div class="goat_detail_card">
                    <div class="goat_detail_card_detail">


                        <?php

                        $id = $_GET['id'];


                        $res = mysqli_query($link, "select * from purchase_cattle where id=$id");
                        $check_cattle = mysqli_num_rows($res) > 0;

                        if ($check_cattle) {
                            while ($row = mysqli_fetch_array($res)) {
                                //age in secound = 60*60*24*365

                                $birth_date = $row['birth_date'];
                                $todays_date = date("Y-m-d");

                                $birth_date_for_day = strtotime($row['birth_date']);
                                $todays_date_for_day = strtotime(date("Y-m-d"));

                                $temp_age = date_diff(date_create($birth_date), date_create('today'));
                                $temp_age_for_day = $birth_date_for_day - $todays_date_for_day;
                                $age = floor($temp_age_for_day/(60*60*24));
                                //$age = $age->format('%y');
                                ?>



                                <p>ID: <b><?php echo $row['id'];?></b></p>
                                <p>Ear Tag: <b><?php echo $row['ear_tag'];?></b></p>
                                <p>Group: <b><?php echo $row['group_name'];?></b></p>
                                <p>Color: <b><?php echo $row['color'];?></b> </p>
                                <p>Weight: <b><?php echo $row['weight'];?></b> </p>
                                <p>Gender: <b><?php echo $row['gender'];?></b> </p>
                                <p>Take Off Milk Date : <b><?php echo $row['take_off_milk_date'];?></b> </p>
                                <p>Birth Date : <b><?php echo $row['birth_date'];?></b> </p>
                                <p>Purchased Date : <b><?php echo $row['purchased_date'];?></b> </p>
                                <p>Purchased Price : <b><?php echo $row['purchased_price'];?></b> </p>
                                <p>Owner Name : <b><?php echo $row['owner_name'];?></b> </p>
                                <p>Owner Phone Number : <b><?php echo $row['owner_phone_number'];?></b> </p>
                                <p>Owner Address : <b><?php echo $row['owner_address'];?></b> </p>
                                <p>birth: <b><?php echo $birth_date;?></b></p>
                                <p>Todays: <b><?php echo $todays_date;?></b></p>
                                <p>Tremp: <b><?php echo $temp_age->format("%r%a %m days");?></b></p>
                                <p>Age: <b><?php echo $age;?> Days</b></p>
                                <p>Breading Date: <b>2021/4/20</b></p>
                                <p>Expected Kidding Date: <b>2021/4/20</b></p>
                                <p>Next Vaccine01 Date: <b>2021/4/20</b></p>
                                <p>Next Vaccine02 Date: <b>2021/4/20</b></p>
                                <p>Next Vaccine03 Date: <b>2021/4/20</b></p>
                                <p>Presend Market Price: <b>5000</b></p>


                                <?php

                            }
                        }

                        ?>


                    </div>

                </div>
            </div>
            <div class="col-sm-9 col-12">
                <div class="row">
                    <div class="col-sm-3 col-12">
                        <div class="goat_detail_page_single_image">
                            <img src="images/b3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-3 col-12">
                        <div class="goat_detail_page_single_image">
                            <img src="images/b3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-3 col-12">
                        <div class="goat_detail_page_single_image">
                            <img src="images/b3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-12">
                        <div class="goat_detail_page_single_image">
                            <img src="images/b3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-3 col-12">
                        <div class="goat_detail_page_single_image">
                            <img src="images/b3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-3 col-12">
                        <div class="goat_detail_page_single_image">
                            <img src="images/b3.jpg" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>














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
