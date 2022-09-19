<?php $urlTema = get_template_directory_uri(); ?>  
<div class="flexb">
<?php if(class_exists('SitePress')) : ?>
    <?php $languages = icl_get_languages('skip_missing=0&orderby=code'); ?>
    <?php if(!empty($languages)) : ?>
        <div class="area-linguas">
            <?php foreach($languages as $l) : ?>
                <a href="<?php echo $l['url']; ?>" class="glink w-inline-block<?php if($l['active']) echo ' active'; else echo ''; ?>">
                    <img src="<?php echo $urlTema;?>/assets/images/flag-<?php echo $l['language_code']; ?>.svg" alt="<?php echo $l['language_code']; ?>">
                </a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
<?php /*else : ?>
    <div class="area-linguas">
        <a href="#pt" class="glink w-inline-block notranslate" onclick="doGTranslate('pt|pt');return false;" class="glink w-inline-block"><img src="<?php echo $urlTema;?>/assets/images/flag-pt-br.svg" alt="Português Brasileiro"></a>
        <a href="#en" class="glink w-inline-block notranslate" onclick="doGTranslate('pt|en');return false;" class="glink w-inline-block"><img src="<?php echo $urlTema;?>/assets/images/flag-en.svg" alt="English"></a>
    </div>
<?php */ endif; ?>  
</div>