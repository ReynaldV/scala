<?php
    /*
    Template Name: Page Scala Home
    */
    get_header();
?>
<body class="home-page scala-wp">
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
<div id="main">
    <div id="teaser-sentence">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
    <div id="menu-memo">
        <!-- ———— SCALA ———— -->
        <a class="scala-bloc-menu" href="<?php print(get_permalink($pref->display('scala_page.ID'))); ?>">
            <div class="scala-texte-menu">
                <h2><?php print($pref->display('scala_titre')); ?></h2>
                <div class="texte-menu"><div><?php print($pref->display('scala_desc')); ?></div></div>
            </div>
        </a>
        <!-- ———— JOBS ———— -->
        <a class="jobs-bloc-menu" href="<?php print(get_permalink($pref->display('job_page.ID'))); ?>">
            <div class="jobs-texte-menu">
                <h2><?php print($pref->display('job_titre')); ?></h2>
                <div class="texte-menu"><div><?php print($pref->display('job_desc')); ?></div></div>
            </div>
        </a>
        <!-- ———— SOLUTIONS ———— -->
        <a class="solutions-bloc-menu" href="<?php print(get_permalink($pref->display('offre_page.ID'))); ?>">
            <div class="solutions-texte-menu">
                <h2><?php print($pref->display('offre_titre')); ?></h2>
                <div class="texte-menu"><div><?php print($pref->display('offre_desc')); ?></div></div>
            </div>
        </a>
        <!-- ———— ANIMATION ———— -->
        
            <a class="animation-bloc-un" href="<?php print($pref->display('lien_job_roulette')); ?>" target="_blank">
                <div class="img-animation-bloc-un">
                    <img src="<?php print(bloginfo('stylesheet_directory') . '/dist/images/memo_plus.svg'); ?>" />
                </div>
                <div class="croix-texte-menu">
                    <h2><?php print($pref->display('titre_job_roulette')); ?></h2>
                    <div class="texte-menu"><div><?php print($pref->display('roulette_desc')); ?></div></div>
                </div>
            </a>
        <!--<div class="animation-bloc-un"></div>-->
        <!-- ———— TALENTS ———— -->
        <a class="talents-bloc-menu" href="<?php print(get_permalink($pref->display('talent_page.ID'))); ?>">
            <div class="talents-texte-menu">
                <h2><?php print($pref->display('talent_titre')); ?></h2>
                <div class="texte-menu"><div><?php print($pref->display('talent_desc')); ?></div></div>
            </div>
        </a>
        <!-- ———— ANIMATION ———— -->
        <div class="animation-bloc-deux">
              <div class="mover-1"></div>
        </div>
        <!-- ———— RÉFÉRENCES ———— -->
        <a class="references-bloc-menu" href="<?php print(get_permalink($pref->display('ref_page.ID'))); ?>">
            <div class="references-texte-menu">
                <h2><?php print($pref->display('ref_titre')); ?></h2>
                <div class="texte-menu"><div><?php print($pref->display('ref_desc')); ?></div></div>
            </div>
        </a>
        <!-- ———— BLOG ———— -->
        <a class="blog-bloc-menu" href="<?php print(get_permalink($pref->display('blog_page.ID'))); ?>">
            <div class="blog-texte-menu">
                <h2><?php print($pref->display('blog_titre')); ?></h2>
                <div class="texte-menu"><div><?php print($pref->display('blog_desc')); ?></div></div>
            </div>
        </a>
        <!-- ———— ADRESSES ———— -->
        <a class="adresses-bloc-menu" href="<?php print(get_permalink($pref->display('adr_page.ID'))); ?>">
            <div class="adresse-texte-menu">
                <h2><?php print($pref->display('adr_titre')); ?></h2>
                <div class="texte-menu"><div><?php print($pref->display('adr_desc')); ?></div></div>
            </div>
        </a>
        <!-- ———— AGENDA ———— -->
        <?php
        // Get last post "Les évènementiels"
        $args_agenda = array('numberposts' => 1,'category' => 1,'post_status' => 'publish');
        $recent_agenda = wp_get_recent_posts( $args_agenda );
        ?>
        <a class="agenda-bloc-menu" href="<?php print(get_permalink($recent_agenda[0]["ID"])); ?>">
            <div class="agenda-texte-menu">
                <h2><?php print($pref->display('agenda_titre')); ?></h2>
                <div class="texte-menu"><div><?php print($recent_agenda[0]["post_title"]); ?></div></div>
            </div>
        </a>
        <?php wp_reset_query(); ?>
        <!-- ———— ANIMATION ———— -->
        <div class="animation-bloc-trois">
            <object> 
                <embed src="<?php print(bloginfo('stylesheet_directory') . '/dist/images/logo-scala.svg'); ?>">
            </object>
        </div>
        <!-- ———— TWITTER ———— -->
        <a class="twitter-bloc-menu" href="https://twitter.com/GroupeScala" target="_blank">
            <div class="twitter-texte-menu">
                <h2><?php print($pref->display('twitter_titre')); ?></h2>
                <div class="texte-menu"><div><?php getLastTweetScala(); ?></div></div>
            </div>
        </a>
    </div>

    <div id="menu-memo-mobile">
        <!-- ———— ANIMATION ———— -->
        <div class="scala-animation-mobile">
          <svg id="svg"></svg>
          <script>
                s = Snap("#svg");

                var croix = s.path( {d: "m 139.833,61.62 0,25.323 -51.803,0 0,53.237 -25.774,0 -0.389,-53.237 -51.89,0 0,-25.323 52.279,0 -0.603458,-50.815 25.608458,0 0,50.815 z"});
                croix.attr({
                    fill: "#fff",
                    position:"absolute",
                    x:"20"
                });
                function anim_croix() {
                    croix.animate({ d: "m 139.833,61.62 0,25.323 -51.803,0 0,53.237 -25.774,0 -0.389,-53.237 -51.89,0 0,-25.323 52.279,0 -0.603458,-50.815 25.608458,0 0,50.815 z" }, 500, mina.easein);
                }
                function anim_triangle() {
                    croix.animate({ d: "m 139.515,139.83051 0,-0.13333 0,0.16482 -51.803137,0 -25.774489,0 -52.088374,0 0,-0.0315 65.148305,-129.318668 0,-0.02384 0.0027,0 -0.133291,0 0.453377,0.317797 z" }, 500, mina.easein);
                }
                function anim_scala() {
                    croix.animate({ d: "m 74.684962,53.548729 37.340628,21.953532 0.0303,0.0059 -0.0326,2.3e-5 L 111.83144,118.8874 74.419749,140.01497 36.861712,119.17373 73.885016,96.793621 36.674,74.809506 36.674,31.742482 74.390013,9.6935085 112.05589,32.064874 Z" }, 500, mina.easein);
                }
                function anim_carre() {
                    croix.animate({ d: "m 139.515,62.288136 0,25.608193 0,51.965671 -51.803137,0 -25.774489,0 -52.088374,0 0,-52.150136 0,-25.716971 0,-51.506893 51.803541,0 25.926031,0 51.936428,0 z" }, 500, mina.easein);
                }
                function anim_rond() {
                    croix.animate({ d: "m 146.507,75 c 0,9.87275 -2.00106,19.278125 -5.61969,27.83277 -3.61862,8.55464 -8.85481,16.25854 -15.32506,22.72836 C 112.62175,138.50076 94.745,146.504 75,146.504 55.2545,146.504 37.37775,138.50075 24.437375,125.56113 17.967187,119.09131 12.731094,111.38741 9.1125469,102.83277 5.494,94.278125 3.493,84.87275 3.493,75 3.493,65.207333 5.4613705,55.874788 9.0239991,47.376249 12.586628,38.877711 17.743514,31.213178 24.120547,24.756535 37.085167,11.630066 55.092847,3.496 75,3.496 c 9.8725,0 19.277938,2.000625 27.83281,5.6186562 C 111.38769,12.732687 119.092,17.968125 125.56225,24.43775 138.50275,37.377 146.507,55.253 146.507,75 Z" }, 500, mina.easein);
                }

                function animAll() {
                    setTimeout("anim_scala()",0);
                    setTimeout("anim_triangle()",1000);
                    setTimeout("anim_carre()",2000);
                    setTimeout("anim_rond()",3000);
                    setTimeout("anim_croix()",4000);
                }
                //animAll();
                setInterval("animAll()",5000);
                </script>      
        </div>

        <!-- ———— SCALA ———— -->
        <div class="scala-bloc-menu-mobile">
            <a class="link-bloc-memo-mobile" href="<?php print(get_permalink($pref->display('scala_page.ID'))); ?>">
                <h2><?php print($pref->display('scala_titre')); ?></h2>
                <div class="texte-menu"><div><?php print($pref->display('scala_desc')); ?></div></div>
            </a>
            <div class="scala-texte-background-mobile"><?php print($pref->display('scala_titre')); ?></div>
        </div>
        <!-- ———— SOLUTIONS ———— -->
        <div class="solutions-bloc-menu-mobile">
            <a class="link-bloc-memo-mobile" href="<?php print(get_permalink($pref->display('offre_page.ID'))); ?>">
                <h2><?php print($pref->display('offre_titre')); ?></h2>
                <div class="texte-menu"><div><?php print($pref->display('offre_desc')); ?></div></div>
            </a>
            <div class="solutions-texte-background-mobile"><?php print($pref->display('offre_titre')); ?></div>
        </div>
        <!-- ———— JOBS ———— -->
        <div class="jobs-bloc-menu-mobile">
            <a class="link-bloc-memo-mobile" href="<?php print(get_permalink($pref->display('job_page.ID'))); ?>">
                <h2><?php print($pref->display('job_titre')); ?></h2>
                <div class="texte-menu"><div><?php print($pref->display('job_desc')); ?></div></div>
            </a>
            <div class="jobs-texte-background-mobile"><?php print($pref->display('job_titre')); ?></div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
