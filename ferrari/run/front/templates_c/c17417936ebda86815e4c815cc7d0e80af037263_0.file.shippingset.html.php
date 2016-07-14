<?php
/* Smarty version 3.1.29, created on 2016-06-06 15:38:17
  from "/home/tianyaqiang/devspace/ferrari/src/web_inf/front/tpls/warehouse/shippingset.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575528696885b5_75434815',
  'file_dependency' => 
  array (
    'c17417936ebda86815e4c815cc7d0e80af037263' => 
    array (
      0 => '/home/tianyaqiang/devspace/ferrari/src/web_inf/front/tpls/warehouse/shippingset.html',
      1 => 1464858136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../commontop.html' => 1,
    'file:../comfoot.html' => 1,
  ),
),false)) {
function content_575528696885b5_75434815 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>米欢电商ERP</title>
 		<link href="/images/favicon.ico" rel="shortcut icon">
		<link href="/bootstrap/css/bootstrap.min.css"  rel="stylesheet" media="screen">
		<link href="/css/commontop.css"   rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="/css/warehouse/shippingset.css"/>
		<style>
			
				@media screen and (max-width: 1120px){
					/*当屏幕尺寸小于1120px时，应用下面的CSS样式*/
				    .navbar-nav,#comtop-right{display: none;}
				}
			
		</style>
	</head>
	<body>
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../commontop.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="container-fluid container1">
			<div class="row ware-row">
				<h5>您的位置： <a href="javascript:;">首页</a></h5>
			</div>
			<div class="row">
				<input class="btn btn-default set-ship" type="submit" value="设置">
				<input type="hidden" name='storeid' value="<?php echo $_smarty_tpl->tpl_vars['storeid']->value;?>
">
			</div>
			<div class="row">
				<table class="table">
					<thead>
						<tr>
							<td class="active col-xs-1 shipping-num">序号</td>
							<td class="active col-xs-2 shipping-province">省</td>
							<td class="active col-xs-9 shipping-city">市</td>
						</tr>
					</thead>
					<tbody class="shipping-tbody">
						<?php $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable(1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'num', 0);?>
						<?php
$_from = $_smarty_tpl->tpl_vars['procityarr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
						<tr class="shipping-tr">
							<td><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['cityarrstr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</td>
						</tr>
						<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_local_item;
}
if ($__foreach_value_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_item;
}
if ($__foreach_value_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_0_saved_key;
}
?>
					</tbody>
				</table>
			</div>
			<!-- 设置地区 -->
			<div class="modal modal-shipset">
			  <div class="modalcon">
			      <div class="modal-bt">
			        <h4 class="modal-title size-title" id="myModalLabel">设置地区</h4>
					<button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close" id="close-btn"><span aria-hidden="true">x</span></button>
			      </div>
			      <div class="modal-bd">
			      	<div class="all-btn">
				      	<span class="modal-a modal-allcheck">全选</span>
				      	<span class="modal-a modal-uncheck">全不选</span>
				      	<span class="modal-a modal-reverse">反选</span>
			      	</div>
			      	<?php
$_from = $_smarty_tpl->tpl_vars['areaarr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_1_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_1_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_1_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
			      	<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="110000"><input type="checkbox" class="checkbox" id="110000" name='sheng[]' value="<?php echo $_smarty_tpl->tpl_vars['value']->value['pro']['number'];?>
"
					    	<?php if (isset($_smarty_tpl->tpl_vars['pronumber']->value)) {?>
					    		<?php if (in_array($_smarty_tpl->tpl_vars['value']->value['pro']['number'],$_smarty_tpl->tpl_vars['pronumber']->value)) {?>
					    			checked
					    		<?php }?>
					    	<?php }?>
					    	/>  <?php echo $_smarty_tpl->tpl_vars['value']->value['pro']['name'];?>
</label>
						</div>
						<div class="dropdown_body">
						<?php
$_from = $_smarty_tpl->tpl_vars['value']->value['city']['name'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_2_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_2_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_2_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
							<label for="110100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="110100" name='shi[]' value="<?php echo $_smarty_tpl->tpl_vars['value']->value['city']['number'][$_smarty_tpl->tpl_vars['k']->value];?>
"
							<?php if (isset($_smarty_tpl->tpl_vars['citynumber']->value)) {?>
								<?php if (in_array($_smarty_tpl->tpl_vars['value']->value['city']['number'][$_smarty_tpl->tpl_vars['k']->value],$_smarty_tpl->tpl_vars['citynumber']->value)) {?>
									checked
								<?php }?>
							<?php }?>
							/>  <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</label>
						<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_local_item;
}
if ($__foreach_v_2_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_item;
}
if ($__foreach_v_2_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_2_saved_key;
}
?>
						</div>
					</div>
					<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved_local_item;
}
if ($__foreach_value_1_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved_item;
}
if ($__foreach_value_1_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_1_saved_key;
}
?>
					<!-- <div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="120000"><input type="checkbox" class="checkbox" id="120000" name='sheng[]' value="120000"  />  天津</label>
						</div>
						<div class="dropdown_body">
							<label for="120100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="120100" name='shi[]' value="120100"  />  天津市</label>
						</div>
					</div>
					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="130000"><input type="checkbox" class="checkbox" id="130000" name='sheng[]' value="130000"  />  河北省</label>
						</div>
						<div class="dropdown_body">
							<label for="130100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="130100" name='shi[]' value="130100"  />  石家庄市</label>

							<label for="130200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="130200" name='shi[]' value="130200"  />  唐山市</label>

							<label for="130300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="130300" name='shi[]' value="130300"  />  秦皇岛市</label>

							<label for="130400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="130400" name='shi[]' value="130400"  />  邯郸市</label>

							<label for="130500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="130500" name='shi[]' value="130500"  />  邢台市</label>

							<label for="130600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="130600" name='shi[]' value="130600"  />  保定市</label>

							<label for="130700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="130700" name='shi[]' value="130700"  />  张家口市</label>

							<label for="130800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="130800" name='shi[]' value="130800"  />  承德市</label>

							<label for="130900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="130900" name='shi[]' value="130900"  />  沧州市</label>

							<label for="131000" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="131000" name='shi[]' value="131000"  />  廊坊市</label>

							<label for="131100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="131100" name='shi[]' value="131100"  />  衡水市</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="140000"><input type="checkbox" class="checkbox" id="140000" name='sheng[]' value="140000"  />  山西省</label>
						</div>
						<div class="dropdown_body">
							<label for="140100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="140100" name='shi[]' value="140100"  />  太原市</label>

							<label for="140200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="140200" name='shi[]' value="140200"  />  大同市</label>

							<label for="140300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="140300" name='shi[]' value="140300"  />  阳泉市</label>

							<label for="140400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="140400" name='shi[]' value="140400"  />  长治市</label>

							<label for="140500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="140500" name='shi[]' value="140500"  />  晋城市</label>

							<label for="140600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="140600" name='shi[]' value="140600"  />  朔州市</label>

							<label for="140700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="140700" name='shi[]' value="140700"  />  晋中市</label>

							<label for="140800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="140800" name='shi[]' value="140800"  />  运城市</label>

							<label for="140900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="140900" name='shi[]' value="140900"  />  忻州市</label>

							<label for="141000" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="141000" name='shi[]' value="141000"  />  临汾市</label>

							<label for="141100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="141100" name='shi[]' value="141100"  />  吕梁市</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="150000"><input type="checkbox" class="checkbox" id="150000" name='sheng[]' value="150000"  />  内蒙古自治区</label>
						</div>
						<div class="dropdown_body">
							<label for="150100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="150100" name='shi[]' value="150100"  />  呼和浩特市</label>

							<label for="150200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="150200" name='shi[]' value="150200"  />  包头市</label>

							<label for="150300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="150300" name='shi[]' value="150300"  />  乌海市</label>

							<label for="150400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="150400" name='shi[]' value="150400"  />  赤峰市</label>

							<label for="150500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="150500" name='shi[]' value="150500"  />  通辽市</label>

							<label for="150600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="150600" name='shi[]' value="150600"  />  鄂尔多斯市</label>

							<label for="150700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="150700" name='shi[]' value="150700"  />  呼伦贝尔市</label>

							<label for="150800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="150800" name='shi[]' value="150800"  />  巴彦淖尔市</label>

							<label for="150900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="150900" name='shi[]' value="150900"  />  乌兰察布市</label>

							<label for="152200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="152200" name='shi[]' value="152200"  />  兴安盟</label>

							<label for="152500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="152500" name='shi[]' value="152500"  />  锡林郭勒盟</label>

							<label for="152900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="152900" name='shi[]' value="152900"  />  阿拉善盟</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="210000"><input type="checkbox" class="checkbox" id="210000" name='sheng[]' value="210000"  />  辽宁省</label>
						</div>
						<div class="dropdown_body">
							<label for="210100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="210100" name='shi[]' value="210100"  />  沈阳市</label>

							<label for="210200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="210200" name='shi[]' value="210200"  />  大连市</label>

							<label for="210300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="210300" name='shi[]' value="210300"  />  鞍山市</label>

							<label for="210400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="210400" name='shi[]' value="210400"  />  抚顺市</label>

							<label for="210500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="210500" name='shi[]' value="210500"  />  本溪市</label>

							<label for="210600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="210600" name='shi[]' value="210600"  />  丹东市</label>

							<label for="210700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="210700" name='shi[]' value="210700"  />  锦州市</label>

							<label for="210800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="210800" name='shi[]' value="210800"  />  营口市</label>

							<label for="210900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="210900" name='shi[]' value="210900"  />  阜新市</label>

							<label for="211000" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="211000" name='shi[]' value="211000"  />  辽阳市</label>

							<label for="211100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="211100" name='shi[]' value="211100"  />  盘锦市</label>

							<label for="211200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="211200" name='shi[]' value="211200"  />  铁岭市</label>

							<label for="211300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="211300" name='shi[]' value="211300"  />  朝阳市</label>

							<label for="211400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="211400" name='shi[]' value="211400"  />  葫芦岛市</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="220000"><input type="checkbox" class="checkbox" id="220000" name='sheng[]' value="220000"  />  吉林省</label>
						</div>
						<div class="dropdown_body">
							<label for="220100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="220100" name='shi[]' value="220100"  />  长春市</label>

							<label for="220200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="220200" name='shi[]' value="220200"  />  吉林市</label>

							<label for="220300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="220300" name='shi[]' value="220300"  />  四平市</label>

							<label for="220400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="220400" name='shi[]' value="220400"  />  辽源市</label>

							<label for="220500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="220500" name='shi[]' value="220500"  />  通化市</label>

							<label for="220600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="220600" name='shi[]' value="220600"  />  白山市</label>

							<label for="220700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="220700" name='shi[]' value="220700"  />  松原市</label>

							<label for="220800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="220800" name='shi[]' value="220800"  />  白城市</label>

							<label for="222400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="222400" name='shi[]' value="222400"  />  延边朝鲜族自治州</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="230000"><input type="checkbox" class="checkbox" id="230000" name='sheng[]' value="230000"  />  黑龙江省</label>
						</div>
						<div class="dropdown_body">
							<label for="230100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="230100" name='shi[]' value="230100"  />  哈尔滨市</label>

							<label for="230200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="230200" name='shi[]' value="230200"  />  齐齐哈尔市</label>

							<label for="230300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="230300" name='shi[]' value="230300"  />  鸡西市</label>

							<label for="230400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="230400" name='shi[]' value="230400"  />  鹤岗市</label>

							<label for="230500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="230500" name='shi[]' value="230500"  />  双鸭山市</label>

							<label for="230600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="230600" name='shi[]' value="230600"  />  大庆市</label>

							<label for="230700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="230700" name='shi[]' value="230700"  />  伊春市</label>

							<label for="230800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="230800" name='shi[]' value="230800"  />  佳木斯市</label>

							<label for="230900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="230900" name='shi[]' value="230900"  />  七台河市</label>

							<label for="231000" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="231000" name='shi[]' value="231000"  />  牡丹江市</label>

							<label for="231100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="231100" name='shi[]' value="231100"  />  黑河市</label>

							<label for="231200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="231200" name='shi[]' value="231200"  />  绥化市</label>

							<label for="232700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="232700" name='shi[]' value="232700"  />  大兴安岭地区</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="310000"><input type="checkbox" class="checkbox" id="310000" name='sheng[]' value="310000"  />  上海</label>
						</div>
						<div class="dropdown_body">
							<label for="310100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="310100" name='shi[]' value="310100"  />  上海市</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="320000"><input type="checkbox" class="checkbox" id="320000" name='sheng[]' value="320000"  />  江苏省</label>
						</div>
						<div class="dropdown_body">
							<label for="320100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="320100" name='shi[]' value="320100"  />  南京市</label>

							<label for="320200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="320200" name='shi[]' value="320200"  />  无锡市</label>

							<label for="320300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="320300" name='shi[]' value="320300"  />  徐州市</label>

							<label for="320400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="320400" name='shi[]' value="320400"  />  常州市</label>

							<label for="320500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="320500" name='shi[]' value="320500"  />  苏州市</label>

							<label for="320600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="320600" name='shi[]' value="320600"  />  南通市</label>

							<label for="320700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="320700" name='shi[]' value="320700"  />  连云港市</label>

							<label for="320800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="320800" name='shi[]' value="320800"  />  淮安市</label>

							<label for="320900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="320900" name='shi[]' value="320900"  />  盐城市</label>

							<label for="321000" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="321000" name='shi[]' value="321000"  />  扬州市</label>

							<label for="321100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="321100" name='shi[]' value="321100"  />  镇江市</label>

							<label for="321200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="321200" name='shi[]' value="321200"  />  泰州市</label>

							<label for="321300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="321300" name='shi[]' value="321300"  />  宿迁市</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="330000"><input type="checkbox" class="checkbox" id="330000" name='sheng[]' value="330000"  />  浙江省</label>
						</div>
						<div class="dropdown_body">
							<label for="330100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="330100" name='shi[]' value="330100"  />  杭州市</label>

							<label for="330200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="330200" name='shi[]' value="330200"  />  宁波市</label>

							<label for="330300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="330300" name='shi[]' value="330300"  />  温州市</label>

							<label for="330400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="330400" name='shi[]' value="330400"  />  嘉兴市</label>

							<label for="330500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="330500" name='shi[]' value="330500"  />  湖州市</label>

							<label for="330600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="330600" name='shi[]' value="330600"  />  绍兴市</label>

							<label for="330700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="330700" name='shi[]' value="330700"  />  金华市</label>

							<label for="330800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="330800" name='shi[]' value="330800"  />  衢州市</label>

							<label for="330900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="330900" name='shi[]' value="330900"  />  舟山市</label>

							<label for="331000" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="331000" name='shi[]' value="331000"  />  台州市</label>

							<label for="331100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="331100" name='shi[]' value="331100"  />  丽水市</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="340000"><input type="checkbox" class="checkbox" id="340000" name='sheng[]' value="340000"  />  安徽省</label>
						</div>
						<div class="dropdown_body">
							<label for="340100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="340100" name='shi[]' value="340100"  />  合肥市</label>

							<label for="340200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="340200" name='shi[]' value="340200"  />  芜湖市</label>

							<label for="340300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="340300" name='shi[]' value="340300"  />  蚌埠市</label>

							<label for="340400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="340400" name='shi[]' value="340400"  />  淮南市</label>

							<label for="340500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="340500" name='shi[]' value="340500"  />  马鞍山市</label>

							<label for="340600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="340600" name='shi[]' value="340600"  />  淮北市</label>

							<label for="340700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="340700" name='shi[]' value="340700"  />  铜陵市</label>

							<label for="340800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="340800" name='shi[]' value="340800"  />  安庆市</label>

							<label for="341000" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="341000" name='shi[]' value="341000"  />  黄山市</label>

							<label for="341100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="341100" name='shi[]' value="341100"  />  滁州市</label>

							<label for="341200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="341200" name='shi[]' value="341200"  />  阜阳市</label>

							<label for="341300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="341300" name='shi[]' value="341300"  />  宿州市</label>

							<label for="341500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="341500" name='shi[]' value="341500"  />  六安市</label>

							<label for="341600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="341600" name='shi[]' value="341600"  />  亳州市</label>

							<label for="341700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="341700" name='shi[]' value="341700"  />  池州市</label>

							<label for="341800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="341800" name='shi[]' value="341800"  />  宣城市</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="350000"><input type="checkbox" class="checkbox" id="350000" name='sheng[]' value="350000"  />  福建省</label>
						</div>
						<div class="dropdown_body">
							<label for="350100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="350100" name='shi[]' value="350100"  />  福州市</label>

							<label for="350200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="350200" name='shi[]' value="350200"  />  厦门市</label>

							<label for="350300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="350300" name='shi[]' value="350300"  />  莆田市</label>

							<label for="350400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="350400" name='shi[]' value="350400"  />  三明市</label>

							<label for="350500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="350500" name='shi[]' value="350500"  />  泉州市</label>

							<label for="350600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="350600" name='shi[]' value="350600"  />  漳州市</label>

							<label for="350700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="350700" name='shi[]' value="350700"  />  南平市</label>

							<label for="350800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="350800" name='shi[]' value="350800"  />  龙岩市</label>

							<label for="350900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="350900" name='shi[]' value="350900"  />  宁德市</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="360000"><input type="checkbox" class="checkbox" id="360000" name='sheng[]' value="360000"  />  江西省</label>
						</div>
						<div class="dropdown_body">
							<label for="360100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="360100" name='shi[]' value="360100"  />  南昌市</label>

							<label for="360200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="360200" name='shi[]' value="360200"  />  景德镇市</label>

							<label for="360300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="360300" name='shi[]' value="360300"  />  萍乡市</label>

							<label for="360400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="360400" name='shi[]' value="360400"  />  九江市</label>

							<label for="360500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="360500" name='shi[]' value="360500"  />  新余市</label>

							<label for="360600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="360600" name='shi[]' value="360600"  />  鹰潭市</label>

							<label for="360700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="360700" name='shi[]' value="360700"  />  赣州市</label>

							<label for="360800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="360800" name='shi[]' value="360800"  />  吉安市</label>

							<label for="360900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="360900" name='shi[]' value="360900"  />  宜春市</label>

							<label for="361000" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="361000" name='shi[]' value="361000"  />  抚州市</label>

							<label for="361100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="361100" name='shi[]' value="361100"  />  上饶市</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="370000"><input type="checkbox" class="checkbox" id="370000" name='sheng[]' value="370000"  />  山东省</label>
						</div>
						<div class="dropdown_body">
							<label for="370100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="370100" name='shi[]' value="370100"  />  济南市</label>

							<label for="370200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="370200" name='shi[]' value="370200"  />  青岛市</label>

							<label for="370300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="370300" name='shi[]' value="370300"  />  淄博市</label>

							<label for="370400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="370400" name='shi[]' value="370400"  />  枣庄市</label>

							<label for="370500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="370500" name='shi[]' value="370500"  />  东营市</label>

							<label for="370600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="370600" name='shi[]' value="370600"  />  烟台市</label>

							<label for="370700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="370700" name='shi[]' value="370700"  />  潍坊市</label>

							<label for="370800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="370800" name='shi[]' value="370800"  />  济宁市</label>

							<label for="370900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="370900" name='shi[]' value="370900"  />  泰安市</label>

							<label for="371000" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="371000" name='shi[]' value="371000"  />  威海市</label>

							<label for="371100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="371100" name='shi[]' value="371100"  />  日照市</label>

							<label for="371200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="371200" name='shi[]' value="371200"  />  莱芜市</label>

							<label for="371300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="371300" name='shi[]' value="371300"  />  临沂市</label>

							<label for="371400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="371400" name='shi[]' value="371400"  />  德州市</label>

							<label for="371500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="371500" name='shi[]' value="371500"  />  聊城市</label>

							<label for="371600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="371600" name='shi[]' value="371600"  />  滨州市</label>

							<label for="371700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="371700" name='shi[]' value="371700"  />  菏泽市</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="410000"><input type="checkbox" class="checkbox" id="410000" name='sheng[]' value="410000"  />  河南省</label>
						</div>
						<div class="dropdown_body">
							<label for="410100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="410100" name='shi[]' value="410100"  />  郑州市</label>

							<label for="410200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="410200" name='shi[]' value="410200"  />  开封市</label>

							<label for="410300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="410300" name='shi[]' value="410300"  />  洛阳市</label>

							<label for="410400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="410400" name='shi[]' value="410400"  />  平顶山市</label>

							<label for="410500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="410500" name='shi[]' value="410500"  />  安阳市</label>

							<label for="410600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="410600" name='shi[]' value="410600"  />  鹤壁市</label>

							<label for="410700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="410700" name='shi[]' value="410700"  />  新乡市</label>

							<label for="410800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="410800" name='shi[]' value="410800"  />  焦作市</label>

							<label for="410881" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="410881" name='shi[]' value="410881"  />  济源市</label>

							<label for="410900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="410900" name='shi[]' value="410900"  />  濮阳市</label>

							<label for="411000" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="411000" name='shi[]' value="411000"  />  许昌市</label>

							<label for="411100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="411100" name='shi[]' value="411100"  />  漯河市</label>

							<label for="411200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="411200" name='shi[]' value="411200"  />  三门峡市</label>

							<label for="411300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="411300" name='shi[]' value="411300"  />  南阳市</label>

							<label for="411400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="411400" name='shi[]' value="411400"  />  商丘市</label>

							<label for="411500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="411500" name='shi[]' value="411500"  />  信阳市</label>

							<label for="411600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="411600" name='shi[]' value="411600"  />  周口市</label>

							<label for="411700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="411700" name='shi[]' value="411700"  />  驻马店市</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="420000"><input type="checkbox" class="checkbox" id="420000" name='sheng[]' value="420000"  />  湖北省</label>
						</div>
						<div class="dropdown_body">
							<label for="420100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="420100" name='shi[]' value="420100"  />  武汉市</label>

							<label for="420200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="420200" name='shi[]' value="420200"  />  黄石市</label>

							<label for="420300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="420300" name='shi[]' value="420300"  />  十堰市</label>

							<label for="420500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="420500" name='shi[]' value="420500"  />  宜昌市</label>

							<label for="420600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="420600" name='shi[]' value="420600"  />  襄阳市</label>

							<label for="420700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="420700" name='shi[]' value="420700"  />  鄂州市</label>

							<label for="420800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="420800" name='shi[]' value="420800"  />  荆门市</label>

							<label for="420900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="420900" name='shi[]' value="420900"  />  孝感市</label>

							<label for="421000" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="421000" name='shi[]' value="421000"  />  荆州市</label>

							<label for="421100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="421100" name='shi[]' value="421100"  />  黄冈市</label>

							<label for="421200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="421200" name='shi[]' value="421200"  />  咸宁市</label>

							<label for="421300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="421300" name='shi[]' value="421300"  />  随州市</label>

							<label for="422800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="422800" name='shi[]' value="422800"  />  恩施土家族苗族自治州</label>

							<label for="429004" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="429004" name='shi[]' value="429004"  />  仙桃市</label>

							<label for="429005" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="429005" name='shi[]' value="429005"  />  潜江市</label>

							<label for="429006" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="429006" name='shi[]' value="429006"  />  天门市</label>

							<label for="429021" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="429021" name='shi[]' value="429021"  />  神农架林区</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="430000"><input type="checkbox" class="checkbox" id="430000" name='sheng[]' value="430000"  />  湖南省</label>
						</div>
						<div class="dropdown_body">
							<label for="430100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="430100" name='shi[]' value="430100"  />  长沙市</label>

							<label for="430200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="430200" name='shi[]' value="430200"  />  株洲市</label>

							<label for="430300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="430300" name='shi[]' value="430300"  />  湘潭市</label>

							<label for="430400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="430400" name='shi[]' value="430400"  />  衡阳市</label>

							<label for="430500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="430500" name='shi[]' value="430500"  />  邵阳市</label>

							<label for="430600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="430600" name='shi[]' value="430600"  />  岳阳市</label>

							<label for="430700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="430700" name='shi[]' value="430700"  />  常德市</label>

							<label for="430800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="430800" name='shi[]' value="430800"  />  张家界市</label>

							<label for="430900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="430900" name='shi[]' value="430900"  />  益阳市</label>

							<label for="431000" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="431000" name='shi[]' value="431000"  />  郴州市</label>

							<label for="431100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="431100" name='shi[]' value="431100"  />  永州市</label>

							<label for="431200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="431200" name='shi[]' value="431200"  />  怀化市</label>

							<label for="431300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="431300" name='shi[]' value="431300"  />  娄底市</label>

							<label for="433100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="433100" name='shi[]' value="433100"  />  湘西土家族苗族自治州</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="440000"><input type="checkbox" class="checkbox" id="440000" name='sheng[]' value="440000"  />  广东省</label>
						</div>
						<div class="dropdown_body">
							<label for="440100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="440100" name='shi[]' value="440100"  />  广州市</label>

							<label for="440200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="440200" name='shi[]' value="440200"  />  韶关市</label>

							<label for="440300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="440300" name='shi[]' value="440300"  />  深圳市</label>

							<label for="440400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="440400" name='shi[]' value="440400"  />  珠海市</label>

							<label for="440500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="440500" name='shi[]' value="440500"  />  汕头市</label>

							<label for="440600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="440600" name='shi[]' value="440600"  />  佛山市</label>

							<label for="440700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="440700" name='shi[]' value="440700"  />  江门市</label>

							<label for="440800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="440800" name='shi[]' value="440800"  />  湛江市</label>

							<label for="440900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="440900" name='shi[]' value="440900"  />  茂名市</label>

							<label for="441200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="441200" name='shi[]' value="441200"  />  肇庆市</label>

							<label for="441300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="441300" name='shi[]' value="441300"  />  惠州市</label>

							<label for="441400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="441400" name='shi[]' value="441400"  />  梅州市</label>

							<label for="441500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="441500" name='shi[]' value="441500"  />  汕尾市</label>

							<label for="441600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="441600" name='shi[]' value="441600"  />  河源市</label>

							<label for="441700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="441700" name='shi[]' value="441700"  />  阳江市</label>

							<label for="441800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="441800" name='shi[]' value="441800"  />  清远市</label>

							<label for="441900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="441900" name='shi[]' value="441900"  />  东莞市</label>

							<label for="442000" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="442000" name='shi[]' value="442000"  />  中山市</label>

							<label for="445100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="445100" name='shi[]' value="445100"  />  潮州市</label>

							<label for="445200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="445200" name='shi[]' value="445200"  />  揭阳市</label>

							<label for="445300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="445300" name='shi[]' value="445300"  />  云浮市</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="450000"><input type="checkbox" class="checkbox" id="450000" name='sheng[]' value="450000"  />  广西壮族自治区</label>
						</div>
						<div class="dropdown_body">
							<label for="450100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="450100" name='shi[]' value="450100"  />  南宁市</label>

							<label for="450200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="450200" name='shi[]' value="450200"  />  柳州市</label>

							<label for="450300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="450300" name='shi[]' value="450300"  />  桂林市</label>

							<label for="450400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="450400" name='shi[]' value="450400"  />  梧州市</label>

							<label for="450500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="450500" name='shi[]' value="450500"  />  北海市</label>

							<label for="450600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="450600" name='shi[]' value="450600"  />  防城港市</label>

							<label for="450700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="450700" name='shi[]' value="450700"  />  钦州市</label>

							<label for="450800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="450800" name='shi[]' value="450800"  />  贵港市</label>

							<label for="450900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="450900" name='shi[]' value="450900"  />  玉林市</label>

							<label for="451000" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="451000" name='shi[]' value="451000"  />  百色市</label>

							<label for="451100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="451100" name='shi[]' value="451100"  />  贺州市</label>

							<label for="451200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="451200" name='shi[]' value="451200"  />  河池市</label>

							<label for="451300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="451300" name='shi[]' value="451300"  />  来宾市</label>

							<label for="451400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="451400" name='shi[]' value="451400"  />  崇左市</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="460000"><input type="checkbox" class="checkbox" id="460000" name='sheng[]' value="460000"  />  海南省</label>
						</div>
						<div class="dropdown_body">
							<label for="460100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="460100" name='shi[]' value="460100"  />  海口市</label>

							<label for="460200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="460200" name='shi[]' value="460200"  />  三亚市</label>

							<label for="469001" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="469001" name='shi[]' value="469001"  />  五指山市</label>

							<label for="469002" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="469002" name='shi[]' value="469002"  />  琼海市</label>

							<label for="469003" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="469003" name='shi[]' value="469003"  />  儋州市</label>

							<label for="469005" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="469005" name='shi[]' value="469005"  />  文昌市</label>

							<label for="469006" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="469006" name='shi[]' value="469006"  />  万宁市</label>

							<label for="469007" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="469007" name='shi[]' value="469007"  />  东方市</label>

							<label for="469025" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="469025" name='shi[]' value="469025"  />  定安县</label>

							<label for="469026" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="469026" name='shi[]' value="469026"  />  屯昌县</label>

							<label for="469027" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="469027" name='shi[]' value="469027"  />  澄迈县</label>

							<label for="469028" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="469028" name='shi[]' value="469028"  />  临高县</label>

							<label for="469030" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="469030" name='shi[]' value="469030"  />  白沙黎族自治县</label>

							<label for="469031" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="469031" name='shi[]' value="469031"  />  昌江黎族自治县</label>

							<label for="469033" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="469033" name='shi[]' value="469033"  />  乐东黎族自治县</label>

							<label for="469034" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="469034" name='shi[]' value="469034"  />  陵水黎族自治县</label>

							<label for="469035" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="469035" name='shi[]' value="469035"  />  保亭黎族苗族自治县</label>

							<label for="469036" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="469036" name='shi[]' value="469036"  />  琼中黎族苗族自治县</label>

							<label for="469037" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="469037" name='shi[]' value="469037"  />  西沙群岛</label>

							<label for="469038" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="469038" name='shi[]' value="469038"  />  南沙群岛</label>

							<label for="469039" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="469039" name='shi[]' value="469039"  />  中沙群岛的岛礁及其海域</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="500000"><input type="checkbox" class="checkbox" id="500000" name='sheng[]' value="500000"  />  重庆</label>
						</div>
						<div class="dropdown_body">
							<label for="500100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="500100" name='shi[]' value="500100"  />  重庆市</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="510000"><input type="checkbox" class="checkbox" id="510000" name='sheng[]' value="510000"  />  四川省</label>
						</div>
						<div class="dropdown_body">
							<label for="510100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="510100" name='shi[]' value="510100"  />  成都市</label>

							<label for="510300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="510300" name='shi[]' value="510300"  />  自贡市</label>

							<label for="510400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="510400" name='shi[]' value="510400"  />  攀枝花市</label>

							<label for="510500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="510500" name='shi[]' value="510500"  />  泸州市</label>

							<label for="510600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="510600" name='shi[]' value="510600"  />  德阳市</label>

							<label for="510700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="510700" name='shi[]' value="510700"  />  绵阳市</label>

							<label for="510800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="510800" name='shi[]' value="510800"  />  广元市</label>

							<label for="510900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="510900" name='shi[]' value="510900"  />  遂宁市</label>

							<label for="511000" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="511000" name='shi[]' value="511000"  />  内江市</label>

							<label for="511100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="511100" name='shi[]' value="511100"  />  乐山市</label>

							<label for="511300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="511300" name='shi[]' value="511300"  />  南充市</label>

							<label for="511400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="511400" name='shi[]' value="511400"  />  眉山市</label>

							<label for="511500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="511500" name='shi[]' value="511500"  />  宜宾市</label>

							<label for="511600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="511600" name='shi[]' value="511600"  />  广安市</label>

							<label for="511700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="511700" name='shi[]' value="511700"  />  达州市</label>

							<label for="511800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="511800" name='shi[]' value="511800"  />  雅安市</label>

							<label for="511900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="511900" name='shi[]' value="511900"  />  巴中市</label>

							<label for="512000" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="512000" name='shi[]' value="512000"  />  资阳市</label>

							<label for="513200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="513200" name='shi[]' value="513200"  />  阿坝藏族羌族自治州</label>

							<label for="513300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="513300" name='shi[]' value="513300"  />  甘孜藏族自治州</label>

							<label for="513400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="513400" name='shi[]' value="513400"  />  凉山彝族自治州</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="520000"><input type="checkbox" class="checkbox" id="520000" name='sheng[]' value="520000"  />  贵州省</label>
						</div>
						<div class="dropdown_body">
							<label for="520100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="520100" name='shi[]' value="520100"  />  贵阳市</label>

							<label for="520200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="520200" name='shi[]' value="520200"  />  六盘水市</label>

							<label for="520300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="520300" name='shi[]' value="520300"  />  遵义市</label>

							<label for="520400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="520400" name='shi[]' value="520400"  />  安顺市</label>

							<label for="522200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="522200" name='shi[]' value="522200"  />  铜仁地区</label>

							<label for="522300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="522300" name='shi[]' value="522300"  />  黔西南布依族苗族自治州</label>

							<label for="522400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="522400" name='shi[]' value="522400"  />  毕节地区</label>

							<label for="522600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="522600" name='shi[]' value="522600"  />  黔东南苗族侗族自治州</label>

							<label for="522700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="522700" name='shi[]' value="522700"  />  黔南布依族苗族自治州</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="530000"><input type="checkbox" class="checkbox" id="530000" name='sheng[]' value="530000"  />  云南省</label>
						</div>
						<div class="dropdown_body">
							<label for="530100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="530100" name='shi[]' value="530100"  />  昆明市</label>

							<label for="530300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="530300" name='shi[]' value="530300"  />  曲靖市</label>

							<label for="530400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="530400" name='shi[]' value="530400"  />  玉溪市</label>

							<label for="530500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="530500" name='shi[]' value="530500"  />  保山市</label>

							<label for="530600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="530600" name='shi[]' value="530600"  />  昭通市</label>

							<label for="530700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="530700" name='shi[]' value="530700"  />  丽江市</label>

							<label for="530800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="530800" name='shi[]' value="530800"  />  普洱市</label>

							<label for="530900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="530900" name='shi[]' value="530900"  />  临沧市</label>

							<label for="532300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="532300" name='shi[]' value="532300"  />  楚雄彝族自治州</label>

							<label for="532500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="532500" name='shi[]' value="532500"  />  红河哈尼族彝族自治州</label>

							<label for="532600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="532600" name='shi[]' value="532600"  />  文山壮族苗族自治州</label>

							<label for="532800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="532800" name='shi[]' value="532800"  />  西双版纳傣族自治州</label>

							<label for="532900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="532900" name='shi[]' value="532900"  />  大理白族自治州</label>

							<label for="533100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="533100" name='shi[]' value="533100"  />  德宏傣族景颇族自治州</label>

							<label for="533300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="533300" name='shi[]' value="533300"  />  怒江傈僳族自治州</label>

							<label for="533400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="533400" name='shi[]' value="533400"  />  迪庆藏族自治州</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="540000"><input type="checkbox" class="checkbox" id="540000" name='sheng[]' value="540000"  />  西藏自治区</label>
						</div>
						<div class="dropdown_body">
							<label for="540100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="540100" name='shi[]' value="540100"  />  拉萨市</label>

							<label for="542100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="542100" name='shi[]' value="542100"  />  昌都地区</label>

							<label for="542200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="542200" name='shi[]' value="542200"  />  山南地区</label>

							<label for="542300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="542300" name='shi[]' value="542300"  />  日喀则地区</label>

							<label for="542400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="542400" name='shi[]' value="542400"  />  那曲地区</label>

							<label for="542500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="542500" name='shi[]' value="542500"  />  阿里地区</label>

							<label for="542600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="542600" name='shi[]' value="542600"  />  林芝地区</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="610000"><input type="checkbox" class="checkbox" id="610000" name='sheng[]' value="610000"  />  陕西省</label>
						</div>
						<div class="dropdown_body">
							<label for="610100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="610100" name='shi[]' value="610100"  />  西安市</label>

							<label for="610200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="610200" name='shi[]' value="610200"  />  铜川市</label>

							<label for="610300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="610300" name='shi[]' value="610300"  />  宝鸡市</label>

							<label for="610400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="610400" name='shi[]' value="610400"  />  咸阳市</label>

							<label for="610500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="610500" name='shi[]' value="610500"  />  渭南市</label>

							<label for="610600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="610600" name='shi[]' value="610600"  />  延安市</label>

							<label for="610700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="610700" name='shi[]' value="610700"  />  汉中市</label>

							<label for="610800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="610800" name='shi[]' value="610800"  />  榆林市</label>

							<label for="610900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="610900" name='shi[]' value="610900"  />  安康市</label>

							<label for="611000" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="611000" name='shi[]' value="611000"  />  商洛市</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="620000"><input type="checkbox" class="checkbox" id="620000" name='sheng[]' value="620000"  />  甘肃省</label>
						</div>
						<div class="dropdown_body">
							<label for="620100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="620100" name='shi[]' value="620100"  />  兰州市</label>

							<label for="620200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="620200" name='shi[]' value="620200"  />  嘉峪关市</label>

							<label for="620300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="620300" name='shi[]' value="620300"  />  金昌市</label>

							<label for="620400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="620400" name='shi[]' value="620400"  />  白银市</label>

							<label for="620500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="620500" name='shi[]' value="620500"  />  天水市</label>

							<label for="620600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="620600" name='shi[]' value="620600"  />  武威市</label>

							<label for="620700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="620700" name='shi[]' value="620700"  />  张掖市</label>

							<label for="620800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="620800" name='shi[]' value="620800"  />  平凉市</label>

							<label for="620900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="620900" name='shi[]' value="620900"  />  酒泉市</label>

							<label for="621000" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="621000" name='shi[]' value="621000"  />  庆阳市</label>

							<label for="621100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="621100" name='shi[]' value="621100"  />  定西市</label>

							<label for="621200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="621200" name='shi[]' value="621200"  />  陇南市</label>

							<label for="622900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="622900" name='shi[]' value="622900"  />  临夏回族自治州</label>

							<label for="623000" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="623000" name='shi[]' value="623000"  />  甘南藏族自治州</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="630000"><input type="checkbox" class="checkbox" id="630000" name='sheng[]' value="630000"  />  青海省</label>
						</div>
						<div class="dropdown_body">
							<label for="630100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="630100" name='shi[]' value="630100"  />  西宁市</label>

							<label for="632100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="632100" name='shi[]' value="632100"  />  海东地区</label>

							<label for="632200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="632200" name='shi[]' value="632200"  />  海北藏族自治州</label>

							<label for="632300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="632300" name='shi[]' value="632300"  />  黄南藏族自治州</label>

							<label for="632500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="632500" name='shi[]' value="632500"  />  海南藏族自治州</label>

							<label for="632600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="632600" name='shi[]' value="632600"  />  果洛藏族自治州</label>

							<label for="632700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="632700" name='shi[]' value="632700"  />  玉树藏族自治州</label>

							<label for="632800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="632800" name='shi[]' value="632800"  />  海西蒙古族藏族自治州</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="640000"><input type="checkbox" class="checkbox" id="640000" name='sheng[]' value="640000"  />  宁夏回族自治区</label>
						</div>
						<div class="dropdown_body">
							<label for="640100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="640100" name='shi[]' value="640100"  />  银川市</label>

							<label for="640200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="640200" name='shi[]' value="640200"  />  石嘴山市</label>

							<label for="640300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="640300" name='shi[]' value="640300"  />  吴忠市</label>

							<label for="640400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="640400" name='shi[]' value="640400"  />  固原市</label>

							<label for="640500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="640500" name='shi[]' value="640500"  />  中卫市</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="650000"><input type="checkbox" class="checkbox" id="650000" name='sheng[]' value="650000"  />  新疆维吾尔自治区</label>
						</div>
						<div class="dropdown_body">
							<label for="650100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="650100" name='shi[]' value="650100"  />  乌鲁木齐市</label>

							<label for="650200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="650200" name='shi[]' value="650200"  />  克拉玛依市</label>

							<label for="652100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="652100" name='shi[]' value="652100"  />  吐鲁番地区</label>

							<label for="652200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="652200" name='shi[]' value="652200"  />  哈密地区</label>

							<label for="652300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="652300" name='shi[]' value="652300"  />  昌吉回族自治州</label>

							<label for="652700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="652700" name='shi[]' value="652700"  />  博尔塔拉蒙古自治州</label>

							<label for="652800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="652800" name='shi[]' value="652800"  />  巴音郭楞蒙古自治州</label>

							<label for="652900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="652900" name='shi[]' value="652900"  />  阿克苏地区</label>

							<label for="653000" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="653000" name='shi[]' value="653000"  />  克孜勒苏柯尔克孜自治州</label>

							<label for="653100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="653100" name='shi[]' value="653100"  />  喀什地区</label>

							<label for="653200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="653200" name='shi[]' value="653200"  />  和田地区</label>

							<label for="654000" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="654000" name='shi[]' value="654000"  />  伊犁哈萨克自治州</label>

							<label for="654200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="654200" name='shi[]' value="654200"  />  塔城地区</label>

							<label for="654300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="654300" name='shi[]' value="654300"  />  阿勒泰地区</label>

							<label for="659001" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="659001" name='shi[]' value="659001"  />  石河子市</label>

							<label for="659002" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="659002" name='shi[]' value="659002"  />  阿拉尔市</label>

							<label for="659003" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="659003" name='shi[]' value="659003"  />  图木舒克市</label>

							<label for="659004" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="659004" name='shi[]' value="659004"  />  五家渠市</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="710000"><input type="checkbox" class="checkbox" id="710000" name='sheng[]' value="710000"  />  台湾省</label>
						</div>
						<div class="dropdown_body">
							<label for="710100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="710100" name='shi[]' value="710100"  />  台北市</label>

							<label for="710200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="710200" name='shi[]' value="710200"  />  高雄市</label>

							<label for="710300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="710300" name='shi[]' value="710300"  />  台南市</label>

							<label for="710400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="710400" name='shi[]' value="710400"  />  台中市</label>

							<label for="710500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="710500" name='shi[]' value="710500"  />  金门县</label>

							<label for="710600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="710600" name='shi[]' value="710600"  />  南投县</label>

							<label for="710700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="710700" name='shi[]' value="710700"  />  基隆市</label>

							<label for="710800" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="710800" name='shi[]' value="710800"  />  新竹市</label>

							<label for="710900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="710900" name='shi[]' value="710900"  />  嘉义市</label>

							<label for="711100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="711100" name='shi[]' value="711100"  />  新北市</label>

							<label for="711200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="711200" name='shi[]' value="711200"  />  宜兰县</label>

							<label for="711300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="711300" name='shi[]' value="711300"  />  新竹县</label>

							<label for="711400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="711400" name='shi[]' value="711400"  />  桃园县</label>

							<label for="711500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="711500" name='shi[]' value="711500"  />  苗栗县</label>

							<label for="711700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="711700" name='shi[]' value="711700"  />  彰化县</label>

							<label for="711900" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="711900" name='shi[]' value="711900"  />  嘉义县</label>

							<label for="712100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="712100" name='shi[]' value="712100"  />  云林县</label>

							<label for="712400" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="712400" name='shi[]' value="712400"  />  屏东县</label>

							<label for="712500" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="712500" name='shi[]' value="712500"  />  台东县</label>

							<label for="712600" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="712600" name='shi[]' value="712600"  />  花莲县</label>

							<label for="712700" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="712700" name='shi[]' value="712700"  />  澎湖县</label>
						</div>
					</div>
					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="810000"><input type="checkbox" class="checkbox" id="810000" name='sheng[]' value="810000"  />  香港特别行政区</label>
						</div>
						<div class="dropdown_body">
							<label for="810100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="810100" name='shi[]' value="810100"  />  香港岛</label>

							<label for="810200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="810200" name='shi[]' value="810200"  />  九龙</label>

							<label for="810300" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="810300" name='shi[]' value="810300"  />  新界</label>
						</div>
					</div>

					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="820000"><input type="checkbox" class="checkbox" id="820000" name='sheng[]' value="820000"  />  澳门特别行政区</label>
						</div>
						<div class="dropdown_body">
							<label for="820100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="820100" name='shi[]' value="820100"  />  澳门半岛</label>

							<label for="820200" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="820200" name='shi[]' value="820200"  />  离岛</label>
						</div>
					</div>
					<div class="dropdown" >
						<div class="dropdown_header" >
					    	<span class="car_left"><span class="caret"></span></span><label for="990000"><input type="checkbox" class="checkbox" id="990000" name='sheng[]' value="990000"  />  海外</label>
						</div>
						<div class="dropdown_body">
							<label for="990100" style="margin-right: 5px;"><input type="checkbox" class="checkbox" id="990100" name='shi[]' value="990100"  />  海外</label>
						</div>
					</div> -->
			      </div>
			      <div class="modal-bo">
			        <button type="button" class="btn btn-primary btn-sm sure-city">确定</button>
			        <button type="button" class="btn btn-default btn-sm close-btn">取消</button>
			      </div>
			  </div>
			</div>
			<div class="push"></div>

			<div class="modal addaddresswindow">
			    <div class="modalcon" style="width:300px;margin-left:-150px;">
			      <div class="modal-bt">
			        <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" id="close-btn">x</span></button>
			        <h4 class="modal-title size-title">系统提示</h4>
			      </div>
			      <div class="modal-bd" >
			       		<p>数据处理中···</p>
			      </div>
			      <div class="modal-bo">

			      </div>
			    </div><!-- /.modal-content -->
			</div>
		</div>
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../comfoot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="/js/commontop.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="/js/util.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript"src="/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="/js/warehouse/shippingset.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="/js/warehouse/mycom.js"><?php echo '</script'; ?>
>
	</body>
</html>
<?php }
}
