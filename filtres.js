//----------------------------------------------------------------------------------------------------------------------
// Filters
//----------------------------------------------------------------------------------------------------------------------
jQuery(document).ready(function(){
    
   
  

   // var buttonVoirPlus = jQuery('.btn-voir-plus-d-offres');

    jQuery("[data-collapse-toggle][data-collapse-on]").each(function(){
        var $this=jQuery(this);
        var $toggle_elm=jQuery($this.attr("data-collapse-toggle"),$this)
        var $collapse_on=jQuery($this.attr("data-collapse-on"),$this)
        $toggle_elm.on('click', function(){
            $collapse_on.slideToggle('slow',function(){
                if ($collapse_on.is(':visible'))
                {
                    $toggle_elm.addClass('open-category-list')
                }
                else{
                     $toggle_elm.removeClass('open-category-list')
                }
            });
            
        });
    })
    jQuery(".filters").each(function(){
            var $glob_filter=jQuery(this);
            var categoryListe=[];
            $glob_filter.refresh_filter=function(){
                    var categoryListe= $glob_filter.data("categoryListe");
                    var result= $glob_filter.data("filter_elems");
                    result.hide();

                    for (var i=0 ; i< categoryListe.length  ; i++)
                    {
                            var filter=[];
                            var filterOn=categoryListe[i].attr("data-filter-on");
                            var mode=categoryListe[i].attr("data-filter-mode") || "or";

                            jQuery('li.category-active',categoryListe[i]).each(function(){
                                    var str=jQuery(this).attr(filterOn);
                                    str=str.replace(/([ #;&,.+*~\':"!^$[\]()=>|\/@])/g,'\\$1'); //escape single quote
                                    filter.push(str);
                            })
                            if(filter.length >0)
                            {
                                    if (mode=="or")
                                            result=result.filter('['+filterOn+'*='+filter.join('],['+filterOn+'*=')+']');
                                    else
                                        result=result.filter('['+filterOn+'*='+filter.join(']['+filterOn+'*=')+']');
                            }
                    }
                    result .show();
                    
                    if(result.length == 0) {
                        showCandidatureSpontaneeNoResult ();
                    } else {
                        hideCandidatureSpontaneeNoResult();
                            }                      
                    }
                    


            var $filter_elems=jQuery($glob_filter.attr("data-filter-elms"));
            jQuery('.category-liste li',$glob_filter).click(function(){
                 jQuery(this).toggleClass('category-active');
                 $glob_filter.refresh_filter();
            })
            var groups=jQuery (".filtre-checkbox",$glob_filter).each(function(i){
                    categoryListe[i]= jQuery('.category-liste',this);
                    
            })

    
            $glob_filter.data("categoryListe",categoryListe);
            $glob_filter.data("filter_elems",$filter_elems);
    })
   
    
    

});