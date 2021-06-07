<?php
            $recentPosts = new WP_Query();
            $recentPosts->query('showposts=3');
            ?>
            <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
            <article class="col xl4 l4 m6 s12">
                       <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                        <span><?php the_excerpt(); ?></span>
                        
                    </article>
                    <?php endwhile; ?>