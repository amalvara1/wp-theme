<?php get_header(); ?>
    <main>

        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post(); ?>

                    <div class="individual-post">
                        <div class="featured-image">
                            <?php the_post_thumbnail('thumbnail'); ?>
                            
                        </div>
                        <div class="text-container">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p class="excerpt"><?php get_the_excerpt(); ?></p>
                        </div>

                    </div>
                <?php
                }//End While

                //Pagination
                PortfolioPagination();
            }
        ?>
    </main>
<?php get_footer(); ?>