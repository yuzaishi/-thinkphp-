<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>课程品牌</title>
    <link href="../Public/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../Public/Css/page.css" media="all" />
    <script src="__PUBLIC__/Js/jquery.js"></script>
    <script src="../Public/dist/js/bootstrap.min.js"></script>
    <style>
        td{
            text-align: center;
            vertical-align: middle!important;
        }
    </style>
</head>
<body>
<table class="table table table-striped table-bordered table-hover table-condensed">
    <tr>
        <th class="text-center">品牌名</th>
        <th class="text-center"> 品牌logo</th>
        <th class="text-center">删除</th>
    </tr>
    <?php if(is_array($rows)): foreach($rows as $key=>$row): ?><tr>
            <td><?php echo ($row['name']); ?></td>
            <td><img src="__PUBLIC__/Uploads/brand/<?php echo ($row['img']); ?>" width="100px"></td>
            <td><a href="__URL__/delbr/id/<?php echo ($row['id']); ?>"><span class="glyphicon glyphicon-remove-sign"></span></a> </td>
        </tr><?php endforeach; endif; ?>
    <tr>
        <td colspan="3" class="manu"><?php echo ($show); ?></td>
    </tr>
</table>
</body>
</html>