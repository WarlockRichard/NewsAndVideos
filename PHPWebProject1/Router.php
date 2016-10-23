<?php

/**
 * @version 1.0
 * @author Ярослав
 */
class Router //static class
{
	private function __construct(){}
	private function __clone(){}
	private function __wakeup(){}

	public static function handle($request){
        if($request ==""){
            $controller = HomeController::getInstance();
        }
        else{
            $request = explode('/', $request);
            if(!array_key_exists(3 ,$request)){
                switch ($request[1]) {
                    case "":
                        $controller = HomeController::getInstance();
                        break;
                    case "videos":
                        $controller = VideosController::getInstance();
                        break;
                    case "news":
                        $controller = NewsController::getInstance();
                        break;
                    default:
                        include($_SERVER[DOCUMENT_ROOT]."/view/404.php");
                        return;
                }
            }
            else{
                include($_SERVER[DOCUMENT_ROOT]."/view/404.php");
                return;
            }
        }
        if(array_key_exists(2 ,$request)){
            $controller->View($request[2]);
        }
        else{
            $controller->View();
        }
	}
}