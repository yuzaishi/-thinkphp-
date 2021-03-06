<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改课程</title>
    <link href="../Public/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="__PUBLIC__/Js/kindeditor/themes/default/default.css" />
    <script src="__PUBLIC__/Js/jquery.js"></script>
    <script src="../Public/dist/js/bootstrap.min.js"></script>
    <script charset="utf-8" src="__PUBLIC__/Js/kindeditor/kindeditor-min.js"></script>
    <script charset="utf-8" src="__PUBLIC__/Js/kindeditor/lang/zh_CN.js"></script>
    <style>
        form{
            width: 70%;
        }
        span.glyphicon {
            margin-right: 10px;
        }
        textarea{
            height: 300px!important;
        }
    </style>
    <script>
        KindEditor.ready(function(K) {
            K.create('#content1', {
                resizeType : 0,
                themeType : 'default'
            });
        });
    </script>
</head>
<body>
<form role="form" action="__URL__/update" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <span class="glyphicon glyphicon-book"></span><label for="exampleInputEmail1">课程名</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?php echo ($gl['title']); ?>">
    </div>
    <input type="hidden" name="id" value="<?php echo ($_GET['id']); ?>">
    <div class="form-group">
        <span class="glyphicon glyphicon-link"></span><label for="exampleInputEmail1">课程链接</label>
        <input type="text" class="form-control"  name="link" value="<?php echo ($gl['link']); ?>">
    </div>
    <div class="form-group">
        <span class="glyphicon glyphicon-picture"></span><label>课程图片</label><br>
        <img src="__PUBLIC__/Uploads/courimg/<?php echo ($gl['img']); ?>">
    </div>
    <div class="form-group">
        <span class="glyphicon glyphicon-arrow-up"></span><label>上传图片</label>
        <input type="file" class="form-control" name="img">
        (如果不要改变课程图片无需上传)
    </div>
    <div class="form-group">
        <span class="glyphicon glyphicon-file"></span><label>选择课程品牌</label>
        <select name="brand" class="form-control">
            <option disabled>选择</option>
            <?php if(is_array($rows)): foreach($rows as $key=>$row): if($row['id'] == $gl['brand_id']): ?><option value="<?php echo ($row['id']); ?>" selected><?php echo ($row['name']); ?></option>
                    <?php else: ?>
                    <option value="<?php echo ($row['id']); ?>" ><?php echo ($row['name']); ?></option><?php endif; endforeach; endif; ?>
        </select>
    </div>
    <div class="form-group">
        <span class="glyphicon glyphicon-align-justify"></span><label>选择类别</label>
        <select name="class" class="form-control">
            <option disabled>选择</option>
            <?php if(is_array($rows2)): foreach($rows2 as $key=>$row): if($row['id'] == $gl['class_id']): ?><option value="<?php echo ($row['id']); ?>" selected><?php echo ($row['name']); ?></option>
                    <?php else: ?>
                    <option value="<?php echo ($row['id']); ?>"><?php echo ($row['name']); ?></option><?php endif; endforeach; endif; ?>
        </select>
    </div>
    <div class="form-group">
        <span class="glyphicon glyphicon-tags"></span><label>课程简介</label>
        <textarea name="content" id="content1" class="form-control">
            <?php echo htmlspecialchars_decode($gl['content']);?>
        </textarea>
    </div>
    <button type="submit" class="btn btn-success">修改</button>
</form>
</body>
</html>