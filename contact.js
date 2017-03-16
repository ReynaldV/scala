//----------------------------------------------------------------------------------------------------------------------
// CONTACT
//----------------------------------------------------------------------------------------------------------------------
jQuery(document).ready(function(){	
	// Variable pour text_contact_anim	
	var champs_input_contact = jQuery(".contact-champ-message div textarea");
	var text_input_contact = "Bonjour Scala,  ";
	var tableau_input_contact = text_input_contact.split("");
	var len_input_contact = text_input_contact.length;
	var i = 0;
	var animation_text_contact = "";
		
	// Fonction qui tape le texte dans input de la page contact	
	function text_contact_anim() {
		champs_input_contact.val(animation_text_contact);		
		animation_text_contact += tableau_input_contact[i];
	    i++;   
		animation_text_contact = animation_text_contact.substring(0,i);
	    if ( i < len_input_contact ) {
	        setTimeout(text_contact_anim, 60);
	    }
		champs_input_contact.focus();
        champs_input_contact.attr('spellcheck','false');
        champs_input_contact.autogrow({vertical: true, horizontal: false});
	}		
	
	// initialisation variables to play menu
    var contactVille = jQuery('.contact-ville');
    var contactDetail = jQuery('.contact-details');
    var windowLength = jQuery(window).outerWidth(true);
    var btnContact = jQuery('#contact');
    var btnContactMenu = jQuery('.contact-btn');
    var contactFormulaire = jQuery('#contact-formulaire');
    var btnCloseContactFormulaire = jQuery('.btn-close-contact');

    // verify if variable exist for show an animation on the city elements
    if (contactVille.length) {
        // if window >= 768 verify if there is a mouse enter on "contact ville" elements and show "contact details"
        if (windowLength >= 768) {
            contactVille.on('mouseenter', function(event){
                contactDetail.css({'display': 'none'});
                jQuery(this).css({'display': 'block'});
                jQuery(this).next('.contact-details').css({
                    'display': 'block',
                    'vertical-align': 'top'
                })
            });
        }
    }

    // verify if variable exist for show the menu contact on click on the button "contact"
    if (btnContact.length) {
        // show menu contact
        showMenuContact (btnContact, contactFormulaire);		 
		// increment text message de contact
		btnContact.on("click", function(){
			i=0;
			setTimeout(function(){text_contact_anim();}, 1000);
		});
	}

    // verify if variable exist for show the menu contact on click on the button "contact"
    if (btnContactMenu.length) {
        // show menu contact
        showMenuContact (btnContactMenu, contactFormulaire);
		// increment text message de contact
		btnContactMenu.on("click", function(){
				i=0;
				setTimeout(function(){text_contact_anim();}, 1000);
		});
    }
	
    // verify if variable exist for hide the menu contact on click on the button "close"
    if (btnCloseContactFormulaire.length) {
        // hide menu contact
        hideMenuContact (btnCloseContactFormulaire, contactFormulaire);

    }
	
    // verify if the window is resized
    jQuery(window).resize(function(){
        // verify if variable exist for show an animation on the city elements
        if (contactVille.length) {
            var windowLengthResize =  jQuery(window).outerWidth(true);

            // if window >= 768 verify if there is a mouse enter on "contact ville" elements and show "contact details"
            if (windowLengthResize >= 768) {
                contactDetail.css({'display': 'none'});
                contactVille.on('mouseenter', function(event){
                    contactDetail.css({'display': 'none'});
                    jQuery(this).css({'display': 'block'});
                    jQuery(this).next('.contact-details').css({
                        'display': 'block',
                        'vertical-align': 'top'
                    })
                });
            }

            // if window < 768 show "contact details" elements
            if (windowLengthResize < 768) {
                contactDetail.css({'display': 'block'});
                contactVille.on('mouseenter', function(event){
                    contactDetail.css({'display': 'block'});
                });
            }
        }
    });
});