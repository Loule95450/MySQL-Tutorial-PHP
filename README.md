# MySQL Tutorial PHP

<!-- Place this tag where you want the button to render. -->
[Download this Project](https://github.com/Loule95450/MySQL-Tutorial-PHP/archive/master.zip) or [Fork this Project](https://github.com/Loule95450/MySQL-Tutorial-PHP/fork)


## How to link my Database with my site ?
Open the file [mysql.php](https://github.com/Loule95450/MySQL-Tutorial-PHP/blob/master/mysql.php) to modify the variables ``$MYSQLHOSTENV``, ``$MYSQLUSERENV``, ``$MYSQLPASSWORDENV`` and ``$MYSQLDATABASEENV``

### Example : 
```php
<?php 
$database = "DatabaseName"

if ($_SERVER['HTTP_HOST'] === 'localhost'){
    $mysqli = new mysqli("localhost", "root", "", $database);
} else {
    $mysqli = new mysqli("host", "user", "password", $database);
}
```

## How with a free PHPMyAdmin database?

You can use [AlwaysData](https://www.alwaysdata.com/) to get a free database

Once your account is created, go to [this link](https://admin.alwaysdata.com/database/user/?type=mysql) to access the database identifiers

![](https://i.imgur.com/hnbk5xo.png)

Get your host and username on this tab

Then go to [this site](https://phpmyadmin.alwaysdata.com/) to connect to PHPMyAdmin

![](https://i.imgur.com/AkaI3ZH.png)

Well done ! You have a sign of PHPMyAdmin configuration for free!

Now, it remains more because modify your mysql.php file to link your database to your code

Open the file [mysql.php](https://github.com/Loule95450/MySQL-Tutorial-PHP/blob/master/mysql.php) to modify the variables ``$MYSQLHOSTENV``, ``$MYSQLUSERENV``, ``$MYSQLPASSWORDENV`` and ``$MYSQLDATABASEENV``

### Example : 
```php
<?php 
$database = "DatabaseName"

if ($_SERVER['HTTP_HOST'] === 'localhost'){
    $mysqli = new mysqli("localhost", "root", "", $database);
} else {
    $mysqli = new mysqli("my-host.alwaysdata.net", "MySQL-username", "Alwaydata-password", $database);
}
```

## How to host a PHP project for free

Use [Heroku](https://id.heroku.com/login), [create your own account](https://signup.heroku.com/login) on the site and then [create a new project](https://dashboard.heroku.com/new-app) and link your projet with GitHub.

# Made with :heart: