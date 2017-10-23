/*global $, alert, console*/
$(document).ready(function () {
    
    'use strict';
    
    // Trigger Nice Scroll Plugin
    $('html').niceScroll({
        
        cursorcolor: '#607D8B',
        
        cursorwidth: '10px',
        
        cursorborder: '1px solid #607D8B',
        
        cursorborderradius: 0
        
    });
    
    
    // Trigger Links Active
    $(".links ul li").click(function () { $(this).addClass("active").siblings().removeClass("active"); });
    
    
    // Control Recent Photos sild
    $('.recent-pho .carousel').carousel({
        interval: 2000
    });
    
    
    // Trigger Modern-cov Chevron Down
    
    $('.fa-chevron-circle-down').click(function () {
        
        $('.modern-covers-sli').slideDown(2000, function () {
            
            $('.fa-chevron-circle-down').css('opacity', '0.5').next().css('opacity', '1');
            
            $('.fa-circle').hide().next().show();
            
        });
        
    });
    
    
    // Trigger Modern-cov Chevrons Up
    $('.fa-chevron-circle-up').click(function () {
       
        $('.modern-covers-sli').slideUp(2000, function () {
            
            $('.fa-chevron-circle-up').css('opacity', '0.5').prev().css('opacity', '1');
            
            $('.fa-dot-circle-o').hide().prev().show();
            
        });
        
    });
    
    
    // Trigger Advertisement hide icon
    $('.fa-times-circle').click(function () {
       
        $('.advertisement-bar img ').hide();
        
        $('.adv').hide();
        
        $('.adv-b').show();
        
    });
    
    // Trigger Advertisement back link
    $('.adv-b').click(function () {
        
        $(this).hide();
       
        $('.advertisement-bar img ').show();
        
        $('.adv').show();
        
    });
    
    
    // Featured Media Photos sild 
    $('.featured-media .carousel').carousel({
        interval: 3000
    });
    
});



//Loading Screen

$(window).on('load', function () {
    
    'use strict';
    
    // Loading Elements
    
    $(".loading-overlay .spinner").fadeOut(2000, function () {
        
        $(this).parent().fadeOut(1000, function () {
            
            // Show The Scroll
    
            $("body").css("overflow", "auto");
           
            $(this).remove();
            
        });
    });
    
    $("html,body").animate({scrollTop: 0});
    
});


