<?php get_header(); ?>

<section class="page-title bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                <h1 class="text-capitalize mb-4 text-lg"><?php the_title();?></h1>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="<?php echo site_url();?>" class="text-white">Home</a></li>
                    <li class="list-inline-item"><span class="text-white">/</span></li>
                    <li class="list-inline-item"><a href="#" class="text-white-50"><?php the_title();?></a></li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                    while(have_posts()) {
                        the_post();
                        ?>
                            <h4><?php the_title();?></h4>
                            <p><?php the_content();?></p>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>