<?php
namespace app\admin\validate;

use think\Validate;

class Add extends Validate
{
    protected $rule = [
        'key_number'=>'require|min:12|max:12',
         'key_username'=> 'require',
    ];
    protected $message =[
            'key_username.require'=>'请输入该成员的姓名',
         'key_number.require'=>'请输入该成员的学号',
         'key_number.min'=>'请确认您输入的学号位数',
         'key_number.max'=>'请确认您输入的学号位数',
    ];


}