<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:44:"template/default_pc/html/user/ajax_info.html";i:1524627986;}*/ ?>

<!--登录弹窗开始-->
<div class="mac_login">
    <form class="mac_login_form">
        <div class="login_form_group">
            会员名：<?php echo $obj['user_name']; ?>
        </div>
        <div class="login_form_group">
            会员等级：<?php echo $obj['group_name']; ?>
        </div>
        <div class="login_form_group">
           剩余积分：<?php echo $obj['user_points']; ?>
        </div>
        <div class="login_form_group">
            上次登录时间：<?php echo mac_day($obj['user_last_login_time'],color); ?>
        </div>
        <div class="login_form_group">
            登录次数：<?php echo $obj['user_login_num']; ?>
        </div>
        <div class="login_form_link">
            <a href="<?php echo url('user/index'); ?>">进入会员中心</a>
            <a href="<?php echo url('user/logout'); ?>">退出</a>
        </div>
    </form>
</div>
<!--登录弹窗结束-->
