<?php
namespace app\home\controller;
use think\Db;

class Sale extends Home
{
    //小区租售首页
    public function index()
    {
        $lease = Db::name('sale')->where('type','=','0')->select();
        $sell = Db::name('sale')->where('type','=','1')->select();
        $this->assign('lease',$lease);
        $this->assign('sell',$sell);
        return $this->fetch();
    }
    //房屋租售内容
    public function show($id){
        $list = Db::name('sale')->find(['id'=>$id]);
        $this->assign('list',$list);
        return $this->fetch();
    }


}