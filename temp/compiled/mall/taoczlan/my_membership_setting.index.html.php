<?php echo $this->fetch('member.header.html'); ?>
<script type="text/javascript" src="<?php echo $this->res_base . "/" . 'jquery.js'; ?>" charset="utf-8"></script>
<link href="<?php echo $this->res_base . "/" . 'keyword/css/keyword.css'; ?>" rel="stylesheet" type="text/css" />
<style>
.choseimg{background: none repeat scroll 0 0 #EEEEEE;border: 1px solid #CCCCCC;cursor: pointer;margin-left: 5px;padding: 6px;}
.txt {margin-right:20px;}
.spec ul {width: 530px; overflow: hidden;}
.spec .td {padding-bottom: 10px;}
.spec li {float: left; margin-left: 6px; display: inline;}
.spec li input {text-align: center;}
.spec .th {padding: 3px 0; margin-bottom: 10px; border-top: 2px solid #e3e3e3; border-bottom: 1px solid #e3e3e3; background: #f8f8f8;}
.add_wrap .assort .txt select{border: 1px solid #ccc;padding: 6px 4px;font-family: Arial, Helvetica, sans-serif;font-size: 14px;color: #666;background: #fff;margin-right: 5px;}
</style>
<script type="text/javascript">
//<!CDATA[
    $(function() {
        $('#membership_setting_form').validate({
            errorPlacement: function(error, element) {
                $(element).next('.field_notice').hide();
                $(element).after(error);
            },
            success: function(label) {
                label.addClass('validate_right').text('OK!');
            },
            onkeyup: false,
            rules: {
                title: {
                    required: true,
                    maxlength: 50
                },
                address: {
                    required: true,
                    maxlength: 50
                },
                phone: {
                    required: true,
                    checkTel: true
                }

            },
            messages: {
                title: {
                    required: '请填写图文标题 ',
                    maxlength: '图文标题最多50字'
                },
                address: {
                    required: '商家详细地址',
                    maxlength: '商家详细地址最多50字'
                },
                phone: {
                    required: '请填写联系方式',
                    checkTel: '电话号码由数字、加号、减号、空格组成,并不能少于6位'
                }
            }
        });
        regionInit("region");
    });
    
//]]>
</script>
<div class="content">
    <div class="totline"></div>
    <div class="botline"></div>
    <?php echo $this->fetch('member.menu.html'); ?>
    <div id="right">
        <?php echo $this->fetch('member.submenu.html'); ?>
        <div id="seller_groupbuy_form" class="wrap">
            <div style="margin:10px;font-size:14px;line-height:21px;color:red;">
                <b>对微信账号发送"会员卡",便可领取会员卡。</b>
            </div>
            <div class="public" style="padding:7px 20px;">
                <form method="post" id="membership_setting_form"  enctype="multipart/form-data" >
                    <div class="information_index">
                        <div class="add_wrap">
                            <div class="assort">
                                <p class="txt">图&nbsp;&nbsp;文&nbsp;&nbsp;标&nbsp;&nbsp;题:
                                <input type="text" maxlength="50"  name="title" value="<?php echo $this->_var['data']['title']; ?>" class="text width7" /> <span class="red">*</span>请不要多于50字!</p>
                            </div>
                            <div class="assort">
                                <p class="txt" >
                                    图文消息封面:
                                    <img style="width:170px;height:100px;"src="<?php if ($this->_var['data']['cover_image']): ?><?php echo $this->_var['data']['cover_image']; ?><?php else: ?><?php echo $this->res_base . "/" . 'images/huodong/membership_card/vip.jpg'; ?><?php endif; ?>" >
                                    <input  type="file" name="cover_image" value="选择图片" class="choseimg"/>
                                </p>
                            </div>
                            <div class="assort">
                                <p class="txt" id="region">
                                    商家所在地区:
                                    <input type="hidden" name="region_id" value="<?php echo $this->_var['data']['region_id']; ?>" class="mls_id" />
                                    <input type="hidden" name="region_name" value="<?php echo htmlspecialchars($this->_var['data']['region_name']); ?>" class="mls_names" />
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
                                <p class="txt">商家详细地址:
                                    <input type="text" maxlength="50"  name="address" value="<?php echo $this->_var['data']['address']; ?>" class="text width7" /> <span class="red">*</span>请不要多于50字!</p>
                            </div>
                            <div class="assort">
                                <p class="txt">联&nbsp;&nbsp;系&nbsp;&nbsp;方&nbsp;&nbsp;式:
                                    <input type="text"  name="phone" value="<?php echo $this->_var['data']['phone']; ?>" class="text width7" /> <span class="red">*</span>如15880111111或者0592-1234567
                                </p>
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
