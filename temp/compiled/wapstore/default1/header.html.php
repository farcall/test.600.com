<div class="w320">
<div class="fixed">
    
    <div class="header">
<div style="left:50px;position:absolute;top:10px">
<p><?php echo htmlspecialchars($this->_var['store']['store_name']); ?> </p>
</div>
        <div class="logo">
            <a href="<?php echo url('app=store&id=' . $this->_var['store']['store_id']. ''); ?>"><img src="<?php echo $this->_var['store']['store_logo']; ?>" width="40" height="40"/></a> 
        </div>
        <div class="nav">
            <ul>
                <li class="menu"><a href="javascript:;"></a></li>
                <li class="user"><a href="<?php echo url('app=buyer_order'); ?>"></a></li>
                <li class="car"><a href="<?php echo url('app=cart'); ?>"></a></li>
            </ul>
        </div>
        
        <div class="sub_menu">
            <ul>
                <li>
                    <a href="<?php echo url('app=store&act=search&id=' . $this->_var['store']['store_id']. '&order=add_time desc'); ?>">最新商品</a>
                </li>
                <li>
                    <a href="<?php echo url('app=store&act=search&id=' . $this->_var['store']['store_id']. '&recommended=1'); ?>">推荐商品</a>
                </li>
                <li>
                    <a href="<?php echo url('app=store&act=search&id=' . $this->_var['store']['store_id']. '&order=views desc'); ?>">热门商品</a>
                </li>
                <?php $_from = $this->_var['store']['store_gcates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'gcategory');if (count($_from)):
    foreach ($_from AS $this->_var['gcategory']):
?>
                <li>
                    <a href="<?php echo url('app=store&id=' . $this->_var['store']['store_id']. '&act=search&cate_id=' . $this->_var['gcategory']['id']. ''); ?>"><?php echo htmlspecialchars($this->_var['gcategory']['value']); ?></a>
                </li>
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
                <span>信用度：<strong>  <?php if ($this->_var['store']['credit_value'] >= 0): ?><img src="<?php echo $this->_var['store']['credit_image']; ?>" alt="" /><?php endif; ?></strong></span><br />
                <span>商品数量：<?php echo $this->_var['store']['goods_count']; ?></span>
            </p>
            <a href="javascript:;" class="back">返回上一页</a>
        </div>
        
        <div class="fav_msg">
            <img src="<?php echo $this->res_base . "/" . 'images/favorite.png'; ?>" /><span id='collect'>收藏成功！</span>
        </div>
    </div>    
    
    <div class="searchBar">
        <form method="get" action="index.php">
            <input type="hidden" name="app" value="store" />
            <input type="hidden" name="act" value="search" />
            <input type="hidden" name="id" value="<?php echo $this->_var['store']['store_id']; ?>" />
            <input name="keyword"  type="text" placeholder="搜搜看吧" class="search_text" /><input type="submit" value="搜索" class="search_btn" />
        </form>
    </div>
</div>
<script>
    $(function() {
        publicmain();
    });

    $(window).resize(function() {
        publicmain();
    });

    function publicmain() {
        var h = document.documentElement.clientHeight - 45;
        $('.sub_menu').css({'height': h});
    }
</script>  