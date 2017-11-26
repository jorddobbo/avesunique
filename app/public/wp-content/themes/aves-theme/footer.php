<footer class="footer">
  <div class="container">
  	<div class="footer__top">
	    <?php dynamic_sidebar('sidebar-footer'); ?>

	    <div class="footer__links">
	    	  <nav class="nav-footer">
			    <?php
			    if (has_nav_menu('secondary_navigation')) :
			      wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'nav']);
			    endif;
			    ?>
			  </nav>
	    </div>

	    <div class="footer__newsletter">
	    	<h3>Join our newsletter</h3>
	    	<?php echo do_shortcode('[contact-form-7 id="272" title="Footer"]'); ?>
	    	<p>Every month. Full of offers, info and fun.</p>
	    </div>

	    <div class="footer__social">
	    	<h3>Social</h3>
	    	<a href="/basket"><span class="icon--circle mdi mdi-facebook-box"></span></a>
	    	<a href="/basket"><span class="icon--circle mdi mdi-twitter"></span></a>
	    	<a href="/basket"><span class="icon--circle mdi mdi-instagram"></span></a>
	    </div>
	</div>
	<div class="footer__bottom">
		<div class="footer__left">
			<p>© Ave's Unique 2017</p>
		</div>
		<div class="footer__right">
			<p>
				<a href="/privacy-policy">Privacy Policy</a>
				<a href="/terms-conditions">T&C's</a>
				<img class="card-icon" src="<?= get_template_directory_uri(); ?>/assets/img/footer/paypal.svg">
				<img class="card-icon" src="<?= get_template_directory_uri(); ?>/assets/img/footer/mastercard.svg">
			</p>
		</div>
	</div>
  </div>
</footer>

<?php wp_footer(); ?>