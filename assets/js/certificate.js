$(document).ready(function(){
	$("input[name='price']").click(function(){
		$(".form-section .right .price, .form-section .right .price_active").attr("class","price");
		$(this).parent().next().find(".price").attr("class","price_active");
		$(".form-bottom .price").html(this.value + " руб.");
	});
});
