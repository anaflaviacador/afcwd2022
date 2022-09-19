<?php $postid = get_the_ID(); ?>
<?php $terms = get_the_terms($postid,'categoria_blog'); ?>
<header>
    <h1><?php the_title();?></h1>
    <div class="post-meta">
        <?php if ($terms && ! is_wp_error($terms)) : $i=0;?>
            <ul role="list" class="post-grid-cats cor-azul">
                <?php foreach ($terms as $term) : $i++; ?>
                <li class="flexb-center" style="white-space:nowrap">
                    <?php if ($i > 1): ?><div class="currentcolor pl-10px pr-10px">●</div><?php endif; ?>
                    <div class="cor-grafite"><?php echo $term->name;?></div>
                </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div class="mb-10px ml-20px"><strong class="cor-cinza">
            <?php esc_html_e( 'No ar em', 'afcwd2022' ); ?>
            <time datetime="<?php echo get_the_time('Y-m-d h:i'); ?>" itemprop="datePublished"><?php echo get_the_time('M \d\e Y'); ?></time>
            <?php $u_time = get_the_time('U'); $u_modified_time = get_the_modified_time('U'); ?>
            <?php if ($u_modified_time >= $u_time + 86400) : ?>
                <?php $updated_date = get_the_modified_time('M \d\e Y'); ?>
                <?php esc_html_e( 'e atualizado em', 'afcwd2022' ); ?> <?php echo $updated_date; ?>
            <?php endif; ?>

        </strong></div>
    </div>
    <figure class="post-thumb">
        <?php if (has_post_thumbnail()) : ?>
            <?php echo the_post_thumbnail('large', array(
                'class' => 'fullwidth',
                // 'loading' => 'lazy'
            )); ?>
        <?php endif; ?>
    </figure>
<header>