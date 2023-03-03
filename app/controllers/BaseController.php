<?php

namespace App\Controllers;

abstract class BaseController
{
    public function view(string $view, array $data = []): void
    {
        //Check if data is Array
        if (!is_array($data)) {
            die ('Data is not an array: ' . var_dump($data));
        }

        //Transforms data into variables
        extract($data);

        //Includes the file  if exists
        if (file_exists("../app/views/$view.php")) {
            require_once("../app/views/$view.php");
        }
        if (!file_exists("../app/views/$view.php")) {
            die("Views does not exists: " . $view);
        }

    }
}