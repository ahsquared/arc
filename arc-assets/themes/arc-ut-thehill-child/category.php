<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage UT-TheHill
 * @since Twenty Thirteen 1.0
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

            <div class="category-filter">
                <?php // list all categories
                $args = array(
                    'type' => 'post',
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
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"
                                   class="category-<?php echo $category->category_nicename ?>"> <?php echo $category->name ?>
                        </label>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="articles">
                <?php /* The loop */ ?>
                <?php while (have_posts()) : the_post(); ?>
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