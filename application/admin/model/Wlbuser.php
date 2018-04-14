<?php

namespace app\admin\model;

use think\Model;

class Wlbuser extends Model
{
    //
    protected $pk='user_id';
    protected $table='lo_wlbuser';
    public function store($data)
    {
        $result=$this->validate(true)->save($data,$data['user_id']);
        if($result)
        {
            return ['valid'=>1,'msg'=>'操作成功!'];
        }else{
            return ['valid'=>0,'msg'=>$this->getError()];
        }
    }
}
