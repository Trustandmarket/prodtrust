
<?php get_template_part('includes/header'); ?>
<div class="menu-background"></div>
<div class="container">
  <div class="row">

    <div class="col-xs-12 col-sm-12">
      <div id="content" role="main">
        <?php tha_content_before(); ?>
        <div class="woocommerce">
            <?php woocommerce_content(); ?>
        </div>
      </div><!-- /#content -->      
    </div>

    <!--<div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">-->
    <!--  <?php get_template_part('includes/sidebar'); ?>-->
    <!--</div>-->

  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
