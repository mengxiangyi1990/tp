<?php
namespace app\home\controller;

use think\Db;

class Find extends Home{

    public function all(){
        $notice = Db::name('document')->where('status'>-1)->whereOr('category_id','=', 44)->find();
        // 获取分页显示
        $this->assign('id', $notice['category_id']);
        $this->assign('meta_title' , '小区通知');
        return  $this->fetch();
    }
    public function index(){

        return $this->fetch();

    }
    //ajax获取小区通知分页数据
    public function ajaxlist($id,$page=1){
        $list = Db::name('document')->where('category_id','=',$id)->paginate(5);
        $this->assign('list',$list);
        $this->assign('no',++$page);
        return $this->fetch();
    }


}