<?php
require('my-function.php');
require ('catalogue.php');
global $products;
$total=$_POST['quantity'];
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

 <?php foreach ( $products as $key => $product ){ ?>
     <div>
        <h1>Article <?= $product["name"] ?>  </h1>
         <p> Prix:<?php formatPrice($product["price"]) ?> </p>
         <p> Prix HT:<?php formatPrice(priceExcludingVAT($product["price"],$total)) ?> </p>
         <p> Poids:<?= $product["weight"] ?> </p>
         <p>  Avec reduction:<?php formatPrice(discountedPrice($product["price"] , $product["discount"]))?> </p>
         <p>  Avec HT reduction:<?php formatPrice (discountedPrice(priceExcludingVAT($product["price"],$total),$product["discount"]))?> </p>
         <img src=" <?= $product["picture_url"]?>" width="300" height="180" alt="photo console">
         <form method="post" action="panier.php">
             <label for="quantity"> quantity</label>
              <input type="number" name="quantity" min="1" max="10">
             <input type="hidden"  name="valeur" value="<?= $key ?>">
             <br>
             <input type="submit" value="COMMANDER">
         </form>
     </div>
<?php } ?>

</body>
</html>