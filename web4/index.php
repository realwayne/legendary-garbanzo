<?php
// set cookies
    if (isset($_POST["username"]) && isset($_POST["password"])){
        setcookie("auth", "ok");
        setcookie("username", $_POST["username"]);
        header("Location: loggedin.php");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie Data</title>
</head>
<body>
    <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
    Name: <input type="text" name="username">
    Password: <input type="text" name="password"><br/><br/>
    <input type="submit" value="Log Me In">
    </form>
</body>
</html>