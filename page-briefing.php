<?php 
if (is_user_logged_in()) {
get_header(); 	

$clientevip = array('cliente_vip','administrator');
	
do_action( 'woocommerce_account_navigation' );	
	
echo '<div class="container" id="pagina-briefing">';

	
	$user = wp_get_current_user(); 
	$cliente = $user->user_firstname;
	$userid = $user->ID;
	$tembriefing = count_user_posts( $userid , 'af_entry' );
	$urlsite = get_bloginfo('url');

	$formADICIONAL = '5785'; // local 5835 
	$formBRIEFING = '5786'; // local 5827

	// captura entradas do form de briefin
	$entries = wpforms()->entry->get_entries(['form_id' => $formBRIEFING]);
	
	
	$clienteEnviouForm = false; // declara 1º como false se enviou form
	foreach ($entries as $entry) {
		if ($entry->user_id == $userid) {
			$clienteEnviouForm = true; // consegue ver se o user enviou o form	
			break;
		}
	}

	if($clienteEnviouForm && array_intersect($clientevip, $user->roles )) {	
		// colocar aqui a condicional para qdo cliente ja enviou briefing
			echo '<div class="aviso-vermelho mt-2em">';
			echo '<p class="has-text-align-center"><strong>Você já tem um briefing enviado no sistema, '.$cliente.'!</strong><br>Caso não esteja solicitando um novo projeto, <a href="#briefing-adicional" class="abre-modal" data-target="#briefing-adicional"><strong>CLIQUE AQUI</strong></a> e acrescente as informações adicionais ao briefing enviado anteriormente.</p>';
			echo '</div>';

			echo '<div class="modal" id="briefing-adicional">';
				echo '<h2 class="has-text-align-center">Informações adicionais</h2>';
				echo '<article><p>Esqueceu de acrescentar algum detalhe no formulário? Não tem problema! Adicione abaixo as informações adicionais a um formulário que você já enviou. Assim, você não precisará preencher tudo novamente. Será mantido tudo em histórico de email e banco de dados. 😉</p>'.do_shortcode('[wpforms id="'.$formADICIONAL.'"]').'</article>'; 
			echo '</div>'; 
	}
	
	echo '<div class="colunas-wrap-dupla pb-3em pt-2em">';

		if (have_posts() && array_intersect($clientevip, $user->roles )) {
			while (have_posts()) : the_post();
				echo '<article class="colmenor esq">';
					echo '<h4><span class="titulo-cursiva">Oi '.$cliente.'<span></h3>';
					echo '<div class="texto-menor">'; the_content(); echo '</div>';
				echo '</article>';	
		
				echo '<div class="colmaior">';
					echo do_shortcode('[wpforms id="'.$formBRIEFING.'" title="false"]');
				echo '</div>';		
			endwhile;
		} else {
			echo '<div class="container-medio">';
				echo '<p style="text-align:center; max-width:700px; margin-left:auto; margin-right:auto">'.esc_html__( 'O formulário de briefing é visível apenas por clientes que contrataram ou pretendem contratar serviços de design e/ou desenvolvimento do studio' , 'afcwd2022' ).' '.do_shortcode('[afc]').'</p>'; 
				echo '<p style="text-align:center;">'.esc_html__( 'Esse é o seu caso? Entre em contato e solicite seu acesso!' , 'afcwd2022' ).'</p>';
				echo '<p style="text-align:center;"><a href="https://api.whatsapp.com/send?phone=5562996269941&text=Oi%20Ana!%20Solicito%20meu%20acesso%20para%20preencher%20o%20briefing." target="_blank" rel="noopener" class="botao grande whatsapp">'.esc_html__( 'Solicitar acesso' , 'afcwd2022' ).''; 
					echo '<span class="bt-seta" style="height: 18px; position: relative; top: -4px; line-height: 1; vertical-align: bottom;">';
						echo '<svg xmlns="http://www.w3.org/2000/svg" width="18px" viewBox="0 0 448 512">';
							echo '<path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7A183.9 183.9 0 0 1 39.4 254c0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>';
						echo '</svg>';
					echo '</span>';
				echo '</a></p>';
			echo '</div>';
		}

	echo '</div>';		
echo '</div>';

get_footer();
	
} else { get_template_part('parts/area-login'); }


