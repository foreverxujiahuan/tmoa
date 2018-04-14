<?php

namespace app\user\controller;

use think\Controller;
use app\common\model\User;
class Entry extends Controller
{
    //
    public function index()
    {
        $data=db('info')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }
     public function pass()
	 {
	 	if (request()->isPost()) {
	 		$res=(new User())->pass(input('post.'));
              if ($res['valid']) {
              	session(null);
              	$this->success($res['msg'],'user/Entry/index');exit;
              }else{
              	$this->error($res['msg']);exit;
              }
	 	}
	 	return $this->fetch();
     }
}
