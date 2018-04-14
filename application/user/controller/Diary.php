<?php

namespace app\user\controller;

use think\Controller;

class Diary extends Controller
{
    //
    public function index()
    {

        return $this->fetch();
    }
    public function date(){
    	return $this->fetch();
    }
    public function write(){
    	return $this->fetch();
    }
}
