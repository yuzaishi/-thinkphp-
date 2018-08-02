<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加广告</title>
    <link href="../Public/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../Public/Css/page.css" media="all" />
    <script src="__PUBLIC__/Js/jquery.js"></script>
    <script src="../Public/dist/js/bootstrap.min.js"></script>
    <style>
        form{
            width: 70%;
            margin: 0 auto;
        }
        span.glyphicon {
            margin-right: 10px;
        }
    </style>
</head>
<body>
<form role="form" action="__URL__/insert" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <span class="glyphicon glyphicon-link"></span><label for="exampleInputEmail1">广告链接</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="link" >
    </div>
    <div class="form-group">
        <span class="glyphicon glyphicon-circle-arrow-up"></span><label for="exampleInputEmail1">上传广告图片</label>
        <input type="file" name="img" class="form-control">
    </div>
    <div class="form-group">
        <span class="glyphicon glyphicon-inbox"></span><label for="exampleInputEmail1">选择放置位置</label>
        <select name="pos" class="form-control">
            <option disabled>选择</option>
            <option value="前台首页左侧">前台首页左侧</option>
            <option value="前台首页右侧">前台首页右侧</option>
            <option value="文章区">文章区</option>
            <option value="活动区">活动区</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">添加</button>
</form>
</body>
</html>