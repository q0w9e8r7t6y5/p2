<?php

$type = $_GET['type'] ?? null;

$fill = $_GET['fill'] ?? null;

$beans = $_GET['beans'] ?? null;

$rice = $_GET['rice'] ?? null;

$veggies = $_GET['veggies'] ?? null;

$toppings = $_GET['toppings'] ?? null;

$comment = $_GET['comment'] ?? null;

$submitted = $_GET['submitted'] ?? false;

$results = null;

$results .= $toppings;

if (empty($toppings)) {
    return $commaList = 'None';
}

else {
    return $commaList = implode(', ', $toppings);
}


//if ($fill != 'sofritas') {
//    return $total = 6.95;
//}
//
//else {
//    return $total = 7.95;
//}
//
//$rice = $_GET['rice'] ?? null;
