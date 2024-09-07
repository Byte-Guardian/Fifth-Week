<?php
   
    include('config.php');
    include('products.php');
    
    $ID = $_GET['id'];
    mysqli_query($con, "DELETE FROM prod WHERE `prod`.`id` = $ID");
    header('location: products.php');

?>