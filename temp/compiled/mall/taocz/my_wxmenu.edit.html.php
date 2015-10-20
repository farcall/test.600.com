
<div class="dialog_content">
	<form id="info_form" action="index.php?app=my_wxmenu&act=edit" method="post">
	<table width="100%" class="table_form">
		<tr>
			<th width="100">上级栏目 :</th>
			<td>
				<select class="J_cate_select mr10" data-pid="0" data-uri="index.php?app=my_wxmenu&act=ajax_getchilds" data-selected="<?php echo $this->_var['info']['spid']; ?>"></select>
				<input type="hidden" name="pid" id="J_cate_id" />
			</td>
		</tr>
		<tr>
			<th>分类名称:</th>
			<td>
				<input type="text" name="name" id="J_name" class="input-text" value="<?php echo $this->_var['info']['name']; ?>" style="color:<?php echo $this->_var['info']['fcolor']; ?>" size="30">
		     <!--   <input type="hidden" value="" name="fcolor" id="J_color">
		        <a href="javascript:;" class="color_picker_btn"><img class="J_color_picker" data-it="J_name" data-ic="J_color" src="__STATIC__/images/color.png"></a>-->
			</td>
		</tr>
        <tr>
            <th>菜单动作类型:</th>
			<td>
                <label><input type="radio" name="weixin_type" value="0"  <?php if ($this->_var['info']['weixin_type'] == 0): ?> checked <?php endif; ?>>菜单</label>&nbsp;&nbsp;
                <label><input type="radio" name="weixin_type" <?php if ($this->_var['info']['weixin_type'] == 1): ?> checked <?php endif; ?>>浏览</label>
			</td>
        </tr>
		<tbody id="weixin_click" <?php if ($this->_var['info']['weixin_type'] == 1): ?> style="display:none" <?php endif; ?>>
	  	<tr>
			<th>KEY值 :</th>
			<td>
				<input type="text" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" name="key" id="J_key" class="input-text" size="30" value="<?php echo $this->_var['info']['weixin_key']; ?>" >
			</td>
		</tr>
		<tr>
			<th>关键词:</th>
			<td>
				<input type="text" name="keyword" id="J_keyword" class="input-text" size="30" value="<?php echo $this->_var['info']['weixin_keyword']; ?>" >
			</td>
		</tr>
        </tbody>
		<tbody id="weixin_view" <?php if ($this->_var['info']['weixin_type'] == 0): ?> style="display:none" <?php endif; ?>>
           <tr>
              <th>菜单链接:</th>
              <td>
                  <input type="text" name="likes" id="J_likes" class="input-text" size="30" value="<?php echo $this->_var['info']['likes']; ?>">
              </td>
		   </tr>
        </tbody>
		
	    <tr>
			<th>审核状态 :</th>
			<td>
				<label><input type="radio" name="status" value="0" <?php if ($this->_var['info']['weixin_status'] == 0): ?> checked <?php endif; ?> /> 未审核</label>&nbsp;&nbsp;
				<label><input type="radio" name="status" value="1" <?php if ($this->_var['info']['weixin_status'] == 1): ?> checked <?php endif; ?> /> 已审核</label>
			</td>
		</tr>
	<!--	<tr>
			<th>{:L('seo_title')} :</th>
			<td><input type="text" name="seo_title" class="input-text" value="<?php echo $this->_var['info']['seo_title']; ?>" style="width:300px;"></td>
		</tr>
		<tr>
			<th>{:L('seo_keys')} :</th>
			<td><input type="text" name="seo_keys" class="input-text" value="<?php echo $this->_var['info']['seo_keys']; ?>" style="width:300px;"></td>
		</tr>
		<tr>
			<th>{:L('seo_desc')} :</th>
			<td><textarea name="seo_desc" style="width:295px; height:50px;"><?php echo $this->_var['info']['seo_desc']; ?></textarea></td>
		</tr>-->
	</table>
	<input type="hidden" name="id" value="<?php echo $this->_var['info']['id']; ?>" />
</form>
</div>
<script src="../static/js/jquery/plugins/colorpicker.js"></script>
<script src="../static/js/fileuploader.js"></script>
<script>

$(function(){
	var js_weixin_type = 0;

	$("input[name=weixin_type]").click(function(){ 
             switch($("input[name=weixin_type]:checked").attr("value")){ 
			   case "0": 
				   js_weixin_type = 0;
				   $("#weixin_view").hide();
				   $("#weixin_click").show();
			       break; 
			   case "1": 
				   js_weixin_type = 1;
				   $("#weixin_click").hide();
				   $("#weixin_view").show();
				   break; 
			  default: 
			     break; 
			 }
			 
			  $.formValidator.initConfig({formid:"info_form",autotip:true});
			  $('#J_name').formValidator({onshow:lang.please_input+"菜单名称",onfocus:lang.please_input+"菜单名称"}).inputValidator({min:1,onerror:lang.please_input+"菜单名称"});
			  if(js_weixin_type!=1)
			  {
				 $('#J_key').formValidator({onshow:"用字母和数字组成",onfocus:"用字母和数字组成"}).inputValidator({min:1,onerror:"用字母和数字组成"});
				 $('#J_keyword').formValidator({onshow:lang.please_input+"关键词",onfocus:lang.please_input+"关键词"}).inputValidator({min:1,onerror:lang.please_input+"关键词"});
			  }
			  else
			  {
				 $('#J_likes').formValidator({onshow:"用字母和数字组成",onfocus:"用字母和数字组成"}).inputValidator({min:1,onerror:"用字母和数字组成"});
			  
			  }
    });
	
	
	$('#info_form').ajaxForm({success:complate,dataType:'json'});
	function complate(result){
		if(result.status == 1){
			$.dialog.get(result.dialog).close();
            $.pinphp.tip({content:result.msg});
            window.location.reload();
		} else {
			$.pinphp.tip({content:result.msg, icon:'alert'});
		}
	}
	$('.J_cate_select').cate_select();
	
	//颜色选择器
	$('.J_color_picker').colorpicker();
	
	
	
});
</script>