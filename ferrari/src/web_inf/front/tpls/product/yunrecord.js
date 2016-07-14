<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>米欢电商ERP</title>
 		<link href="/images/favicon.ico" rel="shortcut icon">
		<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap-datetimepicker.min.css"/>
		<link href="/bootstrap/css/bootstrap.min.css"  rel="stylesheet" media="screen">
		<link href="/css/commontop.css"   rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="/css/product/yunfei.css"/>
		<style>
			{literal}
				@media screen and (max-width: 1120px){ 
					/*当屏幕尺寸小于1120px时，应用下面的CSS样式*/
				    .navbar-nav,#comtop-right{display: none;}
				}
			{/literal}
		</style>
	</head>
	<body>
		{include file="../commontop.html"}
		<div class="container-fluid container1">
			<div class="row ware-row">
				<h5 class="col-xs-12">您的位置：<a href="javascript:;">首页</a><a href="javascript:;"></a></h5>
			</div>
			<div class="row">
				<ul class="nav nav-tabs col-md-12 yunfei-nav">
				  <li role="presentation">
				  	<a href="/product/yunfei.php">生产运费</a>
				  </li>
				  <li role="presentation" class="active">
				  	<a href="/product/yunrecord.php">运费记录</a>
				  </li>
				  <li role="presentation">
				  	<a href="/product/yunopen.php">运费开票(含税)</a>
				  </li>
				  <li role="presentation">
				  	<a href="/product/yunopenrecord.php">运费开票记录</a>
				  </li>
				</ul>
			</div>
			<div class="row">
				<table class="table table-hover yunrecord-table">
					<thead>
						<tr class="active">
							<td>序号</td>
							<td>日期</td>
							<td>运费单编号</td>
							<td>财务科目(借)</td>
							<td>财务科目(贷)</td>
							<td>运费金额</td>
							<td>交易账号</td>
							<td>托运公司</td>
							<td>运单编号</td>
							<td>操作人</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="row no-find">
				<div class="no-record col-xs-12"><img src="/images/empty.jpg"/><span>没有找到记录，请调整搜索条件。</span></div>
			</div>
			<div class="row">
				<form class="form-inline warestatus-form1 warestatus-form2">
					<div class="form-group">
					    <label for="exampleInputName2"class="labelname">每页：</label>
					    <select class="form-control waregood-status" id="exampleInputName2">
					    	<option>10</option>
					    	<option>15</option>
					    	<option>20</option>
					    	<option>50</option>
					    	<option>100</option>
					    </select>
					</div> 
					<div class="form-group">
						<ul class="warestatus-page">
							<li><a href="">首页</a></li>
						    <li class="previous"><a href="#">上一页</a></li>
						    <li>
						    	<label for="exampleInputName2"class="labelname">第</label>
							     <input type="text" class="form-control"id="exampleInputName2"value="1">
						    	<label for="exampleInputName2"class="labelname">页(共<span>1</span>页<span>0</span>条)</label>
						    </li>
						    <li class="next"><a href="#">下一页</a></li>
							<li><a href="#">末页</a></li>
						 </ul>
					</div> 
				</form>
			</div>
			
			<div class="push"></div>
		</div>
		{include file="../comfoot.html"}
		<script type="text/javascript" src="/js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="/js/commontop.js"></script>
		<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js" ></script>
		<script src="/js/product/expenserecord.js"></script>
	</body>
</html>
