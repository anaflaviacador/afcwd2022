
  <div class="nav-interna-wrap">
    <nav class="nav-interna">
      <div class="container padding-0">
        <div class="nav-interna-container overflowy">
          <ul role="list" class="nav-interna-topicos">
			<?php $terms = get_terms( array( 'taxonomy' => 'categoria_blog', 'hide_empty' => true ) ); ?>
			<?php foreach ($terms as $term) : ?>
				<li class="nav-interna-topicos-li">
					<a href="<?php echo get_term_link($term->term_id, 'categoria_blog');?>" class="nav-interna-link"><?php echo $term->name;?></a>
				</li>
			<?php endforeach; ?>
          </ul>
          <?php get_template_part('parts/servicos/nav-interna-bt'); ?>
        </div>
      </div>
      <div class="nav-interna-gradiente"></div>
    </nav>
  </div>