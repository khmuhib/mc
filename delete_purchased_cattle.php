<?php
include "conn.php";

$id = $_GET['id'];
mysqli_query($link, "delete from purchase_cattle where id = $id");

?>

<script type="text/javascript">
    window.location="show_purchased_cattle.php";
</script>

