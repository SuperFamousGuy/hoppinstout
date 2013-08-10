<div class="header">
<div class="logo_container">
   <a href="<?php echo home_url(); ?>">
   <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" />
   </a>
</div>
<?php wp_nav_menu(array(
           'menu'           =>'Navigation',
           'menu_class'     =>'navigation',
           'menu_id'        =>'navigation',
           'container_class'=>'navigation',
           'container_id'   =>'navigation',
           'sort_column'    =>'menu_order',
           'theme_location' =>'header'));
?>
</div>
