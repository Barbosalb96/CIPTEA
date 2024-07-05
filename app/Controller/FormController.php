<?php

namespace App\Controller;

use App\Utils\view;

class FormController
{
    public function index()
    {
        view::render('form');
    }
}
