<?php get_header(); ?>
    <main>

        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post(); ?>

                    <div class="single-post">
                        <div class="featured-image">
                            <?php the_post_thumbnail('large'); ?>
                            
                            <?php
                                //Display Author and publish Date
                                post_data();
                            ?>
                                 
                        </div>
                        <div class="text-container">
                            <h2><?php the_title(); ?></h2>
                            <p class="body-content"><?php echo the_content(); ?></p>
                        </div>

                    </div>
                <?php
                }
            }
        ?>
    </main>
    <aside>
        <?php
            $args = array(
                'post_type'     => 'post',
                'post-status'   => 'publish',
                'posts-per-page' =>  3,
                'order'         => 'DESC',
                'orderby'       =>  'rand',
                'category_name' =>  'products'

            );


            $query = new WP_Query($args);

                if($query->have_posts()){
                    while($query->have_posts()){
                        $query->the_post(); ?>
                    <div class="individual-post">
                        <div class="featured-image">
                            <?php the_post_thumbnail('thumbnail'); ?>
                            
                        </div>
                        <div class="text-container">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
                        </div>

                    </div>
                   <?php }
                }
        ?>
    </aside>
<?php get_footer(); ?>