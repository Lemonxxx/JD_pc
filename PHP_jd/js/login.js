$(function(){
	$("#t1").click(function(){
		$("#flag").animate({"right":210},50,function(){

			$(".zr").hide();
			$(".zl").show();


		})

		
		

	});
	$("#t2").click(function(){
		$("#flag").animate({"right":25},50,function(){

			$(".zr").show();
			$(".zl").hide();
		})


		
	})


});