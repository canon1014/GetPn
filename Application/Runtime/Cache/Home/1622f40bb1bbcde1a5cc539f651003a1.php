<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>梨享查</title>
	<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/lib/jquery.js"></script>
</head>
<body>

	<table border="1">
		<tr>
			<td width="200px">名称</td>
			<td width="200px">具体行业信息</td>
			<td width="200px">位置</td>
			<td width="200px">经纬度坐标</td>
			<td width="200px">联系电话</td>
		</tr>
		<?php if(is_array($arr)): foreach($arr as $key=>$v): ?><tr>
				<td width="200px"><?php echo ($v['name']); ?></td>
				<td width="200px"><?php echo ($v['type']); ?></td>
				<td width="200px"><?php echo ($v['pname']); ?>/<?php echo ($v['cityname']); ?>/<?php echo ($v['adname']); ?>/<?php echo ($v['address']); ?></td>
				<td width="200px"><?php echo ($v['location']); ?></td>
				<td width="200px"><?php echo ($v['tel']); ?></td>
			</tr><?php endforeach; endif; ?>
	</table>
	<a href="<?php echo U('index/index');?>">返回首页</a><br>
	<?php $__FOR_START_14305__=1;$__FOR_END_14305__=$count;for($i=$__FOR_START_14305__;$i < $__FOR_END_14305__;$i+=1){ ?><a href="" onclick="return false" class="num" name="<?php echo ($i); ?>"><?php echo ($i); ?></a>&nbsp;&nbsp;<?php } ?>
</body>
</html>

<script>
$(".num").click(function(){
	//alert();
	console.log($(this));
	var test = window.location.href;
	window.location.href=test+"&page="+$(this)[0]['name'];
	//alert(test);
})
</script>