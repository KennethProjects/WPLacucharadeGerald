<?php
    get_header();
?>

<?php
     if(have_posts()):
         while(have_posts()) : the_post();
?>
              <h2><?php the_title(); ?></h3>
              <p><?php the_content(); ?></p>
<?php    endwhile;
     else :
         echo "<p>no hay contenido que mostrar</p>";
     endif;
?>

<?php
    get_footer();
?>