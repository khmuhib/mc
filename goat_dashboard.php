<?php include "header.php"?>

<?php

//total goat
$purchase_goat_table = mysqli_query($link, "select * from purchase_cattle");
$total_purchase_cattle = mysqli_num_rows($purchase_goat_table);

$born_in_frame_table = mysqli_query($link, "select * from born_in_frame");
$total_born_in_frame = mysqli_num_rows($born_in_frame_table);

$total_cattle = $total_purchase_cattle + $total_born_in_frame;


//total Male
$purchase_goat_table_male_cattle = mysqli_query($link, "select gender from purchase_cattle where gender = 'male'");
$total_purchase_male_cattle = mysqli_num_rows($purchase_goat_table_male_cattle);

$born_in_frame_table_male_cattle = mysqli_query($link, "select gender from born_in_frame where gender = 'male'");
$total_born_in_frame_male_cattle = mysqli_num_rows($born_in_frame_table_male_cattle);

$total_male_cattle = $total_purchase_male_cattle + $total_born_in_frame_male_cattle;

//total Female
$purchase_goat_table_female_cattle = mysqli_query($link, "select gender from purchase_cattle where gender = 'female'");
$total_purchase_female_cattle = mysqli_num_rows($purchase_goat_table_female_cattle);

$born_in_frame_table_female_cattle = mysqli_query($link, "select gender from born_in_frame where gender = 'female'");
$total_born_in_frame_female_cattle = mysqli_num_rows($born_in_frame_table_female_cattle);

$total_female_cattle = $total_purchase_female_cattle + $total_born_in_frame_female_cattle;





?>

<div class="container-fluid">
    <div class="">
        <div class="row bg-light py-3 my-2">
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center">
                    <h1>Total Goat</h1>
                    <h3><?php echo $total_cattle;?></h3>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center">
                    <h1>Female Goat</h1>
                    <h3><?php echo $total_female_cattle;?></h3>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center">
                    <h1>Male Goat</h1>
                    <h3><?php echo $total_male_cattle;?></h3>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center">
                    <h1>Patha</h1>
                    <h3>10</h3>
                </div>
            </div>
        </div>
        <div class="row bg-light py-3 my-2">
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center">
                    <h1>Group 5 Goat</h1>
                    <h3>500</h3>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center">
                    <h1>Group 6 Goat</h1>
                    <h3>100</h3>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center">
                    <h1>Group 7 Goat</h1>
                    <h3>390</h3>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center">
                    <h1>Group 8 Goat</h1>
                    <h3>10</h3>
                </div>
            </div>
        </div>
        <div class="row bg-light py-3 my-2">
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center">
                    <h1>Upcoming Delivery</h1>
                    <h3>500</h3>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center">
                    <h1>Recent Delivery</h1>
                    <h3>100</h3>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center">
                    <h1>Weighless Goat</h1>
                    <h3>390</h3>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center">
                    <h1>Today's Delivery</h1>
                    <h3>10</h3>
                </div>
            </div>
        </div>
        <div class="row bg-light py-3 my-2">
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center">
                    <h1>Upcoming Breeding</h1>
                    <h3>500</h3>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center">
                    <h1>Today's Breeding</h1>
                    <h3>100</h3>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center bg-info">
                    <h1>Upcoming PPR Vaccine</h1>
                    <h3>390</h3>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center bg-danger">
                    <h1>Incomplete Info</h1>
                    <h3>10</h3>
                </div>
            </div>
        </div>
        <div class="row bg-light py-3 my-2">
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center">
                    <h1>Total Goat Price</h1>
                    <h3>150000</h3>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center">
                    <h1>Pregnant Goat</h1>
                    <h3>100</h3>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center">
                    <h1>Total Kids</h1>
                    <h3>390</h3>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center">
                    <h1>Saleable</h1>
                    <h3>10</h3>
                </div>
            </div>
        </div>
        <div class="row bg-light py-3 my-2">
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center">
                    <h1>Group 1 Goat</h1>
                    <h3>500</h3>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center">
                    <h1>Group 2 Goat</h1>
                    <h3>100</h3>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center">
                    <h1>Group 3 Goat</h1>
                    <h3>390</h3>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="goat_detail_header_card text-center">
                    <h1>Group 4 Goat</h1>
                    <h3>10</h3>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="container-fluid">
    <div class="">
        <div class="row bg-light py-3 my-2">
            <div class="col-md-2 col-12">
                <div class="goat_detail_card">
                    <div class="goat_detail_card_img">
                        <img src="images/b3.jpg" alt="">
                    </div>
                    <div class="goat_detail_card_detail">
                        <p>Ear Tag: pur01</p>
                        <p>Breading Date: 2021/4/20</p>
                        <p>Expected Kidding Date: 2021/4/20</p>
                        <p>Presend Market Price: 5000</p>
                    </div>
                    <div class="goat_detail_button">
                        <input type="submit" value="View More" class="btn btn-primary d-block mx-2">
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
