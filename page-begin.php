<?php
get_header();
?>

<meta name="viewport" content="width=device-width, initial- scale=1,shrink-to-fit=no">

<section id="seccionBienvenida" class="parallax" >
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 text-center mb-5" id="location">
		        <p class="texts">
		            Welcome 
		        </p>
		        <h1>
		            La Cuchara De Gerald 
		        </h1>
	        </div>
	    </div>    
	 </div> <!-- fin del container-->
</section>


<section class="parallax" id="seccionMenu"><!-- corresponde a la seccion del menu -->
	<div class="container-fluid">
		<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 text-center  mt-5 pb-5">
							<h2>
								Menu
							</h2>
							<div id="imgSize">
							<img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/inicio2.1.png"">
							</div>
					</div> <!-- final del div de 4 columnas-->

					<div class="col-lg-6 col-md-6 col-sm-12 textos">
						<p class="texts">The variety is our strength.
							with an extensive menu for all tastes. <br>
							Take a look and you'll be surprised!
						</p>
					</div> <!-- fin del div 6 columnas-->
			
		</div><!-- div row -->
	</div><!-- div container -->
</section>

<section class="parallax" id="seccionPromos">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 text-center  mt-5 pb-5" >
				<h2>
					Promotions
				</h2>
				<div id="imgSize">
					<img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/promo.jpg"">
				</div>
			</div> <!-- final del div de 6 columnas-->

			<div class="col-lg-6 col-md-6 col-sm-12  textos">
			<p class="texts"> The dish of the day at an irresistible price for all our guests, at the quality that accustoms you <br>
				Gerald
			</p>
			</div>
			
		</div>
		
	</div>
</section>


<!-- ****************** SECCION UBICANOS ****************** -->
<section class="parallax" id="seccionUbicanos">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 text-center boxUbic">
				<h2>
					Locate
				</h2>
				<div class="imgSiz">
					<img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/ubic2.png""> 
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="UbicanosDiv"> 
					<div class="TextUbic">
						<h5>La Cuchara de Gerald has 2 restaurants located 
							in Esparza and Puntarenas where you can visit 
							us to share with your family
                            or with friends ...
						</h5>
					</div><!-- div del h5-->
				</div>
			</div>
		</div><!-- fin del row-->	
	</div> <!-- fin del container-->
</section>

<!-- ****************** SECCION NOSOTROS ****************** -->
<section class="parallax" id="seccionNosotros">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 text-center boxUbic">
				<h2>
					About Us
				</h2>
				<div class="size" id="imgSize">
					<img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/chef.jpg">
				</div>
				
					<p>
						GERALD
						<br>
						Cheff
					</p>
			
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12" >
				<div class="history">
					<h4>
						Since 2015
					</h4>
					<h5>
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation"
						<br>
						<br>

						"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation"

					</h5>
				</div>
				<!-- aca va el texto del nosotros-->
			</div>
			
		</div>
		
	</div>
</section>

<?php get_footer();
?>