<?php

namespace app\admin\controller;

use think\Controller;

class Applyb extends Controller
{
    //
    public function b()
    {
        $data=db('apply_b')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }
    
    public function del ()
    {
        $user_id=input ('get.user_id');
        if (\app\common\model\Applyb::destroy($user_id)) {
            $this->success('操作成功','b');exit;
        }else{
            $this->error('操作失败');exit;
        }

    }
}