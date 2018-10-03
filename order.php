<?php
require 'logic.php';
?>


<!DOCTYPE html>

<html lang="en">

<head>

    <title>P2: Order Page</title>
    <meta charset="utf-8">
    <link rel='stylesheet' href='https://bootswatch.com/4/spacelab/bootstrap.min.css' type='text/css'>

</head>

<body>

<div class="container">

    <h1>Sishir Yeety</h1>
    <h2>Project 2: Order Page</h2>

    <form>
        <fieldset class='type'>
            <h5>Type</h5>
            <input type='radio' name='type' value='burrito' checked<?php if (isset($type) and $type == 'burrito') echo 'checked' ?>> Burrito<br>
            <input type='radio' name='type' value='burrito bowl' <?php if (isset($type) and $type == 'burrito bowl') echo 'checked' ?>> Burrito Bowl<br>
            <input type='radio' name='type' value='hard taco' <?php if (isset($type) and $type == 'hard taco') echo 'checked' ?>> Hard Shell Taco<br>
            <input type='radio' name='type' value='soft taco' <?php if (isset($type) and $type == 'soft taco') echo 'checked' ?>> Soft Shell Taco<br>
            <input type='radio' name='type' value='salad' <?php if (isset($type) and $type == 'salad') echo 'checked' ?>> Salad<br>
        </fieldset>

        <fieldset class='fill'>
            <h5>Meat & Tofu Selection</h5>
            <select name='fill' id='fill'>
                <option value='chicken' <?php if ($fill == 'chicken') echo 'selected' ?>>Chicken</option>
                <option value='carnitas' <?php if ($fill == 'carnitas') echo 'selected' ?>>Carnitas</option>
                <option value='steak' <?php if ($fill == 'steak') echo 'selected' ?>>Steak</option>
                <option value='chorizo' <?php if ($fill == 'chorizo') echo 'selected' ?>>Chorizo</option>
                <option value='barbacoa' <?php if ($fill == 'barbacoa') echo 'selected' ?>>Barbacoa</option>
                <option value='sofritas' <?php if ($fill == 'sofritas') echo 'selected' ?>>Sofritas(Tofu)</option>
            </select>
        </fieldset>

        <fieldset class='rice'>
            <h5>Fillings</h5>
            <h6>Rice</h6>
            <input type='radio' name='rice' value='White Rice' checked<?php if (isset($rice) and $rice == 'White Rice') echo 'checked' ?>> White Rice<br>
            <input type='radio' name='rice' value='Brown Rice' <?php if (isset($rice) and $rice == 'Brown Rice') echo 'checked' ?>> Brown Rice<br>
            <input type='radio' name='rice' value='None' <?php if (isset($rice) and $rice == 'None') echo 'checked' ?>> None<br>
        </fieldset>

        <fieldset class='beans'>
            <h6>Bean</h6>
            <input type='radio' name='beans' value='Black Beans' checked<?php if (isset($beans) and $beans == 'White Rice') echo 'checked' ?>> Black Beans<br>
            <input type='radio' name='beans' value='Pinto Beans' <?php if (isset($beans) and $beans == 'Brown Rice') echo 'checked' ?>> Pinto Beans<br>
            <input type='radio' name='beans' value='None' <?php if (isset($beans) and $beans == 'None') echo 'checked' ?>> None<br>
        </fieldset>

        <fieldset class='veggies'>
            <h6>Fajita Veggies</h6>
            <input type='radio' name='veggies' value='Yes' checked<?php if (isset($veggies) and $veggies == 'Yes') echo 'checked' ?>> Yes<br>
            <input type='radio' name='veggies' value='No' <?php if (isset($veggies) and $veggies == 'No') echo 'checked' ?>> No<br>
        </fieldset>

        <fieldset id="toppings">
            <h6>Toppings</h6>
            <input type='checkbox' name='toppings[]' value='queso' <?php if (strstr($results, 'queso')) echo 'checked' ?>> Queso<br>
            <input type='checkbox' name='toppings[]' value='sourcream' <?php if (strstr($results, 'sour cream')) echo 'checked' ?>> Sour Cream<br>
            <input type='checkbox' name='toppings[]' value='guac' <?php if (strstr($results, 'guac')) echo 'checked' ?>> Guacamole<br>
            <input type='checkbox' name='toppings[]' value='mild' <?php if (strstr($results, 'mild salsa')) echo 'checked' ?>> Mild Red Salsa<br>
            <input type='checkbox' name='toppings[]' value='medium red salsa' <?php if (strstr($results, 'med red salsa')) echo 'checked' ?>> Med Red Salsa<br>
            <input type='checkbox' name='toppings[]' value='medium corn salsa' <?php if (strstr($results, 'med corn salsa')) echo 'checked' ?>> Med Corn Salsa<br>
            <input type='checkbox' name='toppings[]' value='hot salsa' <?php if (strstr($results, 'hot salsa')) echo 'checked' ?>> Hot Salsa<br>
            <input type='checkbox' name='toppings[]' value='cheese' <?php if (strstr($results, 'cheese')) echo 'checked' ?>> Shredded Cheese<br>
        </fieldset>

        <fieldset id="comment">
            <h6>Special Instructions</h6>
            <textarea name="comment" rows="2" cols="40"><?php echo $comment;?></textarea>
        </fieldset>

        <br>

        <?php if ($_GET) : ?>
            <br>
            <div class='alert alert-info' role='alert'>
                You selected: <?= ucfirst($comment) ?><br>
            </div>
        <?php endif; ?>

        <input type="submit" value="Submit">
    </form>

</div>

</body>

</html>


