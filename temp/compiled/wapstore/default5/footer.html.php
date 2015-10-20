

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
    <ul class="nav">
        <a href="#" class="home">
            <span><img src="<?php echo $this->res_base . "/" . 'images/nav_1.png'; ?>"></span>
        </a>
        <a href="javascript:;" class="menu"><li><span style="border-left:none;"><img src="<?php echo $this->res_base . "/" . 'images/nav_2.png'; ?>"></span></li></a>
        <a href="<?php if ($this->_var['visitor']['user_id']): ?><?php echo url('app=buyer_order'); ?><?php else: ?><?php echo url('app=member&act=login&ret_url=' . $this->_var['ret_url']. ''); ?><?php endif; ?>"><li><span><img src="<?php echo $this->res_base . "/" . 'images/nav_3.png'; ?>"></span></li></a>
        <a href="<?php echo url('app=cart'); ?>"><li><span style="border-right:none;"><img src="<?php echo $this->res_base . "/" . 'images/nav_4.png'; ?>"></span></li></a>
    </ul>
</div>

<div class="sub_menu">
    <ul>
        <?php if ($this->_var['store']['radio_new'] == '1'): ?>
        <a href="index.php?app=store&act=search&id=<?php echo $this->_var['store']['store_id']; ?>&order=add_time"> 
            <li>
                <h2>最新商品</h2>
            </li>
        </a>
        <?php endif; ?>
        <?php if ($this->_var['store']['radio_recommend'] == '1'): ?>
        <a href="index.php?app=store&act=search&id=<?php echo $this->_var['store']['store_id']; ?>&recommended=1"> 
            <li>
                <h2>推荐商品</h2>

            </li>
        </a>
        <?php endif; ?>
        <?php if ($this->_var['store']['radio_hot'] == '1'): ?>   
        <a href="index.php?app=store&act=search&id=<?php echo $this->_var['store']['store_id']; ?>&order=views">
            <li>
                <h2>热门商品</h2>

            </li>
        </a>
        <?php endif; ?>
        <?php $_from = $this->_var['store']['store_gcates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'gcategory');if (count($_from)):
    foreach ($_from AS $this->_var['gcategory']):
?>

        <?php if ($this->_var['gcategory']['children']): ?>
        <li>
            <h2><?php echo htmlspecialchars($this->_var['gcategory']['value']); ?></h2>
            <ol class="sub_menu_list">
                <?php $_from = $this->_var['gcategory']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_gcategory');if (count($_from)):
    foreach ($_from AS $this->_var['child_gcategory']):
?>
                <a href="<?php echo url('app=store&id=' . $this->_var['store']['store_id']. '&act=search&cate_id=' . $this->_var['child_gcategory']['id']. ''); ?>"><li><?php echo htmlspecialchars($this->_var['child_gcategory']['value']); ?></li></a>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ol>
        </li>
        <?php else: ?>
        <a href="<?php echo url('app=store&id=' . $this->_var['store']['store_id']. '&act=search&cate_id=' . $this->_var['gcategory']['id']. ''); ?>">
            <li>
                <h2><?php echo htmlspecialchars($this->_var['gcategory']['value']); ?></h2>
            </li>
        </a>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
    <div class="fun">
        <a href="javascript:;" class="code"><img src="<?php echo $this->res_base . "/" . 'images/code.png'; ?>"/>店铺二维码</a>
        <a href="javascript:collect_store(<?php echo $this->_var['store']['store_id']; ?>);" class="fav"><img src="<?php echo $this->res_base . "/" . 'images/favorite.png'; ?>"/>收藏本店</a>
    </div>
</div>

<div class="shop_info">

    <img src="<?php if ($this->_var['store']['store_code']): ?><?php echo $this->_var['store']['store_code']; ?><?php else: ?><?php echo $this->res_base . "/" . 'images/code.jpg'; ?><?php endif; ?>" class="shop_code"/>
    <p class="shop_name">店铺ID：<?php echo htmlspecialchars($this->_var['store']['store_name']); ?></p>
    <p class="shop_detail">
        <span>信用度：<strong> <?php if ($this->_var['store']['credit_value'] >= 0): ?><img src="<?php echo $this->_var['store']['credit_image']; ?>" alt="" /><?php endif; ?></strong></span><br />
        <span>商品数量：<?php echo $this->_var['store']['goods_count']; ?></span>
    </p>
    <a href="javascript:;" class="back">返回上一页</a>
</div>

<div class="fav_msg">
    <img src="<?php echo $this->res_base . "/" . 'images/favorite.png'; ?>" />
    <span id="collect">收藏成功！</span>
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