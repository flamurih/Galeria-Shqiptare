<?php
    require './controllers/UserController.php';

    $user = new UserController;

    if(isset($_POST['submitted'])) {
        $user->store($_POST);
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
    <form action="" method="POST">
        <input type="text" name="fullName">
        <input type="password" name="password">
        <input type="checkbox" name="is_admin">Is Admin?
        <button type="submit" name="submitted">Save</button>
    </form>
</body>
</html>
