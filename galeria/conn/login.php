<?php
    require './controllers/AuthController.php';

    $user = new AuthController;

    if(isset($_POST['submitted'])) {
        $user->login($_POST);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create User</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>Login</h1>
    <form action="" method="POST">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="checkbox" name="is_admin">Is Admin?
        <button type="submit" name="submitted">Login</button>
    </form>
</body>
</html>
