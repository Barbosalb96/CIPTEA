<?php

namespace App\Controller;

use App\Model\User;

class UsuarioController
{
    public function store()
    {
        User::create($_POST);
    }
}