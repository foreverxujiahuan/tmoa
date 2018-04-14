<?php

namespace app\admin\controller;

use think\Controller;

class Xmbuser extends common
{
    //
    protected $db;
    public  function _initialize()
    {
        parent::_initialize();
        $this->db=new \app\common\model\Xmbuser();
    }
    public function index()
    {
        $data=db('xmbuser')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function xmb()
    {
        $data=db('xmbuser')->select();
        $this->assign('data',$data);
        return $this->fetch('index');
    }
    public function add()
    {   if(request()->isPost())
        {
           $res=$this->db->store(input('post.'));
           if($res['valid']){
                //执行成功
                $this->success($res['msg'],'index');exit;
           }else{
               //执行失败
               $this->error($res['msg']);exit;
           }
        }
        return $this->fetch();
    }
    public function store()
    {
        $user_id=input('param.user_id');
       
    	if (request()->isPost()) {
            $res =$this->db->store(input('post.'));
                if($res['valid'])
                {
                    $this->success($res['msg'],'index');exit;
   
                }else{
                    $this->error($res['msg']);exit;
                }
           }
        $oldData=$this->db->find($user_id);
        //halt($oldData);
        $this->assign('oldData',$oldData);
        return $this->fetch();
    }
      public function del ()
    {
        $user_id=input ('get.user_id');
        if (\app\common\model\Xmbuser::destroy($user_id)) {
            $this->success('操作成功','xmb');exit;
        }else{
            $this->error('操作失败');exit;
        }

    }
}