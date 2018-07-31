<?php /* Template Name: Contact Page */ ?>

<?php get_header(); ?>

    
<!-- START MAIN CONTENT -->
    <div class="banner">
<div class="main-content contact-bg">
      <video autoplay loop muted class="banner__video" poster="/wp-content/themes/b4st-master/img/1fallback.jpg">
        <source src="/wp-content/themes/b4st-master/img/newyorkvidwebm.webm" type="video/webm">
        <source src="/wp-content/themes/b4st-master/img/newyorkvid4.mp4" type="video/mp4">
      </video>
   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 flex">
                <div class="center-form">
                    <h1>Send us a Message</h1>
                    <p><em>We'll get back to you soon</em></p>
                    <?php the_content(); ?>
                </div><!-- entry -->
                
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
    
   
</div>
<?php get_footer(); ?>
    </div>
<!-- END MAIN CONTENT -->