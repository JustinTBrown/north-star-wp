$(function() {
	$(".accordion").on("click", "dd:not(.active)", function (event) {
		$("dd.active").removeClass('active').find(".content").slideUp("fast");
		$(this).addClass('active').find(".content").slideToggle("fast");
	});
});
console.log("hello??");
console.log("hello again??");
