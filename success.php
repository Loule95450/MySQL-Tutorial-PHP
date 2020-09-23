<?php session_start();
if (count($_SESSION) === 0){
    header('Location: index2.php');
    exit();
}
if (isset($_GET['do']) && $_GET['do'] === 'logout'){
    echo 'click logout';
    foreach ($_SESSION as $key => $value){
        unset($_SESSION[$key]);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php
if (count($_SESSION) > 0){
    echo '<marquee>Vous avez été logué avec succès, voici le contenu de votre session</marquee>';
    echo '<br><a href="success.php?do=logout">logout('.$_SESSION['email'].')</a>';
}
//var_dump($_SESSION);
?>
</body>