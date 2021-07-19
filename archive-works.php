<?php include('header.php') ?>
<section id="works">
    <div class="p-section-bg--skew"></div>
    <div class="c-width-restriction">
        <h2 class="c-section-name c-effect__underline c-effect__underline--black">
            Works
        </h2>
        <span class="c-tagname">
        <?php $tag = single_tag_title(); ?>
        </span>
        <?php
        get_posts(array(
            'post_type' => 'works',
            'ignore_sticky_posts' => false,
            'posts_per_page' => 9, 
            'paged' => get_query_var('paged'), //一覧分割設定
            'tag='.$tag
        ));
        ?>
        <?php include('works.php'); ?>
    </div>
</section>
<?php include('footer.php') ?>