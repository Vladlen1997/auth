<?php

error_reporting(-1);
session_start();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
<ul>
    <li><a href="secret.php">Secret page</a></li>
</ul>

<h3>Эта страница общедоступна</h3>

<form enctype="multipart/form-data" method="post">

    Login: <input type="text" name="login">
    Password: <input type="password" name="pass">
    <button type="submit">Authorization</button>

</form>
</body>
</html>