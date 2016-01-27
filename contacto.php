<?php
/*
Designaholic Templates
Contacto
*/
?>

<?php include 'includes/header.php' ?>

	<div class="pagina acerca">
		<div class="container spacer">
			<h2>Contacto</h2>
			<div class="row">

				<div class="six columns">
					<h3>
						Comparte con nosotros tus comentarios, sugerencias, y aquellos proyectos que te gustaría ver publicados en Designaholic.
					</h3>

					<!-- Ligas de Interés -->
					<ul class="ligas_interes">
						<li>
							<div style="background-image: url('img/placeholders/row_img1.jpg')">
							</div>
							<p><a href="">Envía tu propio artículo al equipo de redacción</a></p>
						</li>
						<li>
							<div style="background-image: url('img/placeholders/row_img2.jpg')">
							</div>
							<p><a href="">Designaholic en tu bandeja de entrada: suscríbete</a></p>
						</li>
						<li>
							<div style="background-image: url('img/placeholders/row_img3.jpg')">
							</div>
							<p><a href="">Conoce las opciones para ser patrocinador</a></p>
						</li>
					</ul>

				</div>

				<div class="six columns">

					<form action="">
						<input type="text" placeholder="Tu Nombre">
						<input type="text" placeholder="Tu Correo">
						<input type="text" placeholder="Asunto">
						<textarea name="" id="" placeholder="Mensaje"></textarea>
						<input type="submit" value="Suscríbete">
					</form>

				</div>

			</div>
			<!-- Termina row conteniendo las dos columnas del cuerpo -->

			<?php include 'includes/patrocinadores.php' ?>

		</div>
	</div>

<?php include 'includes/footer.php' ?>
