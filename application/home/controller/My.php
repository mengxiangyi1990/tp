<?php
namespace app\home\controller;

use think\Db;

class My extends Home{

    public function index(){

        return $this->fetch();
    }



    public function repair(){

        $list = Db::name('repair')->where('status'>-1)->whereOr('uid','=', 1)->find();
        // 获取分页显示
        $this->assign('id', $list['uid']);
        $this->assign('meta_title' , '我的报修');
        return  $this->fetch();
    }

    //ajax获取小区通知分页数据
    public function ajaxlist($id,$page=1){
        $list = Db::name('repair')->where('uid','=',$id)->paginate(5);
        $this->assign('list',$list);
        $this->assign('no',++$page);
        return $this->fetch();
    }

    //报修详情
    public function detail($id){
        $content = Db::name('repair')->where('id','=',$id)->order('id desc')->paginate(3);
       // Db::table('repair')->where('id','=',$id)->update(['view'=>['exp','view+1']]);
        // 获取分页显示
        $page = $content->render();
        $this->assign('list', $content);
        $this->assign('page', $page);
        $this->assign('meta_title' , '报修详情');
        return  $this->fetch();

    }

    //报名的活动
    public function article(){
        $list = null;
        // 获取分页显示
        $this->assign('list', $list);
        $this->assign('meta_title' , '我的活动');
        return  $this->fetch();
    }

}