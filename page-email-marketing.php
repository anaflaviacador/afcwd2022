<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="container-medio has-text-align-center">
        <?php the_content(); ?>        
    </div>
<?php endwhile; ?>
<?php endif; ?>

<div class="container pb-4em">
    <?php get_template_part('parts/servicos/planos','email'); ?>
</div>


<h3 class="has-text-align-center">Apresentação da plataforma</h3>
<p class="has-text-align-center mb-2em">Conheça as vantagens e a interface do Sendy!</p>

<div class="container-medio mb-4em">
    <figure class="tutoriais-video"><iframe src="https://drive.google.com/file/d/1ES8RbyF-i4l3iW7Yk7jk43ESNdpYnqxS/preview" frameborder="0" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay"></iframe></figure>
</div>

<div class="mb-3em">&nbsp;</div>

<div class="pb-3em cor-roxo-claro-bg">
    <div class="container">
        <div class="has-text-align-center upper-titulo">
            <h2><?php _e( 'Perguntas <span class="titulo-cursiva cor-roxo">frequentes</span>', 'afcwd2022' ); ?></h2>
        </div>
        
        <div class="colunas-wrap num-2">
            <div class="coluna-item num-2">
                <?php afc_faq(array('planos','email','coluna-1'),'roxo'); ?>
            </div>

            <div class="coluna-item num-2">
                <?php afc_faq(array('planos','email','coluna-2'),'roxo'); ?>
            </div>
        </div>
    </div>
</div>


<?php get_template_part('parts/servicos/email-mkt','tutoriais'); ?>

<?php get_footer(); ?>