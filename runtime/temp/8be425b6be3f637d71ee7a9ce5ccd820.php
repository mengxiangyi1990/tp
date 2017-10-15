<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\phpStudy\WWW\twothink\public/../application/home/view/default/server\index.html";i:1507453142;}*/ ?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

    <!-- Bootstrap -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

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


    <!--导航部分-->
    <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container-fluid text-center">
            <div class="col-xs-3">
                <p class="navbar-text"><a href="/Index/index.html" class="navbar-link">首页</a></p>
            </div><div class="col-xs-3">
            <p class="navbar-text"><a href="/Service/listIndex.html" class="navbar-link">服务</a></p>
        </div><div class="col-xs-3">
            <p class="navbar-text"><a href="/Find/all.html" class="navbar-link">发现</a></p>
        </div><div class="col-xs-3">
            <p class="navbar-text"><a href="/Center/index.html" class="navbar-link">我的</a></p>
        </div>	</div>
    </nav>
    <!--导航结束-->

    <!-- /头部 -->

    <!-- 主体 -->

    <div class="container-fluid">
        <div class="indexImg row">
            <img src="/image/4.png" width="100%" />
        </div>
        <div class="blank"></div>
        <div class="container">
            <ul class="list-group fuwuList">
                <li class="list-group-item"><a href="/Question/index.html" class="text-danger"><span class="iconfont">&#xe604;</span>调查问卷</a>
                </li>
                <li class="list-group-item"><a href="/Owner/registerForm.html" class="text-info"><span class="iconfont">&#xe605;</span>业主认证</a>
                </li>
                <li class="list-group-item"><a href="#" class="text-success"><span class="iconfont">&#xe602;</span>在线缴费</a>
                </li>
                <li class="list-group-item"><a href="/home/server/tips.html" class="text-warning"><span
                        class="iconfont">&#xe601;</span>生活贴士</a></li>
                <li class="list-group-item"><a href="/home/server/about.html" class="text-primary"><span
                        class="iconfont">&#xe600;</span>关于我们</a></li>
            </ul>
        </div>
    </div>

</div>
</body>
</html>
