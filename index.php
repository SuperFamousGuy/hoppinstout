<head>
<meta name="description" content="It's all about the beer in here.">
<meta name="keywords" content="hoppin, stout, beer, brew, crew, review, preview">
<meta name="author" content="Karl Kell">
<meta charset="UTF-8">
<title>Hoppinstout | Beer Review</title>
<link href='http://fonts.googleapis.com/css?family=Kite+One|Ewert' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<script type="text/javascript">var home_url = "<?php echo home_url()?>";</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/navigation.controller.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/navigation.view.js"></script>
</head>

<body>
<?php get_header(); ?> 
<div class="loop">
<?php if(have_posts()) {
    while(have_posts()) {
        the_post();
        echo '<div class="post">';
        the_title('<h2 class="post_head">','</h2>');
        the_post_thumbnail();
        the_content();
        echo '</div>';
    }
}
else {
    echo '<p>Sorry, no posts to list</p>';
} ?>
</div>
</body>
