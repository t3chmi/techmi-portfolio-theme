<div class="p-gallery-container">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <?php $url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'big')?>
        <div class="p-gallery-wrapper js-fade-in js-fade-in--up">
            <a href="<?php the_permalink(); ?>" class="c-gallery__link c-effect--gray iframe-open">
                <div class="c-gallery__title"><?php the_title();?></div>
                <img src="<?php echo is_image($url[0])?>" alt="<?php the_title();?>" class="c-gallery__image">
            </a>
        </div>
    <?php endwhile; endif; ?>
</div>