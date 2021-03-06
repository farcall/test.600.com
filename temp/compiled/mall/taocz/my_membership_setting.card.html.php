<?php echo $this->fetch('member.header.html'); ?>
<script type="text/javascript" src="<?php echo $this->res_base . "/" . 'jquery.js'; ?>" charset="utf-8"></script>
<script type="text/javascript" src="mall/jscolor/jscolor.js" charset="utf-8"></script>
<style>
    .choseimg{background: none repeat scroll 0 0 #EEEEEE;border: 1px solid #CCCCCC;cursor: pointer;margin-left: 5px;padding: 6px;}
    .txt {margin-right:20px;}
    .spec ul {width: 530px; overflow: hidden;}
    .spec .td {padding-bottom: 10px;}
    .spec li {float: left; margin-left: 6px; display: inline;}
    .spec li input {text-align: center;}
    .spec .th {padding: 3px 0; margin-bottom: 10px; border-top: 2px solid #e3e3e3; border-bottom: 1px solid #e3e3e3; background: #f8f8f8;}
    .vipcard{margin: 0 auto;position: relative;height: 159px;text-align: left;width: 267px;}
    #cardbg{height: 159px;width: 267px;position:absolute;border-radius: 8px;-webkit-border-radius:8px;-moz-border-radius:8px;box-shadow: 0 0 4px rgba(0, 0, 0, 0.6);-moz-box-shadow:0 0 4px rgba(0, 0, 0, 0.6);-webkit-box-shadow:0 0 8px rgba(0, 0, 0, 0.6);top:0;left:0;z-index:1;}
    .vipcard .logo {max-height:70px;position:absolute;top:8px;left:5px;z-index:2;}
    .vipcard .verify {display:inline-block;height:40px;top:105px;right:12px;text-align:right;line-height:24px;color:#000;font-size:20px;text-shadow:0 1px rgba(255, 255, 255, 0.2);z-index:2;}
    .vipcard h1 {position:absolute;right:10px;top:7px;text-shadow:0 1px rgba(255, 255, 255, 0.2);color:#000;font-size:11px;line-height:25px;text-align:right;font-weight: normal;z-index:2;}
    .vipcard .verify span {display:inline-block;text-align:left;}
    .vipcard .verify em {display:block;line-height:13px;font-size:10px;font-weight:normal;font-style:normal;}
    .pdo {position:absolute;top:0;left:0;display:inline-block;}
    .userinfoArea td {padding: 8px 0 0px 15px;}
    #tishi{text-align: center;display: block;}
    .banner{display:block; width:213px;height: 278px;overflow: hidden;}
    .banner img{display:block; width:213px; border:0;}
    .bannerbtn{position:relative; display:block}
    .bannerbtn .qiaodaobtn{position: absolute; display:block; bottom:0}
</style>

<div class="content">
    <div class="totline"></div>
    <div class="botline"></div>
    <?php echo $this->fetch('member.menu.html'); ?>
    <div id="right">
        <?php echo $this->fetch('member.submenu.html'); ?>
        <div id="seller_groupbuy_form" class="wrap">
            <div class="public">
                <form class="form" method="post" action=""  enctype="multipart/form-data">
                    <div class="content">
                        <div class="msgWrap bgfc">
                            <table class="userinfoArea" style="margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
                                <tbody>
                                    <tr>
                                        <th width="303" rowspan="5" valign="top">
                                <div class="vipcard">
                                    <img id="cardbg" src="<?php echo $this->_var['data']['card_bg']; ?>">
                                    <h1 id="vipname" style="color:#<?php echo $this->_var['data']['card_name_color']; ?>"><?php echo $this->_var['data']['card_name']; ?></h1>
                                    <strong class="pdo verify" id="number" style="color:#<?php echo $this->_var['data']['card_num_color']; ?>"><span><em>会员卡号</em>8888 8888</span></strong>
                                </div>
                                </th>
                                <td colspan="2">会员卡的名称：
                                    <input type="text" name="card_name" value="<?php echo $this->_var['data']['card_name']; ?>" id="cardname" class="px" class="text width7" onkeyup="DivFollowingText()"> 
                                    <script type="text/javascript">
                                        function DivFollowingText()
                                        {
                                            document.getElementById("vipname").innerHTML = document.getElementById("cardname").value;
                                        }
                                    </script>
                                    颜色：
                                    <input type="text" name="card_name_color" id="vipnamecolor" value="<?php echo $this->_var['data']['card_name_color']; ?>" class="px color" style="width: 55px; background-image: none; background-color: rgb(0, 0, 0); color: rgb(255, 255, 255);" onblur="document.getElementById('vipname').style.color = '#' + document.getElementById('vipnamecolor').value;">
                                </td>
                                </tr>
                                <tr>
                                <script>
                                        function card_bg_chang(obj)
                                        {
                                            document.getElementById('cardbg').src = obj.options[obj.selectedIndex].value;
                                            document.getElementById('bg').value = obj.options[obj.selectedIndex].value;

                                        }
                                </script>
                                <td colspan="2">会员卡的背景：
                                    <select name="bg" onchange="card_bg_chang(this);" class="pt" style="width:210px;"> 
                                        <option value="" selected="">请选择会员卡背景图</option>
                                        <?php $_from = $this->_var['mubans']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'muban');$this->_foreach['fe_sgrade'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fe_sgrade']['total'] > 0):
    foreach ($_from AS $this->_var['k'] => $this->_var['muban']):
        $this->_foreach['fe_sgrade']['iteration']++;
?>
                                        <option value="<?php echo $this->_var['muban']; ?>" <?php if ($this->_var['muban'] == $this->_var['data']['card_bg']): ?>selected<?php endif; ?> ><?php echo $this->_var['k']; ?></option>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </select>
                                </td>
                                </tr>
                                <tr>
                                    <td colspan="2">自己设计背景：
                                        <input type="file" name="card_bg"  value="选择图片" class="choseimg"/> 
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">卡号文字颜色：
                                        <input type="text" name="card_num_color" id="numbercolor" value="<?php echo $this->_var['data']['card_num_color']; ?>" class="px color" style="width: 55px; background-image: none; background-color: rgb(0, 0, 0); color: rgb(255, 255, 255);" onblur="document.getElementById('number').style.color = '#' + document.getElementById('numbercolor').value;"> </td>
                                </tr>
                                <tr>
                                    <td colspan="2">会员卡使用说明：
                                        <textarea name="card_description" style="font-size:13px;height:103px;overflow-y:auto;vertical-align: top;width: 250px;"><?php echo $this->_var['data']['card_description']; ?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="2">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="add_wrap">
                            <div class="issuance"><input id="submit_group" type="submit" class="btn" value="提交" /></div>
                        </div>
                    </div>
                    <div class="wrap_bottom"></div>
            </div>
            </form>

            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <?php echo $this->fetch('footer.html'); ?>
