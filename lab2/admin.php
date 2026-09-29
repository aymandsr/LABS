<?php
  if (isset($_GET["add"])) {
    $Productname = $_GET["Productname"];
    $Price    = $_GET["Price"];
    $Stock      = $_GET["Stock"];
    $options  = $_GET["options"];
    $Discription  = $_GET["Discription"];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>store</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <form action="" method="post"></form>
        <div class="store">
        
            <h1>Product details</h1>
            <input type="text" name="" id="" class="info" placeholder="Product name">
            <input type="text" name="" id="" class="info" placeholder="Price">
            <input type="text" name="" id="" class="info" placeholder="Stock">
            <select name="options" id="" class="options">
    <form action="" method="GET" class="store">
            <h1>Product details</h1>
            <input type="text" name="Productname" id="" class="info" placeholder="Productname">
            <input type="text" name="Price" id="" class="info" placeholder="Price">
            <input type="text" name="Stock" id="" class="info" placeholder="Stock">
            <select name="options" id="" class="options" >
                <option value=""></option>
                <option value="">Clothes</option>
                <option value="">Caps</option>
                <option value="">Shouses</option>
            </select>
            <input type="text" name="" id="" placeholder="Discription" class="info">
            <div class="buttons">
                <button type="submit">Add to store</button>
                <button type="submit">Delete from store</button>
            </div>
        </div>
            <input type="text" name="Discription" id="" placeholder="Discription" class="info">
            <div class="buttons">
                <button type="submit" name ="add">Add to store</button>
                <button type="submit">Delete_from store</button>
            </div>
    </form>
</body>
</html>