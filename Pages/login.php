<?php
session_start();

//include_once 'connection.php';

// login form processing
$app = ''; // Define the $app variable with the correct path to the directory where 'nav.php' is located
//include $app . '/nav.php';

if(isset($_POST['login'])) {
    $username = 'hsegero';
    $password = 'ma1693kn';

    if($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['hsegero'] = true;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Invalid username or password';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <h2>Admin Login</h2>
    <?php if(isset($error)) echo "<p>$error</p>"; ?>
    <form method="posts">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>


