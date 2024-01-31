<?php
namespace App\Controllers;
use App\View;

class FileController
{
    public function index()
    {
        echo View::make('form', [
            'title' => 'Загрузка файлов'
        ]);
    }

    public function upload()
    {
        $storagePath = __DIR__.'/../../storage';

        if ($_FILES['file']['type'] != 'image/png')
        {
            die('Only PNG files are allowed');
        }
        $file = $storagePath. '/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $file);

        header('Location: /file');

    }
}