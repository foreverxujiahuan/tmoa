<?php

namespace app\common\model;

use think\Model;

class Officeb extends Model
{
    //
    protected $pk='user_id';
    protected $table='lo_b';
    public function store($data)
    {
    	$result=$this->validate(true)->save($data,$data['user_id']);
    	if ($result)
    	{
    		return ['valid'=>1,'msg'=>'操作成功！'];
    	}else{
    		return ['valid'=>0,'msg'=>$this->getError()];
    	}

    }
     public function del($user_id)
     {
          $user_pid=$this->where('user_id',$user_id)->value('user_pid');
          $this->where('user_pid',$user_id)->update(['user_pid'=>$user_pid]);
          if(Adminstration::destroy($user_id))
          {
          return ['valid'=>1,'msg'=>'删除成功'];
       }else{
        return['valid'=>1,'msg'=>'删除失败'];
       }
     }
}