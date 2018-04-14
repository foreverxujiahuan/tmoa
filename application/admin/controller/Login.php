<?php

namespace app\admin\controller;

use think\Controller;
use app\common\model\Admin;

class Login extends Controller
{
	
    public function login(){
      //$data=db('admin')->find(1);
	  // dump($data);

    	if(request()->ispost())
    	{
    	  $res= (new Admin())->login(input('post.'));
            if($res['valid']){
                $this->success($res['msg'],'admin/entry/index');exit;
            }else{
                $this->error($res['msg']);exit;
            }
    	}
    	return $this->fetch();
    }
}
