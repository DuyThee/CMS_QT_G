<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<style>
@media (min-width: 992px) {
    .row {
        margin-left: 110px !important;
        margin-right: 110px !important;
    }
}

@media (min-width: 480px) {
    .row {
        margin: 0
    }
}

.crossedbg {
    background: url(http://fit.tdc.edu.vn/addons/default/themes/bootstrapThree/img/bg_cr_grey.png);
    height: 15px;
}

.list-group-item {
    border: none;
    border-bottom: 1px #d9d9d9 solid;
    margin-bottom: 0;
    padding-left: 0;
    padding-right: 0;
}

.list-group {
    list-style: disc;
    margin-bottom: 0;
}
.list-group li a{
	color: #428bca !important;
	text-decoration: none;
}
.list-group-item:before {
    font-family: Arial, Helvetica, sans-serif;
    color: #f5ce31;
    content: "\2022";
    font-size: 2em;
    padding-right: .5em;
    position: relative;
    top: .15em;
}
.post-time{
    background: #F5CE31;
    display: flex;
    justify-content:center;
    align-items: center;
    border-radius: 50%;
    height: 75px;
    width:75px ;
    flex-shrink: 0;
    box-shadow: 0 2px 5px 1px var(--global--color-light-gray);
}
</style>
<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header alignwide">
        <div class="d-flex justify-content-between">
        <?php the_title( '<h6 class="entry-title">', '</h6>' ); ?>
        <div class="post-time">
            <?php $post = get_post();
            $date = $post->post_date;
            $day = date("d", strtotime($date));
            $month = date("m", strtotime($date));
            $year = date("y", strtotime($date));?>
            <div class="ngay-thang">
                <div class="ngay border-bottom border-dark">
                    <?= $day ?>
                </div>
                <div class="thang border-top border-dark">
                    <?= $month ?>
                </div>
            </div>
            <div class="nam">
                <?= $year?>
            </div>
        </div>
        <?php twenty_twenty_one_post_thumbnail(); ?>
        </div>
    </header>
    <!-- .entry-header -->
    <div class="entry-content row">
        <div class="col-md-3">
            <div class="widget topworks_itdc">
                <div class="panel panel-default">
                    <h2>Category</h2>
                    <div class="crossedbg"></div>
                    <div class="panel-body">
						
                        <ul class="list-group">
                            <?php 
								$categories_list = get_the_category_list( wp_get_list_item_separator() );
								$categorys = explode(", ", $categories_list);
								foreach ($categorys as $category) {
									echo '<li class="list-group-item"><a href="">'. $category .'</a></li>';
								}
							?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
        </div>
        <div class="col-md-3">

        </div>

        <!-- .entry-content -->

        <footer class="entry-footer default-max-width">
            <?php twenty_twenty_one_entry_meta_footer(); ?>
        </footer><!-- .entry-footer -->

        <?php if ( ! is_singular( 'attachment' ) ) : ?>
        <?php get_template_part( 'template-parts/post/author-bio' ); ?>
        <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->