<?php 
$front = get_field('info_proj_front', $post->ID);
$back = get_field('info_proj_back', $post->ID);
$coautoria = get_field('info_proj_coautoria', $post->ID);
$programacao = get_field('info_proj_programacao', $post->ID);
$layout = get_field('info_proj_layout', $post->ID);
$impresso = get_field('info_proj_impresso', $post->ID);
$ilustracao = get_field('info_proj_ilustracao', $post->ID);
$idvisual = get_field('info_proj_idvisual', $post->ID);
$fotografia = get_field('info_proj_fotografia', $post->ID);
$lettering = get_field('info_proj_lettering', $post->ID);
$audiovisual = get_field('info_proj_audiovisual', $post->ID);
$animacao = get_field('info_proj_animacao', $post->ID); 
?>

<h4 class="hide-mobile"><?php esc_html_e( 'Outros profissionais neste projeto', 'afcwd2022' );?></h4>

<?php if($front) :?><div><strong class="cor-roxo">Front end:</strong> <?php echo wp_kses_post($front);?> </div> <?php endif; ?>
<?php if($back) :?><div><strong class="cor-roxo">Back-end:</strong> <?php echo wp_kses_post($back);?> </div> <?php endif; ?>
<?php if($coautoria) :?><div><strong class="cor-roxo">Co-autoria:</strong> <?php echo wp_kses_post($coautoria);?> </div> <?php endif; ?>
<?php if($programacao) :?><div><strong class="cor-roxo">Programação:</strong> <?php echo wp_kses_post($programacao);?> </div> <?php endif; ?>
<?php if($layout) :?><div><strong class="cor-roxo">Composição de layout:</strong> <?php echo wp_kses_post($layout);?> </div> <?php endif; ?>
<?php if($impresso) :?><div><strong class="cor-roxo">Projeto de papelaria:</strong> <?php echo wp_kses_post($impresso);?> </div> <?php endif; ?>
<?php if($ilustracao) :?><div><strong class="cor-roxo">Ilustração:</strong> <?php echo wp_kses_post($ilustracao);?> </div> <?php endif; ?>
<?php if($idvisual) :?><div><strong class="cor-roxo">Criação de marca:</strong> <?php echo wp_kses_post($idvisual);?> </div> <?php endif; ?>
<?php if($fotografia) :?><div><strong class="cor-roxo">Fotografia:</strong> <?php echo wp_kses_post($fotografia);?> </div> <?php endif; ?>
<?php if($lettering) :?><div><strong class="cor-roxo">Lettering:</strong> <?php echo wp_kses_post($lettering);?> </div> <?php endif; ?>
<?php if($audiovisual) :?><div><strong class="cor-roxo">Projeto audiovisual:</strong> <?php echo wp_kses_post($audiovisual);?> </div> <?php endif; ?>
<?php if($animacao) :?><div><strong class="cor-roxo">Animações:</strong> <?php echo wp_kses_post($animacao);?> </div> <?php endif; ?>