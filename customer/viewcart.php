<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .pdt-card{
            background-color: lightpink;
            width: 250px;
            margin: 10px;
            padding: 10px;
            display: inline-block;
        }
        .name{
            font-size: 24px;
            font-weight: bold;
            font-family: 'Segoe UI', Tahoma, Genava, Verdana, sans-serif;
        }
        .price{
            font-size: 26px;
            color: darkblue;
        }
        .price::after{
            content: " Rs";
        }
        .pdt-img{
            width: 100%;
            height: 250px;
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php

    include "authgaurd.php";
    include "../shared/connection.php";
    include "menu.html";

    $sql_result=mysqli_query($conn,"select * from cart join product on cart.pid=product.pid where userid=$_SESSION[userid]");

    while($dbrow=mysqli_fetch_assoc($sql_result)){
        echo "<div class='pdt-card'>
            <div class='name'>$dbrow[name]</div>
            <div class='price'>$dbrow[price]</div>
            <img class='pdt-img' src=$dbrow[impath]>
            <div class='detail'>$dbrow[detail]</div>
            <div class='action text-center mt-2'>
                <a href='deletecart.php?cartid=$dbrow[cartid]'>
                    <button class='btn btn-danger'>Remove from cart</button>
                </a>
            </div>
        </div>";
    }

?>