<?php
/******************************************************
------------------Required Configuration---------------
Please edit the following variables so the forum can
work correctly.
******************************************************/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forum";
//We log to the DataBase
$conn = mysqli_connect($servername, $username, $password,$dbname);


//Username of the Administrator
$admin='admin';

/******************************************************
-----------------Optional Configuration----------------
******************************************************/

//Forum Home Page
$url_home = 'index.php';

//Design Name
$design = 'default';


/******************************************************
----------------------Initialization-------------------
******************************************************/

?>