<?php
$products = [
    "iphone" => [
        "name" => "iPhone",
        "price" => 450,
        "weight" => 200,
        "discount" => 10,
        "picture_url" => "https://cdn-apple.com/iphone-12.jpg"
    ],
    "ipad" => [
        "name" => "iPad",
        "price" => 450,
        "weight" => 400,
        "discount" => null,
        "picture_url" => "https://cdn-apple.com/ipad.jpg"
    ],
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

    <h1>  Article <?= $products["iphone"]["name"] ?> </h1>

    <p> prix:<?= $products["iphone"]["price"]?> </p>
    <p> prix:<?= $products["iphone"]["weight"]?> </p>
    <p> prix:<?= $products["iphone"]["discount"]?> </p>

    <img src="image/ <?= $products["iphone"]["picture_url"]?>" width="300" height="180" alt="photo console">

    <h2>  Article <?= $products["ipad"]["name"] ?> </h2>

    <p> prix:<?= $products["ipad"]["price"]?> </p>
    <p> prix:<?= $products["ipad"]["weight"]?> </p>
    <p> prix:<?= $products["ipad"]["discount"]?> </p>

    <img src="image/ <?= $products["ipad"]["picture_url"]?>" width="300" height="180" alt="photo console">


</body>
</html>