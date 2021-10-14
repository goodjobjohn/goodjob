<?php
/*
 Template Name: Work Page
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

                            <!-- <div class="byline-wrap">

                                10<?php // Get the author name; wrap it in a link.
                                if ( get_the_author_meta( 'ID' ) ) { $byline = sprintf( __( 'by %s', 'platetheme' ), '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . get_the_author() . '</a></span>' );

                                echo '<span class="posted-on">' . plate_time_link() . '</span><span class="byline"> ' . $byline . '</span>';

                                } else { echo '<span class="posted-on">Posted on:' . plate_time_link() . '</span>'; }

                                ?>
                                
                            </div> -->

                        </header> <?php // end article header ?>

                        <section class="entry-content" itemprop="articleBody">

                            <?php the_content(); ?>

                            <?php // REPEATER FIELD
                            $rows = get_field('work');
                            if( $rows ) {
                                
                                foreach( $rows as $row ) {

                                    if (wp_is_mobile()){ // MOBILE
                                        
                                        echo '<image width="330" height="197" src="' . $row['small'] . '"/>'; 
                                    
                                    } else { // DESKTOP

                                        $id = wp_unique_id();
                                        if ( $id == 1 ){ // left image
                                            $class = 'transform: scale(3.1) translateX(108px);';
                                        } elseif ( $id == 2 ){ // middle image
                                            $class = 'transform: scale(3.1) translateX(0px);';                                
                                        } else { // right image
                                            $class = 'transform: scale(3.1) translateX(-107px);';
                                        }
                                        ?>
                                        <style>#expand-toggle-<?php echo $id ?>:checked + label img { <?php echo $class; ?> }</style>
                                        <input type="checkbox" id="expand-toggle-<? echo $id; ?>">
                                        <label for="expand-toggle-<? echo $id; ?>">
                                            <image width="330" height="197" srcset="<?php echo $row['small']; ?> 1000w, <?php echo $row['large']; ?> 1001w" />                                    
                                        </label>
                                        <?php
                                        if ( $class >= 3 ) { $class = 0; }

                                    }
                                }
                            } 
                            ?>    

                            <img src="<?php the_field('desktop_1x'); ?>" />                                                   

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

    <?php get_sidebar(); ?>

<?php get_footer(); ?>
