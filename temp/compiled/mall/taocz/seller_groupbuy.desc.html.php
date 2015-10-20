<?php echo $this->fetch('member.header.html'); ?>
<style>
.txt {margin-right:20px}
.spec ul {width: 530px; overflow: hidden;}
.spec .td {padding-bottom: 10px;}
.spec li {float: left; margin-left: 6px; display: inline;}
.spec li input {text-align: center;}
.spec .th {padding: 3px 0; margin-bottom: 10px; border-top: 2px solid #e3e3e3; border-bottom: 1px solid #e3e3e3; background: #f8f8f8;}
</style>
<div class="content">
  <div class="totline"></div>
  <div class="botline"></div>
  <?php echo $this->fetch('member.menu.html'); ?>
  <div id="right">
     <?php echo $this->fetch('member.curlocal.html'); ?>
<?php echo $this->fetch('member.submenu.html'); ?>

        <div class="wrap">

            <div class="public">
                <form method="post" id="goods_form">
                    <div class="information_index">
                        <h4>团购说明: </h4>
                        <div class="add_wrap">
                            <div class="assort">
                                <p class="txt" id="start_time">
                                    &nbsp;<textarea style="height: 150px; overflow-y: auto; width: 250px;" name="group_desc" class="text"><?php echo htmlspecialchars($this->_var['group']['group_desc']); ?></textarea>
                                </p>
                            </div>
                        </div>

                        <div class="add_wrap">
                            <div class="issuance"><input type="submit" class="btn" value="提交" /></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="wrap_bottom"></div>
        </div>

        <div class="clear"></div>
        <div class="adorn_right1"></div>
        <div class="adorn_right2"></div>
        <div class="adorn_right3"></div>
        <div class="adorn_right4"></div>
    </div>
    <div class="clear"></div>
</div>
<?php echo $this->fetch('footer.html'); ?>