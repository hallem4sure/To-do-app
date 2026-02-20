<?php

$host = "localhost";
$user = "root";
$password = "";
$name_db = "todo_app";

$connent = mysqli_connect($host, $user, $password, $name_db);

if (!$connent) {
    die("error connection db" . mysqli_connect_error($connent));
}

$sql =" CREATE TABLE IF NOT EXISTS `tasks`(
id INT PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(255) NOT NULL,
descriptions VARCHAR(255) NOT NULL
)
";
mysqli_query($connent,$sql);