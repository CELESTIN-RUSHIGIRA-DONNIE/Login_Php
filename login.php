<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <title>Login</title>
    <meta charset="utf-8">
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>
    <form method="post" action="login.php">
        <?php include("errors.php"); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username ?>">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Register</button>
        </div>
        <p> Not yet a member ? <a href="register.php">Sign up</a></p>
    </form>
</body>
</html>