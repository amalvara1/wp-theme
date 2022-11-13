<?php 
    /*

    Template name: Hero Image
    Template post Type: Page
    */

    get_header();

    if(have_posts()){
        while(have_posts()){
            the_post(); ?>

            <div class="hero-container">
                <div class="hero-image">
                    <?php the_post_thumbnail('full'); ?>
                </div>

                <div class="hero-title container">
                    <?php the_title(); ?>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <main class="col-md-9">
                        <section>
                            <?php the_content(); ?>
                        </section>
                    </main>
                    <aside class="col-md-3">
                        <?php get_sidebar(); ?>
                    </aside>


                </div>
            </div>

    <?php    } //end while loop
    } //end of if 

    get_footer(); ?>