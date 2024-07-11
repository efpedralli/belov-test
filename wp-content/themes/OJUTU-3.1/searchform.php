<form role="search" method="get" class="blog_busca" action="<?php echo home_url( '/' ); ?>" >
	<div class="busca_wrapper">
		<input type="text" placeholder="Pesquisar" value="<?php the_search_query(); ?>" name="s" id="blog_input" class="M-20-2-9" />
		<input type="submit" id="busca_botao" value="" />
	</div>
</form>