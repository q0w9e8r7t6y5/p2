<?php
require 'validation-logic.php';
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <title>P2: Main Page</title>
    <meta charset="utf-8">
    <link rel='stylesheet' href='https://bootswatch.com/4/spacelab/bootstrap.min.css' type='text/css'>

</head>

<body>

<div class="container">

    <h2>Sishir Yeety</h2>
    <h4>Project 2: Food Ordering System</h4><br>

    <h6><b>Please enter in your information and press submit to continue to the order page</b></h6><br>

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
            <label for='email'>Email:</label>
            <input type='text' name='email' id='email' value='<?= $form->get('email', 'username@email.com') ?>'><br>
            <label for='firstname'>First Name:</label>
            <input type='text' name='firstname' id='firstname' value='<?= $form->get('firstname', 'John') ?>'><br>
            <label for='lastname'>Last Name:</label>
            <input type='text' name='lastname' id='lastname' value='<?= $form->get('lastname', 'Smith') ?>'><br>
            <label for='phone'>Phone Number:</label>
            <input type='text' name='phone' id='phone' value='<?= $form->get('phone', '2075551234') ?>'><br>
        </fieldset>
        <br>

        <input type="submit" value="Submit">
    </form>

</div>

</body>

</html>