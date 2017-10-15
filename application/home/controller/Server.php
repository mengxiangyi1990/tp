<?php
namespace app\home\controller;


use think\Db;

class Server extends Home {

    public function index(){

        return $this->fetch();

    }

    public function tips(){

        $list = Db::name('document')->where('status'>-1)->whereOr('category_id','=', 45)->find();
        // 获取分页显示
        $this->assign('id', $list['category_id']);
        $this->assign('meta_title' , '小区通知');
        return  $this->fetch();
    }

    //ajax获取小区通知分页数据
    public function ajaxlist($id,$page=1){
        $list = Db::name('document')->where('status'>-1)->paginate(5);
        $this->assign('list',$list);
        $this->assign('no',++$page);
        return $this->fetch();
    }



    //关于我们
    public function about(){
        return $this->fetch();
    }

}