<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after 
 * @package WordPress
 * @subpackage Manorhouseporto
 * @since Manorhouseporto 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			
	</footer><!-- #colophon -->
    
    <div id="site-generator">
    	<div class="contact">
        	<p>Contact: Alexandre Melo - tel : +351 96 3514401 - Speaks Portuguese, English and French</p>
            <p>email : manorhouseporto@gmail.com</p>
        </div>
	</div>
            
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>