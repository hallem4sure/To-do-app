<?php

include "../databesa/db_connection.php";
include "../core/function.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $res = mysqli_query($connent, "SELECT * FROM `tasks` WHERE `id` = $id");
    $row = mysqli_fetch_row($res);
    if (!$row) {
        set_message('danger', "data not exists");
        header("location: ../index.php");
        exit;
    } else {
        $res = mysqli_query($connent, "DELETE FROM `tasks` WHERE `id` = $id");
        set_message('success', "data Deleted");
        header("Location: ../index.php");
        exit;
    }
}
