<?php
namespace app\admin\controller;
class Center extends Admin  {

    /**
     * 后台首页
     * @author 艺品网络  <twothink.cn>
     */
    public function index(){
        $this->assign('meta_title','管理首页') ;
        return $this->fetch();
    }

}