<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TravelDude
 */

?>
<div class="footer">
	<div class="valign-wrapper">
		<div class="valign">
			<div class="container-fluid">
				<div class="logo-footer">
					<img src="<?php the_field('immagine_hermes_footer');?>" width="70px" height="45px">
				</div>
				<div class="menu-footer">
					<ul>
						<li><a href="#">Cookie Policy</a></li>
						<li><a href="#">Powered by <span>WebJ</span></a></li>
					</ul>
				</div>

			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>

</body>
</html>
