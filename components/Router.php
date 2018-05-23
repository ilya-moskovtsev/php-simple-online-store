<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 10/02/2018
 * Time: 21:43
 */

class Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = include(ROOT . '/config/routes.php');
    }

    /**
     * Takes control from Front Controller
     */
    public function run()
    {
        $uri = $this->getURI();

        // Check $uri presence in routes.php
        foreach ($this->routes as $uriPattern => $controllerAction) {
            /*
             * Compare $uriPattern and $uri
             * ~ delimiter is used because we may have / in $uriPattern
             */
            if (preg_match("~^$uriPattern$~", $uri)) {

                // Define internal route
                $internalRoute = preg_replace("~^$uriPattern$~", $controllerAction, $uri);

                /*
                 * If there is a match,
                 * decide what Controller
                 * and what action
                 * will handle the request
                 */
                $segments = explode('/', $internalRoute);
                $controllerClassName = ucfirst(array_shift($segments)) . 'Controller';
                $actionFunctionName = 'action' . ucfirst(array_shift($segments));

                // Define action parameters
                $actionParameters = $segments;

                // Include Controller class file
                $controllerFilePath = ROOT . '/controllers/' . $controllerClassName . '.php';
                if (file_exists($controllerFilePath)) {
                    include_once($controllerFilePath);
                }

                // Create controller object
                $controllerObject = new $controllerClassName;
                // Call action with parameters
                $result = call_user_func_array(array($controllerObject, $actionFunctionName), $actionParameters);
                if ($result != null) {
                    break;
                }
            }
        }
    }

    /**
     * Returns request string
     * @return string
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            $uri = trim($_SERVER['REQUEST_URI'], '/');
        }
        return $uri;
    }


}