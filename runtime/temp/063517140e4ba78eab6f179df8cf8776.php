<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:34:"template/gay/html/topic/index.html";i:1544283122;s:65:"/www/wwwroot/www.708090.com/template/gay/html/public/include.html";i:1553341382;s:62:"/www/wwwroot/www.708090.com/template/gay/html/public/head.html";i:1544283110;s:64:"/www/wwwroot/www.708090.com/template/gay/html/public/paging.html";i:1544283112;s:65:"/www/wwwroot/www.708090.com/template/gay/html/public/serial1.html";i:1544283138;s:62:"/www/wwwroot/www.708090.com/template/gay/html/public/foot.html";i:1544283110;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>专题首页 - 精品专题 - 推荐专题 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="电影专题,电视剧专题,综艺专题,动漫专题,推荐专题,专题收录">
<meta name="description" content="本站提供最新最全精品专题数据">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
    <link type="image/vnd.microsoft.icon" href="<?php echo $maccms['path']; ?>favicon.png" rel="shortcut icon" />
    <link href="<?php echo $maccms['path_tpl']; ?>css/app.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo $maccms['path_tpl']; ?>js/jquery.min.js"></script>
    <link href="<?php echo $maccms['path_tpl']; ?>css/swiper.min.css" rel="stylesheet" type="text/css">
    <script src="<?php echo $maccms['path_tpl']; ?>js/swiper.min.js"></script>
	<script src="<?php echo $maccms['path_tpl']; ?>js/player.js"></script>
    <script src="<?php echo $maccms['path_tpl']; ?>js/iconfont.js"></script>
	<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
	<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>
<style>
#jswbox ul li:nth-child(1){display: block; width: auto; height: 380px; top: 20px; left: 0px; z-index: 1; }#jswbox ul li:nth-child(2){display: block; width: auto; height: 380px; top: 20px; left: 0px; z-index: 2; }#jswbox ul li:nth-child(3){display: block; width: auto; height: 380px; top: 20px; left: 200px; z-index: 3;}#jswbox ul li:nth-child(4){display: block; width: auto; height: 380px; left: 388px; z-index: 4; top: 0; }#jswbox ul li:nth-child(5){display: block; width: auto; height: 380px; left: 668px; z-index: 3; top: 20px;}#jswbox ul li:nth-child(6){display: block; width: auto; height: 380px; left: 834px; z-index: 2; top: 20px;  }#jswbox ul li:nth-child(7){display: block; width: auto; height: 380px; top: 20px; left: 450px; z-index: 1; }
</style>
</head>
<body>
    <header class="itopbar">
        <div class="container">
            <h1 class="ilogo"><a href="<?php echo $maccms['path']; ?>" title="logo"><img src="<?php echo $maccms['path_tpl']; ?>images/logo.jpg" alt="<?php echo $maccms['site_name']; ?>"><span><?php echo $maccms['site_name']; ?></span></a></h1>
			
			
				<script type="text/javascript">
try{
    if (/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
        document.write('<nav class="sitenav"><a href="<?php echo $maccms['path']; ?>" <?php if($maccms['aid'] == 1): ?>class="cur"<?php endif; ?>>首页</a><?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><a href="<?php echo mac_url_type($vo); ?>" <?php if($obj['type_id'] == $vo['type_id']): ?>class="cur"<?php endif; ?>><?php echo $vo['type_name']; ?></a><?php endforeach; endif; else: echo "" ;endif; ?><a href="<?php echo mac_url('user/index'); ?>" <?php if($maccms['aid'] == 30 or $maccms['aid'] == 31): ?>class="cur"<?php endif; ?>>会员</a><a href="<?php echo mac_url('gbook/index'); ?>" <?php if($maccms['aid'] == 4): ?>class="cur"<?php endif; ?>>留言</a><a href="<?php echo mac_url_topic_index(); ?>" <?php if($maccms['aid'] == 7): ?>class="cur"<?php endif; ?>>专题</a></nav>');
    }else{
         document.write('<nav class="sitenav"><a href="<?php echo $maccms['path']; ?>" <?php if($maccms['aid'] == 1): ?>class="cur"<?php endif; ?>>首页</a><?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><a href="<?php echo mac_url_type($vo); ?>" <?php if($obj['type_id'] == $vo['type_id']): ?>class="cur"<?php endif; ?>><?php echo $vo['type_name']; ?></a><?php endforeach; endif; else: echo "" ;endif; ?><a href="<?php echo mac_url_topic_index(); ?>" <?php if($maccms['aid'] == 30 or $maccms['aid'] == 31): ?>class="cur"<?php endif; ?>>专题</a><a href="<?php echo mac_url('gbook/index'); ?>" <?php if($maccms['aid'] == 4): ?>class="cur"<?php endif; ?>>留言</a></nav>');
    }
}catch(e){}
</script>
			
            <div class="itr">
                <div class="mod">
                    <a href="javascript:;" class="mac_history"><i class="iconfont">&#xe62b;</i>看过<span class="caret"></span></a>
                </div>
                <div class="mod"><a href="<?php echo mac_url('user/index'); ?>" ><i class="iconfont">&#xe62c;</i>会员</a></div>
            </div>
            <span class="searchstart-on"><i class="iconfont">&#xe61e;</i></span><span class="searchstart-off"><i class="iconfont">&#xe622;</i></span>
            <form name="formsearch" class="searchform" action="<?php echo mac_url('vod/search'); ?>"  autocomplete="off">
                <input class="ipt" placeholder="输入影片片名或演员名称。" name="wd" type="text" id="wd" required="">
                <input type="submit" id="searchbutton" value="" class="hide"><a href="javascript:" class="ibtn" title="搜索" onClick="$('.searchform').submit();"><i class="iconfont">&#xe61e;</i> 搜索</a>
            </form>
        </div>
    </header>
<div class="icon">
	<div class="container">
		<section class="art-top clearfix">
		<div class="tv-hd">
			<h2>影视专题</h2>
		</div>
		<div class="tv-bd js-tab-con-list">
			<div class="js-tab-con show">
				<ul class="tv-topiclist"><?php $__TAG__ = '{"num":"12","paging":"yes","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Topic")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
					<div class="v-pic">
						<img data-src="<?php echo mac_url_img($vo['topic_pic']); ?>" class="thumb" alt="<?php echo $vo['topic_name']; ?>" src="<?php echo mac_url_img($vo['topic_pic']); ?>" data-bd-imgshare-binded="1" style="display: block;">
						<div class="v-tips">
							推荐影片：<?php echo count(explode(',',$vo['topic_rel_vod'])); ?>部
						</div>
						<a href="<?php echo mac_url_topic_detail($vo); ?>" title="<?php echo $vo['topic_name']; ?>" class="v-playBtn"><i></i></a>
					</div>
					<div class="v-txt">
						<span class="v-tit"><a href="<?php echo mac_url_topic_detail($vo); ?>" title="<?php echo $vo['topic_name']; ?>"><?php echo $vo['topic_name']; ?></a></span>
					</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
		<div>
<div class="v-page clearfix">共<?php echo $__PAGING__['record_total']; ?>条数据&nbsp;当前:<?php echo $__PAGING__['page_current']; ?>/<?php echo $__PAGING__['page_total']; ?>页&nbsp;<?php if($__PAGING__['page_current'] != 1): ?><a href="<?php echo mac_url_page($__PAGING__['page_url'],1); ?>" class="pagelink_a">首页</a>&nbsp;<a href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_prev']); ?>" class="pagelink_a">上一页</a>&nbsp;<?php endif; if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): if($__PAGING__['page_current'] == $num): ?><span class="pagenow"><?php echo $num; ?></span>&nbsp;<?php else: ?><a class="pagelink_b" href="<?php echo mac_url_page($__PAGING__['page_url'],$num); ?>"><?php echo $num; ?></a>&nbsp;<?php endif; endforeach; endif; else: echo "" ;endif; if($__PAGING__['page_current'] != $__PAGING__['page_total']): ?><a href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_next']); ?>" class="pagelink_a">下一页</a>&nbsp;<a href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_total']); ?>" class="pagelink_a">尾页</a>&nbsp;<?php endif; ?></div>
	</div>
	</section><section class="imain clearfix">
	<div class="tv-hd">
		<h2>最近影片</h2>
	</div>
	<div class="tv-bd js-tab-con-list">
		<div class="js-tab-con show">
			<ul class="tv-list"><?php $__TAG__ = '{"num":"8","type":"1,2","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<li>
				<div class="v-pic">
					<img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>">
					<div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
<?php echo $vo['vod_remarks']; else: ?>
<?php echo $vo['vod_state']; endif; break; case "2": if($vo['vod_isend'] == '1'): if($vo['vod_total'] > '0'): ?>
<?php echo $vo['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; else: if($vo['vod_serial'] == $vo['vod_total']): if($vo['vod_total'] > '0'): ?>
<?php echo $vo['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; elseif($vo['vod_serial'] < $vo['vod_total']): if($vo['vod_serial'] > '0'): ?>
更新至<?php echo $vo['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; elseif($vo['vod_serial'] > $vo['vod_total']): ?>
全<?php echo mac_default($vo['vod_serial'],''); ?>集
<?php endif; endif; break; case "3": if(strlen($vo['vod_serial']) > 6): ?>
<?php echo date('Y-m-d',strtotime($vo['vod_serial'])); ?>期
<?php else: ?>
<?php echo $vo['vod_serial']; ?>期
<?php endif; break; case "4": if($vo['vod_isend'] == '1'): if($vo['vod_total'] > '0'): ?>
<?php echo $vo['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; else: if($vo['vod_serial'] == $vo['vod_total']): if($vo['vod_total'] > '0'): ?>
<?php echo $vo['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; elseif($vo['vod_serial'] < $vo['vod_total']): if($vo['vod_serial'] > '0'): ?>
更新至<?php echo $vo['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($vo['vod_serial'],'全'); ?>集
<?php endif; elseif($vo['vod_serial'] > $vo['vod_total']): ?>
全<?php echo mac_default($vo['vod_serial'],''); ?>集
<?php endif; endif; break; default: endswitch; ?></div>
					<a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
				</div>
				<div class="v-txt">
					<span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
				</div>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
	</section>
</div>
</div>
<!-- 页脚 -->
    <footer class="ifoot">
        <nav class="bnav">
		<?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<a href="<?php echo mac_url_type($vo); ?>" title="<?php echo $vo['type_name']; ?>">热播<?php echo $vo['type_name']; ?></a>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		<a href="<?php echo mac_url('gbook/index'); ?>" title="留言求片">留言求片</a>
		</nav>
   <!--     <p>免责声明:本网站所有内容均系收集于各大网站，本站只提供WEB页面服务，并不提供影片资源储存也不参与录制与上传，若本站收录内容无意侵犯了贵公司版权，请给网页底部邮箱地址来信，我们会及时处理和回复，谢谢合作。</p>  
        <p class="en"><?php echo $maccms['site_url']; ?>站长邮箱:<?php echo $maccms['site_email']; ?></p>     !-->
		<p class="en"><?php echo $maccms['site_tj']; ?></p>
    </footer>
	<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?b9eab448a97a1a97ca52fb538650280b";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<span style="display: none;" class="mac_timming" data-file="" ></span>
<script src="<?php echo $maccms['path_tpl']; ?>js/lazyload.min.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>js/app.js"></script>
</body>
</html>