<?php get_header(); ?>

<div class="container container-smaller">
   
   <section>
     <div class="mb-16">
         <h1 class="text-content text-3xl font-light text-center">
            <?php printf(__('Szukasz: %s', 'your-theme-textdomain'), '<span class="text-primary">' . get_search_query() . '</span>'); ?>
        </h1>
    </div>

    <?php if (have_posts()) : ?>
        <div class="search-results">
            <?php while (have_posts()) : the_post(); ?>
                <article class="search-results__item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2 class="entry-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <?php if (!empty(get_the_excerpt())) : ?>


                    <div class="text-content mt-3">
                        <?php the_excerpt(); ?>
                    </div>

                        <?php endif; ?>
                </article>
            <?php endwhile; ?>

            <div class="search-results__pagination">
                <?php
                // Pagination
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('&laquo; Wstecz', 'domrel-theme'),
                    'next_text' => __('Dalej &raquo;', 'domrel-theme'),
                ));
                ?>
            </div>
        </div>
    <?php else : ?>
        <div class="no-results not-found text-content pb-20">
            <h2><?php _e('Brak wyników', 'domrel-theme'); ?></h2>
            <p><?php _e('Przepraszamy, ale nie udało się znaleźć szukanej rzeczy na stronie.', 'domrel-theme'); ?></p>
        </div>
    <?php endif; ?>
   </section>
</div>

<?php get_footer() ?>