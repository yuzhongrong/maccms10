<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:33:"template/gay/html/vod/detail.html";i:1544283132;s:65:"/www/wwwroot/www.708090.com/template/gay/html/public/include.html";i:1553341382;s:62:"/www/wwwroot/www.708090.com/template/gay/html/public/head.html";i:1544283110;s:65:"/www/wwwroot/www.708090.com/template/gay/html/public/serial2.html";i:1544283138;s:65:"/www/wwwroot/www.708090.com/template/gay/html/public/serial1.html";i:1544283138;s:62:"/www/wwwroot/www.708090.com/template/gay/html/public/foot.html";i:1544283110;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $obj['vod_name']; ?>详情介绍-<?php echo $obj['vod_name']; ?>在线观看-<?php echo $obj['vod_name']; ?>迅雷下载 - <?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $obj['vod_name']; ?>在线收看,<?php echo $obj['vod_name']; ?>迅雷下载" />
    <meta name="description" content="<?php echo $obj['vod_name']; ?>剧情:<?php echo $obj['vod_blurb']; ?>" />
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
        <section class="detail_top">
            <div class="detail_top_con container">
                <div class="v_path clearfix">当前位置： <a href='<?php echo $maccms['path']; ?>'>首页</a>&nbsp;&nbsp;&raquo;&nbsp;&nbsp;<a href='<?php echo mac_url_type($obj['type']); ?>'><?php echo $obj['type']['type_name']; ?></a>&nbsp;&nbsp;&raquo;&nbsp;&nbsp;<a href='<?php echo mac_url_vod_detail($obj); ?>'><?php echo $obj['vod_name']; ?></a></div>
                <div class="clearfix">
                    <div class="poster_placeholder">
                        <div class="v-pic">
                            <img src="<?php echo mac_url_img($obj['vod_pic']); ?>" alt="<?php echo $obj['vod_name']; ?>">
                            <a href="<?php echo mac_url_vod_detail($obj); ?>" class="v-playBtn"><i></i></a>
                        </div>
                        <p class="p_fun">
                            <a href="#mac_comment" target="_self"><i class="iconfont"></i>评论<em>(<?php echo intval($__PAGING__['record_total']); ?>)</em></a>
                            <i class="i_line"></i>
                            <a onclick="MAC.Fav(location.href,document.name);" href="javascript:void(0);" class="js-addFavorite"><i class="iconfont"></i>收藏</a>
                        </p>
                    </div>
                    <div class="txt_intro_con">
                        <div class="tit">
                            <h1 class="clearfix"><?php echo $obj['vod_name']; ?></h1>
                            <p class="p_txt">
                                <em class="em_num"><?php switch($obj['type_id']): case "1": if(empty($obj['vod_state']) == true): ?>
<?php echo $obj['vod_remarks']; else: ?>
<?php echo $obj['vod_state']; endif; break; case "2": if($obj['vod_isend'] == '1'): if($obj['vod_total'] > '0'): ?>
<?php echo $obj['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($obj['vod_serial'],'全'); ?>集
<?php endif; else: if($obj['vod_serial'] == $obj['vod_total']): if($obj['vod_total'] > '0'): ?>
<?php echo $obj['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($obj['vod_serial'],'全'); ?>集
<?php endif; elseif($obj['vod_serial'] < $obj['vod_total']): if($obj['vod_serial'] > '0'): ?>
更新至<?php echo $obj['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($obj['vod_serial'],'全'); ?>集
<?php endif; elseif($obj['vod_serial'] > $obj['vod_total']): ?>
全<?php echo mac_default($obj['vod_serial'],''); ?>集
<?php endif; endif; break; case "3": if(strlen($obj['vod_serial']) > 6): ?>
<?php echo date('Y-m-d',strtotime($obj['vod_serial'])); ?>期
<?php else: ?>
<?php echo $obj['vod_serial']; ?>期
<?php endif; break; case "4": if($obj['vod_isend'] == '1'): if($obj['vod_total'] > '0'): ?>
<?php echo $obj['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($obj['vod_serial'],'全'); ?>集
<?php endif; else: if($obj['vod_serial'] == $obj['vod_total']): if($obj['vod_total'] > '0'): ?>
<?php echo $obj['vod_total']; ?>集全
<?php else: ?>
<?php echo mac_default($obj['vod_serial'],'全'); ?>集
<?php endif; elseif($obj['vod_serial'] < $obj['vod_total']): if($obj['vod_serial'] > '0'): ?>
更新至<?php echo $obj['vod_serial']; ?>集
<?php else: ?>
<?php echo mac_default($obj['vod_serial'],'全'); ?>集
<?php endif; elseif($obj['vod_serial'] > $obj['vod_total']): ?>
全<?php echo mac_default($obj['vod_serial'],''); ?>集
<?php endif; endif; break; default: endswitch; ?></em><em class="em_score"><?php echo $obj['vod_score']; ?><i>分</i></em><em class="hide">播放：<span class="mac_hits hits" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-type="hits"></span></em>
                            </p>
                        </div>
                        <ul class="txt_list clearfix">
                            <li class="clearfix"><em class="em_tit">主演：</em><?php echo mac_url_create($obj['vod_actor'],'actor'); ?></li>
                            <li class="clearfix"><em class="em_tit">导演：</em><?php echo mac_url_create($obj['vod_director'],'director'); ?><em class="em_tit">地区：</em><?php echo mac_url_create($obj['vod_area'],'area'); ?>&nbsp;&nbsp;&nbsp;<em class="em_tit">类型：</em><?php echo mac_url_create($obj['vod_class'],'class'); ?></li>
                            <li class="li_intro clearfix"><em class="em_tit">简介：</em><?php echo $obj['vod_blurb']; ?></li>
                        </ul>
                    </div>
                    <div class="play_source">
					<!-- 选择播放源 -->
						<div class="play_source_tab clearfix" id="playNumTab"><?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
                        <a href="javascript:void(0);" target="_self" <?php if($key == 1): ?>class="cur"<?php endif; ?> rel="nofollow" apiname="<?php echo $vo['from']; ?>" id="api_<?php echo $vo['from']; ?>" alt="<?php echo $vo['player_info']['show']; ?>"><img width="22" height="22" src="<?php echo $maccms['path_tpl']; ?>images/<?php echo $vo['from']; ?>.png"><?php echo $vo['player_info']['show']; ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                        <i class="iLine"></i>
						</div>
					<!-- 选择播放源 -->

                        <div class="v_con_box"><?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
                            <ul class="play_num_list clearfix hide <?php if($key == 1): ?>show<?php endif; ?>"><?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key2=>$vo2): ?>
                                <li><a href="<?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$vo2['nid']]); ?>"><?php echo $vo2['name']; ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="idetail container">
            <div class="col-l">
                <div class="tv-hd v-border">
                    <h2><span>剧情介绍</span></h2>
                </div>
                <div class="tv-bd">
                    <div class="infor_intro">简介：<?php echo $obj['vod_content']; ?></div>
                </div>
                <div class="tv-hd v-border">
                    <h2><span>推荐影片</span></h2>
                </div>
                <div class="tv-bd">
                    <ul class="tv-list tv-hotlist"><?php $__TAG__ = '{"num":"12","type":"current","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                        <li><div class="v-pic">
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
<?php endif; endif; break; default: endswitch; ?></div> <a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" class="v-playBtn"><i></i></a>
</div>
<div class="v-txt">
    <span class="v-tit"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></span>
</div></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div class="tv-hd v-border">
                    <h2><span>影片评论</span></h2><span class="s_num">共有<em><?php echo intval($__PAGING__['record_total']); ?></em>条影评</span>
                </div>
	<div class="mac_comment" id="mac_comment" data-id="<?php echo $obj['vod_id']; ?>" data-mid="<?php echo $maccms['mid']; ?>" ></div>
    <script>
        $(function(){
            MAC.Comment.Login = <?php echo $comment['login']; ?>;
            MAC.Comment.Verify = <?php echo $comment['verify']; ?>;
            MAC.Comment.Init();
            MAC.Comment.Show(1);
        });
    </script>
            </div>
            <div class="col-r">
                <div class="tv-hd">
                    <h2>本周 • 热播榜</h2></div>
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
                <div class="tv-hd">
                    <h2>本月 • 热播榜</h2></div>
                <div class="tv-bd">
                    <ul class="v-rank clearfix">
					<?php $__TAG__ = '{"num":"10","type":"current","order":"desc","by":"hits_month","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
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
<span style="display:none" class="mac_ulog_set" alt="设置内容页浏览记录" data-type="1" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-sid="<?php echo $param['sid']; ?>" data-nid="<?php echo $param['nid']; ?>"></span>
<span style="display:none" class="mac_history_set" alt="设置History历史记录" data-name="[<?php echo $obj['type']['type_name']; ?>]<?php echo $obj['vod_name']; ?>" data-pic="<?php echo mac_url_img(mac_url_img($obj['vod_pic'])); ?>"></span>
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