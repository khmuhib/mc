

<?php
$link = mysqli_connect("localhost", "root", "") or die(mysqli_error($link));
$conn = mysqli_select_db($link , "php_core_oparation") or die(mysqli_error($link));

/*if ($conn) {
    */?><!--
    <script>
        alert('conection sucessfull');
    </script>
    <?php
/*}else {
    */?>
    <script>
        alert('conection not sucessfull');
    </script>
    --><?php
/*}*/

?>
