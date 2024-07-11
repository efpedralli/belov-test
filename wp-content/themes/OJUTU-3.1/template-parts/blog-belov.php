<section class="section belov-blog-call">
    <div class="content belov-blog-call-content">
        <?php $args = array('posts_per_page' => 1,);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();?>

        <div class="blog-highlight">
            <?php the_post_thumbnail();
        $categories = get_the_category();
        if (!empty($categories)) {
            $link = get_category_link($categories[0]->term_id);
            ?>
            <a class="text-3 categories" href="<?php echo esc_url($link); ?>">
                <?php echo esc_html($categories[0]->name); ?>
            </a>
            <?php } ?>
            <a href="<?php the_permalink();?>">
                <h2 class="title-1"><?php the_title(); ?></h2>
            </a>
            <div class="meta-data text-2">
                <span><?php the_author(); ?></span> •
                <span><?php echo get_the_date();?></span>
            </div>
        </div>
        </a>
        <?php }
        } else {
            echo '<p>No posts were found</p>';
        }
        wp_reset_postdata();
        ?>

        <div class="blog-call-secondary">
            <?php
        $args = array(
            'posts_per_page' => 3,
            'offset' => 1,
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post(); ?>

            <div class="blog-call">
                <?php the_post_thumbnail(); ?>
                <div class="blog-call-text">

                    <?php $categories = get_the_category();
                if (!empty($categories)) {
                    $link = get_category_link($categories[0]->term_id);
                    ?>
                    <a class="text-1" href="<?php echo esc_url($link); ?>">
                        <?php echo esc_html($categories[0]->name); ?>
                    </a>
                    <?php } ?>
                    <a href="<?php the_permalink();?>">
                        <h3 class="title-2"><?php the_title(); ?></h3>
                    </a>
                    <div class="meta-data text-2 ">
                        <span><?php the_author(); ?></span> •
                        <span><?php echo get_the_date();?></span>
                    </div>
                </div>
            </div>

            <?php }
                } else {
                    echo '<p>No posts were found</p>';
                }
                wp_reset_postdata();
                ?>
        </div>
</section>