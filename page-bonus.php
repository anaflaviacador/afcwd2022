<?php if (is_user_logged_in()) { 
get_header(); 
do_action( 'woocommerce_account_navigation' );

echo '<div class="container" class="container">';

	$clientevip = array('cliente_vip','administrator');
	$user = wp_get_current_user(); 
	$cliente = $user->user_firstname;
	$userid = $user->ID;

	
	if (have_posts() && array_intersect($clientevip, $user->roles )) {
		while (have_posts()) : the_post();
			echo '<div class="colunas-wrap-dupla pb-3em pt-2em" style="margin-top:0">';

				echo '<aside class="colmenor esq">';
					echo '<h4>🙋🏻‍♀️ Atenção, '.$cliente.'! 👇🏻</h4>';
					echo '<p class="texto-menor">Os plugins e materiais ao lado são uma cortesia que o studio fornece apenas clientes que fazem uso de um layout exclusivo! São ferramentas de <em>categoria premium</em> que ajudam o seu site ser mais poderoso do que já é. 💜✨</p>';
					
					echo '<p class="texto-menor">Todos os plugins são adquiridos em nome do studio e se enquadram como <a href="https://www.gnu.org/philosophy/free-sw.pt-br.html" target="_blank" rel="external noopener nofollow">software livre</a>.</p>';
					echo '<p class="texto-menor"><em class="cor-negacao">Embora sejam livres, não são gratuitos</em>. Por ser uma <strong>cortesia</strong>, os plugins ao lado não atualizam automaticamente em seu painel, '.$cliente.'. Para você garantir essa automação, <em class="cor-negacao">o recomendado é comprar o plugin diretamente no site oficial ou de revendedores especializados</em>, indicados pelo ícone <i class="fa-light fa-link cor-roxo"></i>. Com isso, além de updates automáticos, você garante o privilégio do suporte do desenvolvedor original, que é uma maravilha! 🛠</p>';
					echo '<p class="texto-menor">Embora essa página seja atualizada com frequência, não há garantia de que todos os plugins vão estar em suas versões mais recentes lançadas. Caso encontre uma versão do seu plugin favorito que precisa do update mais recente, não hesite em me avisar no whatsapp que assim que possível será colocado no acervo!</p>';
					echo '<p class="texto-menor">Não é ofertado o serviço de update individual em seu site, exceto se for assinante de um <a href="/servicos/planos/">plano recorrente de manutenção</a> que se enquadra no serviço.</p>';
					echo '<p><a href="/servicos/planos/" class="botao">conhecer planos <i class="fa-light fa-arrow-right-long bt-seta"></i></a></p>';
				echo '</aside>';

				echo '<div class="colmaior">';

					echo '<div class="aviso-vermelho mb-2em">';
						echo '<p class="has-text-align-center mb-10px">Todos os materiais abaixo são à pronta-instalação via Painel Wordpress, em <strong>formato .zip</strong>. Saiba como instalar e atualizar qualquer plugin manualmente seguindo tutorial abaixo.</p>';
						echo '<p class="mb-10px has-text-align-center">
						<a href="https://afcwebdesign.freshdesk.com/support/solutions/articles/70000255816" target="_blank" rel="noopener" class="botao negacao">Como instalar</a></p>';
					echo '</div>';

					// echo '<hr>';

					the_content();

					
				echo '</div>';

			echo '</div>';
		endwhile;

	} else {
		echo '<div class="container-medio  pb-3em pt-2em">';
			echo '<p style="text-align:center; max-width:700px; margin-left:auto; margin-right:auto">'.esc_html__( 'O acervo de materiais pode ser usufruído apenas por clientes que contrataram serviços de design e/ou desenvolvimento do studio' , 'afcwd2022' ).' '.do_shortcode('[afc]').'</p>'; 
			echo '<p style="text-align:center;">'.esc_html__( 'Esse é o seu caso? Entre em contato e solicite seu acesso!' , 'afcwd2022' ).'</p>';
			echo '<p style="text-align:center;"><a href="https://api.whatsapp.com/send?phone=5562996269941&text=Oi%20Ana!%20Solicito%20meu%20Acesso%20VIP%20para%20o%20acervo%20de%20materiais." target="_blank" rel="noopener" class="botao grande whatsapp">'.esc_html__( 'Solicitar acesso' , 'afcwd2022' ).''; 
				echo '<span class="bt-seta" style="height: 18px; position: relative; top: -4px; line-height: 1; vertical-align: bottom;">';
					echo '<svg xmlns="http://www.w3.org/2000/svg" width="18px" viewBox="0 0 448 512">';
						echo '<path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7A183.9 183.9 0 0 1 39.4 254c0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>';
					echo '</svg>';
				echo '</span>';			
			echo '</a></p>';
		echo '</div>';
	}	

echo '</div>';	
get_footer();

} else {
	get_template_part('parts/area-login');
}	

