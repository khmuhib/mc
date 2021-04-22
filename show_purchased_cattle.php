<?php include "header.php"?>




<div class="container-fluid">
    <div class="">
        <div class="row bg-light py-3 my-2">
            <div class="col-12">
                <h1 class="text-center">Purchased Goat Table</h1>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Group</th>
                        <th scope="col">Color</th>
                        <th scope="col">Weight</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Take Of Milk</th>
                        <th scope="col">Birthday</th>
                        <th scope="col">Purchase Date</th>
                        <th scope="col">Purchase Price</th>
                        <th scope="col">Ear Tag</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $res = mysqli_query($link, 'select * from purchase_cattle');
                    $check_cattle = mysqli_num_rows($res) > 0;

                    if ($check_cattle) {
                        while ($row = mysqli_fetch_array($res)){
                            ?>

                            <tr>
                                <th scope="row"><?php echo $row['id'];?></th>
                                <td><?php echo $row['group_name'];?></td>
                                <td><?php echo $row['color'];?></td>
                                <td><?php echo $row['weight'];?></td>
                                <td><?php echo $row['gender'];?></td>
                                <td><?php echo $row['take_off_milk_date'];?></td>
                                <td><?php echo $row['birth_date'];?></td>
                                <td><?php echo $row['purchased_date'];?></td>
                                <td><?php echo $row['purchased_price'];?></td>
                                <td><?php echo $row['ear_tag'];?></td>
                                <td><?php echo $row['photo'];?></td>
                                <td>
                                    <a href="goat_detail_page_for_purchased.php?id=<?php echo $row['id'];?>" class="btn btn-primary"><i class="fas fa-asterisk"></i></a>
                                    <a href="edit_purchased_cattle.php?id=<?php echo $row['id'];?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="delete_purchased_cattle.php?id=<?php echo $row['id'];?>" class="btn btn-primary"><i class="fas fa-trash"></i></a>
                                    <a href="tag_ganarate_for_purchased_cattle.php?id=<?php echo $row['id'];?>" class="btn btn-primary"><i class="fas fa-tags"></i></a>
                                </td>
                            </tr>


                            <?php

                        }
                    }

                    ?>







                    </tbody>
                </table>
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
