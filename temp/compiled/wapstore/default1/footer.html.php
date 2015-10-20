</div>
<div class="footer">
    <p>
        <a href="<?php echo url('app=default'); ?>">商城首页</a>|
        <a href="<?php echo url('app=store&id=' . $this->_var['store']['store_id']. ''); ?>">商铺首页</a>|
        <a href="<?php echo url('app=member'); ?>">会员中心</a>
    </p>
    <p><?php if ($this->_var['store']['functions']['copyright']): ?><?php echo htmlspecialchars($this->_var['store']['copyright']); ?><?php else: ?> Copyright &copy;2014 <?php echo $this->_var['site_title']; ?><?php endif; ?></p>
</div> 
