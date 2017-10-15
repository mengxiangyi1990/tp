<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\phpStudy\WWW\twothink\public/../application/home/view/default/index\detail.html";i:1507446630;}*/ ?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="/cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .main{margin-bottom: 60px;}
        .indexLabel{padding: 10px 0; margin: 10px 0 0; color: #fff;}
    </style>


    <title>微信物业管理系统</title>

</head>
<body>
<div class="main">
    <!-- 头部 -->
    <div class="container-fluid">
        <div id="top-alert" class="fixed alert alert-error bg-danger" style="display: none;margin-top: 10%;">
            <button class="close fixed" style="margin-top: 4px;">&times;</button>
            <div class="alert-content">这是内容</div>
        </div>
    </div>

    <!-- /头部 -->

    <!-- 主体 -->

    <div class="container-fluid">
        <div class="blank"></div>
        <h3 class="noticeDetailTitle"><strong>小区管理中心</strong></h3>
        <?php if(!(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty()))): if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
        <div class="noticeDetailInfo">发布者:admin</div>
        <div class="noticeDetailInfo">发布时间：2017-08-10 10:17</div>
        <div class="noticeDetailInfo">结束时间：<?php echo time_format($channel['deadline'] ); ?></div>
        <div class="noticeDetailInfo pull-right"><a class="article-form" href="javascript:;">申请参与活动</a></div>
        <div class="noticeDetailContent"><input type="hidden" class="article-id" value="<?php echo $channel['id']; ?>"/>
            <?php echo $channel['content']; endforeach; endif; else: echo "" ;endif; else: ?>
            <p  class="intro text-center"> aOh! 暂时还没有内容! </p>
            <?php endif; ?>
        </div>
    </div>

</div>
</body>
<script src="/jquery-1.11.2.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script>
    $(".article-form").click(function(){
        var data = $(".article-id").val();
        if(confirm("确认参与吗")){
            $.post("/home/index/ajax.html",{id:data},function(data){
                if(data == true){
                    alert("报名成功");
                }
            });
        }
    });

</script>

</html>
