<?php

namespace app\User\controller;
use app\common\model\Gester;
use think\Controller;

class Login extends Controller
{
   public function login(){
   	 if(request()->isPost()){
   	 	$res=(new Gester())->login(input('post.'));
   	 	if($res['valid']){
   	 		 $this->success($res['msg'],'index/index');
   	 	}else {
   	 		 $this->error($res['msg']);
   	 	}
   	 }
   	return $this->fetch();
   }
   public function logout(){
        $logout=session('user.user_id',NULL);
        if(!$logout)
        {
            $this->success('退出成功......','User/Login/login');
        }
   }
}
