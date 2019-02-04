<?php get_header();?>

<meta name="viewport" content="width=device-width, initial- scale=1,shrink-to-fit=no">

<div class="container-fluid mx-0">
	<div class="row">
		
		<div class="col-md-12" >
           <div class="kcontenedor">
           	
           	<img src="<?php bloginfo('template_directory'); ?>/assets/images/food.png" class="img-fluid max-width" alt="100%x250"/>
			
            <div class="kcentrado text-center">Deseas contactarnos?</div>

           </div>
			
		</div>
		
	</div>
</div>



<div class="container-fluid mx-0">
	<div class="row">
		<div class="col-md-12">
			
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/header.png" class="img-fluid"/>
            <div class="ktexto-encima">Contactenos</div>

            <div class="kcontactup">
            	<img src="<?php bloginfo('template_directory'); ?>/assets/images/contact.png" class="img-fluid" alt="100%x250"/>
            </div>

		</div>
	</div>
</div>


<div class="container-fluid mx-0" id="margen">
	<div class="row">
		<div class="col-md-12">
			<div class="ktexto-centro">Formulario</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4">
			
            <form action="/my-handling-form-page" method="post">
               <div>
                  <label for="name">Nombre:</label>
                   <input type="text" id="name" value="*Campo obligatorio" />
               </div>
               <div>
                  <label for="mail">E-mail:</label>
                  <input type="email" id="mail" value="*Campo obligatorio"/>
               </div>
               <div>
                  <label for="phone">Telefono:</label>
                  <input type="email" id="mail" value="*Campo obligatorio"/>
               </div>
               <div>
                   <label for="msg">Mensaje:</label>
                   <textarea id="msg" >*Campo obligatorio</textarea>
               </div>
               <div class="kbutton">
                    <button type="submit">Enviar</button>
                </div>
            </form>

		</div>
		<div class="col-md-1"></div>
		<div class="col-md-4">
			<img src="<?php bloginfo('template_directory'); ?>/assets/images/informacion.png" class="img-fluid"/>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>

<?php get_footer();?>