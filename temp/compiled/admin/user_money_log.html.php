<?php echo $this->fetch('header.html'); ?>
<script language="javascript">
$(function(){
    $('#sotime,#endtime').datepicker({dateFormat: 'yy-mm-dd'});
});
</script>
<div id="rightTop">
    <p>用户资金管理</p>
    <ul class="subnav">
		<li><a class="btn3" href="index.php?module=my_money&act=user_money_list">资金列表</a></li>
		<li><a class="btn3" href="index.php?module=my_money&act=user_money_add">增用户资金</a></li>
		<li><span>资金水流</span></li>
		<li><a class="btn3" href="index.php?module=my_money&act=index">返回导航</a></li>
    </ul>
</div>

<div class="mrightTop">
    <div class="fontl">
       <form method="get">
            <div class="left">
              <input name="module" type="hidden" id="module" value="my_money" />
              <input name="act" type="hidden" id="act" value="user_money_log" />
              日志:
              <input name="soname" type="text" id="soname" value="<?php echo $_GET["soname"];?>" />
			  添加时间:
              <input name="sotime" type="text" id="sotime" value="<?php echo $_GET["sotime"];?>" size="10" maxlength="10" />
              &nbsp; 至 &nbsp;<input name="endtime" type="text" id="endtime" value="<?php echo $_GET["endtime"];?>" size="10" maxlength="10" />
                <input type="submit" class="formbtn" value="搜 索" />
            </div>
      </form>
    </div>
    <div class="fontr">

    </div>
</div>

<div class="tdare">
    <table width="100%" cellspacing="0">

        <tr class="tatr1">
            <td width="20" class="firstCell"><input id="checkall_1" type="checkbox" class="checkall"/></td>
            <td align="left">对象会员</td>
            <td>操作日志</td>
            <td>操作金额</td>
            <td width="120">单号</td>
			<td width="120">操作时间</td>
			<td>操作人</td>
            <td class="handler">管理操作</td>
        </tr>

        <?php $_from = $this->_var['index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['val']):
?>
        <tr class="tatr2">
            <td width="20" class="firstCell">
            <input type="checkbox" class="checkitem" value="<?php echo $this->_var['key']; ?>" />
            </td>
            <td align="left"><b><?php echo $this->_var['val']['user_name']; ?></b></td>
            <td><?php echo $this->_var['val']['log_text']; ?></td>
            <td><font color="#FF0000"><?php echo $this->_var['val']['money_zs']; ?></font></td>
            <td><?php echo $this->_var['val']['order_sn']; ?></td>
			<td><?php echo local_date("y-m-d H:i:s",$this->_var['val']['add_time']); ?></td>
			<td class="table_center"><?php echo $this->_var['val']['admin_name']; ?></td>
            <td class="handler">
            <a href="#">删除</a></td>
        </tr>
        <?php endforeach; else: ?>
        <tr class="no_data">
            <td colspan="8">没有符合条件的记录</td>
        </tr>
        <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </table>
    <?php if ($this->_var['index']): ?>
<div id="dataFuncs">
    <div id="batchAction" class="left paddingT15"><input type="checkbox" class="checkall" />
      <input class="formbtn batchButton" type="button" value="删除" name="id" uri="#" presubmit="confirm('批量功能暂停使用');" />
    </div>
    <div class="pageLinks"><?php echo $this->fetch('page.bottom.html'); ?></div>
    <div class="clear"></div>
  </div>
  <?php endif; ?>
</div>
<?php echo $this->fetch('footer.html'); ?>