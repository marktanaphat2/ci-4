<?php
namespace App\Controllers;

class Page extends BaseController
{
    public function Register()
    {
        echo view('template/header');
        echo view('template/navbar');
        echo view('page/register');
        echo view('template/footer');
    }
}