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

if ($submitted and $toppings) {
    foreach ($topping as $toppings) {
        $results .= $toppings . ' ';
    }
}

if (empty($toppings)) {
    return $commaList = 'None';
} else {
    return $commaList = implode(', ', $toppings);
}


$total = null;

if ($fill != "sofritas") {
    return $total = "$7.95";
}
else if ($fill == "sofritas") {
    return $total = "$6.50";
}
