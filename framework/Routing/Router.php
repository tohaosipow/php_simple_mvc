<?php


namespace Framework\Routing;


class Router
{
    private static $routes = [];
    private $request;

    /**
     * Router constructor.
     * @param Request $request
     */

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function getContent(){
        $exec_route = null;
        foreach (self::$routes as $route){
            /* @var Route $route */
            if($route->getPath() == $this->request->getPath() && $route->getType() == $this->request->getType()){
                $exec_route = $route;
            }
        }
        if($exec_route) return $exec_route->getAction();
        return "404";
    }

    public static function addRoute($route){
        array_push(self::$routes, $route);
    }


}