<?php include "header.php"?>

<div class="container-fluid">
    <div class="container my-2">
        <form method="post" action="" name="search">
            <div class="form-group row">
                <div class="col-2">
                    <input type="submit" name="search_01" value="Search Books" class="btn btn-primary ">
                </div>
                <div class="col-10">
                    <input type="text" class="form-control" placeholder="Search Here" name="t1">

                </div>
            </div>

        </form>
    </div>
</div>

<div class="container-fluid">
    <div class="">
        <div class="row bg-light py-3 my-2">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Date</th>
                            <th scope="col">Area</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Interest</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>



                    <?php

                    if (isset($_POST["search_01"])){
                        $res = mysqli_query($link , "select * from entry where id like ('$_POST[t1]%')");
                        $check_cattle = mysqli_num_rows($res) > 0;
                        if ($check_cattle) {
                            while ($row = mysqli_fetch_array($res)){
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id'];?></th>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['pass'];?></td>
                                    <td><?php echo $row['phone_number'];?></td>
                                    <td><?php echo $row['date'];?></td>
                                    <td><?php echo $row['area'];?></td>
                                    <td><?php echo $row['gender'];?></td>
                                    <td><?php echo $row['interest'];?></td>
                                    <td><img src="images/goat/<?php echo $row['photo'];?>" alt="" class="table_data_img"></td>
                                    <td>
                                        <a href="test_edit_data.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a>
                                        <a href="test_delete_data.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>

                                <?php

                            }
                        }else {
                            echo "<span style='color: red; font-weight: bold'>No Data Recorded</span>";
                        }
                        ?>



                        <?php
                    }else{
                        $res = mysqli_query($link, "select * from entry");
                        $check_cattle = mysqli_num_rows($res) > 0;
                        if ($check_cattle) {
                            while ($row = mysqli_fetch_array($res)){
                                ?>

                                <tr>
                                    <th scope="row"><?php echo $row['id'];?></th>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['pass'];?></td>
                                    <td><?php echo $row['phone_number'];?></td>
                                    <td><?php echo $row['date'];?></td>
                                    <td><?php echo $row['area'];?></td>
                                    <td><?php echo $row['gender'];?></td>
                                    <td><?php echo $row['interest'];?></td>
                                    <td><img src="images/goat/<?php echo $row['photo'];?>" alt="" class="table_data_img"></td>
                                    <td>
                                        <a href="test_edit_data.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a>
                                        <a href="test_delete_data.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>


                                <?php

                            }
                        }else{
                            echo "<span style='color: red; font-weight: bold'>No Data Recorded</span>";
                        }

                    }




                    ?>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<a href="test_add_data.php" class="btn btn-primary d-block m-auto w-25">Back</a>









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
