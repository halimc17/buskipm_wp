<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

			<div class="adasdas" style="background-color:#FFF;color:#000;clear:both;margin-bottom:15px;">
				<div class="lowcontent_a" style="background-color:#FFF;width:32%;float:left;"><?php dynamic_sidebar( 'Low Content A' ); ?></div>
				<div class="lowcontent_b" style="background-color:#FFF;width:33%;float:left;margin-left:18px;"><?php dynamic_sidebar( 'Low Content B' ); ?></div>
				<div class="lowcontent_c" style="background-color:#FFF;width:32%;float:right;margin-left:15px;"><?php dynamic_sidebar( 'Low Content C' ); ?></div>
				<div style="clear:both;"></div>
			</div>
			
			<div class="low_content2" style="background-color:#FFF;color:#000;clear:both;align:center;">
				<?php dynamic_sidebar( 'Low Content 1' ); ?>
			</div>

			<div id="primary" class="low_content">
				<div class="lowcontent2" style="background-color:#000;width:32%;float:left;color:#FFF;"><?php dynamic_sidebar( 'Lowcontent2' ); ?></div>
				<div class="lowcontent3" style="background-color:#000;width:34%;float:left;color:#FFF;margin-left:10px;"><?php dynamic_sidebar( 'Lowcontent3' ); ?></div>
				<div class="lowcontent4" style="background-color:#000;width:32%;float:left;color:#FFF;margin-left:10px;"><?php dynamic_sidebar( 'Lowcontent4' ); ?></div>
				<div style="clear:both;"></div>
			</div>


		</div><!-- .site-content -->

		

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			<div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<span class="site-title">BUSKIPM 2016</span>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentysixteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->

</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
