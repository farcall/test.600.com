<script type="text/javascript">
$(function(){
    $('#cancel_button').click(function(){
        DialogManager.close('seller_order_confirm_order');
    });

});
</script>
<div class="content1">
<div id="warning"></div>
<form method="post" action="index.php?app=seller_order&amp;act=confirm_order&amp;order_id=<?php echo $this->_var['order']['order_id']; ?>" target="seller_order">
    <h1>您确定要确认以下订单吗？</h1>
    <p>订单号&nbsp;&nbsp;&nbsp;&nbsp;:<span><?php echo $this->_var['order']['order_sn']; ?></span></p>
    <dl>
        <dt>操作原因:</dt>
        <dd>
            <textarea id="remark_input" class="text" style="width:200px;" name="remark"></textarea>
        </dd>
    </dl>
    <div class="btn">
        <input type="submit" id="confirm_button" class="btn1" value="确认" />
        <input type="button" id="cancel_button" class="btn2" value="取消" />
    </div>
</form>
</div>