<?php 
namespace App\Routing;
use AltoRouter;
class RouteDispatcher{
    private $match,$controller,$method;
    public function __construct(AltoRouter $router)
    {
        $this->match=$router->match();
        if($this->match){
            list($this->controller,$this->method)=explode("@",$this->match['target']);
            $controller=new $this->controller;
            if(is_callable([$controller,$this->method])){
                call_user_func_array([$controller,$this->method],$this->match['params']);
            }else{
                echo "<br>Its not callable";
            }
        }else{
            echo "not match route";
        }
    }
}