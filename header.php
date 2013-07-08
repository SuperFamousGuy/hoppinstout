<div class="header">
<div class="logo_container">
   <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" />
</div>
<?php wp_nav_menu(array(
           'menu'           =>'Navigation',
           'sort_column'    =>'menu_order',
           'menu_class'     =>'navigation',
           'theme_location' =>'header'));
?>
</div>
