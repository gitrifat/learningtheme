<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class('example'); ?>>  <!--This body class for the test we can put here custom class name-->
<?php wp_body_open(); ?>
    <p>Hello?!</p>


    <?php wp_footer(); ?>
</body>
</html>