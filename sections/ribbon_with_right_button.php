<?php
/**
 * Ribbon with right button section
 *
 * @package zerif-lite
 */

$zerif_ribbonright_text = get_theme_mod( 'zerif_ribbonright_text' );

$zerif_ribbonright_buttonlabel = get_theme_mod( 'zerif_ribbonright_buttonlabel' );

$zerif_ribbonright_buttonlink = get_theme_mod( 'zerif_ribbonright_buttonlink' );

/* For new users, add default values for the Ribbon section controls */
if ( ! zerif_check_if_old_version_of_theme() && current_user_can( 'edit_theme_options' ) ) {
	$zerif_ribbonright_text        = get_theme_mod( 'zerif_ribbonright_text', __( 'Change this text in RightButton Ribbon', 'zerif-lite' ) );
	$zerif_ribbonright_buttonlabel = get_theme_mod( 'zerif_ribbonright_buttonlabel', __( 'Get in touch', 'zerif-lite' ) );
	$zerif_ribbonright_buttonlink  = get_theme_mod( 'zerif_ribbonright_buttonlink', esc_url( admin_url( 'customize.php?autofocus&#91;control&#93;=zerif_ribbonright_buttonlink' ) ) );
}

if ( ! empty( $zerif_ribbonright_text ) ) {

	if ( ! empty( $zerif_ribbonright_buttonlabel ) && ! empty( $zerif_ribbonright_buttonlink ) ) {

		echo '<section class="purchase-now" id="ribbon_right">';

	} else {

		echo '<section class="purchase-now ribbon-without-button" id="ribbon_right">';

	}

	echo '<div class="container">';

	echo '<div class="row">';

	echo '<div class="col-md-9" data-scrollreveal="enter left after 0s over 1s">';

	echo '<h3 class="white-text">';

	echo wp_kses_post( $zerif_ribbonright_text );

	echo '</h3>';

	echo '</div>';

	if ( ! empty( $zerif_ribbonright_buttonlabel ) && ! empty( $zerif_ribbonright_buttonlink ) ) {

		echo '<div class="col-md-3" data-scrollreveal="enter right after 0s over 1s">';

		echo '<a href="' . esc_url( $zerif_ribbonright_buttonlink ) . '" class="btn btn-primary custom-button red-btn">' . wp_kses_post( $zerif_ribbonright_buttonlabel ) . '</a>';

		echo '</div>';

	} elseif ( is_customize_preview() ) {

		echo '<div class="col-md-3" data-scrollreveal="enter right after 0s over 1s">';

		echo '<a href="" class="btn btn-primary custom-button red-btn zerif_hidden_if_not_customizer"></a>';

		echo '</div>';

	}

	echo '</div>';

	echo '</div>';

	echo '</section>';

} elseif ( is_customize_preview() ) {

	$zerif_ribbonright_buttonlabel = get_theme_mod( 'zerif_ribbonright_buttonlabel' );

	$zerif_ribbonright_buttonlink = get_theme_mod( 'zerif_ribbonright_buttonlink' );

	if ( ! empty( $zerif_ribbonright_buttonlabel ) && ! empty( $zerif_ribbonright_buttonlink ) ) {

		echo '<section class="purchase-now zerif_hidden_if_not_customizer" id="ribbon_right">';

	} else {

		echo '<section class="purchase-now ribbon-without-button zerif_hidden_if_not_customizer" id="ribbon_right">';

	}

	echo '<div class="container">';

		echo '<div class="row">';

			echo '<div class="col-md-9" data-scrollreveal="enter left after 0s over 1s">';

				echo '<h3 class="white-text"></h3>';

			echo '</div>';

	if ( ! empty( $zerif_ribbonright_buttonlabel ) && ! empty( $zerif_ribbonright_buttonlink ) ) {


		echo '<div class="col-md-3" data-scrollreveal="enter right after 0s over 1s">';


		echo '<a href="' . esc_url( $zerif_ribbonright_buttonlink ) . '" class="btn btn-primary custom-button red-btn">' . wp_kses_post( $zerif_ribbonright_buttonlabel ) . '</a>';


		echo '</div>';


	} elseif ( is_customize_preview() ) {

		echo '<div class="col-md-3" data-scrollreveal="enter right after 0s over 1s">';


		echo '<a href="" class="btn btn-primary custom-button red-btn zerif_hidden_if_not_customizer"></a>';


		echo '</div>';

	}


	echo '</div>';


	echo '</div>';


	echo '</section>';

} else {
	
	$footer_sections = 0;

		if ( current_user_can( 'edit_theme_options' ) ) {
			$zerif_address      = get_theme_mod( 'zerif_address', sprintf( '<a href="%1$s">%2$s</a>', esc_url( admin_url( 'customize.php?autofocus&#91;control&#93;=zerif_address' ) ), __( 'Company address', 'zerif-lite' ) ) );
			$zerif_address_icon = get_theme_mod( 'zerif_address_icon', get_template_directory_uri() . '/images/map25-redish.png' );
		} else {
			$zerif_address      = get_theme_mod( 'zerif_address' );
			$zerif_address_icon = get_theme_mod( 'zerif_address_icon' );
		}

		if ( current_user_can( 'edit_theme_options' ) ) {
			$zerif_email      = get_theme_mod( 'zerif_email', sprintf( '<a href="%1$s">%2$s</a>', esc_url( admin_url( 'customize.php?autofocus&#91;control&#93;=zerif_email' ) ), __( 'youremail@site.com', 'zerif-lite' ) ) );
			$zerif_email_icon = get_theme_mod( 'zerif_email_icon', get_template_directory_uri() . '/images/envelope4-green.png' );
		} else {
			$zerif_email      = get_theme_mod( 'zerif_email' );
			$zerif_email_icon = get_theme_mod( 'zerif_email_icon' );
		}

		if ( current_user_can( 'edit_theme_options' ) ) {
			$zerif_phone      = get_theme_mod( 'zerif_phone', sprintf( '<a href="%1$s">%2$s</a>', esc_url( admin_url( 'customize.php?autofocus&#91;control&#93;=zerif_phone' ) ), __( '0 332 548 954', 'zerif-lite' ) ) );
			$zerif_phone_icon = get_theme_mod( 'zerif_phone_icon', get_template_directory_uri() . '/images/telephone65-blue.png' );
		} else {
			$zerif_phone      = get_theme_mod( 'zerif_phone' );
			$zerif_phone_icon = get_theme_mod( 'zerif_phone_icon' );
		}

			$zerif_socials_facebook  = get_theme_mod( 'zerif_socials_facebook' );
			$zerif_socials_twitter   = get_theme_mod( 'zerif_socials_twitter' );
			$zerif_socials_linkedin  = get_theme_mod( 'zerif_socials_linkedin' );
			$zerif_socials_behance   = get_theme_mod( 'zerif_socials_behance' );
			$zerif_socials_dribbble  = get_theme_mod( 'zerif_socials_dribbble' );
			$zerif_socials_instagram = get_theme_mod( 'zerif_socials_instagram' );

			$zerif_accessibility = get_theme_mod( 'zerif_accessibility' );
			$zerif_copyright     = get_theme_mod( 'zerif_copyright' );

			$zerif_powered_by = true;

		if ( ! empty( $zerif_address ) || ! empty( $zerif_address_icon ) ) {
			$footer_sections ++;
		}

		if ( ! empty( $zerif_email ) || ! empty( $zerif_email_icon ) ) {
			$footer_sections ++;
		}

		if ( ! empty( $zerif_phone ) || ! empty( $zerif_phone_icon ) ) {
			$footer_sections ++;
		}
		if ( ! empty( $zerif_socials_facebook ) || ! empty( $zerif_socials_twitter ) || ! empty( $zerif_socials_linkedin ) || ! empty( $zerif_socials_behance ) || ! empty( $zerif_socials_dribbble ) ||
			! empty( $zerif_copyright ) || ! empty( $zerif_powered_by ) || ! empty( $zerif_socials_instagram ) ) {
			$footer_sections ++;
		}

		if ( $footer_sections == 1 ) {
			$footer_class = 'col-md-12';
		} elseif ( $footer_sections == 2 ) {
			$footer_class = 'col-md-6';
		} elseif ( $footer_sections == 3 ) {
			$footer_class = 'col-md-4';
		} elseif ( $footer_sections == 4 ) {
			$footer_class = 'col-md-4';
		} else {
			$footer_class = 'col-md-2';
		}
	
		echo '<section class="purchase-now ribbon-without-button" id="ribbon_right">';
	
		echo '<div class="container">';

		echo '<div class="row">';

		echo '<div class="col-md-9" data-scrollreveal="enter left after 0s over 1s">';

		echo '<h3 class="white-text">Contact';

		/*echo wp_kses_post( $zerif_ribbonright_text );*/

		echo '</h3>';

		echo '</div>';

		if ( ! empty( $footer_class ) ) {

			/* COMPANY ADDRESS */
			if ( ! empty( $zerif_address_icon ) || ! empty( $zerif_address ) ) {
				echo '<div class="' . $footer_class . ' company-details">';

				if ( ! empty( $zerif_address_icon ) ) {
					echo '<div class="icon-top red-text">';
					if ( ! empty( $zerif_address ) ) {
						echo '<a target="_blank" href="https://www.google.com.sg/maps/place/' . wp_strip_all_tags( $zerif_address ) . '">';
					}
					echo '<img src="' . esc_url( $zerif_address_icon ) . '" alt="" />';
					if ( ! empty( $zerif_address ) ) {
						echo '</a>';
					}
					echo '</div>';
				}

				if ( ! empty( $zerif_address ) ) {
					echo '<div class="zerif-footer-address">';
					echo wp_kses_post( $zerif_address );
					echo '</div>';
				} elseif ( is_customize_preview() ) {
					echo '<div class="zerif-footer-address zerif_hidden_if_not_customizer"></div>';
				}

				echo '</div>';
			}

			/* COMPANY EMAIL */
			if ( ! empty( $zerif_email_icon ) || ! empty( $zerif_email ) ) {
				echo '<div class="' . $footer_class . ' company-details">';

				if ( ! empty( $zerif_email_icon ) ) {
					echo '<div class="icon-top green-text">';
					if ( ! empty( $zerif_email ) ) {
						echo '<a href="mailto:' . wp_strip_all_tags( $zerif_email ) . '">';
					}
					echo '<img src="' . esc_url( $zerif_email_icon ) . '" alt="" />';
					if ( ! empty( $zerif_email ) ) {
						echo '</a>';
					}
					echo '</div>';
				}
				if ( ! empty( $zerif_email ) ) {
					echo '<div class="zerif-footer-email">';
					echo wp_kses_post( $zerif_email );
					echo '</div>';
				} elseif ( is_customize_preview() ) {
					echo '<div class="zerif-footer-email zerif_hidden_if_not_customizer"></div>';
				}
				echo '</div>';
			}

			/* COMPANY PHONE NUMBER */
			if ( ! empty( $zerif_phone_icon ) || ! empty( $zerif_phone ) ) {
				echo '<div class="' . $footer_class . ' company-details">';
				if ( ! empty( $zerif_phone_icon ) ) {
					echo '<div class="icon-top blue-text">';
					if ( ! empty( $zerif_phone ) ) {
						echo '<a href="tel: ' . wp_strip_all_tags( $zerif_phone ) . '">';
					}
					echo '<img src="' . esc_url( $zerif_phone_icon ) . '" alt="" />';
					if ( ! empty( $zerif_phone ) ) {
						echo '</a>';
					}
					echo '</div>';
				}
				if ( ! empty( $zerif_phone ) ) {
					echo '<div class="zerif-footer-phone">';
					echo wp_kses_post( $zerif_phone );
					echo '</div>';
				} elseif ( is_customize_preview() ) {
					echo '<div class="zerif-footer-phone zerif_hidden_if_not_customizer"></div>';
				}
				echo '</div>';
			}
		}
	
		echo '</div>';

		echo '</div>';

		echo '</section>';

}


