<?php get_header();?>
      <div class="main-wrapper ">
         <?php get_template_part('template-parts/content', 'breadcumb'); ?>
         <section class="section blog-wrap bg-gray">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8">
                     <div class="row">
                        <div class="col-lg-12 mb-5">
                           <div class="single-blog-item">
                              <img src="<?php the_post_thumbnail_url();?>" alt="" class="img-fluid rounded">
                              <div class="blog-item-content bg-white p-5">
                                 <div class="blog-item-meta bg-gray py-1 px-2">
                                    <span class="text-muted text-capitalize mr-3"><i class="fa fa-pencil-alt mr-2"></i>
                                       <?php 
                                          $cat = get_the_category();
                                             echo $cat[0]->name; 
                                       ?>
                                    <span class="text-muted text-capitalize mr-3"><i class="fa fa-comment mr-2"></i><?php echo get_comments_number();?> Comments</span>
                                    <span class="text-black text-capitalize mr-3"><i class="fa fa-calendar mr-1"></i> </i> <?php echo get_the_date();?></span>
                                 </div>
                                 <h2 class="mt-3 mb-4"><a href="#"><?php the_title();?></a></h2>
                                 <?php the_content();?>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-12 mb-5">
                           <div class="posts-nav bg-white p-5 d-lg-flex d-md-flex justify-content-between ">
                              <a class="post-prev align-items-center" href="#">
                                 <div class="posts-prev-item mb-4 mb-lg-0">
                                    <span class="nav-posts-desc text-color">- Previous Post</span>
                                    <h6 class="nav-posts-title mt-1">
                                       <?php previous_post_link(); ?> 
                                    </h6>
                                 </div>
                              </a>
                              <div class="border"></div>
                              <a class="posts-next" href="#">
                                 <div class="posts-next-item pt-4 pt-lg-0">
                                    <span class="nav-posts-desc text-lg-right text-md-right text-color d-block">- Next Post</span>
                                    <h6 class="nav-posts-title mt-1">
                                       <?php next_post_link(); ?> 
                                    </h6>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="col-lg-12 mb-5">
                        <?php if ( comments_open() || get_comments_number() ) :
                              comments_template();
                           endif; ?>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="sidebar-wrap">
                        <?php
                              if(is_active_sidebar( 'sidebar' )) {
                                 dynamic_sidebar( 'sidebar' );
                              }
                        ?>
                     </div> 
                  </div>
               </div>
            </div>
         </section>
      <?php get_footer();?>