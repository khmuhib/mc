<?php
include "conn.php";
$ear_tag = '';
$id = $_GET['id'];
$res = mysqli_query($link, "SELECT gender from purchase_cattle where id = $id");
$row = mysqli_fetch_array($res);

if ($row['gender'] === 'Male') {
    $ear_tag = 'mm0000'.$id;
    echo $ear_tag;
    mysqli_query($link, "UPDATE `purchase_cattle` SET `ear_tag`='$ear_tag' WHERE id=$id;");
}elseif ($row['gender'] === 'Female') {
    $ear_tag = 'mf0000'.$id;
    echo $ear_tag;
    mysqli_query($link, "UPDATE `purchase_cattle` SET `ear_tag`='$ear_tag' WHERE id=$id;");
}




?>

<script type="text/javascript">
    window.location="show_purchased_cattle.php";
</script>