<?php
/*
* Template Name: Case Studies
* 
* 
* This is a post template for full-width posts. Taken from single.php
*/
?>

<?php get_header(); ?>

			<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemprop="blogPost" itemtype="https://schema.org/BlogPosting">

                        <header class="article-header entry-header">
                            
                            <?php get_template_part( 'templates/category-tags'); ?>

                            <h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>

                            <?php // Delete or comment out if you don't need this on your page or post. Edit in /templates/byline.php ?>
                            <?php // get_template_part( 'templates/byline'); ?>

                        </header> <?php // end article header ?>

                        <section class="entry-content" itemprop="articleBody">

                            <div class="featured-image">
                                
                                <!-- <input type="checkbox" id="expand-toggle" /> -->
                                <label for="expand-toggle" id="expand-image"><?php the_post_thumbnail('full'); ?></label>
                                
                            </div>

                            <?php the_content(); ?>

                        </section> <?php // end article section ?>

                        <footer class="article-footer">

                            

                        </footer> <?php // end article footer ?>

                        <?php // comments_template(); ?>

                    </article> <?php // end article ?>

                <?php endwhile; ?>

                <?php else : ?>

                    <?php get_template_part( 'templates/404'); ?>

                <?php endif; ?>

			</main>

			<?php // related posts function; uncomment below to use ?>
			<?php // plate_related_posts(); ?>


<?php get_footer(); ?>
