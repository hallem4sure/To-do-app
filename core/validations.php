<?php

function valid_Fields_Required($value, $input_field)
{
    if (empty($value)) {
        return "$input_field is required";
    } else {
        return null;
    }
}



function validate_register($title, $descriptions)
{
    $todo_data = [
        'title' => $title,
        'descriptions' => $descriptions
    ];

    foreach ($todo_data as $data => $value) {
        if ($error = valid_Fields_Required($value, $data)) {
            return $error;
        }
    }
}
