


<div class="header">
    <ul class="nav">
        <a href="javascript:;" class="menu"><li><span><img src="<?php echo $this->res_base . "/" . 'images/nav_2.png'; ?>"></span></li></a>
       <a  href="<?php echo url('app=store&id=' . $this->_var['store']['store_id']. ''); ?>"> <img src="<?php echo $this->_var['store']['store_logo']; ?>" height="40"></a>
        <a href="<?php echo url('app=cart'); ?>"><li><span><img src="<?php echo $this->res_base . "/" . 'images/nav_4.png'; ?>"></span></li></a>
        <a href="<?php if ($this->_var['visitor']['user_id']): ?><?php echo url('app=buyer_order'); ?><?php else: ?><?php echo url('app=member&act=login&ret_url=' . $this->_var['ret_url']. ''); ?><?php endif; ?>"><li><span><img src="<?php echo $this->res_base . "/" . 'images/nav_3.png'; ?>"></span></li></a>
        <a href="javascript:;" class="search"><li><span><img src="<?php echo $this->res_base . "/" . 'images/search_btn.png'; ?>"></span></li></a>
    </ul>
    
    <div class="sub_menu_bg">
        <div class="sub_menu">
        <ul>
            <h1 class="shrink">导航菜单<img src="<?php echo $this->res_base . "/" . 'images/hs.png'; ?>"></h1>
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
                 <a href="#"><h2><?php echo htmlspecialchars($this->_var['gcategory']['value']); ?><b></b></h2></a> 
                   <ol  class="sub_menu_list">
                <?php $_from = $this->_var['gcategory']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_gcategory');if (count($_from)):
    foreach ($_from AS $this->_var['child_gcategory']):
?>
                 <a href="<?php echo url('app=store&id=' . $this->_var['store']['store_id']. '&act=search&cate_id=' . $this->_var['child_gcategory']['id']. ''); ?>"><b></b><li><?php echo htmlspecialchars($this->_var['child_gcategory']['value']); ?></li></a>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </ol>
                 <?php else: ?>
                   <a href="<?php echo url('app=store&id=' . $this->_var['store']['store_id']. '&act=search&cate_id=' . $this->_var['gcategory']['id']. ''); ?>"><h2><?php echo htmlspecialchars($this->_var['gcategory']['value']); ?></h2></a>
                  <?php endif; ?>
                     </li>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <li>
                <h2>店铺二维码<b></b></h2>
                 <ol class="sub_menu_list">
                      <a href="#"><li>店铺ID：<?php echo htmlspecialchars($this->_var['store']['store_name']); ?></li></a>
                      <a href="#"><li>信用度：<?php if ($this->_var['store']['credit_value'] >= 0): ?><img src="<?php echo $this->_var['store']['credit_image']; ?>" alt="" /><?php endif; ?></li></a>
                      <a href="#"><li>商品数：<?php echo $this->_var['store']['goods_count']; ?></li></a>
                      <a href="#"><li><img src="<?php if ($this->_var['store']['store_code']): ?><?php echo $this->_var['store']['store_code']; ?><?php else: ?><?php echo $this->res_base . "/" . 'images/code.jpg'; ?><?php endif; ?>" width="210"></li></a>
                </ol>
            </li>
        </ul>
        <div class="fun">
           <a href="javascript:collect_store(<?php echo $this->_var['store']['store_id']; ?>);" class="fav funm"><img src="<?php echo $this->res_base . "/" . 'images/favorite.png'; ?>"/>收藏本店</a>
        </div>
        </div>
        
        <div class="fav_msg">
              <img src="<?php echo $this->res_base . "/" . 'images/favorite.png'; ?>" />
              <span id="collect">收藏成功！</span>
        </div>
    </div>
</div>

  <form  class="searchBar"  id="" name="" method="get" action="index.php">  
             <input type="hidden" name="app" value="store" />
             <input type="hidden" name="act" value="search" />
             <input type="hidden" name="id" value="<?php echo $this->_var['store']['store_id']; ?>" />
        <input type="text" placeholder="搜搜看吧" name="keyword" class="search_text" /><input type="submit" value="" class="search_btn" />
</form>