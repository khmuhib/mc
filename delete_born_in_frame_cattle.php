<?php
include "conn.php";
$id = $_GET['id'];



mysqli_query($link, "delete from born_in_frame where id = $id");

?>

<script type="text/javascript">
    window.location="show_born_in_frame_cattle.php";
</script>

