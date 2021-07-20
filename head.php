<!DOCTYPE html>
<html lang="ja">
<head>
    <?php $path = get_template_directory_uri();?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techmi Website</title>

    <link rel="icon" type="image/x-icon" href="<?php echo $path ?>/favicon.ico">
    
    <link rel="stylesheet" href="<?php echo $path ?>/styles/reset.css">
    <link rel="stylesheet" href="<?php echo $path ?>/styles/modaal.css">
    <link rel="stylesheet" href="<?php echo $path ?>/styles/slick.css">
    <link rel="stylesheet" href="<?php echo $path ?>/styles/slick-theme.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://sdk.form.run/js/v2/formrun.js"></script>
    <script src="https://kit.fontawesome.com/b8b46f4330.js" crossorigin="anonymous"></script>
    <script src="<?php echo $path ?>/script/parallax.js"></script>
    <script src="<?php echo $path ?>/script/exif.js"></script>
    <script src="<?php echo $path ?>/script/jquery.binarytransport.js"></script>
    <script src="<?php echo $path ?>/script/encoding.min.js"></script>
    <script src="<?php echo $path ?>/script/modaal.js"></script>
    <script src="<?php echo $path ?>/script/jquery.particleground.js"></script>
    <script src="<?php echo $path ?>/script/jquery.particleground.min.js"></script>
    <script src="<?php echo $path ?>/script/particle.js"></script>
    <script src="<?php echo $path ?>/script/slick.min.js"></script>
    <script src="https://unpkg.com/ityped@1.0.3"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0H5W411RHG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-0H5W411RHG');
    </script>

    <?php wp_head(); ?>
</head>
<body <?php body_class();?> allowtransparency="true">
    <?php wp_body_open();?>