<?php
$urlTema = get_template_directory_uri();

$horario = '';
$avatar = '';
$avatar_off = '';
$frases = '';
$descricoes = '';
$numero = '';
$form = '';
$agora = current_time('H');

if(class_exists('ACF')) {
	$whats = get_field('whatsapp_bt','option');
    $horario = get_field('whatsapp_atendimento','option');
    $avatar = get_field('whatsapp_avatar','option');
    $avatar_off = get_field('whatsapp_avatar_off','option');
    $frases = get_field('whatsapp_frases','option');
    $descricoes = get_field('whatsapp_descricoes','option');   
    $numero = get_field('whatsapp_numero','option');   
	$form = get_field('whatsapp_wpforms','option');
}

if($whats) {
echo '<div id="afc_btwhats" data-whats-fuso="'.get_option( 'timezone_string' ).'" data-whats-hr-inicio="'.$horario['horario_inicio'].'" data-whats-hr-fim="'.$horario['horario_fim'].'">';
	echo '<button></button>';

	echo '<div class="afc_btwhats_box">';

		$avatarURL = $avatar['url'];
		$avatarIMG = wp_get_attachment_image( $avatar['ID'], 'thumbnail','', ['data-pin-nopin' => 'true'] );

		echo '<div class="foto" style="background-image: url('.$avatarURL.');">';
			echo $avatarIMG;
			echo '<div class="status on" id="afc_btwhats_status"></div>';
		echo '</div>';

		echo '<div data-whats-saudacoes-on="'.wp_strip_all_tags($frases['on']).'" data-whats-saudacoes-off="'.wp_strip_all_tags($frases['off']).'" data-whats-saudacoes-fds="'.wp_strip_all_tags($frases['weekend']).'" class="afc_btwhats_box_saudacoes" id="afc_btwhats_box_saudacoes"></div>';
		
		echo '<p data-whats-descricao-on="'.wp_strip_all_tags($descricoes['on']).'" data-whats-descricao-off="'.wp_strip_all_tags($descricoes['off']).'" data-whats-descricao-fds="'.wp_strip_all_tags($descricoes['weekend']).'" class="afc_btwhats_box_chamada" id="afc_btwhats_box_chamada"></p>';

		if($form) { 
			
			echo do_shortcode('[wpforms id="'.$form.'"]');

		} else {

			echo '<div class="afc_btwhats_box_form">';
				echo '<input type="text" id="afc_btwhats_box_form_escrever" maxlength="60">';
				echo '<a href="" data-whats-numero="'.wp_strip_all_tags($numero).'" target="_blank" id="afc_btwhats_box_form_mandar">&nbsp;</a>';
			echo '</div>';
		}
		
		if($horario['info']) echo '<div class="afc_btwhats_box_horario">'.wp_strip_all_tags($horario['info']).'</div>';
	echo '</div>';
echo '</div>';
}