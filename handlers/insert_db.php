<?php
include "../databesa/db_connection.php";
include "../core/function.php";
include "../core/validations.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = htmlspecialchars($_POST['title']);
    $descriptions = htmlspecialchars($_POST["descriptions"]);

    $sql = "INSERT INTO `tasks` (title,descriptions) values ('$title','$descriptions')";
    $res = mysqli_query($connent, $sql);

    $error = validate_register($title, $descriptions);
    if (!empty($error)) {
        set_message('danger', $error);
        header("Location: ../index.php");
        exit;
    }

    if (isset($res)) {
        set_message('success', "task added");
        header("location: ../index.php");
        exit;
    } else {
        set_message('danger', "Error : " . mysqli_error($connent));
        header("location: ../index.php");
        exit;
    }
}
