<div class="area-jump" id="tutoriais"></div>
<div class="pb-4em pt-4em">
    <div class="container">

        <div class="has-text-align-center">
            <h2><?php _e( 'Tutoriais <span class="titulo-cursiva cor-azul">Sendy</span>', 'afcwd2022' ); ?></h2>
        </div>

        <p class="has-text-align-center mb-2em">Diversas dicas de uso sobre as principais ferramentas do email marketing.</p>

        <?php 
        $clientevip = array('cliente_vip','administrator'); 
        $user = wp_get_current_user(); 
        ?>
        
        <?php if (is_user_logged_in() && array_intersect($clientevip, $user->roles )) : ?>

            <div class="colunas-wrap num-3">
                <div class="coluna-item num-3 cor-azul-claro-bg padding-20px">
                    <h4>Como criar campanhas</h4>
                    <figure class="tutoriais-video"><iframe src="https://drive.google.com/file/d/1PZY0vZWD5TtL7waOlPVBXpv6nUkO4W13/preview" frameborder="0" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay"></iframe></figure>
                    <p class="mb-0">O que é, como criar, editar e agendar campanhas.</p>
                </div>
                <div class="coluna-item num-3 cor-azul-claro-bg padding-20px">
                    <h4>Gestão de listas</h4>
                    <figure class="tutoriais-video"><iframe src="https://drive.google.com/file/d/1Xgzbpv7-pKuof7wt5Oa4ZiY0LLDzWYXf/preview" frameborder="0" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay"></iframe></figure>
                    <p class="mb-0">Como criar, editar e configurar lista de leads.</p>
                </div>
                <div class="coluna-item num-3 cor-azul-claro-bg padding-20px">
                    <h4>Limpeza de leads inativos</h4>
                    <figure class="tutoriais-video"><iframe src="https://drive.google.com/file/d/12GWcEiwuZx88nk4-4dDuMhgjU3VJvMTx/preview" frameborder="0" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay"></iframe></figure>
                    <p class="mb-0">Como manter integridade de uma lista através da exclusão de leads irrelevantes.</p>
                </div>
                <div class="coluna-item num-3 cor-azul-claro-bg padding-20px">
                    <h4>Como importar leads</h4>
                    <figure class="tutoriais-video"><iframe src="https://drive.google.com/file/d/1a84bJGvHwFGLWQ23X0lvmmgBjm3bM7ET/preview" frameborder="0" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay"></iframe></figure>
                    <p class="mb-0">Como organizar uma lista para fazer importação em massa de contatos.</p>
                </div>
                <div class="coluna-item num-3 cor-azul-claro-bg padding-20px">
                    <h4>Segmentações</h4>
                    <figure class="tutoriais-video"><iframe src="https://drive.google.com/file/d/1dDGs4zgo16NHe9IB_CWZv-ZhL8hZ31Ti/preview" frameborder="0" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay"></iframe></figure>
                    <p class="mb-0">Como trabalhar com segmentações dentro de uma lista e quais são suas vantagens.</p>
                </div>
                <div class="coluna-item num-3 cor-azul-claro-bg padding-20px">
                    <h4>Automação de respostas</h4>
                    <figure class="tutoriais-video"><iframe src="https://drive.google.com/file/d/1dHQlhgJmJqiSnW9FcMYnAPjy4X4yvuhq/preview" frameborder="0" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay"></iframe></figure>
                    <p class="mb-0">Como programar auto-respostas para manter seus leads interessados no seu negócio.</p>
                </div>
            </div>

            <div class="has-text-align-center">
                <h3 class="has-text-align-center">Precisa de suporte?</h3>
                <p class="has-text-align-center">Me chama no whatsapp para eu te ajudar!</p>

                <a href="https://wa.me/5562996269941?text=Oi%20Ana!%20Preciso%20de%20ajuda%20com%20o%20Sendy." target="_blank" class="botao whatsapp grande">
                    <?php esc_html_e( 'Fale comigo', 'afcwd2022' ); ?>
                    <span class="bt-seta" style="height: 18px; position: relative; top: -4px; line-height: 1; vertical-align: bottom;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18px" viewBox="0 0 448 512">
                            <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7A183.9 183.9 0 0 1 39.4 254c0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                        </svg>
                    </span>
                </a>
            </div>

        <?php else : ?>

            <div class="container-medio cor-rosa-claro-bg padding-2em" style="text-align:center;">
                <p>O acesso aos tutoriais do Sendy é visível apenas por clientes que contrataram ou pretendem contratar serviços de design e/ou desenvolvimento do studio <?php echo do_shortcode('[afc]'); ?></p>
                <p>Esse é o seu caso? Entre em contato e solicite seu acesso!</p>
                <p><a href="https://wa.me/5562996269941?text=Oi%20Ana!%20Solicito%20acesso%20aos%20tutoriais%20do%20Sendy." target="_blank" class="botao grande whatsapp">Solicitar acesso
                    <span class="bt-seta" style="height: 18px; position: relative; top: -4px; line-height: 1; vertical-align: bottom;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18px" viewBox="0 0 448 512">
                            <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7A183.9 183.9 0 0 1 39.4 254c0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                        </svg>
                    </span>
                </a></p>
                <p class="texto-menor mb-0">
                    <strong>Já possui login de cliente?
                        <a href="https://afcweb.design/wp-login.php?redirect_to=https%3A%2F%2Fafcweb.design%2Fservicos%2Femail-marketing%2F#tutoriais" class="cor-rosa"><u>Entre aqui</u></a>!
                    </strong>
                </p>
            </div> 

        <?php endif; ?>


    </div>
</div>
