<?php
require 'test.php';
require 'validation-logic.php';
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <title>P2</title>
    <meta charset="utf-8">
    <link rel='stylesheet' href='https://bootswatch.com/4/spacelab/bootstrap.min.css' type='text/css'>

</head>

<body>

<div class="container">

    <h1>Sishir Yeety</h1>
    <h2>Project 2: Chipotle Test Ordering System</h2>

    <?php if (isset($errors) && $errors) : ?>
        <div class='alert alert-danger'>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form>
        <fieldset id="info">
            <h5>Customer Information</h5>
            <label for='email'>Email</label>
            <input type='text' name='email' id='email' value='<?= $form->get('email', 'test@gmail.com') ?>'><br>
            <label for='firstname'>First Name (required|alpha)</label>
            <input type='text' name='firstname' id='firstname' value='<?= $form->get('firstname', 'John') ?>'><br>
            <label for='lastname'>Last Name (required|alpha)</label>
            <input type='text' name='lastname' id='lastname' value='<?= $form->get('lastname', 'Smith') ?>'><br>
            <label for='age'>Phone Numbers</label>
            <input type='text' name='phone' value='<?= $form->get('phone', '2075551234') ?>'><br>
        </fieldset>

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


        <!--        <fieldset id="type">-->
<!--            <input type="radio" name="type" value="burrito" checked> Burrito<br>-->
<!--            <input type="radio" name="type" value="bowl"> Burrito Bowl<br>-->
<!--            <input type="radio" name="type" value="hardtaco"> Hard Shell Taco<br>-->
<!--            <input type="radio" name="type" value="softtaco"> Soft Shell Taco<br>-->
<!--            <input type="radio" name="type" value="salad"> Salad<br>-->
<!--        </fieldset>-->
<!---->
<!--        <fieldset id="filling">-->
<!--            <select>-->
<!--                <option value="chicken">Chicken</option>-->
<!--                <option value="pork">Carnitas</option>-->
<!--                <option value="steak">Steak</option>-->
<!--                <option value="chorizo">Chorizo</option>-->
<!--                <option value="barbacoa">Barbacoa</option>-->
<!--                <option value="tofu">Tofu</option>-->
<!--            </select>-->
<!--        </fieldset>-->
<!---->
<!--        <fieldset id="filling2">-->
<!--        <h5>Rice/Beans/Veggies</H5>-->
<!--        <h6>Rice</H6>-->
<!--            <input type="radio" name="rice" value="white" checked> Brown Rice<br>-->
<!--            <input type="radio" name="rice" value="brown"> White Rice<br>-->
<!--            <input type="radio" name="rice" value="none"> None<br>-->
<!---->
<!---->
<!--        <h6>Beans</H6>-->
<!--            <input type="radio" name="beans" value="black" checked> Black Beans<br>-->
<!--            <input type="radio" name="beans" value="pinto"> Pinto Beans<br>-->
<!--            <input type="radio" name="beans" value="none"> None<br>-->
<!---->
<!--        <h6>Fajita Veggies?</H6>-->
<!--            <input type="radio" name="veg" value="Yes" checked> Yes<br>-->
<!--            <input type="radio" name="veg" value="No"> No<br>-->
<!--        </fieldset>-->
<!---->
<!--        <fieldset id="toppings">-->
<!--        <h6>Toppings</h6>-->
<!--            <input type="checkbox" name="queso" value="queso"> Queso<br>-->
<!--            <input type="checkbox" name="sourcream" value="sourcream"> Sour Cream<br>-->
<!--            <input type="checkbox" name="guac" value="guac"> Guacamole<br>-->
<!--            <input type="checkbox" name="mild" value="mild"> Mild Salsa<br>-->
<!--            <input type="checkbox" name="medium" value="medium1"> Medium Salsa<br>-->
<!--            <input type="checkbox" name="medium2" value="medium2"> Medium Corn Salsa<br>-->
<!--            <input type="checkbox" name="hot" value="hot"> Hot Salsa<br>-->
<!--            <input type="checkbox" name="cheese" value="cheese"> Shredded Cheese<br>-->
<!--        </fieldset>-->
<!---->
<!--        <fieldset id="info2">-->
<!--        <h6>Special Instructions</h6>-->
<!--        <textarea rows="4" cols="50" name="comment" form="usrform">Type Here...</textarea>-->
<!---->
        <br>
        <input type="submit" value="Submit">

        <?php if ($_GET) : ?>
            <div class='alert alert-info' role='alert'>
                You selected: <?= ucfirst($type) ?>
                Filling: <?= ucfirst($fill) ?>
            </div>



        <?php endif; ?>

    </form>

</div>

</body>

</html>