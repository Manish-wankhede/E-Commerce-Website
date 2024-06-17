<?php
    include "authgaurd.php";
    include "menu.html"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="d-flex justify-content-center align-item-center vh-100"> 
        <form action="upload.php" enctype="multipart/form-data" method="post" class="bg-secondary w-50 p-4">
            <h4 class="text-center text-white">Upload Product Here...</h4>
            <input class="form-control mt-2" require type="text" placeholder="Product Name" name="name">
            <input class="form-control mt-2" require type="number" min="0" placeholder="Product Price" name="price">
            <textarea class="form-control mt-2" require placeholder="Product Description" name="detail"></textarea>
            <input class="form-control mt-2" type="file" name="pdtimg" accept=".jpg,.png">
            
            <div class="text-center">
                <button class="btn btn-danger mt-2">Upload</button>
            </div>
        </form>
    </div>
</body>
</html>