<?php
require_once('header.php');
require_once('catalogue.php');
require_once ('my-function.php');
$key = $_POST['valeur'];
global $products;
$total = $_POST["quantity"];

 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title> Meilleurs site e-commerce </title>
</head>
<body>
<div class="container justify-content-center  text-center border-primary border-top bg-dark text-white">

    <div class="row">
        <div class="col-md">
            <p> Article </p>

            <p>  <?= $products[$key]['name'] ?> </p>
        </div>

        <div class="col-md">
            <p> Prix unitaire </p>

            <p> <?php formatPrice($products[$key]['price']) ?> </p>
        </div>

        <div class="col-md">
            <p> Quantité </p>

            <p> <?= $_POST["quantity"] ?> </p>

            <p> Prix hors taxe: </p>

            <p> total TVA: </p>
        </div>

        <div class="col-md">
            <p>total</p>
            <p> <?php formatPrice(totall($products[$key]["price"],$total))?> </p>

            <p> <?php formatPrice(priceExcludingVAT($products[$key]["price"],$total)) ?> </p>

            <p> <?php formatPrice(priceTva($products[$key]["price"],$total)) ?> </p>
        </div>
    </div>
</div>

<div class="container justify-content-center  text-center border-primary border-top bg-dark text-white">

    <div class="row">

        <div class="col-md">
            <p> Choix du transporteur </p>

            <p>
            <form method="post" action="panier.php">
                <input type="hidden"  name="valeur" value="<?= $key ?>">
                <select class="me-5 rounded-pill p-2" style="width: 60% " >
                    <option>Chronopost</option>
                    <option>LA poste</option>
                </select>
                <input type="submit" value="COMMANDER" class="">
            </form>
            </p>
        </div>
        <div class="col-md">
            <p>
            <br>
            </p>

            <p>


            </p>

        </div>
        <div class="col-md">
            <p>
<br>
            </p>

            <p> Total FDP:</p>
        </div>
        <div class="col-md">
            <p>
                FDP
            </p>
            <p>
                <?php   priceTransport($products[$key]['price'],$products[$key]['weight'],$total) ?>
            </p>
        </div>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>
</html>
<?php require('footer.php'); ?>