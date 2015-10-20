<?php echo $this->fetch('header.html'); ?>
<style type="text/css">
.mall-nav{display:none}
</style>
<div id="main" class="w-full">
<div id="page-order" class="w">
   <div class="step step2 mt10 clearfix">
      <span class="fs14 strong f60">ckgwc</span>
      <span class="fs14 strong fff">qrddxx</span>
      <span class="fs14 strong">fk</span>
      <span class="fs14 strong">qrsh</span>
      <span class="fs14 strong">pj</span>
   </div>
   <div class="order-form">
      <form method="post" id="order_form">
	     <?php echo $this->fetch('order.shipping.html'); ?>
         <?php echo $this->fetch('order.goods.html'); ?>
         <?php echo $this->fetch('order.postscript.html'); ?>
	     <?php echo $this->fetch('order.amount.html'); ?>
      </form>
   </div>
</div>
</div>
<?php echo $this->fetch('server.html'); ?>
<?php echo $this->fetch('footer.html'); ?>