<?php
include "conn.php";
$ear_tag = '';
$id = $_GET['id'];
$res = mysqli_query($link, "SELECT gender from born_in_frame where id = $id");
$row = mysqli_fetch_array($res);

if ($row['gender'] === 'Male') {
    $ear_tag = 'bm0000'.$id;
    //echo $ear_tag;
    mysqli_query($link, "UPDATE `born_in_frame` SET `ear_tag`='$ear_tag' WHERE id=$id;");
}elseif ($row['gender'] === 'Female') {
    $ear_tag = 'bf0000'.$id;
    //echo $ear_tag;
    mysqli_query($link, "UPDATE `born_in_frame` SET `ear_tag`='$ear_tag' WHERE id=$id;");
}




?>

<script type="text/javascript">
    window.location="show_born_in_frame_cattle.php";
</script>