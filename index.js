//----------------------------------------------------------------------------------------------------------------------
// INDEX
//----------------------------------------------------------------------------------------------------------------------
jQuery(document).ready(function(){
	
    // initialisation variables to get the class body
    var classBodyHome = jQuery('body.home-page').length;
    var logoScalaImg = jQuery('#logo-scala-menu > img');
    var logoScalaBlanc = 'blanc';
    var logoScalaNoir = 'noir';

    // verify if variable exist
    if(logoScalaImg.length) {
        // if class body is page index change the color logo
        switch (classBodyHome) {
            case 0:
                var newValueLogoScala = logoScalaImg.attr('src').replace(logoScalaBlanc, logoScalaNoir);
                jQuery('#logo-scala-menu>img').attr('src', newValueLogoScala);
                break;
            case 1:
                var newValueLogoScala = logoScalaImg.attr('src').replace(logoScalaNoir, logoScalaBlanc);
                logoScalaImg.attr('src', newValueLogoScala);
                break;
        }
    }

    // verify if we are in home page
    if (classBodyHome) {
        // search the h2 element for getting the texte and replace space by '&nbsp;'
        var menuMemo = jQuery('#menu-memo');
        menuMemo.find('h2').each(function(index) {
            var valueTitre = jQuery(this).html();
            var newValueTitre = valueTitre.replace( / /g, '&nbsp;');
            jQuery(this).html(newValueTitre);
        });
    }
	
	/*--------------------------rollover IMG anim ACCUEIL-------------------------*/


	var tableau_text = ['.scala-texte-menu','.jobs-texte-menu','.solutions-texte-menu','.croix-texte-menu','.talents-texte-menu','','.references-texte-menu','.blog-texte-menu','.adresse-texte-menu','.agenda-texte-menu','','.twitter-texte-menu'];
	
	var tableau_blocs = ['.scala-bloc-menu','.jobs-bloc-menu', '.solutions-bloc-menu', '.animation-bloc-un','.talents-bloc-menu', '.animation-bloc-deux', '.references-bloc-menu', '.blog-bloc-menu', '.adresses-bloc-menu', '.agenda-bloc-menu', '.animation-bloc-trois','.twitter-bloc-menu'];

	var blocs = jQuery('#menu-memo a, #menu-memo > div');
	var i;
    var time = 0;

	jQuery(tableau_blocs).each(function() {
	    var $this = jQuery(this);
	    setTimeout(function(index) {
	       $this.css({opacity: 1}); 
		}, time);
	    time += 100;
	});

	setTimeout(function(){
		blocs.not(jQuery('.scala-bloc-menu')).css({opacity: 0.2});
		jQuery('.scala-texte-menu').animate({display: 'block',opacity:1,zIndex: 5000}, 500);
		}, 1200);


	function rollover(bloc,text) {
		jQuery(bloc).mousemove(function(){ 
				jQuery(bloc).css({opacity: 1});
				jQuery(text).css({display: 'block',opacity:1,zIndex: 5000});
				blocs.not(bloc).css({opacity: 0.2});
				jQuery('.scala-texte-menu').css({opacity: 0});
			}), jQuery(bloc).mouseout(function(){
				blocs.css({opacity: 1});
				jQuery(text).css({display:'none',opacity: 0,zIndex: 21});
		});
		
	};

	for (i = 0; i < tableau_blocs.length; i++) {
		rollover(tableau_blocs[i],tableau_text[i]);
	}

	var blocScala = jQuery('.scala-bloc-menu');
	var textScala = jQuery('.scala-texte-menu');

	blocScala.mousemove(function(){ 
			textScala.css({display: 'block',opacity:1,zIndex: 5000});
			blocs.not(blocScala).css({opacity: 0.2});
	});

}); 