<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:34:"template/gay/html/index/index.html";i:1544283108;s:65:"/www/wwwroot/www.708090.com/template/gay/html/public/include.html";i:1553341382;s:62:"/www/wwwroot/www.708090.com/template/gay/html/public/head.html";i:1544283110;s:64:"/www/wwwroot/www.708090.com/template/gay/html/public/banner.html";i:1544283136;s:64:"/www/wwwroot/www.708090.com/template/gay/html/public/serial.html";i:1544283136;s:61:"/www/wwwroot/www.708090.com/template/gay/html/public/hot.html";i:1544283138;s:62:"/www/wwwroot/www.708090.com/template/gay/html/public/foot.html";i:1544283110;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <title><?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />
	<meta name="description" content="<?php echo $maccms['site_description']; ?>" />
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
            <section class="ibanner">
            <div class="swiper-container">
                <div class="swiper-wrapper">
					<?php $__TAG__ = '{"num":"8","paging":"no","type":"all","level":"9","order":"desc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <div class="swiper-slide"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><img src="<?php echo mac_url_img($vo['vod_pic_slide']); ?>" ><p><?php echo $vo['vod_name']; ?></p></a></div>
					<?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="button">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            </section>
			<?php $__TAG__ = '{"ids":"1,2,3,4","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <section class="imain clearfix">
                <div class="col-l">
                    <div class="tv-hd">
<h2><svg class="iconf" aria-hidden="true"><?php switch($vo['type_id']): case "1": ?><use xlink:href="#icon-luxiang"></use><?php break; case "2": ?><use xlink:href="#icon-yanglazhuye"></use><?php break; case "3": ?><use xlink:href="#icon-qita"></use><?php break; default: ?><use xlink:href="#icon-shoucang"></use>
<?php endswitch; ?></svg>热播<?php echo $vo['type_name']; ?></h2>
<div class="imore"><a href="javascript:;" class="a_change">换一换<i class="iconfont">&#xe62d;</i></a><a href="<?php echo mac_url_type($vo); ?>">更多<i class="iconfont">&#xe613;</i></a></div>
                    </div>
	<div class="tv-bd a_clist">
		<div class="aclcon1">
			<div class="tv-l"><?php $__TAG__ = '{"num":"1","type":"'.$vo['type_id'].'","order":"desc","by":"time","id":"vo2","key":"key2"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
				<div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo2['vod_pic']); ?>" class="thumb" alt="<?php echo $vo2['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id']): case "1": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "2": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "3": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "4": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>"><?php echo $vo2['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo2['vod_score']; ?>分</em>
    </p>
    <p class="s-des">演员：<?php echo mac_url_create($vo2['vod_actor'],'actor'); ?></p>
    <p class="s-des">导演：<?php echo mac_url_create($vo2['vod_director'],'director'); ?></p>
</div></div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
	<div class="tv-r">
		<ul class="tv-list">
<?php $__TAG__ = '{"num":"10","type":"'.$vo['type_id'].'","start":"2","order":"desc","by":"time","id":"vo2","key":"key2"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo2['vod_pic']); ?>" class="thumb" alt="<?php echo $vo2['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id']): case "1": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "2": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "3": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "4": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>"><?php echo $vo2['vod_name']; ?></a></span>
    </div>
</li>
<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
		</div>
		<div class="aclcon2 hide">
			<div class="tv-l"><?php $__TAG__ = '{"num":"1","type":"'.$vo['type_id'].'","start":"12","order":"desc","by":"time","id":"vo2","key":"key2"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
				<div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo2['vod_pic']); ?>" class="thumb" alt="<?php echo $vo2['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id']): case "1": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "2": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "3": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "4": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>"><?php echo $vo2['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo2['vod_score']; ?>分</em>
    </p>
    <p class="s-des">演员：<?php echo mac_url_create($vo2['vod_actor'],'actor'); ?></p>
    <p class="s-des">导演：<?php echo mac_url_create($vo2['vod_director'],'director'); ?></p>
</div></div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
	<div class="tv-r">
		<ul class="tv-list">
<?php $__TAG__ = '{"num":"10","type":"'.$vo['type_id'].'","start":"13","order":"desc","by":"time","id":"vo2","key":"key2"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo2['vod_pic']); ?>" class="thumb" alt="<?php echo $vo2['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id']): case "1": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "2": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "3": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "4": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>"><?php echo $vo2['vod_name']; ?></a></span>
    </div>
</li>
<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
		</div>
		<div class="aclcon3 hide">
			<div class="tv-l"><?php $__TAG__ = '{"num":"1","type":"'.$vo['type_id'].'","start":"23","order":"desc","by":"time","id":"vo2","key":"key2"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
				<div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo2['vod_pic']); ?>" class="thumb" alt="<?php echo $vo2['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id']): case "1": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "2": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "3": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "4": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>"><?php echo $vo2['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo2['vod_score']; ?>分</em>
    </p>
    <p class="s-des">演员：<?php echo mac_url_create($vo2['vod_actor'],'actor'); ?></p>
    <p class="s-des">导演：<?php echo mac_url_create($vo2['vod_director'],'director'); ?></p>
</div></div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
	<div class="tv-r">
		<ul class="tv-list">
<?php $__TAG__ = '{"num":"10","type":"'.$vo['type_id'].'","start":"24","order":"desc","by":"time","id":"vo2","key":"key2"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo2['vod_pic']); ?>" class="thumb" alt="<?php echo $vo2['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id']): case "1": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "2": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "3": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "4": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>"><?php echo $vo2['vod_name']; ?></a></span>
    </div>
</li>
<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
		</div>
	</div>
                </div>
                <div class="col-r">
                    <div class="tv-hd">
                        <h2><?php echo $vo['type_name']; ?> • 排行榜</h2></div>
                    <div class="tv-bd">
                        <ul class="v-rank clearfix">
						<?php $__TAG__ = '{"num":"10","type":"'.$vo['type_id'].'","order":"desc","by":"hits","id":"vo2","key":"key2"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
						<li><i class="i-rank_num"><?php echo $key2; ?></i><em class="v-num"><?php switch($vo['type_id']): case "1": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "2": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "3": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; case "4": if(empty($vo2['vod_state']) == true): ?>
<?php echo $vo2['vod_remarks']; else: ?>
<?php echo $vo2['vod_state']; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo2); ?>" title="<?php echo $vo2['vod_name']; ?>"><?php echo $vo2['vod_name']; ?></a></span></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </section>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			<!--资讯开始-->
			<?php $__TAG__ = '{"ids":"5","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<section class="iart clearfix">
                <div class="tv-hd"><h2>热门<?php echo $vo['type_name']; ?></h2><a href="<?php echo mac_url_type($vo); ?>" class="more">更多</a></div>
                <div class="tv-bd"><?php $__TAG__ = '{"num":"1","type":"'.$vo['type_id'].'","order":"desc","by":"time","id":"vo2","key":"key2"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
                    <div class="tv-l imglist_hot">
                        <a class="pic" href="<?php echo mac_url_art_detail($vo2); ?>" title="<?php echo $vo2['art_name']; ?>"><img class="thumb" data-src="<?php echo $vo2['art_pic']; ?>" alt="<?php echo $vo2['art_name']; ?>"></a>
                        <div class="tabbox">
                            <a class="tit" href="<?php echo mac_url_art_detail($vo2); ?>" title="<?php echo $vo2['art_name']; ?>"><?php echo $vo2['art_name']; ?></a>
                        </div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    <div class="tv-r">
                        <ul class="imglist clearfix"><?php $__TAG__ = '{"num":"8","type":"'.$vo['type_id'].'","start":"2","order":"desc","by":"time","id":"vo2","key":"key2"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
                            <li>
                                <a class="pic" href="<?php echo mac_url_art_detail($vo2); ?>" title="<?php echo $vo2['art_name']; ?>"><img class="thumb" data-src="<?php echo $vo2['art_pic']; ?>" alt="<?php echo $vo2['art_name']; ?>"></a>
                                <div class="tc"><a href="<?php echo mac_url_art_detail($vo2); ?>"><?php echo $vo2['art_name']; ?></a></div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </section>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			<!--资讯end-->
            <section class="imain clearfix">
                <ul class="sel_list"><?php $__TAG__ = '{"ids":"1,2,3,4","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li>
                        <dl>
                            <?php switch($vo['type_id']): case "1": ?><dt class="yellow"><?php echo $vo['type_name']; ?></dt><?php break; case "2": ?><dt class="blue"><?php echo $vo['type_name']; ?></dt><?php break; case "3": ?><dt class="green"><?php echo $vo['type_name']; ?></dt><?php break; default: ?><dt class="red"><?php echo $vo['type_name']; ?></dt>
<?php endswitch; ?>
                            <dd>
                                <p class="clearfix"><span class="s_tit">类&nbsp;型：</span>
									<?php $_5dfe63d183db0=explode(',',$vo['type_extend']['class']); if(is_array($_5dfe63d183db0) || $_5dfe63d183db0 instanceof \think\Collection || $_5dfe63d183db0 instanceof \think\Paginator): if( count($_5dfe63d183db0)==0 ) : echo "" ;else: foreach($_5dfe63d183db0 as $key2=>$vo2): ?>
									<span><a href="<?php echo mac_url_type($vo,['class'=>$vo2],'show'); ?>" title="<?php echo $vo2; ?>"><?php echo $vo2; ?></a></span>
									<?php endforeach; endif; else: echo "" ;endif; ?>
                                </p>
                                <p class="clearfix"><span class="s_tit">地&nbsp;区：</span>
									<?php $_5dfe63d183d66=explode(',',$vo['type_extend']['area']); if(is_array($_5dfe63d183d66) || $_5dfe63d183d66 instanceof \think\Collection || $_5dfe63d183d66 instanceof \think\Paginator): if( count($_5dfe63d183d66)==0 ) : echo "" ;else: foreach($_5dfe63d183d66 as $key2=>$vo2): ?>
									<span><a href="<?php echo mac_url_type($vo,['area'=>$vo2],'show'); ?>" title="<?php echo $vo2; ?>"><?php echo $vo2; ?></a></span>
									<?php endforeach; endif; else: echo "" ;endif; ?>
                                </p>
                                <p class="clearfix"><span class="s_tit">年&nbsp;代：</span>
									<?php $_5dfe63d183d12=explode(',',$vo['type_extend']['year']); if(is_array($_5dfe63d183d12) || $_5dfe63d183d12 instanceof \think\Collection || $_5dfe63d183d12 instanceof \think\Paginator): if( count($_5dfe63d183d12)==0 ) : echo "" ;else: foreach($_5dfe63d183d12 as $key2=>$vo2): ?>
                                    <span><a href="<?php echo mac_url_type($vo,['year'=>$vo2],'show'); ?>" title="<?php echo $vo2; ?>"><?php echo $vo2; ?></a></span>
									<?php endforeach; endif; else: echo "" ;endif; ?>
                                </p>
                            </dd>
                        </dl>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </section>
            <section class="ilinks clearfix">
                <ul>
                    <li>友情链接：</li>
					<?php $__TAG__ = '{"num":"10","type":"all","order":"desc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Link")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li><a class="text-color-999" href="<?php echo $vo['link_url']; ?>" target="_blank"><?php echo $vo['link_name']; ?></a></li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
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