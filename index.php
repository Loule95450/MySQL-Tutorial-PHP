<?php
$errorMsg = '';
if(count($_POST) > 0) {
    $trimEmail = trim($_POST['email']);
    if (!empty($trimEmail)){
        require_once 'mysql.php';
        $sql = 'SELECT `id_user`,`email` 
            FROM `tbl_users` 
            WHERE `email` = "'.$mysqli->real_escape_string($trimEmail).'" 
            AND `password` = SHA1("'.$_POST['password'].'")';

        if ($result = $mysqli->query($sql)){
            if ($result->num_rows === 1){
                session_start();
                $_SESSION = $result->fetch_assoc();
                header('Location: success.php');
            } else $errorMsg = 'Either this user does not exist OR there are several users with same credentials';
        }
    } else $errorMsg = 'You must fill and email and a password!';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signin</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<div id="login">
    <h1>Sign in</h1>
    <form method="post">
        <input type="email" placeholder="email" name="email" value="<?= $trimEmail ?? '' ?>"><br>
        <input type="password" name="password" value="<?= $_POST['password'] ?? '' ?>"><br>
        <input type="submit">
    </form>
    <p><?= $errorMsg ?></p>
    <a href="signup.php"></a>
</div>

</body>
</html>