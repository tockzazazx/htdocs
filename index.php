<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <title>MVC</title>
</head>
<header class="w3-container w3-teal">
    <h1>WELCOME TO MY SHOPPING</h1>
</header>

<div class="w3-container w3-half w3-margin-top">

    <form name="form1" action="checklogin.php" method="post" class="w3-container w3-card-4">

        <p>
            <input class="w3-input" type="text" style="width:90%" required name="username">
            <label class="w3-label w3-validate">Username</label></p>
        <p>
            <input class="w3-input" type="password" style="width:90%" required name="password">
            <label class="w3-label w3-validate">Password</label></p>
        <p>
            <button class="w3-btn w3-section w3-teal w3-ripple" name="butsign"> Log In </button></p>
    </form>
</html>