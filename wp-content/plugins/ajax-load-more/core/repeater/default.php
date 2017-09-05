<article>
	<a href="#" class="image"><img src=<?php the_field('imagen_curso'); ?> alt="" /></a>
	<?php
		if ( is_single() ) :
			the_title( '<h3 class="titulo">', '</h3>' );
		else :
			the_title( sprintf( '<h3 class="titulo"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
		endif;
	?>
	<?php	if ( get_field('plataforma_curso') == "platzi" ) {
				$imagen_plataforma ="https://static.platzi.com/static/images/logos/platzi.3cae3cffd5ef.png"
			}
    ?>

	<div class="caracteristicas">
		<span class="costo"><a href="#" class="button">Pago</a></span>
		<span class="plataforma">
        	<a href="#" class="button">
            	<img src= <?php  echo $imagen_plataforma?> />   	
        	</a>
    	</span>
	</div>
</article>