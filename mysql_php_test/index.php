<?php
$mysql_host = getenv('MYSQL_HOST');
$mysql_user = getenv('MYSQL_USER');
$mysql_pwd = getenv('MYSQL_PWD');
$mysql_db = getenv('MYSQL_DB');

echo " EnvironmentVariables $mysql_host,$mysql_user,$mysql_pwd,$mysql_db <br/>";

$db_con = mysqli_connect($mysql_host,$mysql_user,$mysql_pwd,$mysql_db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }