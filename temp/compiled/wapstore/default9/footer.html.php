
<div class="huabian1"></div>
<div class="footer">
    <p>
        <a href="<?php echo url('app=default&Debug=Wap'); ?>">商城首页</a>|
        <a href="<?php echo url('app=store&id=' . $this->_var['store']['store_id']. '&Debug=Wap'); ?>">商铺首页</a>|
        <a href="<?php echo url('app=member&Debug=Wap'); ?>">会员中心</a>
    </p>
    <a href="#" class="top"><img src="<?php echo $this->res_base . "/" . 'images/top.png'; ?>"></a>
    <p><?php if ($this->_var['store']['functions']['copyright']): ?><?php echo htmlspecialchars($this->_var['store']['copyright']); ?><?php else: ?> Copyright &copy;2014 <?php echo $this->_var['site_title']; ?><?php endif; ?></p>
</div> 

<?php if ($this->_var['kmenus']['status'] == 0 || $this->_var['kmenus']['status'] == ''): ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->res_base . "/" . 'css/kmenus.css'; ?>">
<div class="flo_btn_<?php if ($this->_var['kmenus']['stypeinfo'] == '' || $this->_var['kmenus']['stypeinfo'] == 1 || $this->_var['kmenus']['stypeinfo'] == 2): ?>3<?php else: ?><?php echo $this->_var['kmenus']['stypeinfo']; ?><?php endif; ?>">
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


<div class="taoplus" id="J_Taojia">
    <div class="circle hide">
        <div class="tpicons">
            <ul>
                <li class="more">
                    <a href="<?php echo url('app=my_favorite&Debug=Wap'); ?>"></a>
                    <span class="bg"></span>
                </li>
                <li class="logis">
                    <a href="<?php echo url('app=my_address&Debug=Wap'); ?>"></a>
                    <span class="bg"></span>
                </li>
                <li class="ww">
                    <a href="http://site.tg.qq.com/forwardToPhonePage?siteId=1&phone=<?php echo $this->_var['store']['tel']; ?>"></a>
                    <span class="bg"></span>
                </li>
                <li class="user_btn">
                    <a href="<?php if ($this->_var['visitor']['user_id']): ?><?php echo url('app=buyer_order&Debug=Wap'); ?><?php else: ?><?php echo url('app=member&act=login&ret_url=' . $this->_var['ret_url']. '&Debug=Wap'); ?><?php endif; ?>"></a>
                    <span class="bg"></span>
                </li>
                <li class="car">
                    <a href="<?php echo url('app=cart&Debug=Wap'); ?>"></a>
                    <span class="bg"></span>
                </li>
                <li class="menu">
                    <a href="#"></a>
                    <span class="bg"></span>
                </li>
            </ul>
        </div>
        <div class="tplogo">
            <a href="<?php echo url('app=store&id=' . $this->_var['store']['store_id']. '&Debug=Wap'); ?>"></a>
            <span class="bg"></span>
        </div>
    </div>
    <div class="tpbtn on">
        <div>
            <ul>
                <li class="icontao p"></li>
            </ul>
        </div>
        <p class="num none"></p>
    </div>
</div>

<div class="none" id="J_Shade"></div>
<script>
    $(function() {
        $(".tpbtn").click(function() {
            $(".circle").toggleClass("hide");
            $("#J_Shade").toggleClass("none");
        })
    })
</script>