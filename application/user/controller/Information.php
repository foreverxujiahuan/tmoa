<?php

namespace app\user\controller;

use think\Controller;

class Information extends Controller
{
    //
    public function index()
    {
        return $this->fetch();
    }
}
