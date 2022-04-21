<?php
    require './controllers/UserController.php';

    $user = new UserController;
    $users = $user->all();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_SESSION['name'])): ?>
        <h2>Welcome, <a href="#"><?php echo $_SESSION['name']; ?></a></h2>
        <li><a href="logout.php">Logout</a></li>
    <?php else: ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Signup</a></li>
    <?php endif; ?>
    <h1>Users</h1>
    <a href="create-user.php">Create User</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        
            <?php foreach($users as $user): ?>
                <div class="box">
                    <h2><?php echo $user['name']; ?></h2>
                    <h3><?php echo $user['email']; ?></h3>
               
                </div>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
