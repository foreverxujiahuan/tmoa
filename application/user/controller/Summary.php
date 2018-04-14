<?php

namespace app\user\controller;

use think\Controller;

class Summary extends Controller
{
    //
    public function index()
    {
        return $this->fetch();
    }
}
