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
            //var_dump($route->getMask());
            /* @var Route $route */
            if($route->getType() == $this->request->getType() && preg_match($route->getMask(), $this->request->getPath())){
                $exec_route = $route;
            }
        }
        if($exec_route){
            $action = explode("@", $exec_route->getAction());
            if(isset($action[0]) && isset($action[1])) {
                $controller_name = "App\MVC\Controllers\\" . $action[0];
                $method_name = $action[1];
                $controller = new $controller_name();
                if(method_exists($controller, $method_name)){
                    $rm = new \ReflectionMethod($controller_name, $method_name);
                    $params = [];
                    $paramsToController = ['request' => $this->request];
                    preg_match_all($exec_route->getMask(), $this->request->getPath(), $params);
                    foreach ($exec_route->getParams() as $key => $param){
                       $paramsToController[$param] = $params[$key+1][0];
                    }
                    return $rm->invokeArgs($controller, $paramsToController);
                }
                return "Method ".$method_name." - not found!";

            }
            else return "Action is not OK! - ".$exec_route->getAction();
        }
        return "404";
    }

    public static function addRoute($route){
        array_push(self::$routes, $route);
    }


}