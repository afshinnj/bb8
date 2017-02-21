<?php
namespace App\Controllers;


use Core\View;

class HomeController
{
    public function index(){


       return View::render("index");
    }


    /**
     * @return bool
     */
    public function before(){

        return true;
    }

    /**
     * @return bool
     */
    public function after(){

    }
}