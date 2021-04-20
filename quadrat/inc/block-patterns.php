<?php
/**
 * Quadrat Theme: Block Patterns
 *
 * @package Quadrat
 * @since   1.0.0
 */
if ( ! function_exists( 'quadrat_register_block_patterns' ) ) :

	function quadrat_register_block_patterns() {

		if ( function_exists( 'register_block_pattern_category' ) ) {
			register_block_pattern_category(
				'quadrat',
				array( 'label' => __( 'Quadrat', 'quadrat' ) )
			);
		}

		if ( function_exists( 'register_block_pattern' ) ) {

			register_block_pattern(
				'quadrat/headline-button',
				array(
					'title'      => __( 'Headline and button', 'quadrat' ),
					'categories' => array( 'quadrat' ),
					'content'    => '<!-- wp:group {"align":"wide"} -->
					<div class="wp-block-group alignwide"><!-- wp:paragraph -->
					<p>' . esc_html__( 'The Hosts', 'quadrat') . '</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:heading -->
					<h2>' . esc_html__( 'Samantha and Olivia are both writers and activists.', 'quadrat') . '</h2>
					<!-- /wp:heading -->
					
					<!-- wp:spacer {"height":36} -->
					<div style="height:36px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html__( 'Learn More', 'quadrat') . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
					<!-- /wp:group -->',
				)
			);

			register_block_pattern(
				'quadrat/media-text-button',
				array(
					'title'      => __( 'Media and text with button', 'quadrat' ),
					'categories' => array( 'quadrat' ),
					'content'    => '<!-- wp:media-text {"mediaLink":"https://quadrat.mystagingwebsite.com/wp-content/uploads/2021/04/girls-illustration.png","mediaType":"image"} -->
					<div class="wp-block-media-text alignwide is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="https://quadrat.mystagingwebsite.com/wp-content/uploads/2021/04/girls-illustration.png" alt="' . esc_attr__( 'Illustration of two women.', 'quadrat' ) . '"/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph -->
					<p>' . esc_html__( 'The Hosts', 'quadrat') . '</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:heading -->
					<h2>' . esc_html__( 'Sarah &amp; Olivia are both writers and activists.', 'quadrat') . '</h2>
					<!-- /wp:heading -->
					
					<!-- wp:spacer {"height":36} -->
					<div style="height:36px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html__( 'Learn More', 'quadrat') . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div></div>
					<!-- /wp:media-text -->',
				)
			);

			register_block_pattern(
				'quadrat/cover-with-heading',
				array(
					'title'      => __( 'Cover block with heading', 'quadrat' ),
					'categories' => array( 'quadrat' ),
					'content'    => '<!-- wp:cover {"overlayColor":"darker-blue","className":"is-style-quadrat-cover-diamond"} -->
					<div class="wp-block-cover has-darker-blue-background-color has-background-dim is-style-quadrat-cover-diamond"><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","textColor":"pink"} -->
					<h2 class="has-text-align-center has-pink-color has-text-color">' . esc_html__( 'Episode 3: A Cycle of Emotions', 'quadrat' ) . '</h2>
					<!-- /wp:heading --></div></div>
					<!-- /wp:cover -->',
				)
			);

		}
	}
endif;

add_action( 'after_setup_theme', 'quadrat_register_block_patterns', 12 );
