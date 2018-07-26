<!--<footer class="mt-5 bg-light">-->

<!--  <div class="container">-->

<!--    <?php if(is_active_sidebar('footer-widget-area')): ?>-->
<!--    <div class="row border-bottom pt-5 pb-4" id="footer" role="navigation">-->
<!--      <?php dynamic_sidebar('footer-widget-area'); ?>-->
<!--    </div>-->
<!--    <?php endif; ?>-->

<!--    <div class="row pt-3">-->
<!--      <div class="col">-->
<!--        <p class="text-center">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>-->
<!--      </div>-->
<!--    </div>-->

<!--  </div>-->

<!--</footer>-->
<footer>
  <div class="container container-foot clearfix">
    <div class="row">
      <div class="col-md-4">
        <div class="well well-lg">
          <img class="img-foot" src="/wp-content/uploads/2018/07/Logo.png" />
            <div class="identity">286 5th Ave.<br>New York, NY 10016<br>(212) 686-1177
            </div>

          </div>
      </div>
      <div class="col-md-4">
        <div class="well well-lg">
          <h4>Site Directory</h4>
          <dl>
            <!--<dt>Services</dt>-->
            <!--<dd><a href="/">Home</a></dd>-->
            <dd><a href="/residents">Residents</a></dd>
            <dd><a href="#">Owners</a></dd>

          </dl>
          <dl>
            <!--<dt>Pages</dt>-->
            <dd><a href="/">Home</a></dd>
            <dd><a href="/blog">Blog</a></dd>
            <dd><a href="/contact">Contact Us</a></dd>
          </dl>
          <span>&copy;<?php echo date('Y'); ?> Peridot Management Group</span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="well well-lg">
          <h4>Find Us Online</h4>
          <a href="https://www.facebook.com/NewYorkCityLocal/" target="_blank"><i class="fa fa-facebook-square"></i></a>
          <a href="https://www.instagram.com/peridotmgt/" target="_blank"></a>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<!--<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>-->
</body>
</html>
