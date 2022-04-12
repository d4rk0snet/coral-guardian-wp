
	<footer>
		<div class="container footer-container">
			<?php if ( dynamic_sidebar('footer-desc') ) : else : ?><?php endif; ?>
			<?php if ( dynamic_sidebar('footer-menus') ) : else : ?><?php endif; ?>
			<div class="footer-col">
				<?php if(ICL_LANGUAGE_CODE=='fr'): ?>
					<div class="widget-title">Suivez-nous</div>
				<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
					<div class="widget-title">Follow us</div>	
				<?php endif;?>
				<?php
					if( have_rows('reseaux_sociaux', 'option') ):
					while ( have_rows('reseaux_sociaux', 'option') ) : the_row();
				?>
					<a class="footer-social" href="<?php the_sub_field('url_du_reseau', 'option'); ?>" target="_blank">
						<i class="icon icon--<?php the_sub_field('reseau', 'option'); ?>"></i>
					</a>
				<?php
					endwhile;
					endif;
				?>
				<div class="footer-newsletter">
					<?php if(ICL_LANGUAGE_CODE=='fr'): ?>
						<div class="widget-title">Recevoir la newsletter</div>
						<?php echo do_shortcode("[sibwp_form id=1]"); ?>
					<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
						<div class="widget-title">Receive the newsletter</div>
						<?php echo do_shortcode("[sibwp_form id=2]"); ?>
					<?php endif;?>
				</div>
			</div><!-- End .footer-col -->
		</div><!-- End .footer-container -->
		
		<div class="footer-bottom">
			&copy; <a href="<?php bloginfo(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> <?php echo date('Y'); ?>  -
			<a href="<?php bloginfo(); ?>/mentions-legales-et-conditions-generales-dutilisation/">Mentions légales</a>
		</div>
	</footer>

	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Poppins:wght@600&display=swap" rel="stylesheet">
	<script async="async" src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
	<script defer src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
	<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
	<?php
		wp_footer();
	?>

</body>
</html>