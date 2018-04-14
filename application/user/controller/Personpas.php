<?php

namespace app\user\controller;

use think\Controller;

class Personpas extends Controller
{
    //
    public function index()
    {
        return $this->fetch();
    }
    public function pass()
    {
        if (request()->isPost()) {
            $res=(new Admin())->pass(input('post.'));
             if ($res['valid']) {
                 session(null);
                 $this->success($res['msg'],'admin/Entry/index');exit;
             }else{
                 $this->error($res['msg']);exit;
             }
        }
        return $this->fetch();
    }
}
