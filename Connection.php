<?php
$dbms="mysql";
$host="localhost";
$db="images";
$user="root";
$pass="";
$dsn="$dbms:host=$host;dbname=$db";
$con=new PDO($dsn, $user, $pass);
