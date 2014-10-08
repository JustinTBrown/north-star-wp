// $(function() {
// 	$(".accordion").on("click", "dd:not(.active)", function (event) {
// 		$("dd.active").removeClass('active').find(".content").slideUp("fast");
// 		$(this).addClass('active').find(".content").slideToggle("fast");
// 	});
// });

$(".accordion").on("click", "dd", function (event) {
        if($(this).hasClass('active')){
            $("dd.active").removeClass('active').find(".content").slideUp("fast");    
        }
        else {
            $("dd.active").removeClass('active').find(".content").slideUp("fast");
            $(this).addClass('active').find(".content").slideToggle("fast");    
        }
});
// console.log("hello??");
// console.log("hello again??");
