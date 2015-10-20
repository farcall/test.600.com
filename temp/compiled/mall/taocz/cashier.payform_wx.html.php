
<?php echo $this->fetch('header.html'); ?>
<style type="text/css">
.mall-nav{display:none}
</style>
<div id="main" class="w-full">
<div id="page-cashier" class="w">
   <?php echo $this->fetch('curlocal.html'); ?>
   <div class="order-form payform clearfix border mt10 mb20">
      <div class="title padding5 strong"> 微信扫码支付</div>
      
      <div class="form padding10">
          <?php echo $this->_var['payform']; ?>
        </div>
    </div>
</div>
</div>
<?php echo $this->fetch('server.html'); ?>
<?php echo $this->fetch('footer.html'); ?>

