<?php
/*
 Template Name: Home Page
 * 
 * Use this template for a static home page. 
 * If you don't need the main loop, remove it
 * and get busy.
*/
?>

<?php get_header(); ?>
	
	<main id="main" class="main wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-14" class="post-14 page type-page status-publish hentry" role="article" itemscope="" itemtype="https://schema.org/BlogPosting">

			<header class="article-header  preload">	
				<div class="sticky">
					<h1 class="page-title" itemprop="headline"><em>Hey,</em> I’m John.</h1>
					<p>I’m a <strong>designer</strong> and <strong>developer</strong> from the Victorian Surf Coast, Australia.</p>
					
					<div class="social">						
						<a href="https://instagram.com/_goodjobjohn/" target="_blank" rel="noopener">
							<img class="alignnone wp-image-36 size-full" role="img" src="<?php echo get_template_directory_uri(); ?>/library/images/instagram.svg" alt="" width="22" height="22" />
						</a>
						<a href="https://twitter.com/_goodjobjohn" target="_blank" rel="noopener">
							<img class="alignnone wp-image-35 size-full" role="img" src="<?php echo get_template_directory_uri(); ?>/library/images/twitter.svg" alt="" width="24" height="19" />
						</a>
					</div>
				</div>

			</header> 

			<section class="entry-content" itemprop="articleBody">			

				<div class="content-title">					
					<span class="anchor" id="about"></span>
					<h3>I'm <em>your</em> Digital Storyteller</h3>					
					
					<p>I’m <strong>creative</strong> + <strong>technical</strong>.</p>
					
					<p>I build web for <strong>creators </strong>+<strong> innovators</strong>.</p>

					<p>When we work together, I take the time to get to know you and your business.</p>
					
					<p>I’m not here to add to the noise, I’m here to create a <strong>narrative</strong> for your brand that <strong>connects</strong>, builds <strong>trust</strong> and nurtures <strong>loyalty</strong>.</p>				

					<p>A former co-owner and creative director of Melbourne digital agency In10tion, I moved to the coast to draw breath as a creative.</p>
				</div>

				<div style="height:200px" aria-hidden="true" class="wp-block-spacer"></div>
				
				<div class="animated-logos">
					
						<h3>Motion <em>inspires</em> emotion</h3>
						<p>To celebrate my new site, I’m offering a promo rate of $250 for custom animated logos. Give me 5 seconds - and I’ll bring your brand to life. <a href="<?php echo the_permalink(); ?>logo-animation/">Click here</a> to find out more about adding the finishing flowing touch to your narrative.</p>
					
				</div>
				
				
				<!-- <div id="case-studies-block">
					<span class="anchor" id="case-studies"></span>	
					
						<h3>My latest case studies.</h3>
						<?php wp_nav_menu( array(

							'container' => false,                          // remove nav container
							'container_class' => 'menu',                   // class of container (should you choose to use it)
							'menu' => __( 'Case Studies', 'platetheme' ), // nav name
							//'menu_class' => 'nav',       // adding custom nav class
							'theme_location' => 'case-studies',                // where it's located in the theme

							)
						); ?>						
						
				</div> -->
				

				<div style="height:200px" aria-hidden="true" class="wp-block-spacer"></div>

				<div id="contact" class="contact">
					<span class="anchor" id="talktome"></span>
					<h3>Let's tell <em>your</em> story.</h3>
					<!-- <input name="name" value="name">
					<input name="email" value="email">
					<textarea name="message" value="message">message</textarea>
					<button>Send</button> -->
					<?php echo do_shortcode('[contact-form-7 id="54" title="Contact"]'); ?>
				</div>
		
			</section> 

			<footer class="article-footer preload">
				<div class="background-image"  data-responsive-background-image>
					<?php the_post_thumbnail('full', array( "class" => "bg-swap")); ?>
				</div>
			</footer>

		</article>

		<?php endwhile; ?>

			<?php plate_page_navi( $wp_query ); ?>

		<?php else : ?>

			<?php get_template_part( 'templates/404'); ?>

		<?php endif; ?>

	</main>

<?php get_footer(); ?>
