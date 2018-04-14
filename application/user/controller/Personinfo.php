<?php

namespace app\user\controller;

use think\Controller;

class Personinfo extends Controller
{
    //
    public function index()
    {
        return $this->fetch();
    }
    public function portrait()
    {
        return $this->fetch();
    }
    public function tou()
    {
        return $this->fetch();
    }
}
