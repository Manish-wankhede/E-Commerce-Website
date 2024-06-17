<?php

    include "authgaurd.php";
    include "../shared/connection.php";
    include "menu.html";

    $cartid=$_GET['cartid'];

    $status=mysqli_query($conn,"delete from cart where cartid=$cartid");

    if($status){
        echo "Product Remove from Cart";
        header("location:viewcart.php");
    }
    else{
        echo mysqli_error($conn);
    }
?>
