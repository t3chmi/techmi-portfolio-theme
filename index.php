
    <?php include('head.php'); ?>

    <div class="js-loading">
        <img src="<?php echo $path ?>/images/techmilogo.png" class="js-loading__image">
    </div>
    <header class="p-menu">
        <input type="checkbox" class="c-nav--toggle">
        <i class="fa-nav fas fa-bar"></i>
        <div class="p-bars">
            <div class="c-bars__bar1"></div>
            <div class="c-bars__bar2"></div>
            <div class="c-bars__bar3"></div>
        </div>
        <img src="<?php echo $path ?>/images/techmilogo.png" class="c-sitelogo">
        <h1 class="c-sitename c-text--shadow">Techmi Website</h1>
        <nav class="p-menu__nav">
            <ul class="p-menu__list">
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--white js-jump" data-to="#about">
                        About me
                    </a>
                </li>
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--white js-jump" data-to="#services">
                        Services
                    </a>
                </li>
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--white js-jump" data-to="#messages">
                        Messages
                    </a>
                </li>
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--white js-jump" data-to="#prices">
                        Prices
                    </a>
                </li>
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--white js-jump" data-to="#works">
                        Works
                    </a>
                </li>
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--white js-jump" data-to="#contact">
                        Contact
                    </a>
                </li>
            </ul>
            <ul class="p-menu__iconlist">
                <li class="c-menu__iconlistelm">
                    <a href="https://twitter.com/t3chmi" class="c-link p-menu__listlink c-text--shadow">
                        <i class="fab fa-twitter c-iconlistelm c-twitter--color"></i>
                    </a>
                </li>
                <li class="c-menu__iconlistelm">
                    <a href="https://instagram.com/t3chmi" class="c-link p-menu__listlink c-text--shadow">
                        <i class="fab fa-instagram c-iconlistelm c-instagram--color"></i>
                    </a>
                </li>
                <li class="c-menu__iconlistelm">
                    <a href="https://github.com/t3chmi" class="c-link p-menu__listlink c-text--shadow">
                        <i class="fab fa-github c-iconlistelm c-github--color"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <section id="top" class="c-effect--brightness">
        <div class="p-top-bg particles">
            <span id="top-copy" class="js-iTyped">
            </span>
        </div>
    </section>

    <section id="about" class="js-fade-in js-fade-in--up">
        <div class="p-section-bg--skew"></div>
        <div class="c-width-restriction">
            <h2 class="c-section-name c-effect__underline c-effect__underline--black">
                About me
            </h2>
            <div class="p-about-container">
                <img src="<?php echo $path?>/images/me.png" class="c-me__photo">
                <div class="c-jpfont c-jptext c-me__description">
                    <h3>Techmi [?????????]</h3>
                    <p>
                        ??????????????????Web??????????????????
                        ??????????????????????????????????????????????????????????????????????????????
                        ????????????????????????????????????????????????????????????
                        ??????????????????MATLAB????????????IoT?????????????????????????????????????????????????????????
                        ??????????????????????????????????????????????????????2020???????????????<br>
                        <br>
                        ?????????Web???????????????????????????????????????????????????????????????????????????????????????
                        ?????????????????????IPA????????????????????????????????????<br>
                        <br>
                        ???????????????HTML/CSS(SASS)???JavaScript(jQuery)???WordPress ?????????
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="js-fade-in js-fade-in--up">
        <div class="p-section-bg--skew"></div>
        <div class="c-width-restriction">
            <h2 class="c-section-name c-effect__underline c-effect__underline--black">
                Services
            </h2>
            <?php query_posts(array(
                'post_type' => 'services',
                'ignore_sticky_posts' => false,
                'posts_per_page' => 9, 
                'paged' => get_query_var('paged'), //??????????????????
                'order' => 'ASC'
            ));
            ?>

            <div class="p-services-container">
                
                <?php
                    if (have_posts()) : while (have_posts()) : the_post();
                        ?><div class="p-services-wrapper js-fade-in js-fade-in--up">
                        <?php
                        $image_id = get_post_meta($post->ID, 'image', true);
                        $text = get_post_meta($post->ID, 'description', true);
                        $url = wp_get_attachment_image_src($image_id, 'big');
                        ?>
                            <img src="<?php echo is_image($url[0])?>" class="c-services__image">
                            <p class="c-jptext c-jpfont c-services__description">
                                <?php echo $text ?>
                                </p>
                        </div>
                        <?php 
                    endwhile; endif; 
                ?>
            </div>
        </div>
    </section>

    <section id="messages" class="js-fade-in js-fade-in--up">
        <div class="p-section-bg--skew"></div>
        <h2 class="c-section-name c-effect__underline c-effect__underline--black">
            Messages
        </h2>
        <div class="p-message-container">
            <div class="p-message-wrapper js-fade-in js-fade-in--up">
                <img src="<?php echo $path.'/images/for_company.jpg' ?>" alt="Web??????????????????" class="c-message__image">
                <div class = "p-message-text">
                    <h3>Web??????????????????</h3>
                    <p>
                    ???????????????????????????????????????????????????????????????????????????
                    ?????????HTML????????????????????????WordPress?????????CMS??????????????????????????????
                    ????????????????????????????????????????????????????????????????????????????????????????????????
                    </p>
                </div>
            </div>
            <div class="p-message-wrapper js-fade-in js-fade-in--up">
                <img src="<?php echo $path.'/images/for_freelance.jpg' ?>" alt="????????????????????????" class="c-message__image">
                <div class = "p-message-text">
                    <h3>????????????????????????</h3>
                    <p>
                    ???????????????????????????????????????????????????????????????????????????????????????????????????????????????
                    ???????????????????????????????????????????????????????????????????????????
                    ?????????????????????????????????????????????????????????????????????????????????
                    </p>
                </div>
            </div>
            <div class="p-message-wrapper js-fade-in js-fade-in--up">
                <img src="<?php echo $path.'/images/for_designer.jpg' ?>" alt="?????????????????????" class="c-message__image">
                <div class = "p-message-text">
                    <h3>?????????????????????</h3>
                    <p>
                    ?????????????????????????????????????????????????????????????????????????????????????????????????????????
                    ??????????????????????????????????????????????????????????????????????????????????????????
                    ???????????????????????????????????????????????????????????????????????????????????????
                    </p>
                </div>
            </div>
        </div>
        <a class=" js-jump" data-to="#contact">
            <div class="c-btn--flat">
                <span>??????????????????????????????</span>
            </div>
        </a>
    </section>

    <section id="prices" class="js-fade-in js-fade-in--up">
        <div class="p-section-bg--skew"></div>
        <div class="c-width-restriction c-width-restriction--narrow">
            <h2 class="c-section-name c-effect__underline c-effect__underline--black">
                Prices
            </h2>
            <p>
                ?????????????????????(?????????)?????????<br>
                ??????????????????????????????????????????????????????
            </p>
            <div class="p-price-container c-jpfont">
                <div class="p-price-wrapper">
                    <div class="c-price-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <span class="c-price-item">
                        ????????????????????????????????????
                    </span>
                    <span class="c-price-cost">20,000???~</span>
                </div>
                <div class="p-price-wrapper">
                    <div class="c-price-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <span class="c-price-item">
                        ?????????????????????????????????
                    </span>
                    <span class="c-price-cost">6,000???~</span>
                </div>
                <div class="p-price-wrapper">
                    <div class="c-price-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <span class="c-price-item">
                        ?????????????????????????????????????????????
                    </span>
                    <span class="c-price-cost">30,000???~</span>
                </div>
                <div class="p-price-wrapper">
                    <div class="c-price-icon">
                        <i class="fas fa-desktop"></i>
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <span class="c-price-item">
                        ????????????????????????
                    </span>
                    <span class="c-price-cost">5,000???~</span>
                </div>
                <div class="p-price-wrapper">
                    <div class="c-price-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <span class="c-price-item">
                        ??????SEO??????
                    </span>
                    <span class="c-price-cost">10,000???~</span>
                </div>
                <div class="p-price-wrapper">
                    <div class="c-price-icon">
                        <i class="fas fa-code"></i>
                        <i class="fab fa-wordpress"></i>
                    </div>
                    <span class="c-price-item">
                        ?????????????????? + WordPress???
                    </span>
                    <span class="c-price-cost">80,000???~</span>
                </div>
                <div class="p-price-wrapper">
                    <div class="c-price-icon">
                        <i class="fab fa-wordpress"></i>
                    </div>
                    <span class="c-price-item">
                        ??????????????????WordPress???
                    </span>
                    <span class="c-price-cost">50,000???~</span>
                </div>
            </div>
        </div>
    </section>

    <section id="works" class="js-fade-in js-fade-in--up">
        <div class="p-section-bg--skew"></div>
        <div class="c-width-restriction">
            <h2 class="c-section-name c-effect__underline c-effect__underline--black">
                Works
            </h2>
            <?php query_posts(array(
                'post_type' => 'works',
                'ignore_sticky_posts' => false,
                'posts_per_page' => 3, 
                'paged' => get_query_var('paged') //??????????????????
            ));
            ?>

            <?php include('works.php'); ?>
        </div>
    </section>


    <section id="contact" class="c-width-restriction c-width-restriction--narrow???js-fade-in js-fade-in--top">
        <div class="p-section-bg--skew"></div>
        <h2 class="c-section-name c-effect__underline c-effect__underline--black  js-fade-in js-fade-in--up">
            Contact
        </h2>
        <div class="c-width-restriction c-width-restriction--narrow  js-fade-in js-fade-in--up">
            <?php 
                $contact_id = get_page_by_path("contact");
                $contact_page = get_page($contact_id->ID);
                echo apply_filters('the_content', $contact_page->post_content);
            ?>
        </div>
    </section>
    <aside class="p-menu js-fade-in js-fade-in--left">
        <nav class="p-menu__nav c-box--shadow">
            <ul class="p-menu__list">
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--blue c-scale--zoom js-jump" data-to="html">
                        <i class="fas fa-chevron-up fa--side-text fa-up--text"></i>
                    </a>
                </li>
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--blue c-scale--zoom js-jump" data-to="#about">
                        <i class="far fa-address-card fa--side-text fa-address-card--text"></i>
                    </a>
                </li>
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--blue c-scale--zoom js-jump" data-to="#services">
                        <i class="fas fa-laptop fa--side-text fa-services--text"></i>
                    </a>
                </li>
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--blue c-scale--zoom js-jump" data-to="#messages">
                        <i class="far fa-comment-dots fa--side-text fa-messages--text"></i>
                    </a>
                </li>
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--blue c-scale--zoom js-jump" data-to="#prices">
                        <i class="fas fa-yen-sign fa--side-text fa-prices--text"></i>
                    </a>
                </li>
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--blue c-scale--zoom js-jump" data-to="#works">
                        <i class="fas fa-briefcase fa--side-text fa-works--text"></i>
                    </a>
                </li>
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--blue c-scale--zoom js-jump" data-to="#contact">
                        <i class="far fa-envelope fa--side-text fa-contact--text"></i>
                    </a>
                </li>
            </ul>
            <ul class="p-menu__iconlist">
                <li class="c-menu__iconlistelm">
                    <a href="https://twitter.com/t3chmi" class="c-link p-menu__listlink c-text--shadow">
                        <i class="fab fa-twitter c-iconlistelm c-twitter--color"></i>
                    </a>
                </li>
                <li class="c-menu__iconlistelm">
                    <a href="#contact" class="c-link p-menu__listlink c-text--shadow">
                        <i class="fab fa-instagram c-iconlistelm c-instagram--color"></i>
                    </a>
                </li>
                <li class="c-menu__iconlistelm">
                    <a href="https://github.com/t3chmi" class="c-link p-menu__listlink c-text--shadow">
                        <i class="fab fa-github c-iconlistelm c-github--color"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>
    <footer class="c-effect--sepia">
        <div class="p-footer-container">
            <img src="<?php echo $path ?>/images/techmilogo.png" class="c-sitelogo">
            <span class="c-sitename">Techmi Website</span>
            <ul class="p-menu__list">
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--white js-jump" data-to="#about">
                        About me
                    </a>
                </li>
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--white js-jump" data-to="#services">
                        Services
                    </a>
                </li>
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--white js-jump" data-to="#messages">
                        Messages
                    </a>
                </li>
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--white js-jump" data-to="#prices">
                        Prices
                    </a>
                </li>
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--white js-jump" data-to="#works">
                        Works
                    </a>
                </li>
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--white js-jump" data-to="#contact">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    <script src="<?php echo $path ?>/script/user.js"></script>
        
</body>
</html>