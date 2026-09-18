<?php
  if (isset($_GET["lowl"])) {
    $Fullname = $_GET["Fullname"];
    $Phone    = $_GET["Phone"];
    $CNE      = $_GET["CNE"];
    $options  = $_GET["options"];
    $Prodact  = $_GET["Prodact"];
  }
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>store</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <form action="" method="GET" class="store">
            <h1>MAN-STORE</h1>
            <input type="text" name="Fullname" id="" class="info" placeholder="Fullname">
            <input type="text" name="Phone" id="" class="info" placeholder="Phone">
            <input type="text" name="CNE" id="" class="info" placeholder="CNE">
            <select name="options" id="" class="options">
                <option value="Clothes">Clothes</option>
                <option value="Caps">Caps</option>
                <option value="Shouses">Shouses</option>
            </select>
            <input type="text" name="Prodact" id="" placeholder="Prodact" class="info">
            <div class="buttons">
                <button type="submit" name="lowl">Add</button>
                <button type="submit">Delete</button>
            </div>
            <div class="buttons">
                <button type="submit">Update</button>
                <button type="submit">Cancel</button>
            </div>
    </form>
</body>
</html>