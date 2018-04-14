<?php

namespace app\User\controller;

use think\Controller;
use app\common\model\Timetable;
use app\common\model\Timetable as links;
use think\Db;
class Index extends Common
{
    public function index(){
    	 $b= Db::table('lo_news')->count(); 
				
    		   
            $data2= Db::table('lo_news')
                ->field('news_name')->field('news_url')
                ->limit(9)
                ->select(); 
			$this->assign('data1',$data2);
			$data=db('info')->select();
			$this->assign('data',$data);
    	return $this->fetch();
    }
    public function timetable(){
         if(request()->isPost()){
            	     $res1=(new Timetable())->index(input('post.'));
		    	      $result=Timetable::where('table_username',session('user.user_name'))->find();
                      if ($result) {
                      	$this->error('请勿重复添加！');
                      }
						$links = new links;
						    $links->data([
						    'table_username'  =>  session('user.user_name'),
						    'table_phone' =>  session('user.user_phone')
					     	]);
					       $res=$links->save($res1);
					      if($res){
					     	$this->success('您的课表已经成功添加！');
					      }else {
					      $this->error('课表添加失败'); 
					}
         }
    	return $this->fetch();
    }
 
}
