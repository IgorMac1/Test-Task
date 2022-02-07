<?php

namespace app\controllers;
use core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        if(!isset($_SESSION['autorize']['id'])){
            $this->view->render('Main page');
        }elseif (isset($_SESSION['autorize']['id'])){
            $this->view->redirect('/user');
        }
    }
}