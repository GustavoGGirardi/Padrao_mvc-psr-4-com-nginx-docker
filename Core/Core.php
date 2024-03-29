<?php
namespace Core;

class Core {

    public function run() {

        $url = '/';
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
        }
        
        $params = array();

        if (!empty($url) && $url != '/') {
            $url = explode('/', $url);
            array_shift($url);

            $currentController = $url[0].'Controller';
            array_shift($url);

            if (isset($url[0]) && !empty($url[0])) {
                $currentAction = $url[0];
                array_shift($url);
            } else {
                $currentAction = 'index';
            }

            if (!empty($url[0])) {
                $params = $url;
            }
         
        } else {
            $currentController = 'HomeController';
            $currentAction     = 'index';
        }

        $currentController = ucfirst($currentController);
        $prefix = '\Controllers\\';

        if (!file_exists('Controllers/'.$currentController.'.php') || 
        !method_exists($prefix . $currentController, $currentAction)) {
            $currentController = 'NotFoundController';
            $currentAction = "index";
        }

        $newController = $prefix . $currentController;
        $controller = new $newController();
        call_user_func_array(array($controller, $currentAction), $params);
    }
}