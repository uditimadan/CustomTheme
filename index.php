<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>
    <?php get_header(); ?>

    <div id="content" style="text-align:center; padding: 50px;">
        <h1 style="font-family: 'Cursive', sans-serif; font-size: 3rem; color: #ff69b4;">
            Welcome to the Pink Coquette Theme!
        </h1>
        <p style="font-family: 'Cursive', sans-serif; font-size: 1.5rem; color: #ff1493;">
            This is a cute, fun, girly theme with lots of pink vibes!
        </p>
    </div>

    <?php get_footer(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
</body>
</html>
