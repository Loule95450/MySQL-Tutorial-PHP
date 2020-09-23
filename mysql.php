<?php 
if ($_SERVER['HTTP_HOST'] === 'localhost'){
    $mysqli = new mysqli("localhost", "root", "", "blog");
} else {
    $MYSQLPASSWORDENV = getenv('MYSQLPASSWORD');
    $MYSQLHOSTENV = getenv('MYSQLHOST');
    $MYSQLUSERENV = getenv('MYSQLUSER');

    $mysqli = new mysqli($MYSQLHOSTENV, $MYSQLUSERENV, $MYSQLPASSWORDENV, "mysqllogintutorial_blog");
}
