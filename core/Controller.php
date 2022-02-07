<?php

namespace core;
abstract class Controller
{
    public $route;
    public $view;
    public $acl;

    public function __construct($route)
    {
        $this->route = $route;
        if (!$this->checkAsl()) {
            View::errorCode(403);
        }
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);
    }

    public function loadModel($name)
    {
        $path = 'app\model\\' . ucfirst($name);
        if (class_exists($path)) {
            return new $path;
        }
    }

    public function checkAsl()
    {
        if (file_exists('acl/' . $this->route['controller'] . '.php')) {
            $this->acl = require 'acl/' . $this->route['controller'] . '.php';
            if ($this->isAcl('all')) {
                return true;
            } elseif ($this->isAcl('autorize') && isset($_SESSION['autorize']['id'])) {
                return true;
            }
            return false;
        }
        return true;
    }

    public function isAcl($key)
    {
        return in_array($this->route['action'], $this->acl[$key]);
    }
}