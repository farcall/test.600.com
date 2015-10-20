
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta content="width=device-width,minimum-scale=1.0,maximum-scale=1.0" name="viewport">
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<?php echo $this->_var['page_seo']; ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->res_base . "/" . 'css/index.css'; ?>">
<link type="text/css" rel="stylesheet" href="<?php echo $this->res_base . "/" . 'css/tuan.css'; ?>">
<script type="text/javascript" src="<?php echo $this->res_base . "/" . 'js/jquery-1.8.0.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo $this->res_base . "/" . 'js/sub_menu.js'; ?>" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo $this->res_base . "/" . 'js/touchslider.dev.js'; ?>"></script>
<script type="text/javascript" src="<?php echo $this->lib_base . "/" . 'jquery.plugins/jquery.validate.js'; ?>" charset="utf-8"></script>
</head>
<body>
   <?php echo $this->fetch('header.html'); ?>
   
    
    <div class="detail_img tuan_con">
    	  <?php if ($this->_var['goods']['_images']): ?>
           <div  class="sliders" >
                <ul class="sliderlist" id="slider">
                  <?php $_from = $this->_var['goods']['_images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_image');$this->_foreach['fe_goods_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fe_goods_image']['total'] > 0):
    foreach ($_from AS $this->_var['goods_image']):
        $this->_foreach['fe_goods_image']['iteration']++;
?>
                    <li><img src="<?php echo $this->_var['site_url']; ?>/<?php echo $this->_var['goods_image']['thumbnail']; ?>"></li>
                     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
           </div>
         <script type="text/javascript">
            var t1=new TouchSlider('slider',{speed:600, timeout:3000, direction:'left', align:'left'})
          </script>
      <?php else: ?>
        <div class="imgbox">
    		<img src="<?php echo $this->_var['goods']['default_image']; ?>">
        </div>
      <?php endif; ?>
         <form method="post" id="join_group_form" action="index.php?app=groupbuy&amp;id=<?php echo $this->_var['group']['group_id']; ?>">
        <h2 class="tuan_tit">
            <p class="info"><?php echo htmlspecialchars($this->_var['group']['group_name']); ?></p>
            <p class="time"><strong><?php echo $this->_var['group']['state_desc']; ?></strong> <?php if ($this->_var['group']['state'] == 1): ?><span class="s_time"><img src="<?php echo $this->res_base . "/" . 'images/time.png'; ?>">剩余：<?php echo $this->_var['group']['end_times']; ?></span></p>  <?php endif; ?>
        </h2>
        <div class="tuan_info">
            <ul>
                <li>
                    <p class="title">起始时间：</p>
                    <p class="con"><b><?php echo local_date("Y-m-d",$this->_var['group']['start_time']); ?> </b>至<b><?php echo local_date("Y-m-d",$this->_var['group']['end_time']); ?></b></p>
                </li>
                <li>
                    <p class="title">已卖件数：</p>
                    <p class="con">
                        <span>
                         <b><?php echo $this->_var['group']['sale_num']; ?></b></span>
                    </p>
                </li>
               
                   <?php if ($this->_var['group']['max_per_user'] > 0): ?>
                       <li>
                    <p class="title">每人限购：</p>
                    <p class="con"><b> <?php echo $this->_var['group']['max_per_user']; ?></b></p>
                </li>
                        <?php endif; ?>
               
                <li>
                    <p class="title">团购说明：</p>
                    <p class="con">  <?php if ($this->_var['group']['group_desc']): ?>
                            <?php echo $this->_var['group']['group_desc']; ?>
                            <?php else: ?>
                            暂无
                            <?php endif; ?>
                            </p>
                </li>
            </ul>
        </div>
        <div class="tuan_name">
        	商品名称：<?php echo $this->_var['goods']['goods_name']; ?>
        </div>
        <div class="info_table">
            <table>
                <tbody>
                    <tr>
                        <th><?php echo htmlspecialchars($this->_var['goods']['spec_name']); ?></th>
                        <th>原价</th>
                        <th>团购价</th>
                        <?php if ($this->_var['group']['ican']['join'] || $this->_var['group']['ican']['join_info']): ?>
                          <th>购买数量</th>
                         <?php endif; ?>
 
                    </tr>
                     <?php $_from = $this->_var['goods']['_specs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec']):
?>
                    <tr>
                        <td>
                         <?php echo $this->_var['spec']['spec']; ?><input ectype="spec" name="spec[]" type="hidden" class="text" value="<?php echo $this->_var['spec']['spec']; ?>" /><input ectype="spec_id" name="spec_id[]" type="hidden" class="text" value="<?php echo $this->_var['spec']['spec_id']; ?>" />
                        </td>
                        <td style="text-decoration:line-through"><?php echo price_format($this->_var['spec']['price']); ?></td>
                        <td style="color:#b20005"><?php echo price_format($this->_var['spec']['group_price']); ?></td>
                          <?php if ($this->_var['group']['ican']['join'] || $this->_var['group']['ican']['join_info']): ?>
                            <td>
                            <?php if ($this->_var['group']['ican']['join']): ?><input ectype='quantity' name="quantity[]" type="text" class="nums" /><?php endif; ?>
                            <?php if ($this->_var['group']['ican']['join_info']): ?><?php echo $this->_var['spec']['my_qty']; ?><?php endif; ?>
                            </td>
                            <?php endif; ?>
                      
                    </tr>
                     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </tbody>
            </table>
        </div>
        
             <div class="tuan_btn">
                        <?php if ($this->_var['group']['ican']['join_info']): ?>
                        
                        <?php endif; ?>
                        <?php if ($this->_var['group']['ican']['exit']): ?>
                        <input name="exit" class="red_btn" type="submit" value="我参加了该团购活动,点击退出团购" />
                        <?php endif; ?>
                        <?php if ($this->_var['group']['ican']['buy']): ?>
                        <input name="buy" class="red_btn" onClick="window.location.href='index.php?app=order&goods=groupbuy&group_id=<?php echo $_GET['id']; ?>'" type="button" value="购买" />
                        <?php endif; ?>
                </div>
                
           <?php if ($this->_var['group']['ican']['join']): ?>
        <div class="tuan_btn">
        	<input type="button" value="参加团购" class="red_btn" id="join">
        </div>
        <div id="info"  class="tuan_user" style="display: none;">
            <h2>参团人信息<a href="javascript:;" id='close' class="close"><img src="<?php echo $this->res_base . "/" . 'images/close.png'; ?>"></a></h2>
            <p class="tit">请认真填写以下信息，以便店主与您联系</p>
            <p>真实姓名：<input type="text" name="link_man" class="tu_txt"></p>
            <p>联系电话：<input type="text" name="tel" class="tu_txt"></p>
            <div class="tuan_btn">
        	<input type="submit" value="参加团购" name="join" class="red_btn" >
           </div>
         
        </div>
         <?php endif; ?>
    </div>
    </form>
   
    <div class="detail_con">
    	<ul class="tab">
        	<li class="cur">商品详情</li>
            <li>参团记录</li>
        </ul>
        <div class="tab_con">
            	<ul class="zx_list">
            	<?php echo $this->_var['goods']['description']; ?>
            	 </ul>
        </div>
        <div class="tab_con" style="display:none;">
        	<ul class="comments_list">
            	 <?php $_from = $this->_var['join_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user');if (count($_from)):
    foreach ($_from AS $this->_var['user']):
?>
                        <li><?php echo $this->_var['user']['user_name']; ?></li>
                        <?php endforeach; else: ?>
                        <li>暂无参团记录</li>
                        <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
    </div>
    
    <script type="text/javascript">
	jQuery(function(jq){
		function changeTab(lis, divs){
			lis.each(function(i){
				var els = jq(this);
				els.click(function(){
					lis.removeClass();
					divs.stop().hide().animate({'opacity':0},0);
					jq(this).addClass("cur");
					divs.eq(i).show().animate({'opacity':1},300);
				});
			});
		}
		var rrE = jq(".detail_con");
		changeTab(rrE.find(".tab li"), rrE.find(".tab_con"));
	
	});
	</script>
    
   <?php echo $this->fetch('footer.html'); ?>
</body>
</html>



<script type="text/javascript">
//<!CDATA[
$(function(){
	
    $('#join').click(function(){
        var qty = 0;
        var error = false;
        var max_per_user = <?php echo $this->_var['group']['max_per_user']; ?>;
        $('input[ectype="quantity"]').each(function(){
            if(parseInt($(this).val()) > 0 ){
                qty += parseInt($(this).val());
            }
            if($(this).val() !='' && (parseInt($(this).val()) < 0 || isNaN(parseInt($(this).val()))))
            {
                error = true;
            }
        });
        if('<?php echo $this->_var['group']['ican']['login']; ?>'){
           alert('您需要登陆才能参加团购活动');
           var SITE_URL = "<?php echo $this->_var['site_url']; ?>";
           window.location.href = SITE_URL + '/index.php?app=member&act=login&ret_url=' + encodeURIComponent('index.php?app=groupbuy&id=<?php echo $this->_var['group']['group_id']; ?>');
        }else if(error == true){
           alert('您输入的数量不正确');
        }else if(qty == 0){
           alert('请填写购买数量');
        }else if(max_per_user > 0 && qty > max_per_user){
           alert('<?php echo sprintf('该团购商品每人最多购买%s件', $this->_var['group']['max_per_user']); ?>');
        }else{
            $('#info').show();
            $('input[name="link_man"]').focus();
            $('input[ectype="quantity"]').attr('disabled',true);
        }
    });
    $('#close').click(function(){
        $('#info').hide();
        $('input[ectype="quantity"]').attr('disabled',false);
    });
    $('#join_group_form').submit(function(){
        $('input[ectype="quantity"]').attr('disabled',false);
    });

    $('input[name="exit"]').click(function(){
        if(!confirm('您确定要退出该团购活动吗？')){
            return false;
        }
    });

    $('#join_group_form').validate({
        errorPlacement: function(error, element){
            $(element).next('.field_notice').hide();
            $(element).after(error);
        },
        onkeyup : false,
        rules : {
            link_man : {
                required   : true
            },
            tel :{
                checkTel : true
            }
        },
        messages : {
            link_man  : {
                required   : '请正确填写联系人姓名和联系电话'
            },
            tel: {
                checkTel   : '请正确填写联系人姓名和联系电话'
            }
        }
    });
});

//]]>
</script>