<?php echo $this->fetch('member.header.html'); ?>
<script language = "JavaScript">
function post()
{
  if (document.post_form.duihuanshu.value=="")
  {
    alert("兑换数不能为空");
	document.post_form.duihuanshu.focus();
	return false;
  }

  return true;  
}

</script>
<div class="content">
    <?php echo $this->fetch('member.menu.html'); ?>
    <div id="right">
          <ul class="tab">
				<li class="active">礼品兑换</li>
				<li class="normal"><a href="index.php?app=my_money&act=duihuan_jilu">兑换记录</a></li>
          </ul>
          
        <div class="wrap">
   <div class="public"><?php $_from = $this->_var['index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['val']):
?>	
                <form name="post_form" onSubmit="return post();" method="post" enctype="multipart/form-data">
                    <div class="information">

                                                <div class="info individual">
                            <table>
                                <tr>
                                    <th class="width4">物品名: </th>
                                    <td><?php echo $this->_var['val']['wupin_name']; ?></td>
                                </tr>
                                <tr>
                                    <th>兑换数:</th>
                                    <td><input type="text" class="text1 width2" name="duihuanshu" value="" /></td>
                                </tr>
                                <tr>
                                    <th>收货姓名:</th>
                                    <td><input type="text" class="text width" name="my_name" value="" /></td>
                                </tr>
                                <tr>
                                    <th>收货地址:</th>
                                    <td><input type="text" class="text width_normal" name="my_add" id="my_add" value="" /></td>
                                </tr>
                                <tr>
                                    <th>联系电话:</th>
                                    <td>
                                        <input type="text" class="text width" name="my_tel" id="my_tel" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <th>联系手机:</th>
                                    <td> <input type="text" class="text width_normal" name="my_mobile" id="my_mobile" value="" /></td>
                                </tr>

                                <tr>
                                    <th></th>
                                    <td><input type="submit" class="btn" value="确认兑换" /></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
                </div>

        </div>


        <div class="clear"></div>
        <div class="adorn_right1"></div>
        <div class="adorn_right2"></div>
        <div class="adorn_right3"></div>
        <div class="adorn_right4"></div>
    </div>
    <div class="clear"></div>
</div>
<div class="clear"></div>
<iframe id='iframe_post' name="iframe_post" frameborder="0" width="0" height="0">
</iframe>
<?php echo $this->fetch('footer.html'); ?>
