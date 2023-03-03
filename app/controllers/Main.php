<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index()
    {
        $data = [
            'nome' => 'allan',
            'apelido' => 'Rodrigues'
        ];
        $this->view('layouts/html_header');
        $this->view('home', $data);
        $this->view('layouts/html_footer');
    }
}