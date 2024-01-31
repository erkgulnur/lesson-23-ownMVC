<?php
namespace App\Controllers;
use App\View;

class HomeController
{
    public function index()
    {
        echo View::make('/home',[
            'title' => 'Домашняя страница',
            'body' => 'Тело страницы'
        ]);
    }
    
}
