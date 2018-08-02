<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>添加活动</title>
    <link href="../Public/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="__PUBLIC__/Js/datetimepicker-master20160419/jquery.datetimepicker.css">
    <link rel="stylesheet" href="__PUBLIC__/Js/kindeditor/themes/default/default.css" />
    <script src="__PUBLIC__/Js/jquery.js"></script>
    <script src="../Public/dist/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/Js/datetimepicker-master20160419/build/jquery.datetimepicker.full.min.js"></script>
    <script charset="utf-8" src="__PUBLIC__/Js/kindeditor/kindeditor-min.js"></script>
    <script charset="utf-8" src="__PUBLIC__/Js/kindeditor/lang/zh_CN.js"></script>
    <style>
        .zhi{
            margin: 0 30px;
        }
        form{
            width: 70%;
        }
        p {
            margin: 0 0 10px;
            margin-top: 19px;
        }
        textarea{
            height: 300px!important;
        }
        .glyphicon{
            margin-right: 20px;
        }
    </style>
    <script>
        $(function(){
            $('#start').datetimepicker();
            $('#end').datetimepicker();
            KindEditor.ready(function(K) {
                K.create('#content1', {
                    resizeType : 0,
                    themeType : 'default'
                });
            });
        })

    </script>
</head>
<body>
<form role="form" action="__URL__/insert" method="post">
    <div class="form-group">
        <span class="glyphicon glyphicon-bookmark"></span><label for="exampleInputEmail1">活动名称</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="title">
    </div>
    <div class="form-group">
        <span class="glyphicon glyphicon-link"></span><label for="exampleInputEmail1">活动链接</label>
        <input type="text" class="form-control"  name="link">
    </div>
    <div class="form-group">
        <span class="glyphicon glyphicon-time"></span><label>活动时间</label><br>
        <input name="start"  id="start"><span class="zhi">至</span><input name="end" id="end">
    </div>
    <div class="form-group">
        <span class="glyphicon glyphicon-file"></span><label for="exampleInputEmail1">活动品牌</label>
        <select name="brand" class="form-control">
            <option disabled>选择品牌</option>
            <?php if(is_array($rows)): foreach($rows as $key=>$row): ?><option value="<?php echo ($row['id']); ?>"><?php echo ($row['name']); ?></option><?php endforeach; endif; ?>
        </select>
    </div>
    <div class="form-group">
        <span class="glyphicon glyphicon-th-list"></span><label for="exampleInputEmail1">活动类别</label>
        <select name="class" class="form-control">
            <option disabled>选择类别</option>
            <?php if(is_array($rows2)): foreach($rows2 as $key=>$row): ?><option value="<?php echo ($row['id']); ?>"><?php echo ($row['name']); ?></option><?php endforeach; endif; ?>
        </select>
    </div>
    <div class="form-group">
        <span class="glyphicon glyphicon-share-alt"></span><label for="exampleInputEmail1">活动地点</label>
        <select name="city" class="form-control">
            <option disabled>选择城市</option>
            <?php if(is_array($rows3)): foreach($rows3 as $key=>$row): ?><option value="<?php echo ($row['id']); ?>"><?php echo ($row['name']); ?></option><?php endforeach; endif; ?>
        </select>
        <p>请输入详细地点</p>
        <input type="text" class="form-control" name="info">
    </div>
    <div class="form-group">
        <span class="glyphicon glyphicon-pencil"></span><label>活动内容</label>
        <textarea id="content1" class="form-control" name="content">

        </textarea>
    </div>
    <button type="submit" class="btn btn-danger">添加</button>
</form>
</body>
</html>