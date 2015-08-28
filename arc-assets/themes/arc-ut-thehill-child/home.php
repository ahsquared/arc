<?php
/**
 * Template Name: Home
 * Description: Full-width, without a sidebar for Home page
 *
 * @package WordPress
 * @subpackage utresponsive
 */


get_header(); ?>

<?php /* The loop */ ?>
<?php while (have_posts()) :
the_post(); ?>



<?php if (has_post_thumbnail()): ?>
    <div class="entry-thumbnail home-banner">
        <?php the_post_thumbnail("large"); ?>
        <div class="banner-title"><?php the_field('banner_title'); ?></div>
        <div class="banner-subtitle"><?php the_field('banner_subtitle'); ?></div>
    </div>
<?php endif ?>

<div id="content" class="site-content wide<?php
if (is_front_page()) {
    $settings = get_option('ut_options', $ut_options);
    if (($settings['homepage_head'] == false) && is_front_page()) { ?> home-margin<?php }
} else {
} ?>" role="main">

    <header class="entry-header clearfix">

        <div class="col-sm-6">
            <h1 class="entry-title"><?php
                if (get_field('title_part')) {
                    the_field('title_part');
                } else {
                    the_title();
                }
                ?></h1>

            <h2><?php the_field('subtitle'); ?></h2>
        </div>
        <div class="col-sm-6">
            <p><?php the_field('summary'); ?></p>
        </div>
        <div class="read-more">
            <button class="btn btn-link">Read more <span class="arrow">&darr;</span></button>
        </div>


        <?php if (is_search()) : // Only display Excerpts for Search ?>
        <?php elseif (false) : ?>
            <div class="entry-meta">

                <?php utthehill_entry_meta(); ?>
                <?php edit_post_link(__('Edit', 'utthehill'), '<span class="edit-link"><i class="icon-fa-edit"></i> ', '</span>'); ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>


    </header>
    <!-- .entry-header -->

    <div class="home-content content-start">
        <?php
        $categories = get_field('categories_to_display');

        if ($categories):
            foreach ($categories as $category): ?>
                <div class="clearfix">
                    <h1><?php echo $category->name ?></h1>
                    <?php // query the posts by category and sort by sort index
                    $the_query = new WP_Query(array(
                        'category_name' => $category->name,
                        'post_status' => 'publish, future',
                        'meta_key' => 'sort_index',
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC'
                    )); ?>
                    <?php //query_posts('category_name=leaders&post_status=publish,future');
                    ?>
                    <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) :
                        $the_query->the_post(); ?>
                        <div class="col-sm-6">
                            <?php if (has_post_thumbnail()) : // check if the post has a Post Thumbnail assigned to it.
                                ?>
                                <div class="category-post-image">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            <?php endif; ?>

                            <div class="category-post">
                                <h2><a href="<?php the_permalink(); ?>"><?php
                                        if (get_field('title_part')) {
                                            the_field('title_part');
                                        } else {
                                            the_title();
                                        }
                                        ?></a></h2>

                                <?php the_field('summary'); ?>
                            </div>
                            <div class="read-more">
                                <button class="btn btn-link">Read more <span class="arrow">&rarr;</span></button>
                            </div>
                        </div>
                    <?php endwhile;
                    else:
                    endif; ?>
                </div>

                <?php wp_reset_query();     // Restore global post data stomped by the_post().
                ?>
            <?php endforeach;
        endif; ?>
    </div>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
