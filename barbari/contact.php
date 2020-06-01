<?php /* template name:contact */ ?>
<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-12 contact-content">
            <h3>تماس با ما</h3> 
        </div>     
<!-- Start boxes -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 box1">
                    <div class="card">
                        <img src="<?php bloginfo('template_url'); ?>/images/barbari3.jpg" class="card-img-top img-box1" alt="وانت بار شرق تهران">
                        <div class="card-body">
                          <h5 class="card-title">اتوبار شرق تهران</h5>
                          <p class="card-text"><h5>تلفن :<h5><a href="tel:+989126773621">09126773621</a></h5></h5></p>
                          <a href="http://localhost/wordpress/%d8%a8%d8%a7%d8%b1%d8%a8%d8%b1%db%8c-%d8%b4%d8%b1%d9%82-%d8%aa%d9%87%d8%b1%d8%a7%d9%86/" class="btn btn-primary">اطلاعات بیشتر</a>
                        </div>
                      </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 box2">
                    <div class="card">
                        <img src="<?php bloginfo('template_url'); ?>/images/barbari4.jpg" class="card-img-top img-box2" alt="وانت بار شمال تهران">
                        <div class="card-body">
                          <h5 class="card-title">اتوبار شمال تهران</h5>
                          <p class="card-text"><h5>تلفن :<h5><a href="tel:+982122704638">021-22704638</a></h5></h5></p>
                          <a href="http://localhost/wordpress/%d8%a8%d8%a7%d8%b1%d8%a8%d8%b1%db%8c-%d8%b4%d9%85%d8%a7%d9%84-%d8%aa%d9%87%d8%b1%d8%a7%d9%86/" class="btn btn-primary">اطلاعات بیشتر</a>
                        </div>
                      </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 box3">
                    <div class="card">
                        <img src="<?php bloginfo('template_url'); ?>/images/barbari5.jpg" class="card-img-top img-box3" alt="وانت بار غرب تهران">
                        <div class="card-body">
                          <h5 class="card-title">اتوبار غرب تهران</h5>
                          <p class="card-text"><h5>تلفن :<h5><a href="tel:+982144359151">021-44359151</a></h5></h5></p>
                          <a href="http://localhost/wordpress/%d8%a8%d8%a7%d8%b1%d8%a8%d8%b1%db%8c-%d8%ba%d8%b1%d8%a8-%d8%aa%d9%87%d8%b1%d8%a7%d9%86/" class="btn btn-primary">اطلاعات بیشتر</a>
                        </div>
                      </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 box4">
                    <div class="card">
                        <img src="<?php bloginfo('template_url'); ?>/images/barbari7.jpg" class="card-img-top img-box4" alt="وانت بار مرکز تهران">
                        <div class="card-body">
                          <h5 class="card-title">اتوبار مرکز تهران</h5>
                          <p class="card-text"><h5>تلفن :<h5><a href="tel:+982188575172">021-88575172</a></h5></h5></p>
                          <a href="http://localhost/wordpress/%d8%a8%d8%a7%d8%b1%d8%a8%d8%b1%db%8c-%d9%85%d8%b1%da%a9%d8%b2-%d8%aa%d9%87%d8%b1%d8%a7%d9%86/" class="btn btn-primary">اطلاعات بیشتر</a>
                        </div>
                      </div>
                </div>
        <!-- End boxes --> 
        <!-- Start contact form --> 
                <div class="col-12 contact-content">
            <h6>برای تماس با پشتیبانی همچنین می توانید از از فرم زیر استفاده کنید:</h6> 
                </div>    
 
                
                <div class="col_12 cont-form"> 
        <?php echo do_shortcode('[contact-form-7 id="31" title="فرم تماس"]'); ?>
        </div>
        <!-- End contact form --> 
            </div>
                </div>
<?php get_footer(); ?>