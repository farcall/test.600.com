

<div class="header">
    <div class="logo">
        <a href="<?php echo url('app=store&id=' . $this->_var['store']['store_id']. ''); ?>"><img src="<?php echo $this->_var['store']['store_logo']; ?>" /></a>
    </div> 
    
    <div class="searchBar">
        <form   id="" name="" method="get" action="index.php">  
            <input type="hidden" name="app" value="store" />
            <input type="hidden" name="act" value="search" />
            <input type="hidden" name="id" value="<?php echo $this->_var['store']['store_id']; ?>" />
            <input type="text" name="keyword" placeholder="搜搜看吧" class="search_text" /><div class="search_btn_img"><img src="<?php echo $this->res_base . "/" . 'images/search_btn.png'; ?>" style="width:30px"></div><input type="submit"  value="" class="search_btn" />
        </form>
    </div>
    
    <div class="sub_menu">
        <ul>
            <?php if ($this->_var['store']['radio_new'] == '1'): ?>
            <li>
                <a href="index.php?app=store&act=search&id=<?php echo $this->_var['store']['store_id']; ?>&order=add_time"><h2>最新商品</h2></a>
            </li>
            <?php endif; ?>
            <?php if ($this->_var['store']['radio_recommend'] == '1'): ?>
            <li>
                <a href="index.php?app=store&act=search&id=<?php echo $this->_var['store']['store_id']; ?>&recommended=1"><h2>推荐商品</h2></a>
            </li>
            <?php endif; ?>
            <?php if ($this->_var['store']['radio_hot'] == '1'): ?>
            <li>
                <a href="index.php?app=store&act=search&id=<?php echo $this->_var['store']['store_id']; ?>&order=views"><h2>热门商品</h2></a>
            </li>
            <?php endif; ?>

            <?php $_from = $this->_var['store']['store_gcates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'gcategory');if (count($_from)):
    foreach ($_from AS $this->_var['gcategory']):
?>
            <li>
                <?php if ($this->_var['gcategory']['children']): ?>
                <h2><?php echo htmlspecialchars($this->_var['gcategory']['value']); ?></h2>
                <ol class="sub_menu_list">
                    <?php $_from = $this->_var['gcategory']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_gcategory');if (count($_from)):
    foreach ($_from AS $this->_var['child_gcategory']):
?>
                    <a href="<?php echo url('app=store&id=' . $this->_var['store']['store_id']. '&act=search&cate_id=' . $this->_var['child_gcategory']['id']. ''); ?>">   <li><?php echo htmlspecialchars($this->_var['child_gcategory']['value']); ?></li></a>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ol>
                <?php else: ?>
                <a href="<?php echo url('app=store&id=' . $this->_var['store']['store_id']. '&act=search&cate_id=' . $this->_var['gcategory']['id']. ''); ?>"><h2><?php echo htmlspecialchars($this->_var['gcategory']['value']); ?></h2></a>
                <?php endif; ?>
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
            <span>信用度：<strong> <?php if ($this->_var['store']['credit_value'] >= 0): ?><img src="<?php echo $this->_var['store']['credit_image']; ?>" alt="" /><?php endif; ?></strong></span><br />
            <span>商品数量：<?php echo $this->_var['store']['goods_count']; ?></span>
        </p>
        <a href="javascript:;" class="back">返回上一页</a>
    </div>
    
    <div class="fav_msg">
        <img src="<?php echo $this->res_base . "/" . 'images/favorite.png'; ?>" /><span id='collect'>收藏成功！</span>
    </div>
</div>   