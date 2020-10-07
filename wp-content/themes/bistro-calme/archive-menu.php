<?php get_header(); ?>

    </header>
    
    <h2 class="pageTitle">メニュー<span>MENU</span></h2>
    
    <?php get_template_part('template-parts/breadcrumb'); ?>
    <main class="main">
        <section class="sec">
            <div class="container">
                <div class="sec_header">
                    <h2 class="title title-jp">フード</h2>
                    <span class="title title-en">FOOD</span>
                </div>
                <div class="row justify-content-center">

                    <?php if ( have_posts() ) :?>
                        <?php while (have_posts() ) : the_post(); ?>
                    <div class="col-md-3">
                            <?php get_template_part('template-parts/loop','menu'); ?>
                        <section class="menu">
                            <a href="#">
                                <figure class="menu_pic">
                                    <img src="./assets/img/menu/menu-1@2x.jpg" alt="">
                                </figure>
                                <h3 class="menu_title">メニュー名が入ります</h3>
                                <p class="menu_price">800円</p>
                                <div class="menu_desc">
                                    <p>
                                        概要が入ります。概要が入ります。概要が入ります。概要が入ります。
                                    </p>
                                </div>
                            </a>
                        </section>
                    </div>
                    
                    <div class="col-md-3">
                        <section class="menu">
                            <a href="#">
                                <figure class="menu_pic">
                                    <img src="./assets/img/menu/menu-2@2x.jpg" alt="">
                                </figure>
                                <h3 class="menu_title">メニュー名が入ります</h3>
                                <p class="menu_price">800円</p>
                                <div class="menu_desc">
                                    <p>
                                        概要が入ります。概要が入ります。概要が入ります。概要が入ります。
                                    </p>
                                </div>
                            </a>
                        </section>
                    </div>
                    
                    <div class="col-md-3">
                        <section class="menu">
                            <a href="#">
                                <figure class="menu_pic">
                                    <img src="./assets/img/menu/menu-3@2x.jpg" alt="">
                                </figure>
                                <h3 class="menu_title">メニュー名が入ります</h3>
                                <p class="menu_price">800円</p>
                                <div class="menu_desc">
                                    <p>
                                        概要が入ります。概要が入ります。概要が入ります。概要が入ります。
                                    </p>
                                </div>
                            </a>
                        </section>
                    </div>
                    
                    <div class="col-md-3">
                        <section class="menu">
                            <a href="#">
                                <figure class="menu_pic">
                                    <img src="./assets/img/menu/menu-4@2x.jpg" alt="">
                                </figure>
                                <h3 class="menu_title">メニュー名が入ります</h3>
                                <p class="menu_price">800円</p>
                                <div class="menu_desc">
                                    <p>
                                        概要が入ります。概要が入ります。概要が入ります。概要が入ります。
                                    </p>
                                </div>
                            </a>
                        </section>
                    </div>
                    
                    <div class="col-md-3">
                        <section class="menu">
                            <a href="#">
                                <figure class="menu_pic">
                                    <img src="./assets/img/menu/menu-5@2x.jpg" alt="">
                                </figure>
                                <h3 class="menu_title">メニュー名が入ります</h3>
                                <p class="menu_price">800円</p>
                                <div class="menu_desc">
                                    <p>
                                        概要が入ります。概要が入ります。概要が入ります。概要が入ります。
                                    </p>
                                </div>
                            </a>
                        </section>
                    </div>
                    
                    <div class="col-md-3">
                        <section class="menu">
                            <a href="#">
                                <figure class="menu_pic">
                                    <img src="./assets/img/menu/menu-6@2x.jpg" alt="">
                                </figure>
                                <h3 class="menu_title">メニュー名が入ります</h3>
                                <p class="menu_price">800円</p>
                                <div class="menu_desc">
                                    <p>
                                        概要が入ります。概要が入ります。概要が入ります。概要が入ります。
                                    </p>
                                </div>
                            </a>
                        </section>
                    </div>
                    
                    <div class="col-md-3">
                        <section class="menu">
                            <a href="#">
                                <figure class="menu_pic">
                                    <img src="./assets/img/menu/menu-7@2x.jpg" alt="">
                                </figure>
                                <h3 class="menu_title">メニュー名が入ります</h3>
                                <p class="menu_price">800円</p>
                                <div class="menu_desc">
                                    <p>
                                        概要が入ります。概要が入ります。概要が入ります。概要が入ります。
                                    </p>
                                </div>
                            </a>
                        </section>
                    </div>
                    
                    <div class="col-md-3">
                        <section class="menu">
                            <a href="#">
                                <figure class="menu_pic">
                                    <img src="./assets/img/menu/menu-8@2x.jpg" alt="">
                                </figure>
                                <h3 class="menu_title">メニュー名が入ります</h3>
                                <p class="menu_price">800円</p>
                                <div class="menu_desc">
                                    <p>
                                        概要が入ります。概要が入ります。概要が入ります。概要が入ります。
                                    </p>
                                </div>
                            </a>
                        </section>
                    </div>
                    
                </div>
            </div>
        </section>
        
        
        <section class="sec">
            <div class="container">
                <div class="sec_header">
                    <h2 class="title title-jp">ドリンク・デザート</h2>
                    <span class="title title-en">DRINK-DESSERT</span>
                </div>
                <div class="row justify-content-center">
                    
                    <div class="col-md-3">
                        <section class="menu">
                            <a href="#">
                                <figure class="menu_pic">
                                    <img src="./assets/img/menu/menu-9@2x.jpg" alt="">
                                </figure>
                                <h3 class="menu_title">メニュー名が入ります</h3>
                                <p class="menu_price">800円</p>
                                <div class="menu_desc">
                                    <p>
                                        概要が入ります。概要が入ります。概要が入ります。概要が入ります。
                                    </p>
                                </div>
                            </a>
                        </section>
                    </div>
                    
                    <div class="col-md-3">
                        <section class="menu">
                            <a href="#">
                                <figure class="menu_pic">
                                    <img src="./assets/img/menu/menu-10@2x.jpg" alt="">
                                </figure>
                                <h3 class="menu_title">メニュー名が入ります</h3>
                                <p class="menu_price">800円</p>
                                <div class="menu_desc">
                                    <p>
                                        概要が入ります。概要が入ります。概要が入ります。概要が入ります。
                                    </p>
                                </div>
                            </a>
                        </section>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
    
