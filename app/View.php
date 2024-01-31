<?php
namespace App;

class View
{
    private $viewPath;
    private $data;

    public function __construct(string $viewPath, array $data)
    {
        $this->viewPath = $viewPath;
        $this->data = $data;
    }

    public static function make(string $viewPath, array $data)
    {
        return new static($viewPath, $data);
    }

    public function render()
    {
        $viewPathTotal = VIEW_PATH.'/'.$this->viewPath.'.php';
        include($viewPathTotal);
    }

    public function __toString()
    {
        ob_start();
        $this->render();
        return ob_get_clean();
    }
}
?>