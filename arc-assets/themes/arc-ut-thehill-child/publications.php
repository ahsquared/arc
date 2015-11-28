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
                $i = 0;
                foreach ($categories as $category):
                    if ($i % 4 == 0):
                    ?>
                    <div class="row category-row">
                    <?php endif; ?>
                    <div class="checkbox col-xs-6 col-sm-3">
                        <label>
                            <input type="checkbox" class="category-filter-checkbox"
                                   data-category="category-<?php echo $category->category_nicename ?>"> <?php echo $category->name ?>
                        </label>
                    </div>
                    <?php if ($i % 4 == 3 || $i == count($categories) - 1): ?>
                        </div>
                    <?php endif; ?>
        <?php $i++; endforeach; ?>
                <div class="row category-row">
                    <div class="checkbox col-xs-6 col-sm-3">
                        <button class="btn btn-primary check-all">Check All</button>
                    </div>
                    <div class="checkbox col-xs-6 col-sm-3">
                        <button class="btn btn-secondary uncheck-all">Uncheck All</button>
                    </div>
                </div>
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

<?php //get_sidebar(); ?>
        </div>
<?php get_footer(); ?>
