<?php
namespace Core;


class Controller
{

    /**
     * @return bool
     */
    public function before(){
        echo 'befor';
        return true;
    }

    /**
     * @return bool
     */
    public function after(){
        echo  'after';
    }
}