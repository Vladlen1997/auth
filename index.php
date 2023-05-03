<?php

error_reporting(-1);
session_start();

$login = 'admin';
$pass = '$2y$10$LuN.f6R55zua709dJ/YwA.5/EF5nGK/hb8kgFJw7BxhZ.5OTwrCFi';

if (!empty($_POST)) {
    if ($_POST['login'] == $login && password_verify($_POST['pass'], $pass)) {
        $_SESSION['auth'] = 1;
        $_SESSION['res'] = 'success';
        header("Location: secret.php");
        die;
    } else {
        $_SESSION['res'] = 'error';
        header("Location: index.php");
        exit;
    }
}


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

<?php
if (isset($_SESSION['res'])) {
    echo $_SESSION['res'];
    unset($_SESSION['res']);
}
?>

<form enctype="multipart/form-data" method="post">

    Login: <input type="text" name="login">
    Password: <input type="password" name="pass">
    <button type="submit" name="auth">Authorization</button>

</form>
</body>
</html>