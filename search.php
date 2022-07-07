<?php get_header();?>

<div class="main-wrapper">
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                    <h1 class="text-capitalize mb-4 text-lg">Search</h1>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="<?php echo site_url();?>" class="text-white">Home</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item"><a href="#" class="text-white-50">Search</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="search-page">
        <div class="container">
            <div class="row">
            <?php
                $s=get_search_query();
                $args = array(
                    's' =>$s
                );
                $query = new WP_Query( $args );
                while($query->have_posts()) {
                    $query->the_post();
            ?>
                <div class="col-lg-6">
                    <div class="blog-item">
                        <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="img-fluid rounded">				
                        <div class="blog-item-content bg-white p-5">
                        <div class="blog-item-meta bg-gray py-1 px-2">
                            <span class="text-muted text-capitalize mr-3"><i class="fa fa-comment mr-2"></i><?php echo get_comments_number();?> Comments</span>
                            <span class="text-black text-capitalize mr-3"><i class="fa fa-calendar mr-1"></i> <?php echo get_the_date();?></span>
                        </div>
                        <h3 class="mt-3 mb-3"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                        <?php the_excerpt();?>
                        <a href="<?php the_permalink();?>" class="btn btn-small btn-main btn-round-full">Learn More</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            wp_reset_postdata();
?>
            </div>
        </div>
    </section>
</div>



<?php get_footer();?>