<?php
session_start();


function set_message($type, $text_message)
{
    $_SESSION['message'] = [
        'type' => $type,
        'text' => $text_message
    ];
}

function show_message()
{
    if (isset($_SESSION['message'])) {
        $type = $_SESSION['message']['type'];
        $text_message = $_SESSION['message']['text'];
        echo "<div class='alert alert-$type'>$text_message</div>";
        unset($_SESSION['message']);
    }
}
