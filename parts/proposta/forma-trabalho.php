<?php
$urlTema = get_template_directory_uri();
$img = '6441'; // producao
// $img = '6087'; // local
?>
<div id="forma-trabalho" class="area-jump"></div>
<section class="container">
    <div class="prop-wrap-timeline">
        <div class="w-layout-vflex prop-wrap-timeline-fixed">
            <h2 class="prop-intro-chamada mb-0">Como funciona</h2>
            <div class="tw-balance">Entenda o passo a passo da produção de sites.</div>

            <?php echo wp_get_attachment_image($img,'full', '', [
                'class' => 'home-intro-img',
            ]); ?>
        </div>
        <div class="w-layout-vflex prop-timeline">
            <div class="timeline">
                <div data-w-id="6fd14137-c52c-2d99-1152-dfd460833302" class="timeline-full"></div>
            </div>

            <?php if ( have_rows( 'proposta_passos' ) ) : $i=0; ?>
                <?php $count = count(get_field('proposta_passos')); ?>
                <?php while ( have_rows( 'proposta_passos' ) ) : $i++; the_row(); ?>
                    <?php $titulo = get_sub_field( 'titulo' ); ?>
                    <?php $plataforma = get_sub_field( 'plataforma' ); ?>
                    <?php $descricao = get_sub_field( 'descricao' ); ?>

                    <div class="w-layout-vflex prop-timeline-box<?php echo $count == $i ? ' timeline-end': ''; ?>">
                        <div class="timeline-dot"></div>
                        
                        <h2><?php echo wp_strip_all_tags( $titulo ); ?></h2>

                        <?php echo wp_kses_post($descricao); ?>
                        
                        <?php if($plataforma !== 'none' ) :?>
                            <img src="<?php echo $urlTema; ?>/assets/images/logo-<?php echo esc_attr( $plataforma ); ?>.svg" class="plataforma-logo">
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            
        </div>
    </div>
</section>