<?php
$mysql_host = getenv('MYSQL_HOST');
$mysql_user = getenv('MYSQL_USER');
$mysql_pwd = getenv('MYSQL_PWD');
$mysql_db = getenv('MYSQL_DB');

echo " EnvironmentVariables $mysql_host,$mysql_user,$mysql_pwd,$mysql_db <br/>";

$dsn = "mysql:host=$mysql_host;dbname=$mysql_db";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $mysql_user, $mysql_pwd, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

