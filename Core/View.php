<?php

namespace Core;


class View
{
    /**
     * @param $view
     * @param array $args
     */
    public static function render($view, $args =[]){

        extract($args, EXTR_SKIP);
        $file = "App/Views/{$view}.php";

        if(is_readable($file)){
            require $file;
        }else{

                throw new \Exception("{$file} Not Find.");
        }
    }
}