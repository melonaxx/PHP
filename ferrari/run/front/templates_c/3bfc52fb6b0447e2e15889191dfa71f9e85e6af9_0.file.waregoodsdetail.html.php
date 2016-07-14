<?php
/* Smarty version 3.1.29, created on 2016-06-03 09:28:08
  from "/home/tianyaqiang/devspace/ferrari/src/web_inf/front/tpls/warehouse/waregoodsdetail.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5750dd28483558_47016936',
  'file_dependency' => 
  array (
    '3bfc52fb6b0447e2e15889191dfa71f9e85e6af9' => 
    array (
      0 => '/home/tianyaqiang/devspace/ferrari/src/web_inf/front/tpls/warehouse/waregoodsdetail.html',
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
function content_5750dd28483558_47016936 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>米欢电商ERP</title>
 		<link href="/images/favicon.ico" rel="shortcut icon">
		<link href="/bootstrap/css/bootstrap.min.css"  rel="stylesheet" media="screen">
		<link href="/css/commontop.css"   rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="/css/warehouse/waregoodsdetail.css"/>
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
				<h5>
					您的位置： 
					<a href="javascript:;">首页</a>
					<a href="javascript:;"></a>
				</h5>
			</div>
			<div class="row row-bold">
				商品信息
				<a href="javascript:;"class="edit">修改</a>
			</div>
			<div class="row">
				<form class="form-inline waredetail-form">
					<div class="float-left">
						<div class="form-group">
							<label for="exampleInputEmail2" class="datename">商品编码：</label>
						    <input type="text" class="form-control code" id="exampleInputEmail2" placeholder="不填写将自动生成"readonly="readonly">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail2" class="datename">商品名称：</label>
						    <input type="text" class="form-control waregoods-detailname" id="exampleInputEmail2" placeholder="必填">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail2" class="datename">商品品牌：</label>
						    <select class="form-control goodsbrand"id="exampleInputEmail2">
							  <option>小米</option>
							  <option>苹果</option>
							  <option>华为</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail2" class="datename goodsstore">所属店铺：</label>
						    <select class="form-control "id="exampleInputEmail2">
							  <option>米欢科技</option>
							  <option>外麦王</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail2" class="datename">商品分类：</label>
						    <select class="form-control goodsclassify"id="exampleInputEmail2">
							  <option>手机</option>
							  <option>配件</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail2" class="datename">产品类型：</label>
						    <select class="form-control goodstype"id="exampleInputEmail2">
							  <option>实体产品</option>
							  <option>虚拟产品</option>
							  <option>套装产品</option>
							  <option>原材料</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail2" class="datename">是否二手：</label>
						    <select class="form-control goodsused"id="exampleInputEmail2">
							  <option>全新</option>
							  <option>二手</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail2" class="datename">单位：</label>
						    <select class="form-control goodsunit"id="exampleInputEmail2">
							  <option>个</option>
							  <option>台</option>
							  <option>张</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail2" class="datename">商品货号：</label>
						    <input type="text" class="form-control" id="exampleInputEmail2">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail2" class="datename">商品条码：</label>
						    <input type="text" class="form-control" id="exampleInputEmail2">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail2" class="datename">商品数量：</label>
						    <input type="text" class="form-control" id="exampleInputEmail2">
						</div>
						<div class="form-group">
							<label for="exampleInputAmount" class="datename">体积：</label>
						    <div class="input-group">
						      <input type="text" class="form-control" id="exampleInputAmount">
						      <div class="input-group-addon">m³</div>
						    </div>
						</div>
						<div class="form-group">
							<label for="exampleInputAmount" class="datename">重量：</label>
						    <div class="input-group">
						      <input type="text" class="form-control" id="exampleInputAmount">
						      <div class="input-group-addon">kg</div>
						    </div>
						</div>
						<div class="form-group">
							<label for="exampleInputAmount" class="datename">吊牌价：</label>
						    <div class="input-group">
						      <div class="input-group-addon">￥</div>
						      <input type="text" class="form-control" id="exampleInputAmount">
						    </div>
						</div>
						<div class="form-group">
							<label for="exampleInputAmount" class="datename">进价：</label>
						    <div class="input-group">
						      <div class="input-group-addon">￥</div>
						      <input type="text" class="form-control" id="exampleInputAmount">
						    </div>
						</div>
						<div class="form-group">
							<label for="exampleInputAmount" class="datename">零售价：</label>
						    <div class="input-group">
						      <div class="input-group-addon">￥</div>
						      <input type="text" class="form-control" id="exampleInputAmount">
						    </div>
						</div>
						<div class="form-group">
							<label for="exampleInputAmount" class="datename">总价：</label>
						    <div class="input-group">
						      <div class="input-group-addon">￥</div>
						      <input type="text" class="form-control" id="exampleInputAmount">
						    </div>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail2" class="datename">在售状态：</label>
						    <select class="form-control goodsstatus"id="exampleInputEmail2">
							  <option>在售</option>
							  <option>下架</option>
							  <option>停产</option>
							  <option>缺货</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail2" class="datename">产品经理：</label>
						    <input type="text" class="form-control person-name" id="exampleInputEmail2">
						</div>
					</div>
					<div class="float-right">
						<table id="waregoods-table-img">
							<tbody>
								<tr id="warp">
									<td class="Upload-img hover">
										<span class="Upload-text Upload-text1">上传</span>
										<img src="/images/smile.png" class="modalImg modalImg1" id="imgShow_WU_FILE_0"/>
										<div class="modal-div">
											<span class="modal-Edit">编辑</span>
											<span class="modal-Del">删除</span
										</div>
									</td>
									<td class="Upload-img">
										<span class="Upload-text">上传</span>
										<img src="" class="modalImg"id="imgShow_WU_FILE_1"/>
										<div class="modal-div">
											<span class="modal-Edit" >编辑</span>
											<span class="modal-Del">删除</span
										</div>
									</td>
									<td class="Upload-img">
										<span class="Upload-text">上传</span>
										<img src="" class="modalImg"id="imgShow_WU_FILE_2"/>
										<div class="modal-div">
											<span class="modal-Edit">编辑</span>
											<span class="modal-Del">删除</span
										</div>
									</td>
									<td class="Upload-img">
										<span class="Upload-text">上传</span>
										<img src="" class="modalImg"id="imgShow_WU_FILE_3"/>
										<div class="modal-div">
											<span class="modal-Edit">编辑</span>
											<span class="modal-Del">删除</span
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						<a href="javascript:;" class="check" >查看线上商品</a>
				    </div>
				</form>
			</div>
			<div class="row"><span>商品描述</span></div>
			<div class="row row-textarea">
				<textarea class="form-control input-sm" rows="4">
				</textarea>
			</div>
			<div class="row row-bold">
				商品规格
			</div>
			<div class="row">
				<table class="table waregooddetail-table">
					<tr>
						<td class="waredetail-operate">操作</td>
						<td>
							<select class="form-control select1" id="exampleInputEmail2">
							  <option class="opt1" >--无--</option>
							  <option>颜色分类</option>
							  <option>内存</option>
							  <option>容量</option>
							  <option>尺寸</option>
							</select>
						</td>
						<td>
							<select class="form-control select1" id="exampleInputEmail2">
							  <option class="opt1" >--无--</option>
							  <option>内存</option>
							  <option>容量</option>
							  <option>尺寸</option>
							  <option>颜色</option>
							</select>
						</td>
						<td>
							<select class="form-control select1" id="exampleInputEmail2">
							  <option class="opt1" >--无--</option>
							  <option>内存</option>
							  <option>容量</option>
							  <option>尺寸</option>
							  <option>颜色</option>
							</select>
						</td>
						<td>
							<select class="form-control select1" id="exampleInputEmail2">
							  <option class="opt1" >--无--</option>
							  <option>内存</option>
							  <option>容量</option>
							  <option>尺寸</option>
							  <option>颜色</option>
							</select>
						</td>
						<td>
							<select class="form-control select1" id="exampleInputEmail2">
							  <option class="opt1" >--无--</option>
							  <option>内存</option>
							  <option>容量</option>
							  <option>尺寸</option>
							  <option>颜色</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="waredetail-clear">清除</td>
						<td>
							<select class="form-control select2" id="exampleInputEmail2">
								<option>深棕色</option>
							</select>
						</td>
						<td>
							<select class="form-control select2" id="exampleInputEmail2">
							</select>
						</td>
						<td>
							<select class="form-control select2" id="exampleInputEmail2">
							</select>
						</td>
						<td>
							<select class="form-control select2" id="exampleInputEmail2">
							</select>
						</td>
						<td>
							<select class="form-control select2" id="exampleInputEmail2">
							</select>
						</td>
					</tr>
				</table>
			</div>
			<div class="row row-bold">
				商品属性
			</div>
			<div class="row">
				<input class="btn btn-default btn-add1" type="button" value="添加">
			</div>
			<div class="row row-table">
				<table class="table waregooddetail-table">
					<thead>
						<tr class="active">
							<td width="40px">序号</td>
							<td width="40px">操作</td>
							<td width="300px">属性</td>
							<td width="600px">属性值</td>
						</tr>
					</thead>
					<tbody id="tbody1">
						<tr class='onetr1'>
							<td class="onetd1">1</td>
							<td>
								<a class="btn-del" href="javascript:;">删除</a>
							</td>
							<td>
								<select class="form-control" id="exampleInputEmail2">
								  <option>--无--</option>
								  <option>内存</option>
								  <option>容量</option>
								  <option>尺寸</option>
								  <option>颜色</option>
								</select>
							</td>
							<td>
								<select class="form-control" id="exampleInputEmail2">
								</select>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="row row-bold">
				商品配件
			</div>
			<div class="row">
				<input class="btn btn-default btn-add2" type="button" value="添加">
			</div>
			<div class="row row-table">
				<table class="table waregooddetail-table">
					<thead>
						<tr class="active">
							<td width="46px">序号</td>
							<td width="46px">操作</td>
							<td width="300px">搜索</td>
							<td width="658px">商品名称与规格</td>
							<td width="150px">数量</td>
						</tr>
					</thead>
					<tbody id="tbody2">
						<tr class="onetr2">
							<td class="onetd2">1</td>
							<td>
								<a class="btn-del1" href="javascript:;">删除</a>
							</td>
							<td>
								<input type="text" class="form-control searchbox" placeholder="搜索"/>
							</td>
							<td>
								<select class="form-control" id="exampleInputEmail2">
								  <option>请选择商品</option>
								</select>
							</td>
							<td>
								<input type="text" class="form-control searchbox"/>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="row row-bold">
				仓库选择
			</div>
			<div class="row row-house">
				<form class="form-inline">
					<input class="btn btn-default btn-change" type="button" value="修改">
					<div class="detail-house">
							<div class="modal-house">
							<span class="modal-house-name">默认仓库</span>
							<span class="detail-house-del">删除</span>
						</div>
						<div class="modal-house">
							<span class="modal-house-name">123</span>
							<span class="detail-house-del">删除</span>
						</div>
						<div class="modal-house">
							<span class="modal-house-name">东京一号仓</span>
							<span class="detail-house-del">删除</span>
						</div>
					</div>
				</form>
			</div>
			<div class="row waregoodsdetail-btn">
				<input class="btn btn-default btn-submit" type="button" value="提交">
				<input class="btn btn-default" type="button" value="重置">
			</div>
			<!--modal0上传图片-->
			<div class="modal modal-upload">
			  <div class="modalcon">
			      <div class="modal-bt">
			        <h4 class="modal-title size-title" id="myModalLabel">上传图片</h4>
					<button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close" id="close-btn"><span aria-hidden="true">x</span></button>
			      </div>
			      <div class="modal-bd">
			      	<ul class="nav nav-tabs">
					  <li role="presentation" class="active modal-img">
					  	<a href="#">网络图片地址</a>
					  </li>
					  <li role="presentation" class="modal-img">
					  	<a href="#">上传本地图片</a>
					  </li>
					</ul>
					<div class="form-group modal-form">
                		<input type="text" class="form-control Imgsrc Imgsrc-net" placeholder="输入图片地址"/>
					</div>
           			<div class="form-group modal-form modal-form1 form-control">
					    <input type="file" id="up_img_WU_FILE_0" class="Imgsrc Imgsrc0">
					    <input type="file" id="up_img_WU_FILE_1" class="Imgsrc Imgsrc1">
					    <input type="file" id="up_img_WU_FILE_2" class="Imgsrc Imgsrc2">
					    <input type="file" id="up_img_WU_FILE_3" class="Imgsrc Imgsrc3">
					</div>
			      </div>
			      <div class="modal-bo">
			        <button type="button" class="btn btn-primary btn-sure0 btn-sm">确定</button>
			        <button type="button" class="btn btn-default btn-sm close-btn" data-dismiss="modal">取消</button>
			      </div>
			  </div>
			</div>
			<!-- 产品经理Modal1 -->
			<div class="modal modal-manager">
			    <div class="modalcon" >
			      <div class="modal-bt">
			        <h4 class="modal-title size-title" id="myModalLabel">产品经理</h4>
					<button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close" id="close-btn"><span aria-hidden="true">x</span></button>
			      </div>
			      <div class="modal-bd">
			      	<form class="form-inline">
					  <div class="form-group">
					  	<input class="btn btn-default btn-cancle btn-sm" type="button" value="取消产品经理">
					  </div>
					</form>
			      	<form class="form-inline">
					  <div class="form-group">
					  	<table class="table table-hover man-table">
					  		<thead>
					  			<tr  class="active">
						  			<td>序号</td>
						  			<td>员工编号</td>
						  			<td>操作</td>
						  			<td>姓名</td>
						  			<td>所属部门</td>
					  			</tr>
					  		</thead>
					  		<tr>
					  			<td>1</td>
					  			<td></td>
					  			<td>
					  				<div class="radio">
									  <label>
									    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
									  </label>
									</div>
					  			</td>
					  			<td>admihuan</td>
					  			<td></td>
					  		</tr>
					  		<tr>
					  			<td>2</td>
					  			<td>SN002</td>
					  			<td>
					  				<div class="radio">
									  <label>
									    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
									  </label>
									</div>
					  			</td>
					  			<td>马三</td>
					  			<td>产品部</td>
					  		</tr>
					  		<tr>
					  			<td>3</td>
					  			<td>SN003</td>
					  			<td>
					  				<div class="radio">
									  <label>
									    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
									  </label>
									</div>
					  			</td>
					  			<td>刘二</td>
					  			<td>客服部</td>
					  		</tr>
					  	</table>
					  </div>
					</form>
			      </div>
			      <div class="modal-bo">
			        <button type="button" class="btn btn-primary btn-sure1 btn-sm">确定</button>
			        <button type="button" class="btn btn-default close-btn btn-sm">取消</button>
			      </div>
			  </div>
			</div>
			<!--修改仓库modle2-->
			<div class="modal modal-addware">
			    <div class="modalcon" >
				    <div class="modal-bt">
				        <h4 class="modal-title size-title" id="myModalLabel">添加仓库</h4>
					    <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close" id="close-btn"><span aria-hidden="true">x</span></button>
				    </div>
				    <div class="modal-bd">
				      	<div class="row">
					      	<span class="modal-a modal-allcheck">全选</span>
					      	<span class="modal-a modal-uncheck">全不选</span>
					      	<span class="modal-a modal-reverse">反选</span>
				      	</div>
			      		<div class="row">
						  	<div class="modal-check">
						      <input type="checkbox" value="" >
						      <span class="modal-span">三楼仓库</span>
							</div>
						  	<div class="modal-check">
						      <input type="checkbox" value="" >
						      <span class="modal-span">北京仓库</span>
							</div>
						  	<div class="modal-check">
						      <input type="checkbox" value="" >
						      <span class="modal-span">默认仓库</span>
							</div>
			      		</div>
				    </div>
				    <div class="modal-bo">
				        <button type="button" class="btn btn-primary btn-sure2 btn-sm">确定</button>
				        <button type="button" class="btn btn-default btn-sm close-btn" data-dismiss="modal">取消</button>
				    </div>
			  	</div>
			</div>
			<div class="push"></div>
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
 type="text/javascript" src="/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="/js/warehouse/waregoodsdetail.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="/js/uploadPreview.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="/js/warehouse/mycom.js"><?php echo '</script'; ?>
>
	</body>
</html>
<?php }
}
