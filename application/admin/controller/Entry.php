<?php

namespace app\admin\controller;

use think\Controller;
use app\common\model\Gester;
use app\common\model\News;
use app\common\model\Admin;
use app\common\model\News as links;
use think\Db;
class Entry extends common
{

	public function index(){
		$field=(new Gester())->paginate(6);
        $this->assign('field',$field);
 		return $this->fetch();
	}
    public function memeber()  
    {  
        $rs=db('user')->select();  
        $rs1=json(0,'数据返回成功',1000,$rs);  
        return $this -> fetch();  
    }  
       public function gtable_data()  
    {  
        $rs=db('table')->select();  

        $rs1=json(0,'数据返回成功',1000,$rs);   
          dump($rs1);
        return $this -> fetch();  
    }  
  public function del(){
        $user_id=input('get.user_id');
        dump($user_id);
         if(\app\common\model\Gester::destroy($user_id)){
            $this->success('删除成功！','Entry/index');
         }else{
            $this->error('删除失败...请重新操作！');
           }
   }
    public function del_table(){
        $user_id=input('get.user_id');
        dump($user_id);
         if(\app\common\model\Timetable::destroy($user_id)){
            $this->success('删除成功！','Entry/gtable');
         }else{
            $this->error('删除失败...请重新操作！');
           }
   }
   public function logout(){

       $logout=session('admin.admin_id',NULL);
        if(!$logout)
        {
            $this->success('退出成功......','admin/Login/login');
        }
   }
    public function gtable(){

      return $this->fetch();
    }
    public function atable(){
      $b= Db::table('lo_table')->count(); 
      
 $s=0;
      $cars=array("table_a1=0","table_a2=0","table_a3=0","table_a4=0","table_a5=0","table_b1=0","table_b2=0","table_b3=0","table_b4=0","table_b5=0","table_c1=0","table_c2=0","table_c3=0","table_c4=0","table_c5=0","table_d1=0","table_d2=0","table_d3=0","table_d4=0","table_d5=0","table_e1=0","table_e2=0","table_e3=0","table_e4=0","table_e5=0");
      $c=array();
      $d=0;
      $map['table_username']=array('not in',$c);
      $dars=array();
     for($s=0;$s<25;$s++){
     
          for($a=0;$a<=$b;$a++){
            $data[$s]= Db::table('lo_table')
                ->where($cars[$s])->where($map)
                ->field('table_username')
                ->limit(5)
                ->select(); 
             //$data1=$data[$s][$a]->distinct('table_id')->select();
               // if($data[$s][$a].table_username)
               
                       
              } foreach ( $data as $value)
                       foreach( $value as $key )
                        $c[$d++]=$key["table_username"];
              
          }
  
    dump($d);
       $this->assign('data',$data);
      return $this->fetch();
    }

    public function news(){
      /*function get_tag_data($html,$tag,$attr,$value){
      $regex = "/<$tag.*?$attr=\".*?$value.*?\".*?>(.*?)<\/$tag>/is";
      echo $regex."<br>";
      preg_match_all($regex,$html,$matches,PREG_PATTERN_ORDER);
      return $matches[1];
      }*/
    $url='http://news.zzuli.edu.cn/s/113/t/976/p/12/c/22239/list.htm'; 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    $header = array();
    $header[] = 'Accept: application/json';
    //$header[] = 'Accept-Encoding: gzip, deflate, sdch';
    $header[] = 'Accept-Language: zh-CN,zh;q=0.8';
    $header[] = 'Connection: keep-alive';
    $header[] = 'Cookie: sid=UM_distinctid=15f6d542ab354e-0f9821644efd95-5b4a2c1d-1fa400-15f6d542ab5465; _ga=GA1.3.2114582526.1509367755; Hm_lvt_1e7bb0586b7e61911a64e086492a7916=1522849244; Hm_lpvt_1e7bb0586b7e61911a64e086492a7916=1522849247; Hm_lvt_ebe63eab87eb78b17195516136ae8883=1522849254; Hm_lpvt_ebe63eab87eb78b17195516136ae8883=1522849254; CNZZDATA1259235507=954959470-1513308107-http%253A%252F%252Foffice.zzuli.edu.cn%252F%7C1522847923; JSESSIONID=6B277FDBF9759B45A1DC982FB58E6FBE';
    $header[] = 'Host: news.zzuli.edu.cn';
    $header[] = 'Referer:http://news.zzuli.edu.cn/';
    $header[] = 'X-Request: JSON';
    $header[] = 'X-Requested-With: XMLHttpRequest';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_HEADER, 0); 
    curl_setopt($ch, CURLOPT_NOBODY, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36'); 
    $response = curl_exec($ch);
    if(curl_errno($ch)) { 
        echo 'Curl error: ' . curl_error($ch); 
    } else{ 
       
        preg_match_all("/<a href=\'(.*?)\'.*?<font color=''>(.*?)<\/font>/", $response,$match);
        $i=0;
        $conn = mysqli_connect('localhost','root','root','tmoa');
        //$res3 = mysqli_query($conn,$sql);
        //$news_url = array();
        //$news_name = array();
        $b= Db::table('lo_news')->count(); 
        if($b<20)
        for($i=0;$i<20;$i++){
          $sql2 = "insert into oa_news(news_url,news_name) values ('http://news.zzuli.edu.cn{$match[1][$i]}','{$match[2][$i]}')";
          $res2 = mysqli_query($conn,$sql2);
         // dump($match[1][$i]);
          //dump($match[2][$i]);  
          
        }

        //$news_url[$j] = $match[1][$i];
        //dump($match);
        /*  foreach ($match as $key => $value) {
            if($key)
            foreach ($value as $ke => $va) {
              if($va!='更多>>')
                if($va!='#')
                  dump($va);
              $this->assign('data',$va);
            }
          }*/
         /* $temp='<table width="316" border="0" cellspacing="0" cellpadding="0">';
          $result = get_tag_data($response,"a",""," ");
         var_dump($result);*/
    }  
    return $this->fetch();
    }     
    public function news_data(){
       $rs=db('news')->select();  
        $rs1=json(0,'数据返回成功',25,$rs);   
        return $this -> fetch(); 
    }
      public function del_news(){
        $user_id=input('get.user_id');
        dump($user_id);
         if(\app\common\model\News::destroy($user_id)){
            $this->success('删除成功！','Entry/news');
         }else{
            $this->error('删除失败...请重新操作！');
           }
   }
    public function pass()
    {
      if (request()->isPost()) {
        $res=(new Admin())->pass(input('post.'));
                if ($res['valid']) {
                  session(null);
                  $this->success($res['msg'],'admin/Entry/index');exit;
                }else{
                  $this->error($res['msg']);exit;
                }
      }
      return $this->fetch();
    }
  }                                 
    
    
   

