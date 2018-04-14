<?php

namespace app\admin\controller;

use think\Controller;

class Applya extends Controller
{
    //
    public function a()
    {
        $data=db('apply_a')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }
   
    public function del ()
    {
        $user_id=input ('get.user_id');
        if (\app\common\model\Applya::destroy($user_id)) {
            $this->success('操作成功','a');exit;
        }else{
            $this->error('操作失败');exit;
        }

    }
}