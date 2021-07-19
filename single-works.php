<?php include('head.php');?>
    <div class="js-loading ">
        <img src="<?php echo $path ?>/images/techmilogo.png" class="js-loading__image">
    </div>
    <div class="particles p-works-bg"></div>
    <div class="width-restriction">
        <div class="works-container">
            <h1 class="c-works-article__title"><?php echo the_title(); ?></h1>
        </div>
        <div class="fade js-swiper__container">
            <?php
                for($i = 1; $i <= 3; $i++){
                    $image_id = get_post_meta($post->ID, 'image'.strval($i), true);
                    $url = wp_get_attachment_image_src($image_id, 'big');
                    if($url == true):
                    ?>
                        <img src="<?php echo $url[0]?>" class="js-swiper__wrapper">
                <?php endif;}
            ?>
        </div>
        <script>
            //works スライダー
            jQuery(function(){
                $('.fade').slick({
                    dots: true,
                    infinite: true,
                    speed: 500,
                    fade: true,
                    cssEase: 'linear',
                    arrows: true,
                    autoplay: true,
                    autoplaySpeed: 4000
                });
            });
        </script>
        <div class="works-container">
            <div class="works-tag-container">
                <?php echo the_tags('','',''); ?>
            </div>
            <div class="c-works-article__content">
                <a href="<?php echo get_post_meta($post->ID, 'url', true)?>" target="_blank" rel="noopener noreferrer" style="background:none;">
                    <div class="c-btn--flat">
                        <span>
                            閲覧する
                        </span>
                    </div>
                </a>
                <p>
                    <?php echo nl2br(get_post_meta($post->ID, 'description', true)); ?>
                </p>
            </div>
        </div>
    </div>
    <script src="<?php echo $path ?>/script/user.js"></script>
    <script>
        jQuery(function(){
            $('#wpadminbar').css('display','none');
        });
    </script>
</body>
</html>