<?xml version="1.0" encoding="utf-8" ?>
<xsl:stylesheet version="2.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<!-- UTF8 编码 -->

<xsl:include href="/style/header.xsl" />
<xsl:template name="text">
	<div class="mainBody">
	<ul id="myTab" class="nav nav-tabs nav_tabs_margin">
	   <li><a href="/stock/stock_real_inventory.php">库存状况</a></li>
	   <li class="active"><a href="/stock/stock_commodity_status.php">商品状况</a></li>
	</ul>
		<form action="/stock/stock_commodity_status.php" method="post" class="form-inline">
			<div class="table_operate_block">
			<!-- <span style="line-height:26px;">当前商品：共<span class="money_color"><xsl:value-of select="/html/Body/total_zong"/></span>件，总计<span class="money_color"><xsl:value-of select="/html/Body/price_zong"/></span>元</span> -->
				<div class="form-group" style="margin:0; float:right;">
					<input type="submit" class="btn btn-default btn-sm btn_margin" value="查询" />
					<input type="button" name='clear' class="btn btn-default btn-sm" value="清空" />
				</div>
				<div class="form-group form_small_block float_right">
					<label>品牌：</label>
					<select name="brand" class="form-control input-sm">
						<option value="0"></option>
						<xsl:for-each select="/html/Body/brandList/ul/li">
							<xsl:element name="OPTION">
								<xsl:attribute name="value"><xsl:value-of select="@id" /></xsl:attribute>
								<xsl:if test="@id=/html/Body/brand"><xsl:attribute name="selected">selected</xsl:attribute></xsl:if>
								<xsl:value-of select="." />
							</xsl:element>
						</xsl:for-each>
					</select>
				</div>
				<div class="form-group form_small_block float_right">
					<label>分类：</label>
					<select name="classification" class="form-control input-sm">
						<option value="0"></option>
						<xsl:for-each select="/html/Body/product/ul/li">
							<xsl:element name="OPTION">
							   <xsl:attribute name="value"><xsl:value-of select="value"/></xsl:attribute>
							    <xsl:if test="value=/html/Body/classification"><xsl:attribute name="selected">selected</xsl:attribute></xsl:if>
							   <xsl:value-of select="text"/>
							</xsl:element>
						</xsl:for-each>
					</select>
				</div>
				<div class="form-group form_small_block float_right" style="margin-right:136px;">
					<label>商品：</label>
					<xsl:element name="INPUT">
						<xsl:attribute name="type">text</xsl:attribute>
						<xsl:attribute name="name">find</xsl:attribute>
						<xsl:attribute name="placeholder">商品名称或编码</xsl:attribute>
						<xsl:attribute name="value"><xsl:value-of select="/html/Body/find"/></xsl:attribute>
						<xsl:attribute name="class">form-control input-sm</xsl:attribute>
					</xsl:element>
				</div>
			</div>
			<div class="input-group" style="position:relative;margin-top:-42px;margin-left:585px;">
				状态：
				<button type="button" class="btn btn-default btn-sm butt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:78px;">
				<span class="butt_name">在售</span>
				<xsl:element name='INPUT'>
					<xsl:attribute name="type">hidden</xsl:attribute>
					<xsl:attribute name="name">sales_status</xsl:attribute>
					<xsl:attribute name="value"><xsl:value-of select="/html/Body/sales_status"/></xsl:attribute>
				</xsl:element>
				<span class="caret"></span></button>
				<ul class="dropdown-menu dropdown-menu-left">
					<li><a href="javascript:void(0)" class="sales">全部</a></li>
					<li><a href="javascript:void(0)" class="sales">在售</a></li>
					<li><a href="javascript:void(0)" class="sales">下架</a></li>
					<li><a href="javascript:void(0)" class="sales">停产</a></li>
					<li><a href="javascript:void(0)" class="sales">缺货</a></li>
				</ul>
			</div>
		</form>
		<table width="1180" class="table table-bordered table-hover">
			<tr>
				<th width="50" class="table_th_number">序号</th>
				<th class="table_th_pic">图片</th>
				<th width="350">商品名称</th>
				<th width="306">规格</th>
				<th width="200">商品编码</th>
				<th width="150">均价</th>
				<!-- <th width="100">总价</th> -->
				<!-- <th width="100">数量</th> -->
				<th width="100">位置数量</th>
			</tr>
			<xsl:for-each select="/html/Body/real/ul/li">
				<tr>
					<td class="center"><xsl:value-of select="num"/></td>
					<td class="center">
						<xsl:element name="img">
							<xsl:attribute name="src"><xsl:value-of select="image"/></xsl:attribute>
							<xsl:attribute name="height">20</xsl:attribute>
							<xsl:attribute name="width">20</xsl:attribute>
							<xsl:attribute name="class">smallimg</xsl:attribute>
						</xsl:element>
						<xsl:element name="img">
							<xsl:attribute name="src"><xsl:value-of select="image"/></xsl:attribute>
							<xsl:attribute name="height">200</xsl:attribute>
							<xsl:attribute name="width">200</xsl:attribute>
							<xsl:attribute name="style">display:none;position:absolute;</xsl:attribute>
							<xsl:attribute name="class">bigimg</xsl:attribute>
						</xsl:element>
					</td>
					<td>
						<xsl:element name="A">
							<xsl:attribute name="href">/product/product_look_see.php?id=<xsl:value-of select="id"/></xsl:attribute>
							<xsl:value-of select="name"/>
						</xsl:element>
					</td>
					<td><xsl:value-of select="format_1"/><xsl:value-of select="format_2"/><xsl:value-of select="format_3"/><xsl:value-of select="format_4"/><xsl:value-of select="format_5"/></td>
					<td><xsl:value-of select="number"/></td>
					<td><xsl:value-of select="price_purchase"/></td>
					<!-- <td><xsl:value-of select="price_total"/></td> -->
					<!-- <td><xsl:value-of select="total"/></td> -->
					<td class="number">
						<xsl:element name="A">
							<xsl:attribute name="href">javascript:;</xsl:attribute>
							<xsl:attribute name="onclick">MessageBox('/stock/stock_real_inventory_detail.php?id=<xsl:value-of select="id"/>', '详细', 700, 300)</xsl:attribute>
							详细
						</xsl:element>
					</td>
				</tr>
			</xsl:for-each>
		</table>
		<xsl:if test="/html/Body/real/ul/@total = '0'">
			<div class="imgs" style="margin:0 auto; width:100%;text-align:center">
			<div class="img">
				<img src="/images/empty.jpg"  alt=""/>
				<span>没有找到记录，请调整搜索条件。</span>
			</div>
		</div>
		</xsl:if>
		<xsl:call-template name="page"></xsl:call-template>
	</div>
<script type="text/javascript">
	var sumx = 0;
	var maxx = 0;
	$(".number").each(function(){
		var sum = $(this).text();
		sumx = parseInt(sum) + parseInt(sumx);

		var max = $(this).prev().text();
		maxx = parseInt(max) + parseInt(maxx);
	})
	$(".pieces").html(sumx);
	$(".total").html(maxx);
	$('.smallimg').hover(function(){
		var t = $(this).position().top - 90 + 'px';
		var l = $(this).position().left + 20 + 'px';
		$(this).next().css("display","block");
		$(this).next().css("top",t);
		$(this).next().css("left",l);
	},function(){
		$(this).next().css("display","none");
	})

	$('input[name=clear]').click(function(){
		$('input[name=find]').val('');
		$('select[name=classification]').val('');
		$('select[name=brand]').val('');
	})

	$(".sales").click(function(){
		var v = $(this).html();
		$(".butt_name").html(v);
		if(v == "全部"){
			$('input[name=sales_status]').val("All");
		}else if(v == "在售"){
			$('input[name=sales_status]').val("Onsale");
		}else if(v == "下架"){
			$('input[name=sales_status]').val("Soldout");
		}else if(v == "停产"){
			$('input[name=sales_status]').val("Stop");
		}else if(v == "缺货"){
			$('input[name=sales_status]').val("Stockout");
		}
	})

	var sales_status = '<xsl:value-of select="/html/Body/sales_status" />';
		if(sales_status == "All"){
			$('.butt_name').html("全部");
			$('input[name=sales_status]').val("All");
		}else if(sales_status == "Onsale"){
			$('.butt_name').html("在售");
			$('input[name=sales_status]').val("Onsale");
		}else if(sales_status == "Soldout"){
			$('.butt_name').html("下架");
			$('input[name=sales_status]').val("Soldout");
		}else if(sales_status == "Stop"){
			$('.butt_name').html("停产");
			$('input[name=sales_status]').val("Stop");
		}else if(sales_status == "Stockout"){
			$('.butt .butt_name').html("缺货");
			$('input[name=sales_status]').val("Stockout");
		}
</script>
</xsl:template>

</xsl:stylesheet>