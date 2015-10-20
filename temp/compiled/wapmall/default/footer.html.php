<footer class="region">
    <section class="user-panel">
        <p class="guest">
            <?php if (! $this->_var['visitor']['user_id']): ?>
            <a href="<?php echo url('app=member&act=login&ret_url=' . $this->_var['ret_url']. ''); ?>">登录</a>
            <a href="<?php echo url('app=member&act=register&ret_url=' . $this->_var['ret_url']. ''); ?>">注册</a>
            <?php else: ?>
            <a href="<?php echo url('app=member'); ?>"><?php echo htmlspecialchars($this->_var['visitor']['user_name']); ?></a>
            <a href="<?php echo url('app=member&act=logout'); ?>">退出</a>
            <?php endif; ?> 
        </p>
        <a class="fb-top" href="javascript:scroll(0,0)"></a>
    </section>
    <p class="version">
        <a href="#">标准版</a>
        <a href="#" id="btn_go_pc">电脑版</a>
    </p>     
    <p class="copyright">Copyright © 2014 微创动力</p> 
</footer>
        </div>
<div class='yi-shangqiao yi-www' id='Shangqiao'>
<ul class='yi-toolbar yi-bgcolor'>
<li><a href='tel:18012345678' class='yi-hover yi-tels'><span class='yi-toolbar-tel'></span>电话咨询</a></li>
<li><a href='sms:18012345678' class='yi-hover yi-tj'><span class='yi-toolbar-mess'></span>短信咨询</a></li>
<li><a href='http://wpa.qq.com/msgrd?v=3&uin=361818525&site=qq&menu=yes' class='yi-hover yi-tj'><span class='yi-toolbar-online'></span>在线沟通</a></li>
</ul>
</div>