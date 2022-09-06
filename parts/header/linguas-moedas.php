<?php
$nomesite = get_bloginfo('name');
$nomeslogan = get_bloginfo('description');
$homeurl = home_url(('/'));
$urlTema = get_template_directory_uri();
$politicapg = get_option( 'wp_page_for_privacy_policy' );
?>  

<?php if(class_exists('SitePress') && class_exists('WOOMULTI_CURRENCY')) : ?>
    <div class="flexb">
    <?php $languages = icl_get_languages('skip_missing=0&orderby=code'); ?>
    <?php if(!empty($languages)) : ?>
        <div class="area-linguas">
            <?php foreach($languages as $l) : ?>
                <a href="<?php echo $l['url']; ?>" class="glink w-inline-block<?php if($l['active']) echo ' active'; else echo ''; ?>">
                    <img src="<?php echo $urlTema;?>/assets/images/flag-<?php echo $l['language_code']; ?>.svg" loading="lazy" alt="<?php echo $l['language_code']; ?>">
                </a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    </div>
<?php else : ?>
    <div class="flexb">
        <?php if(class_exists('WOOMULTI_CURRENCY')) : ?>
            <div class="area-moedas">
                <span><?php esc_html_e( 'Moedas', 'afcwd2022' ); ?></span>
                <?php echo do_shortcode('[woo_multi_currency_plain_horizontal]'); ?>
            </div>
        <?php endif; ?>  

        <div class="area-linguas">
          <a href="#pt" class="glink w-inline-block notranslate" onclick="doGTranslate('pt|pt');return false;" class="glink w-inline-block"><img src="<?php echo $urlTema;?>/assets/images/flag-pt-br.svg" loading="lazy" alt="Português Brasileiro"></a>
          <a href="#en" class="glink w-inline-block notranslate" onclick="doGTranslate('pt|en');return false;" class="glink w-inline-block"><img src="<?php echo $urlTema;?>/assets/images/flag-en.svg" loading="lazy" alt="English"></a>
        </div>
    </div>
<?php endif; ?>  