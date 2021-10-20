<?php
/*
 Template Name: CV
 *
 * This is the base custom page template with the full loop (instead of it split
 * out into template parts).
 *
 * To use for your theme, change the name of your template from 
 * "Custom Page Example" above. Example: 
 * 
 * Template Name: My Custom Page 
 * 
 * Then save this template as page-mycustompage.php and it will show up 
 * as a template in the Page Templates drop-down on page edit screens in the admin. 
 * 
 * Important: the "Template Name: " is required by WordPress so that your template
 * will show up as a choice in the admin.
 *
 * Remember to keep the markup and content separate.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
 *
 * Visual interactive WordPress template hierarchy: https://wphierarchy.com
*/
?>

<?php get_header(); ?>

    <div id="content">

        <div id="inner-content" class="wrap">

            <main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="https://schema.org/BlogPosting">

                        <header class="article-header">

                            <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>                          

                        </header> <?php // end article header ?>

                        <section class="entry-content" itemprop="articleBody">

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

        </div>

    </div>

<?php get_footer(); ?>
