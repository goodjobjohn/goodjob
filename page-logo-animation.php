<?php
/*
 Template Name: Logo Animation
 *
*/
?>

<?php get_header(); ?>

    <main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="https://schema.org/BlogPosting">

                <header class="article-header">

                    <div class="sticky">
                        <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

                        <div class="index">

                        <?php if( have_rows('index') ): ?>
                            <?php while( have_rows('index') ): the_row(); ?>
                                                    
                                <a href="<?php echo get_permalink() . get_sub_field('anchor'); ?>">
                                    <?php echo get_sub_field('label') ?>
                                </a></br>                      
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                    </div>

                </header> <?php // end article header ?>

                <section class="entry-content" itemprop="articleBody">
                    
                    <?php 
                        $featuredVid = get_field('featured_video');
                        
                        if ( isset($featuredVid)) {                       
                    ?>
                        <div class="featured-video">
                            <video width="500" autoplay loop muted >
                                <source src="<?php echo $featuredVid; ?>" type="video/mp4">
                                <p>Sorry, your browser doesn't support embedded videos.</p>
                            </video>
                        </div>
                    <?php 
                        }
                    ?>

                    <?php the_content(); ?>

                    <?php get_template_part( 'templates/stripe'); ?>

                </section> <?php // end article section ?>

                <footer class="article-footer">

                </footer>

                <?php comments_template(); ?>

            </article>

        <?php endwhile; ?>

            <?php plate_page_navi( $wp_query ); ?>

        <?php else : ?>

            <?php get_template_part( 'templates/404'); ?>

        <?php endif; ?>

    </main>

<?php get_footer(); ?>