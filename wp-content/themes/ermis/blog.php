<?php 
    /** Template Name: Blog Page **/
    get_header(); 

    $paged = ($wp_query->query_vars['paged']) ? $wp_query->query_vars['paged'] : 1;
    $postsList = new WP_Query([
        'numberposts'      => '-1',
        'orderby'          => 'date',
        'order'            => 'DESC',
        'post_type'        => 'post',
        'suppress_filters' => true,
        'paged'            => $paged,
        'posts_per_page'   => 3,
    ]);
    the_content();
?>

<div id="blog-wrapper" class="blog">
    <div class="grid-x grid-padding-x">
        <div class="large-1"></div>
        <div id="js-blog-wrapper" class="inner large-10">
            <?php if ($postsList->have_posts()) {
                while ($postsList->have_posts()) { 
                    $postsList->the_post(); ?>
                    <div class="post-item">
                        <div class="post-item-inner">
                            <div class="img-wrapper">
                                <?php the_post_thumbnail(); ?>
                                <a href="<?php the_permalink(); ?>" class="make-full"></a>
                            </div>
                            <div class="content-wrapper">
                                <div class="content-wrapper-inner">
                                    <div class="post-title"><a class="post-link" href="<?php the_permalink();?>"><?php the_title(); ?></a></div>
                                    <div class="date"><?php echo get_the_date('d.m.Y') ?></div>
                                </div>
                                <div class="excerpt"><?php the_excerpt();?></div>
                                <a class="post-btn" href="<?php the_permalink();?>">Διαβάστε Περισσότερα
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.34115 7.83332H10.6495L6.58281 11.9C6.25781 12.225 6.25781 12.7583 6.58281 13.0833C6.90781 13.4083 7.43281 13.4083 7.75781 13.0833L13.2495 7.59165C13.5745 7.26665 13.5745 6.74165 13.2495 6.41665L7.76615 0.916651C7.61045 0.760607 7.39908 0.672913 7.17865 0.672913C6.95821 0.672913 6.74684 0.760607 6.59115 0.916651C6.26615 1.24165 6.26615 1.76665 6.59115 2.09165L10.6495 6.16665H1.34115C0.882812 6.16665 0.507812 6.54165 0.507812 6.99998C0.507812 7.45832 0.882812 7.83332 1.34115 7.83332Z" fill="#700353"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php }
            } 
            wp_reset_postdata(); ?>
            <div class="view-more-button">Φόρτωση περισσοτέρων ιστοριών </div>
            <div class="pagination" style="display:none">
                <?php echo paginate_links([
                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                        'total'        => $postsList->max_num_pages,
                        'current'      => max( 1, $paged ),
                        'format'       => '?paged=%#%',
                        'show_all'     => false,
                        'type'         => 'plain',
                        'end_size'     => 2,
                        'mid_size'     => 1,
                        'prev_next'    => true,
                        'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'text-domain' ) ),
                        'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'text-domain' ) ),
                        'add_args'     => false,
                        'add_fragment' => '',
                ]);?>
            </div>
            
        </div>
    </div>
</div>
<?php get_footer(); ?>