<?php
/*
Designaholic Templates
Footer
*/
?>

<!-- Footer -->
<div id="footer" class="fondo_azul_oscuro bloque_horizontal">
	<div class="container spacer">
		<div class="row">
			<div class="ten columns">
				<h3>Desde 2009, Designaholic.mx difunde el trabajo de diseñadores mexicanos e internacionales, promueve crítica y opinión sobre varias disciplinas de Diseño, y cubre los eventos de Diseño más importantes a nivel internacional.</h3>
			</div>
		</div>
		<div class="row">
			<div class="four columns">
				<h4>Suscríbete a nuestro newsletter</h4>
				<form action="" class="forma_negativo">
					<input type="text" placeholder="Tu Nombre">
					<input type="text" placeholder="Tu Correo">
					<input type="submit" value="Suscríbete">
				</form>
			</div>
			<div class="four columns">
				<h4>Síguenos en redes</h4>
				<ul class="follow_links">
					<li class="follow_twitter"><a href="#">Tw</a></li><li class="follow_google">
						<a href="#">G+</a></li><li class="follow_facebook">
						<a href="#">Fb</a></li><li class="follow_linkedin">
						<a href="#">Li</a></li><li class="follow_rss">
						<a href="#">Rss</a></li><li class="follow_pinterest">
						<a href="#">Pi</a>
					</li>
				</ul>
			</div>
			<div class="three columns offset-by-one">
				<h4>Ligas de interés</h4>
				<ul>
					<li><a href="contacto.php">Contacto</a></li>
					<li><a href="#">Patrocinadores</a></li>
					<li><a href="#">Aviso de Privacidad</a></li>
					<li><a href="#">Mapa de Sitio</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
<script src="scripts/scripts.js"></script>
<script src="scripts/cbpHorizontalSlideOutMenu.min.js"></script>
<script>
	var menu = new cbpHorizontalSlideOutMenu( document.getElementById( 'cbp-hsmenu-wrapper' ) );
</script>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>

<script type="text/javascript">

// Slick Slider
$('.slider-for').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: true	,
	fade: true,
	asNavFor: '.slider-nav',
});


$('.slider-nav').slick({
	variableWidth: true,
	arrows: false,
	slidesToShow: 5,
	slidesToScroll: 1,
	asNavFor: '.slider-for',
	dots: false,
	centerMode: true,
	focusOnSelect: true
});

// Slick Image Counter
var n = $( ".img_cont" ).length;
$( ".counter span" ).append( $( "<b></b>" ) );
$( ".counter span b" ).text( "de " + n );

// Toggle Search Box
$( "#search" ).click(function(){
	$( ".searchbox" ).toggleClass( "show_search" );
});

// Trigger Menu
$(function() {
	var numberItems = $( "#list li" ).length;
	var heightItems = $( "#list li" ).outerHeight();
	var totalSize = numberItems * heightItems

	$( "#list" ).children().wrapAll('<div class="wrapper"></div>');
	$( "#burger" ).on("click", function(){
		$("header").toggleClass( "show_menu" );
		if ($(this).hasClass( "expand" )) {
			$( "#list" ).animate({ height: "0px" }, 300);
			$(this).toggleClass( "expand reset" );
		}
		else {
			$( "#list" ).animate({ height: totalSize }, 300 );
			$(this).toggleClass( "expand reset" );
		}
	});
})

// If menu is open: Hide height above 750px
function checkWidth() {
	if ($(window).width() < 750) {
		$('#list').removeClass('hide_list');
	} else {
		$('#list').addClass('hide_list');
	}
}
$(window).resize(checkWidth);

</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='https://www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>
