$(function(){
	$("input").val("");
	$("textarea").val("");
	$("input").prop("checked",false);
	$("select").each(function(i){
		$("select").get(i).selectedIndex=0;
	})
	var flag1=true;
	var flag2=true;
	var flag3=true;
	if($(".cgtbody2 tr").length==0){
		$(".norecord2").show();
	}else{
		$(".norecord2").hide();
	}
	$(".combin-see").click(function(){
		$("#cgmodview").show();
	})
	/*---------------组合商品列表全选按钮-----------------*/
	$(".choice-all2").on("click",function(){
		if(flag2){
			$(".checkboxChoice2").prop("checked",true);
			flag2=false;
		}else{
			$(".checkboxChoice2").prop("checked",false);
			flag2=true;
		}
	})
	/*---------------组合商品列表点击删除按钮-----------------*/
	$(".cgdelbtn2").on("click",function(){
		if($('.checkboxChoice2').is(':checked')){
			$(".modal-cgmodeldel1").hide();
			$(".modal-cgmodeldel2").show();
			$('.cgsuredelbtn').on("click",function(){
				$(".glonetr2").find(".checkboxChoice2").each(function(){
					if($(this).is(':checked')){
						$(this).parent().parent().remove();
						$(".modal-cgmodeldel2").hide();
						$(".cgthcom1").each(function(i){
							$(this).html(i+1);
						})
						if($(".cgtbody2 tr").length==0){
							$(".norecord2").show();
						}else{
							$(".norecord2").hide();
						}
					}
				})
			})
		}else{
			$(".modal-cgmodeldel1").show();
			$(".modal-cgmodeldel2").hide();
		}
	})
	/*---------------组合商品列表点击修改分类-----------------*/
	$(".cgmodclass").on("click",function(){
		if($('.checkboxChoice2').is(':checked')){
			$(".modal-cgmodeldel1").hide();
			$('.modal-cgmodclass2').show();
			$('.cgsureclassbtn').on("click",function(){
				$(".glonetr2").find(".checkboxChoice2").each(function(){
					if($(this).is(':checked')){
						$(this).parent().parent().find($(".cgtdclass")).val($(".cgmclassselect").find("option:selected").text());
						$('.modal-cgmodclass2').hide();
					}
				})
			})
		}else{
			$(".modal-cgmodeldel1").show();
			$('.modal-cgmodclass2').hide();
		}
	})	
	/*---------------组合商品列表点击修改品牌-----------------*/
	$(".cgmdbrand").on("click",function(){
		if($('.checkboxChoice2').is(':checked')){
			$('.modal-cgmodeldel1').hide();
			$('.modal-cgmodbrandh2').show();
			$('.cgsurebrandbtn').on("click",function(){
				$(".glonetr2").find(".checkboxChoice2").each(function(){
					if($(this).is(':checked')){
						$(this).parent().parent().find($(".cgtdbrand")).val($(".cgmbrandselect").find("option:selected").text());
						$('.modal-cgmodbrandh2').hide();
					}
				})
			})
		}else{
			$('.modal-cgmodbrandh2').hide();
			$('.modal-cgmodeldel1').show();
		}
	})
	/*---------组合商品列表点击批量操作的toggle效果-------*/
	/*$('body:not($(".cgbatchopbtn"))').on("click",function(){
		$(".mydropdown-menu").hide();
		flag3=true;
	})*/
	$(".cgbatchopbtn").on("click",function(){
		if(flag3){
			$(".mydropdown-menu").show();
			flag3=false;
		}else{
			$(".mydropdown-menu").hide();
			flag3=true;
		}
	})
	/*---------------------组合商品列表清空按钮---------*/
	$(".glclearbtn").on("click",function(){
		$(".cggoodsname").val("");
		$(".cggoodsclassify").get(0).selectedIndex=0;
	})
})