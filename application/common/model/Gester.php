<?php

namespace app\common\model;

use think\Model;
use think\Validate;
class Gester extends Model
{
    protected $pk='user_id';
    protected $table='lo_user';
    public function index($data){
    	$result1=$this->where('user_name',$data['user_name'])->find();

        if($result1){
          return ['valid'=>'0','msg'=>'该账户已被注册，请确认！'];
        }else{
        	$result=$this->save($data);
        	return ['valid'=>'1','msg'=>'恭喜您已经注册成功！'];
        }

        
    }


    public function login($data){

         $validate = new Validate([
         'user_name'=> 'require',
         'user_password'=>'require',
      ],[
         'user_name.require'=>'请输入您的昵称',
         'user_password.require'=>'请输入您的密码',
     
      ] );
      if (!$validate->check($data)) {
          return ['valid'=>0,'msg'=>$validate->getError()];
      }
       $result=$this->where('user_name',$data['user_name'])->where('user_password',$data['user_password'])->find();
     
            if(!$result){
              return ['valid'=>0,'msg'=>'账号不存在或密码不正确！'];
            }
      session('user.user_id',$result['user_id']);
       session('user.user_name',$result['user_name']);
       session('user.user_realname',$result['user_realname']);
       session('user.user_phone',$result['user_phone']);
       return ['valid'=>1,'msg'=>'登录成功-请稍等..........'];
    }
}
