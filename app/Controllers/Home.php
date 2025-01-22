<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = "Home Page";
        $data['data2'] = "data 2";
        echo view('template/header', $data);
        echo view('template/navbar');
        echo view('welcome_message');
        echo view('template/footer');
    }
    public function about()
    {
        echo view('template/header');
        echo view('template/navbar');
        echo view('about');
        echo view('template/footer');
    }
    public function contact()
    {
        echo view('template/header');
        echo view('template/navbar');
        echo view('contact');
        echo view('template/footer');
    }
}