<?php
require_once('catalogue.php');

function formatPrice($price)
{

    $price = $price / 100;
    echo number_format($price, 2) . "€";

}

function priceExcludingVAT($price, int $tva = 20)
{

    return (100 * $price) / (100 + $tva);
}

function discountedPrice($price, $discount)
{
    $discount = $discount / 100;
    return $price - ($price * $discount);
}

function priceTva($price, $total, int $tva = 20)
{
    return (($price / 120) * $tva) * $total;
}

function totall($total, $price)
{
    return $total * $price;
}

function priceTransport($price, $weight, $total): bool
{
    $weight = $weight * $total;
    if ($weight < 500) {
        $price = 500 / 100;
        echo number_format($price, 2) . "€";

    } else if ($weight > 500 && $weight < 2000) {
        $price = ($price * 0.1) / 100;
        echo number_format($price, 2) . "€";
    } else {
        $price = 0;
        echo number_format($price, 2) . "€";
    }

    return $price;
}
function checkQuantity($total): void{
    if($total<1){
        header("Location: http://localhost/e-commercephp/404.php");
        exit;
    }
}
function checkIssetPostKey($key,$total){

    if (!isset($key) || !isset($total)){
        header("Location: http://localhost/e-commercephp/index.php");
        exit;
    }
}

