<?php

namespace app\User\controller;

use think\Controller;
use app\common\model\Gester;
class Gest extends Controller
{
    public function index(){
    	if(request()->isPost()){
    		$res=(new Gester())->index(input('post.'));
    		if(!$res['valid']){
    			$this->error($res['msg']);exit;
    		}else{
    			$this->success($res['msg'],'user/login/login');exit;
    		}

    	}
    	return $this->fetch();
    }
}
