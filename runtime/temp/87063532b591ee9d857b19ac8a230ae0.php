<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"D:\phpStudy\WWW\twothink\public/../application/home/view/default/my\ajaxlist.html";i:1507485614;}*/ ?>
<?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
<button class="btn btn-block btn_load" href="javascript:;">没有更多数据了</button>
<?php else: if(!(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty()))): if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>

        <div class="container-fluid" id="content_list">
            <div class="row noticeList">
                <a href="/home/my/detail.html?id=<?php echo $channel['id']; ?>">
                    <div class="col-xs-3">
                        <p class="title text-info ">报修人:<?php echo $channel['name']; ?></p>
                    </div>
                    <div class="col-xs-6">
                        <p class="title">报修标题：<?php echo $channel['title']; ?></p>

                    </div>
                    <div class="col-xs-push-3">
                        <p class="title text-danger">已处理 </p>
                    </div>

                </a>
<?php endforeach; endif; else: echo "" ;endif; endif; ?>
<hr/>
<button class="btn btn-info btn-block btn_load" onclick="loadPage(<?php echo $no; ?>)">获取更多...</button>
<?php endif; ?>
