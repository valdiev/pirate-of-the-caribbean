<?php

$DB_SERVER = getenv("MVC_SERVER") ?: "localhost:8889";
$DB_DATABASE = getenv("MVC_DB") ?: "pirateofthecaribbean";
$DB_USER = getenv("MVC_USER") ?: "root";
$DB_PASSWORD = getenv("MVC_TOKEN") ?: "root";
$DEBUG = getenv("MVC_DEBUG") ?: true;

return array(
    "DB_USER" => $DB_USER,
    "DB_PASSWORD" => $DB_PASSWORD,
    "DB_DSN" => "mysql:host=$DB_SERVER;dbname=$DB_DATABASE;charset=utf8",
    "DEBUG" => $DEBUG
);
