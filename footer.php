<?php
$nomesite = get_bloginfo('name');
$urlHome = esc_url(home_url('/'));
$urlTema = get_template_directory_uri();
$ano = date('Y');
$lang = esc_attr(get_bloginfo('language'));
?>

<?php wp_footer(); ?>

</body>
</html>