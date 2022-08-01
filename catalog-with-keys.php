<?php

$products = [
    "name" => "iPhone",
    "price" => 45000,
    "weight" => 200,
    "discount" => 10,
    "picture_url" => "image-iphone13.jfif",
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Meilleurs site e-commerce </title>
</head>
<body>
<h1>  Article <?= $products["name"] ?> </h1>

<p> prix:<?= $products["price"]?> </p>

<img src="image/ <?= $products["picture_url"]?>" width="300" height="180" alt="photo console">

</body>
</html>
