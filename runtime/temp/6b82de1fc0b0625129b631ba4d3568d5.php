<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:40:"template/default_pc/html/user/downs.html";i:1545143332;s:70:"/www/wwwroot/www.708090.com/template/default_pc/html/user/include.html";i:1524721268;s:67:"/www/wwwroot/www.708090.com/template/default_pc/html/user/head.html";i:1528956332;s:67:"/www/wwwroot/www.708090.com/template/default_pc/html/user/foot.html";i:1523604806;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>下载记录 - 会员中心 -<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>"/>
<meta name="description" content="<?php echo $maccms['site_description']; ?>"/>
<link href="<?php echo $maccms['path_tpl']; ?>css/member.css" type="text/css" rel="stylesheet" />
<script src="<?php echo $maccms['path_tpl']; ?>js/tab.js" type="text/javascript"></script>
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


<!-- 会员中心 -->
<div id="member" class="fn-clear">
    <div id="left">
		<div class="tou"><img src="<?php echo mac_url_img(mac_default($obj['user_portrait'],'static/images/touxiang.png')); ?>" alt="会员头像"><p><?php echo $obj['user_name']; ?><br /><?php echo $obj['group']['group_name']; ?></p></div>
		<ul>
			<li ><a href="<?php echo url('user/index'); ?>">我的资料</a></li>
			<li><a href="<?php echo url('user/favs'); ?>">我的收藏</a></li>
			<li><a href="<?php echo url('user/plays'); ?>">播放记录</a></li>
			<li class="hover"><a href="<?php echo url('user/downs'); ?>">下载记录</a></li>
			<li><a href="<?php echo url('user/buy'); ?>">在线充值</a></li>
			<li><a href="<?php echo url('user/upgrade'); ?>">升级会员</a></li>
			<li><a href="<?php echo url('user/orders'); ?>">充值记录</a></li>
			<li><a href="<?php echo url('user/cash'); ?>">提现记录</a></li>
			<li><a href="<?php echo url('user/reward'); ?>">三级分销</a></li>
		</ul>
	</div>
    <div id="right">
		<h2>下载记录</h2>
		<div class="gong">
			<a href="javascript:;" onClick="MAC.CheckBox.All('ids[]');">全选</a>
			<a href="javascript:;" onClick="MAC.CheckBox.Other('ids[]');">反选</a>
			<a href="javascript:;" id="btnDel">删除</a>
			<a href="javascript:;" id="btnClear">清空</a>
		</div>
		<table width="770" border="0" cellspacing="1" cellpadding="0" class="table">
		  <tr>
			<td width="66" height="36" align="center" valign="middle" bgcolor="#f7f7f7">选择</td>
			<td width="80" align="center" valign="middle" bgcolor="#f7f7f7">编号</td>
			<td width="317" align="center" valign="middle" bgcolor="#f7f7f7">名称</td>
			<td width="120" align="center" valign="middle" bgcolor="#f7f7f7">进度</td>
			<td width="100" align="center" valign="middle" bgcolor="#f7f7f7">消费积分</td>
			<td width="80" align="center" valign="middle" bgcolor="#f7f7f7">操作</td>
		  </tr>
		  <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		  <tr>
			<td height="36" align="center" valign="middle" bgcolor="#FFFFFF"><input name="ids[]" type="checkbox" value="<?php echo $vo['ulog_id']; ?>"></td>
			<td align="center" valign="middle" bgcolor="#FFFFFF"><?php echo $vo['ulog_id']; ?></td>
			<td align="left" valign="middle" bgcolor="#FFFFFF" class="pad">[<?php echo $vo['data']['type']['type_name']; ?>] <?php echo $vo['data']['name']; ?> [<?php echo $vo['ulog_rid']; ?>-<?php echo $vo['ulog_sid']; ?>-<?php echo $vo['ulog_nid']; ?>]</td>
			<td align="center" valign="middle" bgcolor="#FFFFFF"><a href="<?php echo $vo['data']['link']; ?>" class="fen">重新下载</a></td>
			<td align="center" valign="middle" bgcolor="#FFFFFF"><?php echo $vo['ulog_points']; ?></td>
			<td align="center" valign="middle" bgcolor="#FFFFFF"><a href="" class="delete">删除</a></td>
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
	function delData(ids,all){
		var msg ='删除';
		if(all==1){
			msg='清空';
		}
		if(confirm('确定要'+msg+'记录吗')){
			$.post("<?php echo url('user/ulog_del'); ?>",{ids:ids,type:5,all:all},function(data) {
				if (data.code == '1') {
					alert('删除成功');
					location.reload();
				}else {
					alert('删除失败：' + data.msg);
				}
			}, 'json')
		}
	}
	$("#btnClear").click(function(){
		delData('',1);
	});
	$("#btnDel").click(function(){
		var ids = MAC.CheckBox.Ids('ids[]');
		if(ids==''){
			alert("请至少选择一个数据");
			return;
		}
		delData(ids,0);
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