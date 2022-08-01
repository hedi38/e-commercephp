<?php
$products = ["iphone", "ipad", "imac"];

sort($products);// print ["imac", "ipad", "imac"]

//cho $products[0];//print imac
//print iphone

 $indexmax = count($products)-1;
echo $products[$indexmax];
print_r( $products);