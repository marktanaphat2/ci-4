<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title']  = "Home Page";
        $data['data2']  = "data 2";
        $data['active'] = 'home';
        echo view('template/header', $data);
        echo view('template/navbar');
        echo view('components/slider');
        echo view('welcome_message');
        echo view('template/footer');
    }
    public function about()
    {
        $data['active'] = 'about';
        echo view('template/header', $data);
        echo view('template/navbar');
        echo view('about');
        echo view('template/footer');
    }
    public function contact()
    {
        $data['active'] = 'contact';
        echo view('template/header', $data);
        echo view('template/navbar');
        echo view('contact');
        echo view('template/footer');
    }
}
