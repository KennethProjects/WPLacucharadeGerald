<?php
get_header();
?>

<section class="header">
<div class="ldivHome">
    <img class="img-fluid" src=" <?php bloginfo('template_directory'); ?>/assets/images/inicio1.png"/>
    <div class="lcuadroBanner">
        <p>
            Bienvenidos a 
        </p>
        <h1>
            La Cuchara De Gerald 
        </h1>

    </div>
</div>

	
</section>


<section><!-- Primera seccion corresponde a la seccion del menu -->
	<div class="container-fluid mx-0">
		<div class="row">
			<div>
				<img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/seccionMenu.png"">

					<div class="col-md-4">
						<div class="ubicacionH2">
							<h2>
								Menú
							</h2>
						</div> <!-- fin del div h2 -->
						<div>
							<img class="img-fluid logoMenu" src="<?php bloginfo('template_directory'); ?>/assets/images/inicio2.1.png"">
						</div>
					</div> <!-- final del div de 4 columnas-->

					<div class="col-md-6 textos">
						<p>
							La variedad es nuestro fuerte, es por esta razón que contamos
				 			con un amplio menú para todos los gustos. <br>
							Dale un vistazo y te sorprederas!!
						</p>
					</div> <!-- fin del div 6 columnas-->
				
			</div><!-- div img brackground -->
			
		</div><!-- div row -->
		
	</div><!-- div container -->
</section>
<!-- inicio de la seccion promociones-->
<section>
	<div class="container-fluid mx-0">
		<div class="row">
			<div>
				<img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/seccionPromociones.png"">

			<div class="col-md-4">
				<div class="ubicacionH2">
				<h2>
					Promociones
				</h2>
				</div>
				<div>
					<img class="img-fluid logoMenu" src="<?php bloginfo('template_directory'); ?>/assets/images/inicio3.1.png"">
				</div><!-- final del div img-->			
			</div> <!-- final del div de 4 columnas-->

			<div class="col-md-6 textos">
			<p> El platillo del dia a un precio irresistible para todos 
				nuestros comensales, a la calidad que te acostumbra <br>
				Gerald
			</p>
			</div>
		</div><!-- final del div del background img-->
			
		</div><!-- final del row-->
		
	</div> <!-- final del container-->
</section>

<section>
	<div class="container-fluid">
		<div class="row">
			<div>
				<img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/inicio4.png"">

				<div  class="col-md-4">
					<div>
						<h2 class="ubicacionH2">
							Ubicanos
						</h2>
					</div>
					<div>
						<img class="img-fluid logoMenu" src="<?php bloginfo('template_directory'); ?>/assets/images/location.png"">
						
					</div><!-- fin del div de img-->
				</div>

				<div class="col-md-6 imgUbicacion">
					<img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/inicio4.1.png"">
					<div class="cajaTexto">
						<h5>
							La 	Cuchara de Gerald cuenta con 2
							restaurantes ubicados en Esparza y en Puntarenas
							donde puedes visitarnos para compartir en familia
							o con amigos...
						</h5>
					</div><!-- div del h5-->
					</div>
				
			</div><!-- fin del div del background-->
			
		</div> <!-- fin del  row-->
		
	</div> <!-- fin del container -->
</section>

<section>
	<div class="container-fluid">
		<div class="row">
			<div>
				<img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/inicio5.png"">

			<div class="col-md-4 ubicacion">
				<div class="locationH2">
					<h3>
						Quienes Somos
					</h3>
				</div>
				<div>
					<img class="img-fluid logoMenu" src="<?php bloginfo('template_directory'); ?>/assets/images/gerald.png"">
				</div>
				<div class="imgUS">
					<p>
						GERALD
						<br>
						Gerente
					</p>
				</div>
			</div><!-- fin del div 4 columnas-->
			<div class="col-md-6  imgUbicacionUS">
				<img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/00.png"">
				<div class="cajaTexto">
						<h4>
							DESDE 2016
						</h4>
							<h5>
							<br>
							<br>
							"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation"
						</h5>
					</div><!-- div del h5-->

			</div>
		</div><!-- div del img background-->
			
		</div>
		
	</div>
	
</section>

<?php get_footer();
?>