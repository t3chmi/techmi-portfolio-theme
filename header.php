<?php include('head.php') ?>

<div class="js-loading">
        <img src="<?php echo $path ?>/images/techmilogo.png" class="js-loading__image">
    </div>
    <header class="p-menu">
        <input type="checkbox" class="c-nav--toggle">
        <i class="fa-nav fas fa-bars"></i>
        <img src="<?php echo $path ?>/images/techmilogo.png" class="c-sitelogo">
        <h1 class="c-sitename c-text--shadow">Techmi Website</h1>
        <nav class="p-menu__nav">
            <ul class="p-menu__list">
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--white" href="<?php echo get_home_url()?>/#about">
                        About me
                    </a>
                </li>
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--white" href="<?php echo get_home_url()?>#services">
                        Services
                    </a>
                </li>
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--white" href="<?php echo get_home_url()?>#works">
                        Works
                    </a>
                </li>
                <li class="c-listelm p-menu__listelm">
                    <a class="c-link p-menu__listlink c-text--shadow c-effect__underline c-effect__underline--white" href="<?php echo get_home_url()?>#contact">
                        Contact
                    </a>
                </li>
            </ul>
            <ul class="p-menu__iconlist">
                <li class="c-menu__iconlistelm">
                    <a href="#contact" class="c-link p-menu__listlink c-text--shadow">
                        <i class="fab fa-twitter c-iconlistelm c-twitter--color"></i>
                    </a>
                </li>
                <li class="c-menu__iconlistelm">
                    <a href="#contact" class="c-link p-menu__listlink c-text--shadow">
                        <i class="fab fa-instagram c-iconlistelm c-instagram--color"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <section id="top" class="p-top--low c-effect--brightness ">
        <div class="p-top-bg particles">
            <span id="top-copy" class="js-iTyped">
            </span>
        </div>
    </section>