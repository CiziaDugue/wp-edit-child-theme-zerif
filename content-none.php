<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @package zerif-lite
 */
?>

<section class="no-results not-found">

	<header class="page-header">
		<h1 class="page-title"><?php _e( 'Aucun résultat ne correspond', 'zerif-lite' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php /* translators: Add new post link */ printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'zerif-lite' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Désolé mais nous ne trouvons aucun article correspondant à votre recherche. Veuillez essayer d&rsquo;autres mots-clés.', 'zerif-lite' ); ?></p>

			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'Nous ne trouvons ce que vous cherchez. Vous pouvez essayer dautres mots-clés.', 'zerif-lite' ); ?></p>

			<?php get_search_form(); ?>

		<?php endif; ?>

	</div><!-- .page-content -->

</section><!-- .no-results -->
