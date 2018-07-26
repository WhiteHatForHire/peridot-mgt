<?php /* Template Name: Contact Page */ ?>

<?php get_header(); ?>

    
<!-- START MAIN CONTENT -->
<div class="main-content contact-bg">
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
<!-- END MAIN CONTENT -->
<?php get_footer(); ?>