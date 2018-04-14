<?php

namespace app\admin\controller;

use think\Controller;

class Sign extends common
{
    protected $db;
    //
    public  function _initialize()
 	{
 		parent::_initialize();
 		$this->db=new \app\common\model\Sign();
 	}
    public function index()
    {
        $data=db('sign')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function del ()
    {
        $user_id=input ('get.user_id');
        if (\app\common\model\Sign::destroy($user_id)) {
            $this->success('操作成功','index');exit;
        }else{
            $this->error('操作失败');exit;
        }

    }
    
}