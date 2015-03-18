var tab = "players";
$(document).ready(function(){
	$("input[name='price']").click(function(){
		$(".form-section .right .price, .form-section .right .price_active").attr("class","price");
		$(this).parent().next().find(".price").attr("class","price_active");
		$(".form-bottom .price").html(this.value + " руб.");
	});
	
	$("a.tabs-link").click(function(){
		if(this.id != tab) {
			$(".tab-players, .tab-media").hide();
			$(".tabs-link").attr("class","tabs-link");
			$(".middle-menu .players").attr("class","players");
			$(".middle-menu .media").attr("class","media");
			
			this.id=="players"?
				$(".players").attr("class","players active"):
				$(".media").attr("class","media active");
				
			$(this).attr("class","tabs-link active");
			$(".tab-"+this.id).fadeIn();
			tab = this.id;
		}
	});
});