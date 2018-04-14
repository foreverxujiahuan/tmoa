<?php

namespace app\admin\controller;

use think\Controller;

class adminstration extends Controller
{
    //
    protected $db;
    public function dmb()
    {
        $data=db('dmbuser')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function jsb()
    {
        $data=db('jsbuser')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function xzb()
    {
        $data=db('xzbuser')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function xmb()
    {
        $data=db('xmbuser')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function wlb()
    {
        $data=db('wlbuser')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function del ()
    {
        $user_id=input ('get.user_id');
        if (\app\common\model\Adminstration::destroy($user_id)) {
            $this->success('操作成功','dmb');exit;
        }else{
            $this->error('操作失败');exit;
        }

    }
}   