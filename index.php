<!DOCTYPE html>

<html lang="en">

<head>

    <title>P2</title>
    <meta charset="utf-8">
    <link rel='stylesheet' href='https://bootswatch.com/4/lumen/bootstrap.min.css' type='text/css'>

</head>

<body>

<div class="container">

    <h1>Sishir Yeety</h1>
    <h2>Project 2: Chipotle Test Ordering System</h2>

    <form>
        <fieldset id="info">
            First and Last Name:<br>
            <input type="text" name="firstname"><br>
            Email:<br>
            <input type="email" name="email"><br>
            Phone Number:<br>
            <input type="text" name="phone"><br>
        </fieldset>

        <fieldset id="type">
        <h5>Type</h5>
            <input type="radio" name="type" value="burrito" checked> Burrito<br>
            <input type="radio" name="type" value="bowl"> Burrito Bowl<br>
            <input type="radio" name="type" value="hardtaco"> Hard Shell Taco<br>
            <input type="radio" name="type" value="softtaco"> Soft Shell Taco<br>
            <input type="radio" name="type" value="salad"> Salad<br>
        </fieldset>

        <fieldset id="filling">
        <h5>Meat & Tofu Selection</h5>
            <select>
                <option value="chicken">Chicken</option>
                <option value="pork">Carnitas</option>
                <option value="steak">Steak</option>
                <option value="chorizo">Chorizo</option>
                <option value="barbacoa">Barbacoa</option>
                <option value="tofu">Tofu</option>
            </select>
        </fieldset>

        <fieldset id="filling2">
        <h5>Rice/Beans/Veggies</H5>
        <h6>Rice</H6>
            <input type="radio" name="rice" value="white" checked> Brown Rice<br>
            <input type="radio" name="rice" value="brown"> White Rice<br>
            <input type="radio" name="rice" value="none"> None<br>


        <h6>Beans</H6>
            <input type="radio" name="beans" value="black" checked> Black Beans<br>
            <input type="radio" name="beans" value="pinto"> Pinto Beans<br>
            <input type="radio" name="beans" value="none"> None<br>

        <h6>Fajita Veggies?</H6>
            <input type="radio" name="veg" value="Yes" checked> Yes<br>
            <input type="radio" name="veg" value="No"> No<br>
        </fieldset>

        <fieldset id="toppings">
        <h6>Toppings</h6>
            <input type="checkbox" name="queso" value="queso"> Queso<br>
            <input type="checkbox" name="sourcream" value="sourcream"> Sour Cream<br>
            <input type="checkbox" name="guac" value="guac"> Guacamole<br>
            <input type="checkbox" name="mild" value="mild"> Mild Salsa<br>
            <input type="checkbox" name="medium" value="medium1"> Medium Salsa<br>
            <input type="checkbox" name="medium2" value="medium2"> Medium Corn Salsa<br>
            <input type="checkbox" name="hot" value="hot"> Hot Salsa<br>
            <input type="checkbox" name="cheese" value="cheese"> Shredded Cheese<br>
        </fieldset>

        <fieldset id="info2">
        <h6>Special Instructions</h6>
        <textarea rows="4" cols="50" name="comment" form="usrform">Type Here...</textarea>

        <br>
        <input type="submit" value="Submit">

    </form>

</div>

</body>

</html>