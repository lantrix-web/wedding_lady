<?php

class Route
{

    private $routes;

    private function setRoutePatterns()
    {
        require 'application/config/routes.php';
        $this->routes = $routes;


    }

    public function start()
    {
        self::setRoutePatterns();

        $uri = trim($_SERVER['REQUEST_URI'], "/");
        $count = 0;

        foreach ($this->routes as $uriPattern => $path)
        {

            if(preg_match("~$uriPattern~", $uri))
            {

                $count++;
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                //Определить какой контроллер
                // и action будут обрабать запрос

                $segments = explode('/', $internalRoute);
                //unset($segments[0]);

                $controller_name = array_shift($segments).'Controller';

                $action_name = 'action'.ucfirst(array_shift($segments));

                $params = $segments;

                $controller_file = 'application/controllers/'.$controller_name.'.php';
                if(file_exists($controller_file))
                {
                    include_once ($controller_file);

                }


                $controller_object = new $controller_name;

                $return = call_user_func_array([$controller_object, $action_name], $params);
                if($return !== false)
                {
                    break;
                }

            }




        }
        if($count === 0)
        {
            $this->ErrorPage404();
        }
    }



    public function ErrorPage404()
    {
        header('Location: /404');
    }

}