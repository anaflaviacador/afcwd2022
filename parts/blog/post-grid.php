<?php global $post;
$nome = get_the_title($post->ID);
$terms = get_the_terms($post->ID,'categoria_blog');
?>
<div class="post-grid">
    <h3 class="post-grid-titulo"><?php echo $nome; ?></h3>
    <figure class="post-grid-thumb">
        <?php if (has_post_thumbnail($post->ID)) : ?>
            <?php echo the_post_thumbnail('afc_blog_thumb', array(
                'class' => 'post-grid-img',
                'loading' => 'lazy'
            )); ?>
        <?php endif; ?>
    </figure>

    <?php if ($terms && ! is_wp_error($terms)) : $i=0;?>
    <ul role="list" class="post-grid-cats cor-verde">
        <?php foreach ($terms as $term) : $i++; ?>
        <li class="flexb-center" style="white-space:nowrap">
            <?php if ($i > 1): ?><div class="currentcolor pl-10px pr-10px">●</div><?php endif; ?>
            <div class="cor-grafite"><?php echo $term->name;?></div>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    <a href="<?php echo get_the_permalink($post->ID); ?>" class="link-full w-inline-block"></a>
</div>