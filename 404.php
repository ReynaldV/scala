<?php
// The page main template
get_header();

// get page ID
$pageID = get_the_ID();
?>
<body class="index-page quatrecentquatre scala-wp background-color-yellow">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T89JRB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
get_template_part('navigation');
get_template_part('contact');
get_template_part('boutonsLatteraux');
// Get Scala Accueil Settings
$pref = pods('scala_accueil');
?>
<div id="main" class="txtquatrecentquatre">
    <p>OUPS...</p>
    <p>jamais 4 sans 4 !</p>
    <p>4<img src="/wp-content/themes/scalawp/dist/images/zero.png">4</p>

    <p>vous êtes perdu(e) ?</p>
    <p>je ne sais pas, je ne sais plus...</p>
    <p>Vous cherchez...</p>
    <ul>
    	<li><span>&#183;&nbsp;</span>un job ? par <a href="<?php print(get_permalink($pref->display('job_page.ID'))); ?>">ici</a>.</li>
    	<li><span>&#183;&nbsp;</span>un article ? par <a href="<?php print(get_permalink($pref->display('blog_page.ID'))); ?>">là</a>.</li>
    	<li><span>&#183;&nbsp;</span>une <a href="<?php print(get_permalink($pref->display('offre_page.ID'))); ?>">solution</a> ?</li>
    	<li><span>&#183;&nbsp;</span>où nous trouver ? <a href="<?php print(get_permalink($pref->display('adr_page.ID'))); ?>">ici</a>.</li>
    	<li><span>&#183;&nbsp;</span>l'équipe ? elle est <a href="<?php print(get_permalink($pref->display('talent_page.ID'))); ?>">là</a>.</li>
    </ul>

</div>
<div id="background" class="yellow-color">
    <div class="headband-top"></div>
    <div class="triangle-top"></div>
</div>
<?php get_footer(); ?>
