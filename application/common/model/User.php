<?php

 namespace app\common\model;
 use think\Loader;
 use think\Model;
 use think\validate;
 class User extends Model
 {
     protected $pk='user_id';
     protected $table='lo_user';
     public function login($data)
     {
         $userInfo=$this->where('user_name',$data['user_name'])->where('user_password',$data['user_password'])->find();
         if(!$userInfo){
             return ['valid'=>0,'msg'=>'用户名或密码不正确'];
         }
         session('user.user_id',$userInfo['user_id']);
         session('user.user_username',$userInfo['user_name']);
         return ['valid'=>1,'msg'=>'登陆成功'];
     }
     public function pass ($data)
     {
          $validate = new Validate([
            'user_password'  => 'require',
            'new_password'=>'require',
            'confirm_password'=>'require|confirm:new_password'
        ],[
              'user_password.require'=>'请输入原始密码',
              'new_password.require'=>'请输入新密码',
              'confirm_password.require'=>'请输入确认密码',
              'confirm_password.confirm'=>'确认密码和原始密码不一样,请重新输入'
        ]);
       
        if (!$validate->check($data)) {
          return ['valid'=>0,'msg'=>$validate->getError()];
         
        }
          $userInfo =$this->where('user_id',session('user.user_id'))->where('user_password',$data['user_password'])->find();
          if (!$userInfo) {
            return ['valid'=>0,'msg'=>'原始密码不正确'];
          }
  
          // save方法第二个参数为更新条件
          $res=$this->save([
              'user_password'  => $data
                ['new_password'],
              
          ],[$this->pk => session('user.user_id')]);
        if ($res) {
          return ['valid'=>1,'msg'=>'密码修改成功'];
        }else{
          return ['valid'=>0,'msg'=>'密码修改失败'];
        }
     }
    }