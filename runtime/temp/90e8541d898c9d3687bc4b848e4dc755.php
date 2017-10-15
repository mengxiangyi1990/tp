<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\phpStudy\WWW\twothink\public/../application/home/view/default/find\ajaxlist.html";i:1507451646;}*/ ?>
<?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
<button class="btn btn-block btn_load" href="javascript:;">没有更多数据了</button>
<?php else: if(!(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty()))): if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
    <a href="/home/index/detail.html?id=<?php echo $channel['id']; ?>">
        <div class="col-xs-2">
            <img class="img-rounded img-responsive" src="/image/1.png" />
        </div>
        <div class="col-xs-10">
            <p class="title"><?php echo $channel['title']; ?></p>
            <p class="info">浏览: <?php echo $channel['view']; ?> <span class="pull-right"><?php echo time_format($channel['create_time']); ?></span> </p>
        </div>
    </a>
<?php endforeach; endif; else: echo "" ;endif; endif; ?>
<hr/>
<button class="btn btn-info btn-block btn_load" onclick="loadPage(<?php echo $no; ?>)">获取更多...</button>
<?php endif; ?>
