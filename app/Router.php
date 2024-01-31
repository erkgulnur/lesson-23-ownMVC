<?php
namespace App;

class Router
{
    private array $routes;
    //private $action;

    public function register(string $route, callable|array $action): self
    {
        $this->routes[$route] = $action;
        return $this;
    }

    public function resolve(string $routeUrl)
    {
        $route = explode('?', $routeUrl)[0];
        $action = $this->routes[$route] ?? null;

        if (!$action)
        {
            echo '404';
            exit;
        }

        if (is_callable($action))
        {
            call_user_func($action);
        }

        if (is_array($action))
        {
            $classObj =   new $action[0](); 
            $method = $action[1];

            if (method_exists($classObj, $method))
            {
                call_user_func_array([$classObj,$method],[]);
            }
        }        
    }
}
?>