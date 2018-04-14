<?php

namespace app\admin\controller;

use think\Controller;

class Info extends Controller
{
    //
   
    public function index()
    {
        
        return $this->fetch();
    }
    public function add(){
        $conn = mysqli_connect("localhost","root","root","login");
        $sql = "SELECT*FROM lo_info";
        $res = mysqli_query($conn,$sql);
        $info_title = $_POST['info_title'];
        $info_text = $_POST['info_text'];
        $sql2 = "insert into lo_info(info_title,info_text) values ('$info_title','$info_text')";
        $res2 = mysqli_query($conn,$sql2);
        if($res2){
            return $this->fetch('addsuccess');
        }else{
            return $this->fetch('addfail');
        }
    }
    public function addsuccess(){
        return $this->fetch();
    }
    public function addfail(){
        return $this->fetch();
    }
}