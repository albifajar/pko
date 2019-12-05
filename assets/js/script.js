$(window).on("load", function(){
	$(".container .card").each(function(i){
		setTimeout(function(){
			$(".container .card").eq(i).addClass("muncul");

		},400 *(i+1));
	});
});