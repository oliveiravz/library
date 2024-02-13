<?php
namespace app\core;

use app\routes\Routes;
use app\support\RequestType;
use app\support\Uri;

class ControllerParams
{
    public function filtersParams(string $router) {
        $uri = Uri::get();
        $params = [];
        $explodeUri = explode("/", $uri);
        $explodeRouter = explode("/", $router);
        
        foreach($explodeRouter as $index => $routerSegment) {
            if($routerSegment !== $explodeUri[$index]) {
                $params[$index] = $explodeUri[$index];
            }
        }
        return $params;
    }

    public function get(string $router) {
        $routes = Routes::get();
        $requesMethod = RequestType::get();
        $indexRouter = array_search($router, $routes[$requesMethod]);
        $params = $this->filtersParams($indexRouter);
        
        return array_values($params);
    }
}