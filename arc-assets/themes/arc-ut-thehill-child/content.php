<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage UT-TheHill
 * @since Twenty Thirteen 1.0
 */
?>
<?php if (has_post_thumbnail() && !post_password_required() && !is_search() && !is_front_page()) : ?>
    <div class="entry-thumbnail">
        <?php the_post_thumbnail("large"); ?>
    </div>
<?php endif; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (!is_front_page()) : ?>
    <header class="entry-header clearfix">

        <?php if (is_single()) : ?>
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

        <?php else : ?>
            <h1 class="entry-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h1>
        <?php endif; // is_single() ?>


        <?php if (is_search()) : // Only display Excerpts for Search ?>
        <?php elseif (false) : ?>
            <div class="entry-meta">

                <?php utthehill_entry_meta(); ?>
                <?php edit_post_link(__('Edit', 'utthehill'), '<span class="edit-link"><i class="icon-fa-edit"></i> ', '</span>'); ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>


    </header>
    <?php endif; ?>
    <!-- .entry-header -->

    <?php if (is_search() || is_category() || is_tag() || is_archive()) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
    <?php else : ?>
        <div class="entry-content content-start">
            <?php the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'utthehill')); ?>
            <?php wp_link_pages(array('before' => '<ul class="pager"><li><span class="disabled">' . __('Pages:', 'utthehill') . '</span></li>', 'after' => '</ul>', 'link_before' => '<li><span>', 'link_after' => '</span></li>')); ?>
        </div><!-- .entry-content -->
    <?php endif; ?>

    <footer class="entry-meta">
        <?php if (comments_open() && !is_single() && !is_search()) : ?>
            <div class="comments-link"><i class="icon-fa-comment"></i>
                <?php comments_popup_link('<span class="leave-reply">' . __('Leave a comment', 'utthehill') . '</span>', __('One comment so far', 'utthehill'), __('View all % comments', 'utthehill')); ?>
            </div><!-- .comments-link -->
        <?php endif; // comments_open() ?>

        <?php if (is_single() && get_the_author_meta('description') && is_multi_author()) : ?>
            <?php get_template_part('author-bio'); ?>
        <?php endif; ?>
    </footer>
    <!-- .entry-meta -->
</article><!-- #post -->
