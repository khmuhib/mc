<?php
include "header.php";

$id = $_GET['id'];
mysqli_query($link, "delete from entry where id='$id'") or die(mysqli_error($link));
header("Location: test_show_data.php");
exit();
?>

