<?php get_header(); ?>
<div class="blog-bg">
  <div class="col-lg-12">
    <div class="blog-content">
      <main class="container mt-5 main-content">
        <div class="row">
      
          <div class="col-sm">
            <div id="content" role="main">
      
              <?php get_template_part('loops/index-loop'); ?>
      
            </div><!-- /#content -->
          </div>
      
          <?php get_sidebar(); ?>
      
        </div><!-- /.row -->
      </main><!-- /.container -->
      
    </div>
  </div>
</div>
<?php get_footer(); ?>
