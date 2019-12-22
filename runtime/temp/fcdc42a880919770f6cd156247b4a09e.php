<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:34:"template/gay/html/user/orders.html";i:1544283130;s:63:"/www/wwwroot/www.708090.com/template/gay/html/user/include.html";i:1544283128;s:60:"/www/wwwroot/www.708090.com/template/gay/html/user/head.html";i:1544283126;s:60:"/www/wwwroot/www.708090.com/template/gay/html/user/foot.html";i:1544283126;}*/ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>订单记录 - 会员中心 -<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>"/>
<meta name="description" content="<?php echo $maccms['site_description']; ?>"/>
<link href="<?php echo $maccms['path_tpl']; ?>css/member.css" type="text/css" rel="stylesheet" />
<script src="<?php echo $maccms['path_tpl']; ?>js/tab.js" type="text/javascript"></script>
<link href="<?php echo $maccms['path']; ?>static/css/home.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $maccms['path_tpl']; ?>css/member2.css" type="text/css" rel="stylesheet" />
<script src="<?php echo $maccms['path']; ?>static/js/jquery.js"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.lazyload.js"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.autocomplete.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>js/jquery.superslide.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>js/jquery.lazyload.js"></script>
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>js/formValidator-4.0.1.js" type="text/javascript"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.imageupload.js"></script>
<script>
$("head").append('<meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">');
</script>
</head>
<body>
<div class="header">
	<div class="layout fn-clear">
		<div class="logo">
			<a href="<?php echo $maccms['path']; ?>"><img width="157" height="42" src="<?php echo $maccms['path_tpl']; ?>/images/logo.jpg" alt=""/></a>
		</div>
		<ul class="nav">
			<li class="nav-item"><a class="nav-link" href="<?php echo $maccms['path']; ?>">返回首页</a></li>
			<li class="nav-item" ><a class="nav-link"><?php echo $obj['user_name']; ?></a></li>
			<li class="nav-item" ><a class="nav-link" href="<?php echo url('user/logout'); ?>" >退出</a></li>
		</ul>
	</div>
</div>
<!-- // i-header end -->

<!-- 会员中心 -->
<div id="member" class="fn-clear">
    <div id="left">
		<div class="tou"><img src="<?php echo mac_url_img(mac_default($obj['user_portrait'],'static/images/touxiang.png')); ?>" alt="会员头像"><p><?php echo $obj['user_name']; ?><br /><?php echo $obj['group']['group_name']; ?></p></div>
		<ul>
			<li ><a href="<?php echo url('user/index'); ?>">我的资料</a></li>
			<li><a href="<?php echo url('user/favs'); ?>">我的收藏</a></li>
			<li><a href="<?php echo url('user/plays'); ?>">播放记录</a></li>
			<li ><a href="<?php echo url('user/downs'); ?>">下载记录</a></li>
			<li><a href="<?php echo url('user/buy'); ?>">在线充值</a></li>
			<li><a href="<?php echo url('user/upgrade'); ?>">升级会员</a></li>
			<li class="hover"><a href="<?php echo url('user/orders'); ?>">充值记录</a></li>
		</ul>
	</div>
    <div id="right">
		<h2>充值记录</h2>
		<div id="tab">
			<div class="list">
				<ul class="fn-clear">
					<li class="cur">在线充值记录</li>
					<li><a href="<?php echo url('user/cards'); ?>">充值卡记录</a></li>
				</ul>
			</div>
		</div>
		<table width="870" border="0" cellspacing="1" cellpadding="0" class="table">
		  <tr>
			<td width="66" height="36" align="center" valign="middle" bgcolor="#f7f7f7">选择</td>
			<td width="60" align="center" valign="middle" bgcolor="#f7f7f7">编号</td>
			<td width="300" align="center" valign="middle" bgcolor="#f7f7f7">单号</td>
			<td width="60" align="center" valign="middle" bgcolor="#f7f7f7">状态</td>
			  <td width="60" align="center" valign="middle" bgcolor="#f7f7f7">金额</td>
			  <td width="60" align="center" valign="middle" bgcolor="#f7f7f7">积分</td>
			<td width="150" align="center" valign="middle" bgcolor="#f7f7f7">时间</td>
			<td width="80" align="center" valign="middle" bgcolor="#f7f7f7">操作</td>
		  </tr>
		  <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		  <tr>
			<td height="36" align="center" valign="middle" bgcolor="#FFFFFF"><input name="ids[]" type="checkbox" value="<?php echo $vo['order_id']; ?>"></td>
			<td align="center" valign="middle" bgcolor="#FFFFFF"><?php echo $vo['order_id']; ?></td>
			<td align="left" valign="middle" bgcolor="#FFFFFF" class="pad"><?php echo $vo['order_code']; ?></td>
			<td align="center" valign="middle" bgcolor="#FFFFFF"><?php if($vo['order_status'] == 1): ?>已支付<?php else: ?>未支付<?php endif; ?></td>
			<td align="center" valign="middle" bgcolor="#FFFFFF"><?php echo $vo['order_price']; ?></td>
			  <td align="center" valign="middle" bgcolor="#FFFFFF"><?php echo $vo['order_points']; ?></td>
			  <td align="center" valign="middle" bgcolor="#FFFFFF"><?php echo mac_day($vo['order_time']); ?></td>
			<td align="center" valign="middle" bgcolor="#FFFFFF"><?php if($vo['order_status'] == 0): ?><a href="<?php echo url('user/pay'); ?>?order_code=<?php echo $vo['order_code']; ?>" class="delete">支付</a><?php endif; ?></td>
		  </tr>
		  <?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		<div class="member-page">
		<em>共<?php echo $__PAGING__['record_total']; ?>条数据,当前<?php echo $__PAGING__['page_current']; ?>/<?php echo $__PAGING__['page_total']; ?>页</em>
		<a class="page_link" href="<?php echo str_replace('PAGELINK',1,$__PAGING__['page_url']); ?>" title="首页">首页</a>
		<a class="page_link" href="<?php echo str_replace('PAGELINK',$__PAGING__['page_prev'],$__PAGING__['page_url']); ?>" title="上一页">上一页</a>
		<?php if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): $i = 0; $__LIST__ = $__PAGING__['page_num'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$num): $mod = ($i % 2 );++$i;if($__PAGING__['page_current'] == $num): ?>
		<a class="page_link page_current" href="javascript:;" title="第<?php echo $num; ?>页"><?php echo $num; ?></a>
		<?php else: ?>
		<a class="page_link" href="<?php echo str_replace('PAGELINK',$num,$__PAGING__['page_url']); ?>" title="第<?php echo $num; ?>页" ><?php echo $num; ?></a>
		<?php endif; endforeach; endif; else: echo "" ;endif; ?>
		<a class="page_link" href="<?php echo str_replace('PAGELINK',$__PAGING__['page_next'],$__PAGING__['page_url']); ?>" title="下一页">下一页</a>
		<a class="page_link" href="<?php echo str_replace('PAGELINK',$__PAGING__['page_total'],$__PAGING__['page_url']); ?>" title="尾页">尾页</a>
		</div>
    </div>
</div>
<script>

</script>
<!-- // sign-content end -->
<footer class="footer"> 
   <div class="container" style="margin-top: 20px;"> 
    <div class="center"> 
     <a href="#">DMCA Disclaimer</a> | 
     <a href="#">2257 Statement</a> | 
     <a href="#">TOS</a> | 
     <a href="#">Privacy Policy</a> | 
     <a class="pay-link" href="/index.php/label/price.html">观看方案</a> | 
     <a class="btn-report" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $maccms['site_qq']; ?>&site=qq&menu=yes">联系我们</a> 
    </div> 
    <p class="center">&copy; <?php echo $maccms['site_name']; ?> 2018 <?php echo $maccms['site_icp']; ?> </p> 
    <p class="center">友情链接: <?php $__TAG__ = '{"num":"10","type":"font","order":"desc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Link")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><a target="_blank" href="<?php echo $vo['link_url']; ?>"><?php echo $vo['link_name']; ?></a><?php endforeach; endif; else: echo "" ;endif; ?></p> 
	<p class="center"><?php echo $maccms['site_tj']; ?></p>
   </div> 
</footer> 
<!-- // footer end -->
</body>
</html>