<?php

namespace app\User\controller;

use think\Controller;
use think\Request;
class Common extends Controller
{
     public function __construct(Request $request=null){
    	parent::__construct($request);
    	if(!session('user.user_id')){
    		$this->redirect('Login/login');
    	}
    }
}
