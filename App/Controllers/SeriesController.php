<?php namespace App\Controllers;


use Core\Controller;
use Core\View;

class SeriesController extends Controller
{
        public function index(){
                return 'index page' ;
        }


        public function serie($slug){

            return 'serie page';
        }

        public function episode($slug , $id){



            return View::render("seris/episode",['id'=>$id]);
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