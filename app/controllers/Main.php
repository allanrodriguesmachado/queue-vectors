<?php

namespace App\Controllers;

class Main
{
    public function index($id)
    {
        echo "Estou dentro do controller main";

        echo "O id indicado foi $id";
    }
}