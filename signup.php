<?php
if(count($_POST) > 0) {
    $trimEmail = trim($_POST['email']);
    if(!empty($trimEmail) && !empty(trim($_POST['password']))) {
        require_once 'mysql.php';
        $sql = 'INSERT INTO tbl_users
        VALUES (NULL, "'.$mysqli->real_escape_string($trimEmail).'", SHA1("'.$_POST['password'].'"), 1, CURRENT_TIMESTAMP, "http://www.google.fr")';
        $result = $mysqli->query($sql);
        if(!$result) {
            if ($mysqli->sqlstate === '23000') {
                $errorMsg = 'the following email '.$trimEmail.' is already existing in db';
            } else $errorMsg = 'Unknown error: Cannot signup';

        } else $successMsg = 'You are successfully registered!';

    }else $errorMsg = 'You must fill an email and a password!';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<div id="login">
    <h1>Sign up</h1>
    <form method="post">
        <input type="email" placeholder="email" name="email"
               value="<?= $_POST['email'] ?? '' ?>"><br>
        <input type="password" name="password"
               value="<?= $_POST['password'] ?? '' ?>"><br>
        <input type="submit">
    </form>
    <p><?= $errorMsg ?? $successMsg ?></p>
</div>

</body>