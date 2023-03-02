<?php

function debug($params) {
    echo "<pre>";
    print_r($params);
    echo "</pre>", exit();
}



define("APP_NAME", 'Basic Name Gathering');