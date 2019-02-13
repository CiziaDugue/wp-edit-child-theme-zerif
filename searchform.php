<?php
/**
 * Template for displaying search forms in Zerif Lite Child
 *
 * @package WordPress
 * @subpackage Zerif Lite Child
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="s" class="assistive-text"></label>
		<input type="text" class="search-field" name="s" id="s" placeholder="<?php esc_attr_e( 'Rechercher', 'zerif-lite' ); ?>" />
		<button type="submit" class="search-submit" name="submit" id="searchsubmit" value=""><img src="<?php echo get_template_directory_uri(); ?>/images/search_icon.png" alt="search-icon"></button>
	</form>
