TEST

<?php
# Get day info from GET form request; if not present, default to `null`
$type = $_GET['type'] ?? null;

$fill = $_GET['fill'] ?? null;

$fill2 = $_GET['rice'] ?? null;

$comment = $_GET['comment'] ?? null;


$submitted = $_GET['submitted'] ?? false;
$toppings = $_GET['toppings'] ?? null;

$results = null;
if ($submitted and $toppings) {
    # Loop through each day checkbox that was selected and append its value to a string
    # Note that because the `days` checkboxes were grouped together as an array (name='days[]')
    # that they are available out of the form request as an array
    foreach ($topping as $toppings) {
        $results .= $toppings . ' ';
    }
}