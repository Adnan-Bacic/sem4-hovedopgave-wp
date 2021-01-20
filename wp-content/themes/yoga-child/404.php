<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package yoga
 */
get_header(); ?>
  <div class="clearfix"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center yoga-section">
        <div class="yoga-error-404">
          <h1><?php esc_attr_e('4','yoga'); ?><i class="fa fa-exclamation-circle"></i><?php esc_attr_e('4','yoga'); ?></h1>
          <h4><?php esc_attr_e('Oops! Denne side kan ikke findes.','yoga'); ?></h4>
          <p><?php esc_attr_e("Det ser ud til at intet var fundet her.","yoga"); ?></p>
          <a href="<?php echo esc_url(home_url());?>" onClick="history.back();" class="btn btn-theme"><?php esc_attr_e('Gå tilbage til forsiden','yoga'); ?></a> </div>
      </div>
    </div>
  </div>
<?php
get_footer();