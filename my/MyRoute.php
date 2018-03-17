<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/17 0017
 * Time: 上午 11:35
 */


class MyRoute {

    public static $routes = array();
    public static $methods = array();
    public static $callbacks = array();

    public static function __callStatic($method,$params) {

        if($method == 'map'){

        }else{
            $route = strpos($params[0],'/') === 0 ? $params[0]:'/'.$params[0];
            $callback = $params[1];
        }

        array_push($methods,$method);
        array_push($routes,$route);
        array_push($callbacks,$callback);
    }

    public static function dispatch(){
        $uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];


    }



}