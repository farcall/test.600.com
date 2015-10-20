<?php echo $this->fetch('member.header.html'); ?>

<script type="text/javascript">
//<!CDATA[
$(function(){
  

    $('#membership_card_info_form').validate({
        errorPlacement: function(error, element){
            $(element).next('.field_notice').hide();
            $(element).after(error);
        },
        success       : function(label){
            label.addClass('validate_right').text('OK!');
        },
        onkeyup : false,
        rules : {
            user_name : {
                required   : true,
                maxlength :20
            },
            phone :{
                required   :true,
                 checkTel: true
            }
            
        },
        messages : {
            user_name  : {
                required   : '请填写姓名 ',
                maxlength : '姓名最多20字'
            },
            phone: {
                required : '请填写电话',
               checkTel   : '电话号码由数字、减号、空格组成,并不能少于6位'
            }
        }
    });
    regionInit("region");
});

//]]>
</script>
<div class="content">
    <?php echo $this->fetch('member.menu.html'); ?>
    <div id="right"> 
        <?php echo $this->fetch('member.submenu.html'); ?>
        <div class="wrap">
            <div class="public">
                <form method="post" id="membership_card_info_form"  enctype="multipart/form-data"  name='membership_card_info_form'>
                    <div class="information_index">
                        <div class="add_wrap">
                            <div class="assort">
                                <p class="txt">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名:<input type="text" maxlength="30"  name="user_name" value="<?php echo htmlspecialchars($this->_var['data']['user_name']); ?>" class="text width7" /></p>
                            </div>
                            <div class="assort"><p class="txt">会员卡号:<?php echo htmlspecialchars($this->_var['data']['card_num']); ?></p></div>
                            <div class="assort">
                                <p class="txt">电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话:<input type="text"   name="phone" value="<?php echo htmlspecialchars($this->_var['data']['phone']); ?>" class="text width7" /></p>
                            </div>
                            <div class="assort">
                                <p class="txt">性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别:
                                        <select name="sex"  class="text" >
                                            <option value="0" <?php if ($this->_var['data']['sex'] == 0): ?>selected="selected" <?php endif; ?>>男</option>
                                            <option value="1" <?php if ($this->_var['data']['sex'] == 1): ?>selected="selected" <?php endif; ?>>女</option>
                                        </select>
                                </p>
                            </div>

                            <div class="assort">
                                <p class="txt" id="region">
                                    所在地区:
                                    <input type="hidden" name="region_id" value="<?php echo $this->_var['data']['region_id']; ?>" class="mls_id" />
                                    <input type="hidden" name="region_name" value="<?php echo $this->_var['data']['region_name']; ?>" class="mls_names" />
                                    <?php if ($this->_var['data']['region_id']): ?>
                                    <span><?php echo htmlspecialchars($this->_var['data']['region_name']); ?></span>
                                    <input type="button" value="编辑" class="edit_region" />
                                    <select style="display:none">
                                        <option>请选择...</option>
                                        <?php echo $this->html_options(array('options'=>$this->_var['regions'])); ?>
                                    </select>
                                    <?php else: ?>
                                    <select class="select">
                                        <option>请选择...</option>
                                        <?php echo $this->html_options(array('options'=>$this->_var['regions'])); ?>
                                    </select>
                                    <?php endif; ?>
                                </p>
                            </div>

                            <div class="assort">
                                <p class="txt">详细地址:<input type="text" maxlength="50"  name="address" value="<?php echo htmlspecialchars($this->_var['data']['address']); ?>" class="text width7" /> </p>
                            </div>
                            <div class="assort">
                                <p class="txt">创建时间:
                                    <?php echo local_date("Y-m-d H:i",$this->_var['data']['create_time']); ?></p>
                            </div>
                        </div>
                        <div class="add_wrap">
                            <div class="issuance"><input id="submit_group" type="submit" class="btn" value="提交" /></div>
                        </div>
                    </div>
                </form>

                
                
                
                
                
                
                
                
                
                
                
                
                
            </div>
            <div class="wrap_bottom"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<?php echo $this->fetch('footer.html'); ?>