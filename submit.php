<?php

$qty=$_GET["noOfPizza"];
$shape=$_GET["shape"];
$size=$_GET["size"];
$price=0;

if(($shape=="Circle" || $shape=="circle")&&($size=="small")){
    $finalprice=$qty*12 + ((18/100)*$price);
}
else if(($shape=="Circle" || $shape=="circle")&&($size=="medium")){
    $finalprice=$qty*14 + ((18/100)*$price);
}
else if(($shape=="Circle" || $shape=="circle")&&($size=="large")){
    $finalprice=$qty*16 + ((18/100)*$price);
}
else if(($shape=="Circle" || $shape=="circle")&&($size=="x-large")){
    $finalprice=$qty*18 + ((18/100)*$price) ;
}
else if(($shape=="Square" || $shape=="square")&&($size=="small")){
    $finalprice=$qty*13 + ((18/100)*$price) ;
}
else if(($shape=="Square" || $shape=="square")&&($size=="medium")){
    $finalprice=$qty*15 + ((18/100)*$price);
}
else if(($shape=="Square" || $shape=="square")&&($size=="large")){
    $finalprice=$qty*17 + ((18/100)*$price);
}
else{
    $finalprice=$qty*19 + ((18/100)*$price);
}

echo("Thanks for ordering. Please pay" .$finalprice." at checkout");