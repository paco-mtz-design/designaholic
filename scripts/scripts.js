


var clientHeight = document.getElementById('animacion_contenedor').clientHeight;
var clientWidth = document.getElementById('animacion_contenedor').clientWidth;
var offsetHeight = document.getElementById('animacion_contenedor').offsetHeight;

var mask_container = document.getElementById('animacion_contenedor');
var mask = document.getElementById('anim_imagen');

var mask_init_top = (clientHeight/100*20);
var mask_init_right = clientWidth - (clientWidth/100*20);
var mask_init_bottom = clientHeight - (clientHeight/100*20);
var mask_init_left = (clientWidth/100*20);

// clip: rect(20px, 600px, 380px, 100px)

window.onload = function add_size(){
		document.getElementById("anim_imagen").setAttribute("style","width: "+ clientWidth +"px;height: "+ clientHeight +"px;clip: rect("+ mask_init_top +"px, "+ mask_init_right +"px, "+ mask_init_bottom +"px, "+ mask_init_left +"px)");

		console.log('Client H: ' + clientHeight);
		console.log('Client W: ' + clientWidth);
		console.log('Offset H: ' + offsetHeight);

		console.log('Init top: ' + mask_init_top);
		console.log('Init right: ' + mask_init_right);
		console.log('Init bottom: ' + mask_init_bottom);
		console.log('Init left: ' + mask_init_left);
}

mask_container.onmouseover = function open_mask(){
		document.getElementById("anim_imagen").setAttribute("style","width: "+ clientWidth +"px;height: "+ clientHeight +"px;clip: rect(0, "+ clientWidth +"px, "+ clientHeight +"px, 0)");
}

mask_container.onmouseout = function recover_mask(){
		document.getElementById("anim_imagen").setAttribute("style","width: "+ clientWidth +"px;height: "+ clientHeight +"px;clip: rect("+ mask_init_top +"px, "+ mask_init_right +"px, "+ mask_init_bottom +"px, "+ mask_init_left +"px)");
}

// Toggle Menu
$("#burger").click(function(){
	$("header").toggleClass("show_menu");
});

// Toggle Search Box
$("#search").click(function(){
	$(".searchbox").toggleClass("show_search");
});

// $(function(){
// 	$('#first').children().wrapAll('<div class="wrapper"></div>');
// 	var expandedHeight = $('.wrapper').height();
// 	var collapsedHeight = $('#first').height();
// 	//$('p').text(innerHeight);
// 	$('button').on("click", function(){
// 		if ($(this).hasClass("expand")) {
// 			$("#first").animate({
// 				height: expandedHeight
// 			}, 500, function(){
// 				$('.expand').toggleClass("expand reset").text("reset");
// 			});
// 		}
// 		else {
// 			$("#first").animate({height: 0}, 500 );
// 			$(this).toggleClass("expand reset").text("expand");
// 		}
// 	});
// });

$(function(){
	$('#list').children().wrapAll('<div class="wrapper"></div>');
	var expandedHeight = $('.wrapper').height();
	var collapsedHeight = $('#list').height();
	//$('p').text(innerHeight);
	$('#burger').on("click", function(){
		if ($(this).hasClass("expand")) {
			$("#list").animate({
				height: 0
			}, 200, function(){
				$('.expand').toggleClass("expand reset");
			});
		}
		else {
			$("#list").animate({height: expandedHeight}, 200 );
			$(this).toggleClass("expand reset");
		}
	});
});

// var divh = document.getElementById('list').offsetHeight;
// $("#list").css('height', '100px');
// $("#burger").click(function() {
// 	$("#list").animate({
// 			height: divh
// 	}, 500);
// });
//
// //  Menu
// $('header #list').height() - 230;
// $('#burger').click(function() {
// 	$('header').toggleClass( "hide_options show_options" );
// });
// $(window).resize(function() {  $('header.show_options #list').height() - 230;  });
// $(window).trigger('resize');
