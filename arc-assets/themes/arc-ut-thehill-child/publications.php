<?php
/**
 * Template Name: Publications
 * Description: Full-width, without a sidebar, lists publications with category publications and sub category
 *
 * @package WordPress
 * @subpackage Arc-UT-TheHill-Child
 */

get_header(); ?>

    <div id="content" class="site-content" role="main">

        <?php if (have_posts()) : ?>
            <header class="archive-header">
                <h1 class="archive-title"><?php printf(__('Category Archives: <strong>%s</strong>', 'utthehill'), single_cat_title('', false)); ?></h1>

                <?php if (category_description()) : // Show an optional category description ?>
                    <div class="archive-meta"><?php echo category_description(); ?></div>
                <?php endif; ?>
            </header><!-- .archive-header -->

            <?php /* The loop */ ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('content', get_post_format()); ?>
            <?php endwhile; ?>

            <div class="category-filter">
                <h4>Filter the publications using these categories:</h4>
                <?php // list all categories
                $args = array(
                    'type' => 'publication',
                    'child_of' => 0,
                    'parent' => '6',
                    'orderby' => 'name',
                    'order' => 'ASC',
                    'hide_empty' => 1,
                    'hierarchical' => 1,
                    'exclude' => '',
                    'include' => '',
                    'number' => '',
                    'taxonomy' => 'category',
                    'pad_counts' => false

                );
                $categories = get_categories($args);
                //        $category->term_id
                //        $category->name
                //        $category->slug
                //        $category->term_group
                //        $category->term_taxonomy_id
                //        $category->taxonomy
                //        $category->description
                //        $category->parent
                //        $category->count
                //        $category->cat_ID
                //        $category->category_count
                //        $category->category_description
                //        $category->cat_name
                //        $category->category_nicename
                //        $category->category_parent

                foreach ($categories as $category):
                    ?>
                    <div class="checkbox col-xs-6 col-sm-3">
                        <label>
                            <input type="checkbox" class="category-filter-checkbox" checked="checked"
                                   data-category="category-<?php echo $category->category_nicename ?>"> <?php echo $category->name ?>
                        </label>
                    </div>
                <?php endforeach; ?>
                <div class="row"></div>
                <div class="checkbox col-xs-6 col-sm-3">
                    <button class="btn btn-primary check-all">Check All</button>
                </div>
                <div class="checkbox col-xs-6 col-sm-3">
                    <button class="btn btn-secondary uncheck-all">Uncheck All</button>
                </div>
                <div class="row"></div>
                <div class="category-filter-warning alert alert-warning">Please select a category to show articles</div>
            </div>
            <div class="articles">

                <?php
                    // get all posts in the publications category and subcategories
                    $cat_posts_query = new WP_Query( array( 'post_type' => 'publication', 'category_name' => 'publications', 'posts_per_page' => -1 ) );
                    /* The loop */
                    while ($cat_posts_query->have_posts()) : $cat_posts_query->the_post(); ?>
                    <?php get_template_part('content', get_post_format()); ?>
                <?php endwhile; ?>
            </div>

            <?php utthehill_paging_nav(); ?>

        <?php else : ?>
            <?php get_template_part('content', 'none'); ?>
        <?php endif; ?>


    </div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>