<?php if (!defined('THINK_PATH')) exit(); /*a:11:{s:31:"template/gay/html/vod/type.html";i:1544283136;s:65:"/www/wwwroot/www.708090.com/template/gay/html/public/include.html";i:1553341382;s:62:"/www/wwwroot/www.708090.com/template/gay/html/public/head.html";i:1544283110;s:64:"/www/wwwroot/www.708090.com/template/gay/html/public/typedy.html";i:1544283138;s:65:"/www/wwwroot/www.708090.com/template/gay/html/public/serial1.html";i:1544283138;s:64:"/www/wwwroot/www.708090.com/template/gay/html/public/typeds.html";i:1544283140;s:64:"/www/wwwroot/www.708090.com/template/gay/html/public/typezy.html";i:1544283140;s:64:"/www/wwwroot/www.708090.com/template/gay/html/public/typezm.html";i:1544283140;s:60:"/www/wwwroot/www.708090.com/template/gay/html/vod/show2.html";i:1544283142;s:64:"/www/wwwroot/www.708090.com/template/gay/html/public/paging.html";i:1544283112;s:62:"/www/wwwroot/www.708090.com/template/gay/html/public/foot.html";i:1544283110;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo $obj['type_title']; ?> - <?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $obj['type_key']; ?> - <?php echo $maccms['site_keywords']; ?>" />
	<meta name="description" content="<?php echo $obj['type_des']; ?> - <?php echo $maccms['site_description']; ?>" />
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
<?php switch($obj['type_id']): case "1": ?><div class="icon">
        <div class="container">
            <section class="imain clearfix">
                <div class="col-l">
                    <div class="tv-hd">
                        <h2>最新<?php echo $obj['type_name']; ?></h2>
                        <div class="imore"><a href="javascript:;" class="a_change">换一换<i class="iconfont">&#xe62d;</i></a><a href="<?php echo mac_url_type($obj,[],'show'); ?>">更多<i class="iconfont">&#xe613;</i></a></div>
                    </div>
                    <div class="tv-bd a_clist">
                        <div class="tv-bd a_clist">
                        <div class="aclcon1"><?php $__TAG__ = '{"num":"1","type":"current","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">演员：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">导演：<?php echo mac_url_create($vo['vod_director'],'director'); ?></p>
</div></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","start":"2","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon2 hide"><?php $__TAG__ = '{"num":"1","type":"current","start":"12","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">演员：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">导演：<?php echo mac_url_create($vo['vod_director'],'director'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","start":"13","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon3 hide"><?php $__TAG__ = '{"num":"1","type":"current","start":"23","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">演员：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">导演：<?php echo mac_url_create($vo['vod_director'],'director'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","start":"24","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-r">
                    <div class="tv-hd">
                        <h2><?php echo $obj['type_name']; ?> • 排行榜</h2></div>
                    <div class="tv-bd">
                        <ul class="v-rank clearfix">
						<?php $__TAG__ = '{"num":"10","type":"current","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
						<li><i class="i-rank_num"><?php echo $key; ?></i><em class="v-num"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
                    </div>
                </div>
            </section>
            <section class="sort_list clearfix">
                <dl class="radio">
                    <dt>地<br>区</dt>
                    <dd><?php $_5dfe5fb4bf1df=explode(',',$obj['type_extend']['area']); if(is_array($_5dfe5fb4bf1df) || $_5dfe5fb4bf1df instanceof \think\Collection || $_5dfe5fb4bf1df instanceof \think\Paginator): if( count($_5dfe5fb4bf1df)==0 ) : echo "" ;else: foreach($_5dfe5fb4bf1df as $key=>$vo): switch($vo): case "内地": ?>
	<a href="<?php echo mac_url_type($obj,['area'=>大陆],'show'); ?>">大陆</a>
	<?php break; case "国产": ?>
	<a href="<?php echo mac_url_type($obj,['area'=>大陆],'show'); ?>">大陆</a>
	<?php break; default: ?> <a href="<?php echo mac_url_type($obj,['area'=>$vo],'show'); ?>"><?php echo $vo; ?></a>
<?php endswitch; endforeach; endif; else: echo "" ;endif; ?>
					</dd>
                </dl>
                <dl class="style">
                    <dt>分<br>类</dt>
                    <dd><?php $_5dfe5fb4bf161=explode(',',$obj['type_extend']['class']); if(is_array($_5dfe5fb4bf161) || $_5dfe5fb4bf161 instanceof \think\Collection || $_5dfe5fb4bf161 instanceof \think\Paginator): if( count($_5dfe5fb4bf161)==0 ) : echo "" ;else: foreach($_5dfe5fb4bf161 as $key=>$vo): ?>
					<a href="<?php echo mac_url_type($obj,['class'=>$vo],'show'); ?>"><?php echo $vo; ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
					</dd>
                </dl>
                <dl class="radio">
					<dt>年<br>代</dt>
                    <dd><?php $_5dfe5fb4bf0fb=explode(',',$obj['type_extend']['year']); if(is_array($_5dfe5fb4bf0fb) || $_5dfe5fb4bf0fb instanceof \think\Collection || $_5dfe5fb4bf0fb instanceof \think\Paginator): if( count($_5dfe5fb4bf0fb)==0 ) : echo "" ;else: foreach($_5dfe5fb4bf0fb as $key=>$vo): ?>
					<a href="<?php echo mac_url_type($obj,['year'=>$vo],'show'); ?>"><?php echo $vo; ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
					</dd>
                </dl>
                <dl class="recommend">
                    <dt>推<br>荐</dt>
                    <dd><?php $__TAG__ = '{"num":"5","type":"current","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
					</dd>
                </dl>
            </section>
			<?php $__TAG__ = '{"parent":"current","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <section class="imain clearfix">
                <div class="col-l">
                    <div class="tv-hd">
                        <h2><?php echo $vo['type_name']; ?></h2>
                        <div class="imore"><a href="javascript:;" class="a_change">换一换<i class="iconfont">&#xe62d;</i></a><a href="<?php echo mac_url_type($obj,[],'show'); ?>">更多<i class="iconfont">&#xe613;</i></a></div>
                    </div>
                    <div class="tv-bd a_clist">
                        <div class="tv-bd a_clist">
                        <div class="aclcon1"><?php $__TAG__ = '{"num":"1","type":"'.$vo['type_id'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">演员：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">导演：<?php echo mac_url_create($vo['vod_director'],'director'); ?></p>
</div></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"'.$vo['type_id'].'","start":"2","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon2 hide"><?php $__TAG__ = '{"num":"1","type":"'.$vo['type_id'].'","start":"12","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">演员：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">导演：<?php echo mac_url_create($vo['vod_director'],'director'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"'.$vo['type_id'].'","start":"13","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon3 hide"><?php $__TAG__ = '{"num":"1","type":"'.$vo['type_id'].'","start":"23","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">演员：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">导演：<?php echo mac_url_create($vo['vod_director'],'director'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"'.$vo['type_id'].'","start":"24","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-r">
                    <div class="tv-hd">
                        <h2><?php echo $vo['type_name']; ?> • 排行榜</h2></div>
                    <div class="tv-bd">
                        <ul class="v-rank clearfix">
						<?php $__TAG__ = '{"num":"10","type":"'.$vo['type_id'].'","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
						<li><i class="i-rank_num"><?php echo $key; ?></i><em class="v-num"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
                    </div>
                </div>
            </section>
			<?php endforeach; endif; else: echo "" ;endif; ?>
            <section class="imain clearfix">
                <div class="rank_list clearfix">
                    <dl>
                        <dt class="yellow"><i class="rank_icon"></i>热播榜</dt>
                        <dd>
                            <ul class="v-rank clearfix"><?php $__TAG__ = '{"num":"10","type":"current","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                                <li><i class="i-rank_num"><?php echo $key; ?></i><em class="v-num"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </dd>
                    </dl>
                    <dl>
                        <dt class="blue"><i class="rank_icon"></i>北美榜</dt>
                        <dd>
                            <ul class="v-rank clearfix"><?php $__TAG__ = '{"num":"10","type":"current","area":"\u7f8e\u56fd","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                                <li><i class="i-rank_num"><?php echo $key; ?></i><em class="v-num"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </dd>
                    </dl>
                    <dl>
                        <dt class="green"><i class="rank_icon"></i>好评榜</dt>
                        <dd>
                            <ul class="v-rank clearfix"><?php $__TAG__ = '{"num":"10","type":"current","order":"desc","by":"score","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                                <li><i class="i-rank_num"><?php echo $key; ?></i><em class="v-num"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </dd>
                    </dl>
                    <dl>
                        <dt class="red"><i class="rank_icon"></i>大陆榜</dt>
                        <dd>
                            <ul class="v-rank clearfix"><?php $__TAG__ = '{"num":"10","type":"current","area":"\u5927\u9646","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                                <li><i class="i-rank_num"><?php echo $key; ?></i><em class="v-num"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </dd>
                    </dl>
                </div>
            </section>
        </div>
    </div><?php break; case "2": ?><div class="icon">
        <div class="container">
            <section class="imain clearfix">
                <div class="col-l">
                    <div class="tv-hd">
                        <h2>最新<?php echo $obj['type_name']; ?></h2>
                        <div class="imore"><a href="javascript:;" class="a_change">换一换<i class="iconfont">&#xe62d;</i></a><a href="<?php echo mac_url_type($obj,[],'show'); ?>">更多<i class="iconfont">&#xe613;</i></a></div>
                    </div>
                    <div class="tv-bd a_clist">
                        <div class="tv-bd a_clist">
                        <div class="aclcon1"><?php $__TAG__ = '{"num":"1","type":"current","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">演员：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">导演：<?php echo mac_url_create($vo['vod_director'],'director'); ?></p>
</div></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","start":"2","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon2 hide"><?php $__TAG__ = '{"num":"1","type":"current","start":"12","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">演员：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">导演：<?php echo mac_url_create($vo['vod_director'],'director'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","start":"13","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon3 hide"><?php $__TAG__ = '{"num":"1","type":"current","start":"23","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">演员：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">导演：<?php echo mac_url_create($vo['vod_director'],'director'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","start":"24","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-r">
                    <div class="tv-hd">
                        <h2><?php echo $obj['type_name']; ?> • 排行榜</h2></div>
                    <div class="tv-bd">
                        <ul class="v-rank clearfix">
						<?php $__TAG__ = '{"num":"10","type":"current","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
						<li><i class="i-rank_num"><?php echo $key; ?></i><em class="v-num"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
                    </div>
                </div>
            </section>
            <section class="sort_list clearfix">
                <dl class="radio">
                    <dt>地<br>区</dt>
                    <dd><?php $_5dfe5fb4bc7df=explode(',',$obj['type_extend']['area']); if(is_array($_5dfe5fb4bc7df) || $_5dfe5fb4bc7df instanceof \think\Collection || $_5dfe5fb4bc7df instanceof \think\Paginator): if( count($_5dfe5fb4bc7df)==0 ) : echo "" ;else: foreach($_5dfe5fb4bc7df as $key=>$vo): switch($vo): case "内地": ?>
	<a href="<?php echo mac_url_type($obj,['area'=>大陆],'show'); ?>">大陆</a>
	<?php break; case "国产": ?>
	<a href="<?php echo mac_url_type($obj,['area'=>大陆],'show'); ?>">大陆</a>
	<?php break; default: ?> <a href="<?php echo mac_url_type($obj,['area'=>$vo],'show'); ?>"><?php echo $vo; ?></a>
<?php endswitch; endforeach; endif; else: echo "" ;endif; ?>
					</dd>
                </dl>
                <dl class="style">
                    <dt>分<br>类</dt>
                    <dd><?php $_5dfe5fb4bc77b=explode(',',$obj['type_extend']['class']); if(is_array($_5dfe5fb4bc77b) || $_5dfe5fb4bc77b instanceof \think\Collection || $_5dfe5fb4bc77b instanceof \think\Paginator): if( count($_5dfe5fb4bc77b)==0 ) : echo "" ;else: foreach($_5dfe5fb4bc77b as $key=>$vo): ?>
					<a href="<?php echo mac_url_type($obj,['class'=>$vo],'show'); ?>"><?php echo $vo; ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
					</dd>
                </dl>
                <dl class="radio">
					<dt>年<br>代</dt>
                    <dd><?php $_5dfe5fb4bc710=explode(',',$obj['type_extend']['year']); if(is_array($_5dfe5fb4bc710) || $_5dfe5fb4bc710 instanceof \think\Collection || $_5dfe5fb4bc710 instanceof \think\Paginator): if( count($_5dfe5fb4bc710)==0 ) : echo "" ;else: foreach($_5dfe5fb4bc710 as $key=>$vo): ?>
					<a href="<?php echo mac_url_type($obj,['year'=>$vo],'show'); ?>"><?php echo $vo; ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
					</dd>
                </dl>
                <dl class="recommend">
                    <dt>推<br>荐</dt>
                    <dd><?php $__TAG__ = '{"num":"5","type":"current","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
					</dd>
                </dl>
            </section>
			<?php $__TAG__ = '{"parent":"current","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <section class="imain clearfix">
                <div class="col-l">
                    <div class="tv-hd">
                        <h2><?php echo $vo['type_name']; ?></h2>
                        <div class="imore"><a href="javascript:;" class="a_change">换一换<i class="iconfont">&#xe62d;</i></a><a href="<?php echo mac_url_type($obj,[],'show'); ?>">更多<i class="iconfont">&#xe613;</i></a></div>
                    </div>
                    <div class="tv-bd a_clist">
                        <div class="tv-bd a_clist">
                        <div class="aclcon1"><?php $__TAG__ = '{"num":"1","type":"'.$vo['type_id'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">演员：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">导演：<?php echo mac_url_create($vo['vod_director'],'director'); ?></p>
</div></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"'.$vo['type_id'].'","start":"2","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon2 hide"><?php $__TAG__ = '{"num":"1","type":"'.$vo['type_id'].'","start":"12","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">演员：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">导演：<?php echo mac_url_create($vo['vod_director'],'director'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"'.$vo['type_id'].'","start":"13","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon3 hide"><?php $__TAG__ = '{"num":"1","type":"'.$vo['type_id'].'","start":"23","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">演员：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">导演：<?php echo mac_url_create($vo['vod_director'],'director'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"'.$vo['type_id'].'","start":"24","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-r">
                    <div class="tv-hd">
                        <h2><?php echo $vo['type_name']; ?> • 排行榜</h2></div>
                    <div class="tv-bd">
                        <ul class="v-rank clearfix">
						<?php $__TAG__ = '{"num":"10","type":"'.$vo['type_id'].'","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
						<li><i class="i-rank_num"><?php echo $key; ?></i><em class="v-num"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
                    </div>
                </div>
            </section>
			<?php endforeach; endif; else: echo "" ;endif; ?>
            <section class="imain clearfix">
                <div class="rank_list clearfix">
                    <dl>
                        <dt class="yellow"><i class="rank_icon"></i>热播榜</dt>
                        <dd>
                            <ul class="v-rank clearfix"><?php $__TAG__ = '{"num":"10","type":"current","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                                <li><i class="i-rank_num"><?php echo $key; ?></i><em class="v-num"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </dd>
                    </dl>
                    <dl>
                        <dt class="blue"><i class="rank_icon"></i>大陆榜</dt>
                        <dd>
                            <ul class="v-rank clearfix"><?php $__TAG__ = '{"num":"10","type":"current","area":"\u5927\u9646","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                                <li><i class="i-rank_num"><?php echo $key; ?></i><em class="v-num"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </dd>
                    </dl>
                    <dl>
                        <dt class="green"><i class="rank_icon"></i>美剧榜</dt>
                        <dd>
                            <ul class="v-rank clearfix"><?php $__TAG__ = '{"num":"10","type":"current","area":"\u7f8e\u56fd","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                                <li><i class="i-rank_num"><?php echo $key; ?></i><em class="v-num"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </dd>
                    </dl>
                    <dl>
                        <dt class="red"><i class="rank_icon"></i>港剧榜</dt>
                        <dd>
                            <ul class="v-rank clearfix"><?php $__TAG__ = '{"num":"10","type":"current","area":"\u9999\u6e2f","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                                <li><i class="i-rank_num"><?php echo $key; ?></i><em class="v-num"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </dd>
                    </dl>
                </div>
            </section>
        </div>
    </div><?php break; case "3": ?><div class="icon">
        <div class="container">
		
            <section class="imain clearfix">
                <div class="col-l">
                    <div class="tv-hd">
                        <h2>最热<?php echo $obj['type_name']; ?></h2>
                        <div class="imore"><a href="javascript:;" class="a_change">换一换<i class="iconfont">&#xe62d;</i></a><a href="<?php echo mac_url_type($obj,[],'show'); ?>">更多<i class="iconfont">&#xe613;</i></a></div>
                    </div>
                    <div class="tv-bd a_clist">
                        <div class="aclcon1"><?php $__TAG__ = '{"num":"1","type":"current","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
	<p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="tv-r">
				<ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","start":"2","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
                        </div>
                        <div class="aclcon2 hide"><?php $__TAG__ = '{"num":"1","type":"current","start":"12","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
	<p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","start":"13","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon3 hide"><?php $__TAG__ = '{"num":"1","type":"current","start":"23","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
	<p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","start":"24","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-r">
                    <div class="tv-hd">
                        <h2>最新期数</h2></div>
                    <div class="tv-bd">
                        <ul class="v-rank-zy clearfix"><?php $__TAG__ = '{"num":"10","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
						<li><span class="s_tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span><span class="s_des"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </section>
             
            <section class="sort_list clearfix">
                <dl class="radio">
                    <dt>地<br>区</dt>
                    <dd><?php $_5dfe5fb4b9e8d=explode(',',$obj['type_extend']['area']); if(is_array($_5dfe5fb4b9e8d) || $_5dfe5fb4b9e8d instanceof \think\Collection || $_5dfe5fb4b9e8d instanceof \think\Paginator): if( count($_5dfe5fb4b9e8d)==0 ) : echo "" ;else: foreach($_5dfe5fb4b9e8d as $key=>$vo): switch($vo): case "内地": ?>
	<a href="<?php echo mac_url_type($obj,['area'=>大陆],'show'); ?>">大陆</a>
	<?php break; case "国产": ?>
	<a href="<?php echo mac_url_type($obj,['area'=>大陆],'show'); ?>">大陆</a>
	<?php break; default: ?> <a href="<?php echo mac_url_type($obj,['area'=>$vo],'show'); ?>"><?php echo $vo; ?></a>
<?php endswitch; endforeach; endif; else: echo "" ;endif; ?>
					</dd>
                </dl>
                <dl class="style">
                    <dt>分<br>类</dt>
                    <dd><?php $_5dfe5fb4b9e45=explode(',',$obj['type_extend']['class']); if(is_array($_5dfe5fb4b9e45) || $_5dfe5fb4b9e45 instanceof \think\Collection || $_5dfe5fb4b9e45 instanceof \think\Paginator): if( count($_5dfe5fb4b9e45)==0 ) : echo "" ;else: foreach($_5dfe5fb4b9e45 as $key=>$vo): ?>
					<a href="<?php echo mac_url_type($obj,['class'=>$vo],'show'); ?>"><?php echo $vo; ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
					</dd>
                </dl>
                <dl class="radio">
					<dt>年<br>代</dt>
                    <dd><?php $_5dfe5fb4b9de1=explode(',',$obj['type_extend']['year']); if(is_array($_5dfe5fb4b9de1) || $_5dfe5fb4b9de1 instanceof \think\Collection || $_5dfe5fb4b9de1 instanceof \think\Paginator): if( count($_5dfe5fb4b9de1)==0 ) : echo "" ;else: foreach($_5dfe5fb4b9de1 as $key=>$vo): ?>
					<a href="<?php echo mac_url_type($obj,['year'=>$vo],'show'); ?>"><?php echo $vo; ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
					</dd>
                </dl>
                <dl class="recommend">
                    <dt>推<br>荐</dt>
                    <dd><?php $__TAG__ = '{"num":"5","type":"current","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
					</dd>
                </dl>
            </section>
			
            <section class="imain clearfix">
                <div class="col-l">
                    <div class="tv-hd">
                        <h2>大陆综艺</h2>
                        <div class="imore"><a href="javascript:;" class="a_change">换一换<i class="iconfont">&#xe62d;</i></a><a href="<?php echo mac_url_type($obj,['area'=>大陆],'show'); ?>">更多<i class="iconfont">&#xe613;</i></a></div>
                    </div>
                    <div class="tv-bd a_clist">
                        <div class="tv-bd a_clist">
                        <div class="aclcon1"><?php $__TAG__ = '{"num":"1","type":"current","area":"\u5927\u9646","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","area":"\u5927\u9646","start":"2","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon2 hide"><?php $__TAG__ = '{"num":"1","type":"current","start":"12","area":"\u5927\u9646","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","area":"\u5927\u9646","start":"13","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon3 hide"><?php $__TAG__ = '{"num":"1","type":"current","start":"23","area":"\u5927\u9646","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","area":"\u5927\u9646","start":"24","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-r">
                    <div class="tv-hd">
                        <h2>大陆 • 排行榜</h2></div>
                    <div class="tv-bd">
                        <ul class="v-rank clearfix">
						<?php $__TAG__ = '{"num":"10","type":"current","area":"\u5927\u9646","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
						<li><i class="i-rank_num"><?php echo $key; ?></i><em class="v-num"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
                    </div>
                </div>
            </section>
			 
            <section class="imain clearfix">
                <div class="col-l">
                    <div class="tv-hd">
                        <h2>台湾综艺</h2>
                        <div class="imore"><a href="javascript:;" class="a_change">换一换<i class="iconfont">&#xe62d;</i></a><a href="<?php echo mac_url_type($obj,['area'=>台湾],'show'); ?>">更多<i class="iconfont">&#xe613;</i></a></div>
                    </div>
                    <div class="tv-bd a_clist">
                        <div class="tv-bd a_clist">
                        <div class="aclcon1"><?php $__TAG__ = '{"num":"1","type":"current","area":"\u53f0\u6e7e","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","area":"\u53f0\u6e7e","start":"2","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon2 hide"><?php $__TAG__ = '{"num":"1","type":"current","start":"12","area":"\u53f0\u6e7e","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","area":"\u53f0\u6e7e","start":"13","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon3 hide"><?php $__TAG__ = '{"num":"1","type":"current","start":"23","area":"\u53f0\u6e7e","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","area":"\u53f0\u6e7e","start":"24","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-r">
                    <div class="tv-hd">
                        <h2>台湾 • 排行榜</h2></div>
                    <div class="tv-bd">
                        <ul class="v-rank clearfix">
						<?php $__TAG__ = '{"num":"10","type":"current","area":"\u53f0\u6e7e","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
						<li><i class="i-rank_num"><?php echo $key; ?></i><em class="v-num"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
                    </div>
                </div>
            </section>
			
            <section class="imain clearfix">
                <div class="col-l">
                    <div class="tv-hd">
                        <h2>韩国综艺</h2>
                        <div class="imore"><a href="javascript:;" class="a_change">换一换<i class="iconfont">&#xe62d;</i></a><a href="<?php echo mac_url_type($obj,['area'=>韩国],'show'); ?>">更多<i class="iconfont">&#xe613;</i></a></div>
                    </div>
                    <div class="tv-bd a_clist">
                        <div class="tv-bd a_clist">
                        <div class="aclcon1"><?php $__TAG__ = '{"num":"1","type":"current","area":"\u97e9\u56fd","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","area":"\u97e9\u56fd","start":"2","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon2 hide"><?php $__TAG__ = '{"num":"1","type":"current","start":"12","area":"\u97e9\u56fd","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","area":"\u97e9\u56fd","start":"13","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon3 hide"><?php $__TAG__ = '{"num":"1","type":"current","start":"23","area":"\u97e9\u56fd","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","area":"\u97e9\u56fd","start":"24","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-r">
                    <div class="tv-hd">
                        <h2>韩国 • 排行榜</h2></div>
                    <div class="tv-bd">
                        <ul class="v-rank clearfix">
						<?php $__TAG__ = '{"num":"10","type":"current","area":"\u97e9\u56fd","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
						<li><i class="i-rank_num"><?php echo $key; ?></i><em class="v-num"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
                    </div>
                </div>
            </section>
           
            <section class="imain clearfix">
                <div class="col-l">
                    <div class="tv-hd">
                        <h2>欧美综艺</h2>
                        <div class="imore"><a href="javascript:;" class="a_change">换一换<i class="iconfont">&#xe62d;</i></a><a href="<?php echo mac_url_type($obj,['area'=>美国],'show'); ?>">更多<i class="iconfont">&#xe613;</i></a></div>
                    </div>
                    <div class="tv-bd a_clist">
                        <div class="tv-bd a_clist">
                        <div class="aclcon1"><?php $__TAG__ = '{"num":"1","type":"current","area":"\u7f8e\u56fd","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","area":"\u7f8e\u56fd","start":"2","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon2 hide"><?php $__TAG__ = '{"num":"1","type":"current","start":"12","area":"\u7f8e\u56fd","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","area":"\u7f8e\u56fd","start":"13","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon3 hide"><?php $__TAG__ = '{"num":"1","type":"current","start":"23","area":"\u7f8e\u56fd","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","area":"\u7f8e\u56fd","start":"24","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-r">
                    <div class="tv-hd">
                        <h2>欧美 • 排行榜</h2></div>
                    <div class="tv-bd">
                        <ul class="v-rank clearfix">
						<?php $__TAG__ = '{"num":"10","type":"current","area":"\u7f8e\u56fd","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
						<li><i class="i-rank_num"><?php echo $key; ?></i><em class="v-num"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
                    </div>
                </div>
            </section>
        </div>
    </div><?php break; case "4": ?><div class="icon">
        <div class="container">
		
            <section class="imain clearfix">
                <div class="col-l">
                    <div class="tv-hd">
                        <h2>最新<?php echo $obj['type_name']; ?></h2>
                        <div class="imore"><a href="javascript:;" class="a_change">换一换<i class="iconfont">&#xe62d;</i></a><a href="<?php echo mac_url_type($obj,[],'show'); ?>">更多<i class="iconfont">&#xe613;</i></a></div>
                    </div>
                    <div class="tv-bd a_clist">
                        <div class="aclcon1"><?php $__TAG__ = '{"num":"1","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
	<p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="tv-r">
				<ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","start":"2","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
                        </div>
                        <div class="aclcon2 hide"><?php $__TAG__ = '{"num":"1","type":"current","start":"12","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
	<p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","start":"13","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon3 hide"><?php $__TAG__ = '{"num":"1","type":"current","start":"23","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
	<p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","start":"24","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-r">
                    <div class="tv-hd">
                        <h2>最新集数</h2></div>
                    <div class="tv-bd">
                        <ul class="v-rank-zy clearfix"><?php $__TAG__ = '{"num":"10","type":"current","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
						<li><span class="s_tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span><span class="s_des"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </section>
             
            <section class="sort_list clearfix">
                <dl class="radio">
                    <dt>地<br>区</dt>
                    <dd><?php $_5dfe5fb4b541d=explode(',',$obj['type_extend']['area']); if(is_array($_5dfe5fb4b541d) || $_5dfe5fb4b541d instanceof \think\Collection || $_5dfe5fb4b541d instanceof \think\Paginator): if( count($_5dfe5fb4b541d)==0 ) : echo "" ;else: foreach($_5dfe5fb4b541d as $key=>$vo): switch($vo): case "内地": ?>
	<a href="<?php echo mac_url_type($obj,['area'=>大陆],'show'); ?>">大陆</a>
	<?php break; case "国产": ?>
	<a href="<?php echo mac_url_type($obj,['area'=>大陆],'show'); ?>">大陆</a>
	<?php break; default: ?> <a href="<?php echo mac_url_type($obj,['area'=>$vo],'show'); ?>"><?php echo $vo; ?></a>
<?php endswitch; endforeach; endif; else: echo "" ;endif; ?>
					</dd>
                </dl>
                <dl class="style">
                    <dt>分<br>类</dt>
                    <dd><?php $_5dfe5fb4b53ba=explode(',',$obj['type_extend']['class']); if(is_array($_5dfe5fb4b53ba) || $_5dfe5fb4b53ba instanceof \think\Collection || $_5dfe5fb4b53ba instanceof \think\Paginator): if( count($_5dfe5fb4b53ba)==0 ) : echo "" ;else: foreach($_5dfe5fb4b53ba as $key=>$vo): ?>
					<a href="<?php echo mac_url_type($obj,['class'=>$vo],'show'); ?>"><?php echo $vo; ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
					</dd>
                </dl>
                <dl class="radio">
					<dt>年<br>代</dt>
                    <dd><?php $_5dfe5fb4b5352=explode(',',$obj['type_extend']['year']); if(is_array($_5dfe5fb4b5352) || $_5dfe5fb4b5352 instanceof \think\Collection || $_5dfe5fb4b5352 instanceof \think\Paginator): if( count($_5dfe5fb4b5352)==0 ) : echo "" ;else: foreach($_5dfe5fb4b5352 as $key=>$vo): ?>
					<a href="<?php echo mac_url_type($obj,['year'=>$vo],'show'); ?>"><?php echo $vo; ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
					</dd>
                </dl>
                <dl class="recommend">
                    <dt>推<br>荐</dt>
                    <dd><?php $__TAG__ = '{"num":"5","type":"current","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
					</dd>
                </dl>
            </section>
			
            <section class="imain clearfix">
                <div class="col-l">
                    <div class="tv-hd">
                        <h2>国产动漫</h2>
                        <div class="imore"><a href="javascript:;" class="a_change">换一换<i class="iconfont">&#xe62d;</i></a><a href="<?php echo mac_url_type($obj,['area'=>大陆],'show'); ?>">更多<i class="iconfont">&#xe613;</i></a></div>
                    </div>
                    <div class="tv-bd a_clist">
                        <div class="tv-bd a_clist">
                        <div class="aclcon1"><?php $__TAG__ = '{"num":"1","type":"current","area":"\u5927\u9646","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","area":"\u5927\u9646","start":"2","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon2 hide"><?php $__TAG__ = '{"num":"1","type":"current","start":"12","area":"\u5927\u9646","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","area":"\u5927\u9646","start":"13","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon3 hide"><?php $__TAG__ = '{"num":"1","type":"current","start":"23","area":"\u5927\u9646","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","area":"\u5927\u9646","start":"24","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-r">
                    <div class="tv-hd">
                        <h2>国产动漫 • 排行榜</h2></div>
                    <div class="tv-bd">
                        <ul class="v-rank clearfix">
						<?php $__TAG__ = '{"num":"10","type":"current","area":"\u5927\u9646","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
						<li><i class="i-rank_num"><?php echo $key; ?></i><em class="v-num"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
                    </div>
                </div>
            </section>
			 
            
			
            <section class="imain clearfix">
                <div class="col-l">
                    <div class="tv-hd">
                        <h2>日本动漫</h2>
                        <div class="imore"><a href="javascript:;" class="a_change">换一换<i class="iconfont">&#xe62d;</i></a><a href="<?php echo mac_url_type($obj,['area'=>日本],'show'); ?>">更多<i class="iconfont">&#xe613;</i></a></div>
                    </div>
                    <div class="tv-bd a_clist">
                        <div class="tv-bd a_clist">
                        <div class="aclcon1"><?php $__TAG__ = '{"num":"1","type":"current","area":"\u65e5\u672c","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","area":"\u65e5\u672c","start":"2","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon2 hide"><?php $__TAG__ = '{"num":"1","type":"current","start":"12","area":"\u65e5\u672c","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","area":"\u65e5\u672c","start":"13","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon3 hide"><?php $__TAG__ = '{"num":"1","type":"current","start":"23","area":"\u65e5\u672c","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","area":"\u65e5\u672c","start":"24","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-r">
                    <div class="tv-hd">
                        <h2>日本动漫 • 排行榜</h2></div>
                    <div class="tv-bd">
                        <ul class="v-rank clearfix">
						<?php $__TAG__ = '{"num":"10","type":"current","area":"\u65e5\u672c","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
						<li><i class="i-rank_num"><?php echo $key; ?></i><em class="v-num"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
                    </div>
                </div>
            </section>
           
            <section class="imain clearfix">
                <div class="col-l">
                    <div class="tv-hd">
                        <h2>欧美动漫</h2>
                        <div class="imore"><a href="javascript:;" class="a_change">换一换<i class="iconfont">&#xe62d;</i></a><a href="<?php echo mac_url_type($obj,['area'=>美国],'show'); ?>">更多<i class="iconfont">&#xe613;</i></a></div>
                    </div>
                    <div class="tv-bd a_clist">
                        <div class="tv-bd a_clist">
                        <div class="aclcon1"><?php $__TAG__ = '{"num":"1","type":"current","area":"\u7f8e\u56fd","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","area":"\u7f8e\u56fd","start":"2","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon2 hide"><?php $__TAG__ = '{"num":"1","type":"current","start":"12","area":"\u7f8e\u56fd","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","area":"\u7f8e\u56fd","start":"13","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                        <div class="aclcon3 hide"><?php $__TAG__ = '{"num":"1","type":"current","start":"23","area":"\u7f8e\u56fd","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <div class="tv-l">
                                <div class="tvhots"><div class="v-pic">
    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <p class="v-tit">
        <em class="em-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></em>
        <em class="em-score"><?php echo $vo['vod_score']; ?>分</em>
    </p>
    <p class="s-des">主持：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
    <p class="s-des">地区：<?php echo mac_url_create($vo['vod_area'],'area'); ?></p>
</div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="tv-r">
                <ul class="tv-list">
				<?php $__TAG__ = '{"num":"10","type":"current","area":"\u7f8e\u56fd","start":"24","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li>
    <div class="v-pic">
        <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"><div class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></div><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
    </div>
    <div class="v-txt">
        <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
    </div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-r">
                    <div class="tv-hd">
                        <h2>欧美动漫 • 排行榜</h2></div>
                    <div class="tv-bd">
                        <ul class="v-rank clearfix">
						<?php $__TAG__ = '{"num":"10","type":"current","area":"\u7f8e\u56fd","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
						<li><i class="i-rank_num"><?php echo $key; ?></i><em class="v-num"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></em><span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
                    </div>
                </div>
            </section>
        </div>
    </div><?php break; default: ?>
    <div class="icon">
        <div class="container">
		
		<!--广告位1开始下方广告代码可以替换成自己的广告代码。如不需要请直接删除-->
		<!--	<a href="https://shop112536920.taobao.com/" target="_blank"><img src="http://kk.qin52.com/50.gif" width="100%" height="100"></a>   
			<!--广告位1结束-->
		
            <section class="iselect clearfix"><?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <a href="<?php echo mac_url_type($vo,[],'show'); ?>"  <?php if($obj['type_id'] == $vo['type_id']): ?>class="cur"<?php endif; ?> title="<?php echo $vo['type_name']; ?>"><em><?php echo $vo['type_name']; ?></em><i class="i_arrow"></i></a><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="onsel pull-right">已选择
                <span><?php echo $obj['type_name']; ?></span></div>
            </section>
            <ul class="select_list clearfix">
                <li class="mshow">
                    <span class="v-tit">频道：</span>
                    <p class="p_select"><?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><a href="<?php echo mac_url_type($vo,[],'show'); ?>" <?php if($obj['type_id'] == $vo['type_id']): ?>class="cur"<?php endif; ?>><?php echo $vo['type_name']; ?></a><?php endforeach; endif; else: echo "" ;endif; ?></p>
                </li>
                <li class="clearfix">
                    <span class="v-tit">分类：</span>
                    <p class="p_select"><a href="<?php echo mac_url_type($obj['parent'],['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>" <?php if($param['class'] == ''): ?>class="cur"<?php endif; ?>>全部</a><?php if(($obj['type_id']==1) OR ($obj['parent']['type_id']==1)): $__TAG__ = '{"ids":"child","parent":"1","by":"sort","order":"asc","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<a <?php if($vo['type_id'] == $obj['type_id']): endif; ?> href="<?php echo mac_url_type($vo,[],'show'); ?>" <?php if($obj['type_id'] == $vo['type_id']): ?>class="cur"<?php endif; ?> ><?php echo $vo['type_name']; ?>  </a><?php endforeach; endif; else: echo "" ;endif; elseif(($obj['type_id']==2) OR ($obj['parent']['type_id']==2)): $__TAG__ = '{"ids":"child","parent":"2","by":"sort","order":"asc","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<a <?php if($vo['type_id'] == $obj['type_id']): endif; ?> href="<?php echo mac_url_type($vo,[],'show'); ?>" <?php if($obj['type_id'] == $vo['type_id']): ?>class="cur"<?php endif; ?>><?php echo $vo['type_name']; ?></a><?php endforeach; endif; else: echo "" ;endif; endif; if(($obj['type_id']==3) OR ($obj['parent']['type_id']==3)): $__TAG__ = '{"ids":"child","parent":"3","by":"sort","order":"asc","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<a <?php if($vo['type_id'] == $obj['type_id']): endif; ?> href="<?php echo mac_url_type($vo,[],'show'); ?>" <?php if($obj['type_id'] == $vo['type_id']): ?>class="cur"<?php endif; ?>><?php echo $vo['type_name']; ?></a><?php endforeach; endif; else: echo "" ;endif; elseif(($obj['type_id']==4) OR ($obj['parent']['type_id']==4)): $__TAG__ = '{"ids":"child","parent":"4","by":"sort","order":"asc","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<a <?php if($vo['type_id'] == $obj['type_id']): endif; ?> href="<?php echo mac_url_type($vo,[],'show'); ?>" <?php if($obj['type_id'] == $vo['type_id']): ?>class="cur"<?php endif; ?>><?php echo $vo['type_name']; ?></a><?php endforeach; endif; else: echo "" ;endif; endif; if(($obj['type_id']==300) OR ($obj['parent']['type_id']==300)): $__TAG__ = '{"ids":"child","parent":"300","by":"sort","order":"asc","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<a <?php if($vo['type_id'] == $obj['type_id']): endif; ?> href="<?php echo mac_url_type($vo,[],'show'); ?>" <?php if($obj['type_id'] == $vo['type_id']): ?>class="cur"<?php endif; ?>><?php echo $vo['type_name']; ?></a><?php endforeach; endif; else: echo "" ;endif; elseif(($obj['type_id']==400) OR ($obj['parent']['type_id']==400)): $__TAG__ = '{"ids":"child","parent":"400","by":"sort","order":"asc","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<a <?php if($vo['type_id'] == $obj['type_id']): endif; ?> href="<?php echo mac_url_type($vo,[],'show'); ?>" <?php if($obj['type_id'] == $vo['type_id']): ?>class="cur"<?php endif; ?>><?php echo $vo['type_name']; ?></a><?php endforeach; endif; else: echo "" ;endif; endif; ?>
	
	</p>
                </li>
                <li>
                    <span class="v-tit">地区：</span>
                   
					 <div class="p_select">
			<a <?php if($param['area'] == ''): endif; ?> href="<?php echo mac_url_type($obj,['area'=>'','lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"<?php if($param['area'] == ''): ?>class="cur"<?php endif; ?>>全部</a><?php if(empty($obj['type_extend']['area']) || (($obj['type_extend']['area'] instanceof \think\Collection || $obj['type_extend']['area'] instanceof \think\Paginator ) && $obj['type_extend']['area']->isEmpty())): $_5dfe5fb4b23fc=explode(',',$obj['parent']['type_extend']['area']); if(is_array($_5dfe5fb4b23fc) || $_5dfe5fb4b23fc instanceof \think\Collection || $_5dfe5fb4b23fc instanceof \think\Paginator): if( count($_5dfe5fb4b23fc)==0 ) : echo "" ;else: foreach($_5dfe5fb4b23fc as $key=>$vo): switch($vo): case "内地": ?>
	<a <?php if($param['area'] == 大陆): endif; ?> href="<?php echo mac_url_type($obj,['area'=>大陆,'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>" <?php if($param['area'] == 大陆): ?>class="cur"<?php endif; ?> >大陆</a>
	<?php break; case "国产": ?>
	<a <?php if($param['area'] == 大陆): endif; ?> href="<?php echo mac_url_type($obj,['area'=>大陆,'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>" <?php if($param['area'] == 大陆): ?>class="cur"<?php endif; ?> >大陆</a>
	<?php break; default: ?> <a <?php if($param['area'] == $vo): endif; ?> href="<?php echo mac_url_type($obj,['area'=>$vo,'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>" <?php if($param['area'] == $vo): ?>class="cur"<?php endif; ?> ><?php echo $vo; ?></a>
<?php endswitch; endforeach; endif; else: echo "" ;endif; else: $_5dfe5fb4b22d1=explode(',',$obj['type_extend']['area']); if(is_array($_5dfe5fb4b22d1) || $_5dfe5fb4b22d1 instanceof \think\Collection || $_5dfe5fb4b22d1 instanceof \think\Paginator): if( count($_5dfe5fb4b22d1)==0 ) : echo "" ;else: foreach($_5dfe5fb4b22d1 as $key=>$vo): switch($vo): case "内地": ?>
	<a <?php if($param['area'] == 大陆): endif; ?> href="<?php echo mac_url_type($obj,['area'=>大陆,'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>" <?php if($param['area'] == 大陆): ?>class="cur"<?php endif; ?> >大陆</a>
	<?php break; case "国产": ?>
	<a <?php if($param['area'] == 大陆): endif; ?> href="<?php echo mac_url_type($obj,['area'=>大陆,'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>" <?php if($param['area'] == 大陆): ?>class="cur"<?php endif; ?> >大陆</a>
	<?php break; default: ?> <a <?php if($param['area'] == $vo): endif; ?> href="<?php echo mac_url_type($obj,['area'=>$vo,'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>" <?php if($param['area'] == $vo): ?>class="cur"<?php endif; ?> ><?php echo $vo; ?></a>
<?php endswitch; endforeach; endif; else: echo "" ;endif; endif; ?>
		</div>
					
					
					
                </li>
                <li>
                    <span class="v-tit">年份：</span>
                    <div class="p_select">
			<a <?php if($param['year'] == ''): endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>'','level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>" <?php if($param['year'] == ''): ?>class="cur"<?php endif; ?>>全部</a><?php if(empty($obj['type_extend']['year']) || (($obj['type_extend']['year'] instanceof \think\Collection || $obj['type_extend']['year'] instanceof \think\Paginator ) && $obj['type_extend']['year']->isEmpty())): $_5dfe5fb4b21e0=explode(',',$obj['parent']['type_extend']['year']); if(is_array($_5dfe5fb4b21e0) || $_5dfe5fb4b21e0 instanceof \think\Collection || $_5dfe5fb4b21e0 instanceof \think\Paginator): if( count($_5dfe5fb4b21e0)==0 ) : echo "" ;else: foreach($_5dfe5fb4b21e0 as $key=>$vo): ?>
			<a <?php if($param['year'] == $vo): endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$vo,'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>" <?php if($param['year'] == $vo): ?>class="cur"<?php endif; ?>><?php echo $vo; ?></a><?php endforeach; endif; else: echo "" ;endif; else: $_5dfe5fb4b2152=explode(',',$obj['type_extend']['year']); if(is_array($_5dfe5fb4b2152) || $_5dfe5fb4b2152 instanceof \think\Collection || $_5dfe5fb4b2152 instanceof \think\Paginator): if( count($_5dfe5fb4b2152)==0 ) : echo "" ;else: foreach($_5dfe5fb4b2152 as $key=>$vo): ?>
			<a <?php if($param['year'] == $vo): endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$vo,'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>" <?php if($param['year'] == $vo): ?>class="cur"<?php endif; ?>><?php echo $vo; ?></a><?php endforeach; endif; else: echo "" ;endif; endif; ?>
		</div>
                </li>
                
                <li class="mhide">
                    <span class="v-tit">字母：</span>
                    <p class="p_select"><a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>'','state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>" <?php if($param['letter'] == ''): ?>class="cur"<?php endif; ?>>全部</a>
					<?php $_5dfe5fb4b1f65=explode(',','A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,0-9'); if(is_array($_5dfe5fb4b1f65) || $_5dfe5fb4b1f65 instanceof \think\Collection || $_5dfe5fb4b1f65 instanceof \think\Paginator): if( count($_5dfe5fb4b1f65)==0 ) : echo "" ;else: foreach($_5dfe5fb4b1f65 as $key2=>$vo2): ?>
					<a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$vo2,'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>" <?php if($param['letter'] == $vo2): ?>class="cur"<?php endif; ?>><?php echo $vo2; ?></a>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					</p>
                </li>
            </ul>
            <section class="select_con">
                <div class="v-hd clearfix">
                    <p class="p_tab"><a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>'time' ],'show'); ?>" title="按更新" <?php if($param['by'] == '' || $param['by'] == 'time'): ?>class="cur"<?php endif; ?>>按更新</a><a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>'hits' ],'show'); ?>" title="按人气" <?php if($param['by'] == 'hits'): ?>class="cur"<?php endif; ?>>按人气</a><a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>'score' ],'show'); ?>" title="按推荐" <?php if($param['by'] == 'score'): ?>class="cur"<?php endif; ?>>按推荐</a></p>
                    <span class="s_num">共有<em class="mac_total"></em>部影片</span>
                    <div class="p_btn">
                    </div>
                </div>
                <div class="v-bd clearfix">
                    <div class="v_con_box">
                        <ul class="tv-list clearfix">
						<?php $__TAG__ = '{"num":"36","paging":"yes","type":"current","pageurl":"vod\/show","half":"6","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <li>
                                <div class="v-pic">
                                    <img data-src="<?php echo mac_url_img($vo['vod_pic']); ?>" class="thumb" alt="<?php echo $vo['vod_name']; ?>"> <span class="v-tips"><?php switch($vo['type_id'] or vo.type_id_1): case "1": if(empty($vo['vod_state']) == true): ?>
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
<?php endif; endif; break; default: endswitch; ?></span> <a class="v-playBtn" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><i></i></a>
                                </div>
                                <div class="v-txt">
                                    <p class="v-tit"><a title="<?php echo $vo['vod_name']; ?>" href="<?php echo mac_url_vod_detail($vo); ?>"><?php echo $vo['vod_name']; ?></a></p>
                                    <p class="s-des">演员：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?></p>
                                    <p class="s-des">导演：<?php echo mac_url_create($vo['vod_director'],'director'); ?></p>
                                </div>
                            </li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <div class="v-page clearfix">共<?php echo $__PAGING__['record_total']; ?>条数据&nbsp;当前:<?php echo $__PAGING__['page_current']; ?>/<?php echo $__PAGING__['page_total']; ?>页&nbsp;<?php if($__PAGING__['page_current'] != 1): ?><a href="<?php echo mac_url_page($__PAGING__['page_url'],1); ?>" class="pagelink_a">首页</a>&nbsp;<a href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_prev']); ?>" class="pagelink_a">上一页</a>&nbsp;<?php endif; if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): if($__PAGING__['page_current'] == $num): ?><span class="pagenow"><?php echo $num; ?></span>&nbsp;<?php else: ?><a class="pagelink_b" href="<?php echo mac_url_page($__PAGING__['page_url'],$num); ?>"><?php echo $num; ?></a>&nbsp;<?php endif; endforeach; endif; else: echo "" ;endif; if($__PAGING__['page_current'] != $__PAGING__['page_total']): ?><a href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_next']); ?>" class="pagelink_a">下一页</a>&nbsp;<a href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_total']); ?>" class="pagelink_a">尾页</a>&nbsp;<?php endif; ?></div>
						
						<!--广告位1开始下方广告代码可以替换成自己的广告代码。如不需要请直接删除-->
		<!--	<a href="https://shop112536920.taobao.com/" target="_blank"><img src="http://kk.qin52.com/50.gif" width="100%" height="100"></a>
			<!--广告位1结束-->
						
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script>
        $('.mac_total').html('<?php echo $__PAGING__['record_total']; ?>');
    </script>

    <script src="<?php echo $maccms['path_tpl']; ?>js/lazyload.min.js"></script>
    <script src="<?php echo $maccms['path_tpl']; ?>js/app.js"></script>


<?php endswitch; ?>
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
