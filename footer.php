<!-- footer Start -->
<footer class="footer section">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-6">
                     <div class="widget">
                        <?php
                           if(is_active_sidebar( 'footer-1' )) {
                              dynamic_sidebar( 'footer-1' );
                           }
                        ?>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                     <div class="widget">
                        <?php
                           if(is_active_sidebar( 'footer-2' )) {
                              dynamic_sidebar( 'footer-2' );
                           }
                        ?>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                     <div class="widget">
                        <?php
                           if(is_active_sidebar( 'footer-3' )) {
                              dynamic_sidebar( 'footer-3' );
                           }
                        ?>
                     </div>
                  </div>
               </div>
               <div class="footer-btm pt-4">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <p class="copyright">All Rights Reserved &copy; 2022</Ri:a></p>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
      </div>
      <?php wp_footer();?>
   </body>
</html>