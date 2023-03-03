<?php

function printData($data, $die = true)
{
    echo "<pre>";
    if (is_object($data) || is_array($data)) {
        return print_r($data, true);
    }

    echo $data;
    echo "</pre>", die();
}