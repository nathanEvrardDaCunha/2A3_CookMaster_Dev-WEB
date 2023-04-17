<?php

namespace Controllers;

use Models\UsersModel;
use Source\Renderer;

class HomeController
{
    public function index(): Renderer
    {
        $userModel = new UsersModel();
        $users = $userModel->all(); 

        return Renderer::make('home/index', compact('users'));
    }
}