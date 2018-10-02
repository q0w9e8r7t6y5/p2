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
    <h2>Project 2: Chipotle "Express" Ordering System</h2>

    <form>
        First and Last Name:<br>
        <input type="text" name="firstname"><br>
        Email:<br>
        <input type="email" name="email"><br>
        Phone Number:<br>
        <input type="text" name="phone"><br>
    </form>

    <h5>Type</h5>

    <form>
        <input type="radio" name="type" value="burrito" checked> Burrito<br>
        <input type="radio" name="type" value="bowl"> Burrito Bowl<br>
        <input type="radio" name="type" value="hardtaco"> Hard Shell Taco<br>
        <input type="radio" name="type" value="softtaco"> Soft Shell Taco<br>
        <input type="radio" name="type" value="salad"> Salad<br>
    </form>

    <h5>Meat & Tofu Selection</h5>

    <select>
        <option value="chicken">Chicken</option>
        <option value="pork">Carnitas</option>
        <option value="steak">Steak</option>
        <option value="chorizo">Chorizo</option>
        <option value="barbacoa">Barbacoa</option>
        <option value="tofu">Tofu</option>
    </select>

    <h5>Rice/Beans/Veggies</H5>

    <h6>Rice</H6>

    <form>
        <input type="radio" name="brown" value="white" checked> Brown Rice<br>
        <input type="radio" name="white" value="brown"> White Rice<br>
        <input type="radio" name="none" value="none"> None<br>
    </form>

    <h6>Beans</H6>

    <form>
        <input type="radio" name="black" value="black" checked> Black Beans<br>
        <input type="radio" name="pinto" value="pinto"> Pinto Beans<br>
        <input type="radio" name="none" value="none"> None<br>
    </form>

    <h6>Fajita Veggies?</H6>

    <form>
        <input type="radio" name="yes" value="Yes" checked> Yes<br>
        <input type="radio" name="no" value="No"> No<br>
    </form>

    <h6>Toppings</h6>

    <form>
        <input type="checkbox" name="queso" value="queso"> Queso<br>
        <input type="checkbox" name="sourcream" value="sourcream"> Sour Cream<br>
        <input type="checkbox" name="guac" value="guac"> Guacamole<br>
        <input type="checkbox" name="mild" value="mild"> Mild Salsa<br>
        <input type="checkbox" name="medium" value="medium1"> Medium Salsa<br>
        <input type="checkbox" name="medium2" value="medium2"> Medium Corn Salsa<br>
        <input type="checkbox" name="hot" value="hot"> Hot Salsa<br>
        <input type="checkbox" name="cheese" value="cheese"> Shredded Cheese<br>
    </form>

    <h6>Special Instructions</h6>

    <form>
        <textarea rows="4" cols="50" name="comment" form="usrform">
        Type Here...</textarea>
    </form>





</div>

</body>

</html>