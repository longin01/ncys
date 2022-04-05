/*!
* THEIA.JS
*
* Main scripts file. Contains theme functionals.
*
* Version 1.0
*/

/* 
-----------------------------------------------------------------------------------------------------------*/

$(document).ready(function($) {

    "use strict";

    var aSearchClicked = false;
    
    jQuery(".sub-menu").hide();
    jQuery(".container").hide();
        
    if("ontouchstart" in document.documentElement){
    
        jQuery(".menu-item-has-children").bind('touchstart touchon', function(event){
            event.preventDefault();
            jQuery(this).children(".sub-menu").toggleClass("active").toggle(350);
            return false;
        }).children(".sub-menu").children("li").bind('touchstart touchon', function(event) {
            window.location.href = jQuery(this).children("a").attr("href");
        });
        
        $('#a-search').bind('touchstart touchon', function(event){
            if(aSearchClicked){
                $('#searchform').removeClass('moved');
                aSearchClicked = false;
            }else{
                $('#searchform').addClass('moved');
                aSearchClicked = true;
            }
        });
        
        jQuery(".toggle").bind('touchstart touchon', function(){
            if(jQuery(this).hasClass("active")) {
                jQuery(this).children(".expose-icon").attr('src', 'images/plus.png');
            } else {
                jQuery(this).children(".expose-icon").attr('src', 'images/minus.png');
            }
            jQuery(this).toggleClass("active").next().slideToggle(350);
        		return false;
        });
        
    }else{
    
        jQuery(".menu-item-has-children").bind('click', function(event){
            event.preventDefault();
            jQuery(this).children(".sub-menu").toggleClass("active").toggle(350);
            return false;
        }).children(".sub-menu").children("li").bind('click', function(event) {
            window.location.href = jQuery(this).children("a").attr("href");
        });
    
        $('#a-search').bind('click', function(event){
            if(aSearchClicked){
                $('#searchform').removeClass('moved');
                aSearchClicked = false;
            }else{
                $('#searchform').addClass('moved');
                aSearchClicked = true;
            }
        });
        
        jQuery(".toggle").bind('click', function(){
            if(jQuery(this).hasClass("active")) {
                jQuery(this).children(".expose-icon").attr('src', 'images/plus.png');
            } else {
                jQuery(this).children(".expose-icon").attr('src', 'images/minus.png');
            }
            jQuery(this).toggleClass("active").next().slideToggle(350);
        		return false;
        });
    }
});