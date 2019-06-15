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

                    <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

                    <div class="byline-wrap">

                        <?php // Get the author name; wrap it in a link.
                        if ( get_the_author_meta( 'ID' ) ) { $byline = sprintf( __( 'by %s', 'platetheme' ), '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . get_the_author() . '</a></span>' );

                        echo '<span class="posted-on">' . plate_time_link() . '</span><span class="byline"> ' . $byline . '</span>';

                        } else { echo '<span class="posted-on">Posted on:' . plate_time_link() . '</span>'; }

                        ?>
                        
                    </div>

                </header> <?php // end article header ?>

                <section class="entry-content" itemprop="articleBody">
                    
                    <?php 
                        $featuredVid = get_field('featured_video');
                        
                        if ( isset($featuredVid)) {                       
                    ?>
                        <div class="featured-video">
                            <video controls width="500" autoplay loop muted >
                                <source src="<?php echo $featuredVid; ?>" type="video/mp4">
                                <p>Sorry, your browser doesn't support embedded videos.</p>
                            </video>
                        </div>
                    <?php 
                        }
                    ?>

                    <?php the_content(); ?>

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
