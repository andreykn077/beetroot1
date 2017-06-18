<?php
include "form.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<form action="form.php" method="post" class="form" id="userForm">
    <div><label for="email"> user email</label>
        <input type="email" name="email" id="email"></div>
    <div><label for="login"> input your login</label>
        <input type="text" id="login" name="login" required="required" placeholder="input your login"></div>
    <div> <label for="password"> input your login</label>
        <input type="text" name="password" id="password" required="required" placeholder="input your password"></div>
    <div>
        <input type="submit" onsubmit="formSubmit()" >
    </div>








</form>

<script src="jquery.js"></script>
<script src="main.js"></script>

</body>
</html>