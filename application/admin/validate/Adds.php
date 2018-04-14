<?php
namespace app\admin\validate;

use think\Validate;

class Adds extends Validate
{
    protected $rule = [
        'keys_number'=>'require|min:12|max:12',
         'keys_username'=> 'require',
    ];
    protected $message =[
            'keys_username.require'=>'请输入该成员的姓名',
         'keys_number.require'=>'请输入该成员的学号',
         'keys_number.min'=>'请确认您输入的学号位数',
         'keys_number.max'=>'请确认您输入的学号位数',
    ];


}