

<div class="footer">
    <p>
        <a href="<?php echo url('app=default'); ?>">商城首页</a>|
        <a href="<?php echo url('app=store&id=' . $this->_var['store']['store_id']. ''); ?>">商铺首页</a>|
        <a href="<?php echo url('app=member'); ?>">会员中心</a>
    </p>
    <a href="#" class="top"><img src="<?php echo $this->res_base . "/" . 'images/top.png'; ?>"></a>
    <p><?php if ($this->_var['store']['functions']['copyright']): ?><?php echo htmlspecialchars($this->_var['store']['copyright']); ?><?php else: ?> Copyright &copy;2014 <?php echo $this->_var['site_title']; ?><?php endif; ?></p>
</div> 


<div class="footer_nav">
    <div class="toggle_nav">
        <div class="bottom_nav_btn"><img src="<?php echo $this->res_base . "/" . 'images/bnbtn.png'; ?>"></div>
        <ul class="nav">
            <a href="<?php echo url('app=store&id=' . $this->_var['store']['store_id']. ''); ?>"><li><span><img src="<?php echo $this->res_base . "/" . 'images/nav_1.png'; ?>"></span></li></a>
            <a href="javascript:;" class="menu"><li><span><img src="<?php echo $this->res_base . "/" . 'images/nav_2.png'; ?>"></span></li></a>
            <a href="<?php if ($this->_var['visitor']['user_id']): ?><?php echo url('app=buyer_order'); ?><?php else: ?><?php echo url('app=member&act=login&ret_url=' . $this->_var['ret_url']. ''); ?><?php endif; ?>"><li><span><img src="<?php echo $this->res_base . "/" . 'images/nav_3.png'; ?>"></span></li></a>
            <a href="<?php echo url('app=cart'); ?>"><li><span><img src="<?php echo $this->res_base . "/" . 'images/nav_4.png'; ?>"></span></li></a>
        </ul>
    </div>
</div>

<?php if ($this->_var['kmenus']['status'] == 0 || $this->_var['kmenus']['status'] == ''): ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->res_base . "/" . 'css/kmenus.css'; ?>">
<div class="flo_btn_<?php if ($this->_var['kmenus']['stypeinfo'] == ''): ?>1<?php else: ?><?php echo $this->_var['kmenus']['stypeinfo']; ?><?php endif; ?>">
    <ul>
        <?php $_from = $this->_var['kmenusinfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'info');if (count($_from)):
    foreach ($_from AS $this->_var['info']):
?>
        <li>
            <a style="background-color:#<?php echo $this->_var['info']['color']; ?>;" href="<?php if ($this->_var['info']['title'] == '导航'): ?>http://map.baidu.com/?newmap=1&ie=utf-8&s=s%26wd%3D<?php echo $this->_var['info']['loadurl']; ?><?php else: ?><?php echo $this->_var['info']['loadurl']; ?><?php endif; ?>"><span style="background:url('<?php echo $this->_var['info']['imgurl']; ?>') scroll no-repeat center center transparent;background-size:60%; bottom:0; left:0;"></span></a>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
</div>
<?php endif; ?>