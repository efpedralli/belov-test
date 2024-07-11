<?php
get_header();
?>

<div class="section">
    <div class="content">

        <?php
		while ( have_posts() ) :
			the_post();

			the_content();

			if ( comments_open() || get_comments_number() ) :
				comments_template();
		endif;

		endwhile;
		?>

    </div>
</div>

<?php
get_sidebar();
get_footer();