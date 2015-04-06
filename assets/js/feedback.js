var tab = "players";
$(document).ready(function(){
	$("a.tabs-link").click(function(){
		if(this.id != tab) {
			$(".tabs-link").attr("class","tabs-link");
			$(".middle-menu .players").attr("class","players");
			$(".middle-menu .media").attr("class","media");
			
			this.id=="players"?
				$(".players").attr("class","players active"):
				$(".media").attr("class","media active");
				
			$(this).attr("class","tabs-link active");
			tab = this.id;
			setTimeout(function(){
				$(".tab-players, .tab-media").hide();
				$(".tab-"+tab).show();
			},200);
		}
	});
	$(window).scroll(function(){
		if($(window).scrollTop() > ($("header.page-cover").height()-60)) {
			$(".middle-menu").attr("class","middle-menu sticky-menu");
			$("section.section").css("margin-top","60px");
		} else {
			$(".middle-menu").attr("class","middle-menu");
			$("section.section").css("margin-top","0");
		}
	});
});
