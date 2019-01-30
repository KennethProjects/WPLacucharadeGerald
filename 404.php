<?php get_header();?>

<div class="container-fluid" id="colorfondo">
	<div class="row" >
		<div class="col-2">
			
		</div>
		<div class="col-4" >
			<div id="tituloerror">ERROR 404</div>
			<div id="textoerror">No hemos encontrado</div>
			<div id="textoerror">la pagina que buscas.</div>

			<button id="botonerror" type="button" class="btn btn-danger">Regresar</button>
		</div>
		<div class="col-4">
			<img src=""><img src="<?php bloginfo('template_directory'); ?>/assets/images/img404.png" class="img-fluid max-width" alt="100%x250"/>
	    </div>
	    <div class="col-2">
	    	
	    </div>
</div>

<?php get_footer();?>