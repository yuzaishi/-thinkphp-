<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>

    <link rel="stylesheet" href="../Public/Css/pintuer.css">
    <link rel="stylesheet" href="../Public/Css/admin.css">
    <script src="__PUBLIC__/Js/jquery.js"></script>
    <style>
        .leftnav {
            overflow: scroll;
        }
    </style>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="__PUBLIC__/Uploads/headport/<?php echo ($_SESSION['img']); ?>" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l"><a class="button button-little bg-green" href="__ROOT__/home.php/Index" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="__URL__/delcache" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="<?php echo U('Login/logout');?>"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>管理员</h2>
  <ul style="display:block">
    <li><a href="__URL__/pass" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
  </ul>   
  <h2><span class="icon-pencil-square-o"></span>用户管理</h2>
  <ul>
    <li><a href="<?php echo U('User/view');?>" target="right"><span class="icon-caret-right"></span>查看用户</a></li>
    <li><a href="<?php echo U('User/add');?>" target="right"><span class="icon-caret-right"></span>添加用户</a></li>
  </ul>
    <h2><span class="icon-pencil-square-o"></span>分类管理</h2>
    <ul>
        <li><a href="<?php echo U('Class/view');?>" target="right"><span class="icon-caret-right"></span>查看分类</a></li>
        <li><a href="<?php echo U('Class/add');?>" target="right"><span class="icon-caret-right"></span>添加分类</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>站点管理</h2>
    <ul>
        <li><a href="<?php echo U('Site/view');?>" target="right"><span class="icon-caret-right"></span>查看站点</a></li>
        <li><a href="<?php echo U('Site/add');?>" target="right"><span class="icon-caret-right"></span>添加站点</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>主题管理</h2>
    <ul>
        <li><a href="<?php echo U('Theme/view');?>" target="right"><span class="icon-caret-right"></span>查看主题</a></li>
        <li><a href="<?php echo U('Theme/add');?>" target="right"><span class="icon-caret-right"></span>添加主题</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>文章管理</h2>
    <ul>
        <li><a href="<?php echo U('Article/view');?>" target="right"><span class="icon-caret-right"></span>查看文章</a></li>
        <li><a href="<?php echo U('Article/add');?>" target="right"><span class="icon-caret-right"></span>添加文章</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>活动管理</h2>
    <ul>
        <li><a href="<?php echo U('Activity/view');?>" target="right"><span class="icon-caret-right"></span>查看活动</a></li>
        <li><a href="<?php echo U('Activity/add');?>" target="right"><span class="icon-caret-right"></span>添加活动</a></li>
        <li><a href="<?php echo U('Activity/brand');?>" target="right"><span class="icon-caret-right"></span>活动品牌</a></li>
        <li><a href="<?php echo U('Activity/addbr');?>" target="right"><span class="icon-caret-right"></span>添加品牌</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>课程管理</h2>
    <ul>
        <li><a href="<?php echo U('Course/view');?>" target="right"><span class="icon-caret-right"></span>查看课程</a></li>
        <li><a href="<?php echo U('Course/add');?>" target="right"><span class="icon-caret-right"></span>添加课程</a></li>
        <li><a href="<?php echo U('Course/brand');?>" target="right"><span class="icon-caret-right"></span>课程品牌</a></li>
        <li><a href="<?php echo U('Course/addbr');?>" target="right"><span class="icon-caret-right"></span>添加品牌</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>广告管理</h2>
    <ul>
        <li><a href="<?php echo U('Adver/view');?>" target="right"><span class="icon-caret-right"></span>查看广告</a></li>
        <li><a href="<?php echo U('Adver/add');?>" target="right"><span class="icon-caret-right"></span>添加广告</a></li>
    </ul>
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
  $('.prev').click(function(){
      window.history.back();
  })
});
</script>
<ul class="bread">
  <li><a href="<?php echo U('Index/index');?>"  class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
  <li><a href="javascript:" class="prev">返回</a> </li>
</ul>
<div class="admin">
  <iframe scrolling="auto" class="embed-responsive-item" rameborder="0" src="<?php echo U('Index/img');?>" name="right" width="100%" height="100%">
  </iframe>
</div>

</body>
</html>