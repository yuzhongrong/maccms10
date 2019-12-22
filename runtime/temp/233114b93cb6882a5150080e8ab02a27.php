<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:38:"template/default_pc/html/user/pay.html";i:1547133072;s:70:"/www/wwwroot/www.708090.com/template/default_pc/html/user/include.html";i:1524721268;s:67:"/www/wwwroot/www.708090.com/template/default_pc/html/user/head.html";i:1528956332;s:67:"/www/wwwroot/www.708090.com/template/default_pc/html/user/foot.html";i:1523604806;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>充值卡充值 - 会员中心 - <?php echo $maccms['site_name']; ?></title>
	<meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>"/>
	<meta name="description" content="<?php echo $maccms['site_description']; ?>"/>
	<link href="<?php echo $maccms['path']; ?>static/css/home.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $maccms['path_tpl']; ?>css/member.css" type="text/css" rel="stylesheet" />
<script src="<?php echo $maccms['path_tpl']; ?>js/tab.js" type="text/javascript"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.js"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.lazyload.js"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.autocomplete.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>js/jquery.superslide.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>js/jquery.lazyload.js"></script>
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>js/formValidator-4.0.1.js" type="text/javascript"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.imageupload.js"></script>

</head>
<body>
<div class="header">
	<div class="layout fn-clear">
		<div class="logo">
			<a href="<?php echo $maccms['path']; ?>"><img width="157" height="42" src="<?php echo $maccms['path_tpl']; ?>images/member/ilogo.gif" alt=""/></a>
		</div>
		<ul class="nav">
			<li class="nav-item"><a class="nav-link" href="<?php echo $maccms['path']; ?>">返回首页</a></li>
			<li class="nav-item" ><a class="nav-link"><?php echo $obj['user_name']; ?></a></li>
			<li class="nav-item" ><a class="nav-link" href="<?php echo url('user/logout'); ?>" >退出</a></li>
		</ul>
	</div>
</div>
<!-- // i-header end -->


<div id="member" class="fn-clear">
	<div id="left">
		<div class="tou"><img src="<?php echo mac_url_img(mac_default($obj['user_portrait'],'static/images/touxiang.png')); ?>" alt="会员头像"><p><?php echo $info['user_name']; ?><br /><?php echo $info['group']['group_name']; ?></p></div>
		<ul>
			<li><a href="<?php echo url('user/index'); ?>">我的资料</a></li>
			<li><a href="<?php echo url('user/favs'); ?>">我的收藏</a></li>
			<li><a href="<?php echo url('user/plays'); ?>">播放记录</a></li>
			<li><a href="<?php echo url('user/downs'); ?>">下载记录</a></li>
			<li class="hover"><a href="<?php echo url('user/buy'); ?>">在线充值</a></li>
			<li><a href="<?php echo url('user/upgrade'); ?>">升级会员</a></li>
			<li><a href="<?php echo url('user/cash'); ?>">提现记录</a></li>
			<li><a href="<?php echo url('user/reward'); ?>">三级分销</a></li>
		</ul>
	</div>
	<div id="right">
		<h2>在线充值</h2>
		<form method="post" target="_blank" action="<?php echo url('user/gopay'); ?>">
			<input type="hidden" name="order_id" value="<?php echo $info['order_id']; ?>">
			<input type="hidden" name="order_code" value="<?php echo $info['order_code']; ?>">
		<div class="line40">
			<p><span class="xiang">订单编号：</span><?php echo $info['order_code']; ?></p>
			<p><span class="xiang">订单金额：</span><?php echo $info['order_price']; ?>元</p>
			<p>
				<span class="xiang">支付方式：</span>
				<select name="payment" id="payment">
					<option value ="">请选择...</option>
					<?php if(is_array($ext_list) || $ext_list instanceof \think\Collection || $ext_list instanceof \think\Paginator): $i = 0; $__LIST__ = $ext_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $key; ?>"><?php echo $vo; ?>支付</option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</p>

			<p class="info-item" id="paytype_box" style="display:none;">
				<span class="xiang">支付类型：</span>
				<select class="paytype" id="paytype" name="paytype">
				</select>
			</p>

			<p><input type="submit" id="btn_submit" class="jifen2-button" value="确认"></p>
		</div>
		</form>
	</div>
</div>
<script>
	var codepay_type = '<?php $_5dfd1e34c04e6=explode(',',$config['codepay']['type']); if(is_array($_5dfd1e34c04e6) || $_5dfd1e34c04e6 instanceof \think\Collection || $_5dfd1e34c04e6 instanceof \think\Paginator): if( count($_5dfd1e34c04e6)==0 ) : echo "" ;else: foreach($_5dfd1e34c04e6 as $key=>$vo): ?><option value ="<?php echo $vo; ?>"><?php if($vo==1): ?>支付宝二维码<?php elseif($vo==2): ?>QQ钱包二维<?php elseif($vo==3): ?>微信二维码<?php endif; ?></option><?php endforeach; endif; else: echo "" ;endif; ?>';
	var zhapay_type ='<?php $_5dfd1e34c0484=explode(',',$config['zhapay']['type']); if(is_array($_5dfd1e34c0484) || $_5dfd1e34c0484 instanceof \think\Collection || $_5dfd1e34c0484 instanceof \think\Paginator): if( count($_5dfd1e34c0484)==0 ) : echo "" ;else: foreach($_5dfd1e34c0484 as $key=>$vo): ?><option value ="<?php echo $vo; ?>"><?php if($vo==1): ?>微信<?php elseif($vo==2): ?>支付宝<?php endif; ?></option> <?php endforeach; endif; else: echo "" ;endif; ?>';

	$("#payment").change(function() {
		$('#paytype').html('');
		if($("#payment").val()=="codepay" || $("#payment").val()=="zhapay" ){
			if($("#payment").val()=="codepay") {
				$('#paytype').html(codepay_type);
			}
			if($("#payment").val()=="zhapay") {
				$('#paytype').html(zhapay_type);
			}
			$("#paytype_box").slideDown();
		}
		else{
			$("#paytype_box").slideUp();
		}
	});

	$(".paytype").change(function() {
		$('#paytype').val( $(this).val() );
	});
</script>
<!-- // sign-content end -->
<div class="footer">
	<div class="layout">
		<div class="foot-nav">
			<a href="{maccms:link_gbook}" target="_blank" title="给我留言">给我留言</a>-<a href="{maccms:link_map_vod}" target="_blank" title="网站地图">网站地图</a>-<a href="{maccms:link_map_rss}" target="_blank" title="RSS订阅">RSS订阅</a>-<a href="{maccms:link_map_baidu}" target="_blank" title="BaiduRSS">BaiduRSS</a>-<a href="{maccms:link_map_google}" target="_blank" title="GoogleRSS">GoogleRSS</a>
		</div>
		<!-- // foot-nav End -->
		<div class="copyright">
			<p>
				本网站提供的最新电视剧和电影资源均系收集于各大视频网站，本网站只提供web页面服务，并不提供影片资源存储，也不参与录制、上传
			</p>
			<p>
				若本站收录的节目无意侵犯了贵司版权，请给网页底部邮箱地址来信，我们会及时处理和回复，谢谢
			</p>
			<p>
				Copyright &copy; 2008-2018 <a class="color" href="http://<?php echo $maccms['site_url']; ?>"><?php echo $maccms['site_name']; ?><?php echo $maccms['site_url']; ?></a>
			</p>
		</div>
		<!-- // maxBox End -->
	</div>
</div>
<!-- // footer end -->
</body>
</html>