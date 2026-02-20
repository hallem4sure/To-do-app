<?php
include "../databesa/db_connection.php";

if ($_SERVER['REQUEST_METHOD']  == "POST" &&  isset($_POST['Update'])) {
    $id = $_GET['id'];
    $title = htmlspecialchars($_POST['title']);
    $descriptions = htmlspecialchars($_POST["descriptions"]);

    $res = mysqli_query($connent, "UPDATE `tasks` set `title` ='$title' , `descriptions`='$descriptions' WHERE id =$id");
    header("location: ../index.php");
    exit;
}
