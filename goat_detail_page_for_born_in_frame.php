<?php include "header.php"?>

<div class="container-fluid">
    <div class="">
        <div class="row bg-light py-3 my-2">
            <div class="col-sm-3 col-12">
                <div class="goat_detail_card">
                    <div class="goat_detail_card_detail">

                        <?php

                        $id = $_GET['id'];


                        $res = mysqli_query($link, "select * from born_in_frame where id=$id");
                        $check_cattle = mysqli_num_rows($res) > 0;

                        if ($check_cattle) {
                        while ($row = mysqli_fetch_array($res)) {
                        //age in secound = 60*60*24*365
                        //age in days = 60*60*24

                        $birth_date = $row['birthdate'];
                        $todays_date = date("Y-m-d");

                        $expected_take_of_milk_date = date('Y-m-d', strtotime($birth_date.'+90 days'));
                        $expected_breeding_date = date('Y-m-d', strtotime($birth_date.'+180 days'));
                        $expected_kedding_date = date('Y-m-d', strtotime($expected_breeding_date.'+30 days'));
                        $next_breeding_date = date('Y-m-d', strtotime($expected_breeding_date.'+180 days'));


                        $age = date_diff(date_create($birth_date), date_create('today'));

                        //$birth_date_for_day = strtotime($row['birthdate']);
                        //$todays_date_for_day = strtotime(date("Y-m-d"));

                        //$temp_age = date_diff(date_create($birth_date), date_create('today'));
                        //$temp_age_for_day = $birth_date_for_day - $todays_date_for_day;
                        //$age = floor($temp_age_for_day/(60*60*24));

                        $weight = $row['weight']*1000;
                        $per_day_weight_gain = 50;
                        $expected_wight_gain_temp = date_diff(date_create($birth_date), date_create('today'));
                        $expected_wight_gain_day_temp = $expected_wight_gain_temp->days;
                        $expected_wight_gain = (($expected_wight_gain_day_temp*50)+$weight);
                        $expected_price = $expected_wight_gain*500;
                            //$age = $age->format('%y');
                        ?>

                            <p>ID: <b><?php echo $row['id'];?></b></p>
                            <p>Ear Tag: <b><?php echo $row['ear_tag'];?></b></p>
                            <p>Group: <b><?php echo $row['mother_ear_tag'];?></b></p>
                            <p>Color: <b><?php echo $row['color'];?></b> </p>
                            <p>Weight: <b><?php echo $row['weight'];?></b> </p>
                            <p>Gender: <b><?php echo $row['gender'];?></b> </p>
                            <p>Age : <b><?php echo $age->days." days";?></b> </p>
                            <p>Kids: <b>5</b></p>
                            <hr>
                            <p>Birth Date : <b><?php echo $row['birthdate'];?></b> </p>
                            <p>Take Off Milk Date : <b><?php echo $expected_take_of_milk_date;?></b> </p>
                            <p>Breading Date: <b><?php echo $expected_breeding_date;?></b></p>
                            <p>Expected Kidding Date: <b><?php echo $expected_kedding_date;?></b></p>
                            <p>Kidding Date: <b><?php echo $expected_kedding_date;?></b></p>
                            <p>Next Breading Date: <b><?php echo $expected_breeding_date;?></b></p>
                            <hr>
                            <p>Eating Heard Food : <b>20 days</b> </p>
                            <p>Expected Kidding Remaining: <b>20 days</b></p>
                            <p>Next Breading Date Remaining: <b>20 days</b></p>
                            <hr>
                            <p>Per Days Weight Gain: <b><?php echo $per_day_weight_gain."gm";?></b></p>
                            <p>Expected Weight Gain: <b><?php echo ($expected_wight_gain)."gm";?></b></p>
                            <p>Weight Gain: <b><?php echo $expected_wight_gain."gm";?></b></p>
                            <p>Expected Present Market Price: <b><?php echo $expected_price/1000;?></b></p>
                            <p>His Costing: <b><?php echo $expected_price/1000;?></b></p>
                            <p>Profit Gain(%): <b>60% profit till Today</b></p>
                            <hr>
                            <p>Next Vaccine02 Date: <b>2021/4/20</b></p>
                            <p>Next Vaccine02 Date: <b>2021/4/20</b></p>
                            <p>Next Vaccine02 Date: <b>2021/4/20</b></p>
                            <hr>
                            <p>Expected Breeding Date: 2021/4/20</p>
                            <p>First Breeding Date: 2021/4/20</p>
                            <p>Expected Kidding Date: 2021/4/20</p>
                            <p>Kidding Date: 2021/4/20</p>
                            <p>Expected Next Breed Date: 2021/4/20</p>
                            <p>Delivery: 2 time</p>

                            <?php

                            }

                        }




                        ?>


                    </div>
<!--                    <div class="goat_detail_button">
                        <input type="submit" value="View More" class="btn btn-primary d-block mx-2">
                    </div>-->
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
