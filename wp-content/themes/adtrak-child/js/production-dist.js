!function($){"use strict";$(function(){$("#back-top").hide(),$(function(){$(window).scroll(function(){300<$(this).scrollTop()?$("#back-top").fadeIn():$("#back-top").fadeOut()})}),$("#back-top").click(function(){$("html, body").animate({scrollTop:$("header").offset().top},750)}),$(".js-toggle-location-numbers").click(function(){$(".location-numbers").toggleClass("location-numbers--visible")});var mobNav=document.querySelector(".mob-nav .scroll-container"),copyPrimaryMenu=document.querySelector("#navigation .menu-primary").cloneNode(!0);if(mobNav.appendChild(copyPrimaryMenu),$("#menu-secondary-menu").length){var copySecondaryMenu=document.querySelector("#menu-secondary-menu").cloneNode(!0);mobNav.appendChild(copySecondaryMenu)}$("<div class='mob-nav-close'><i class='fa fa-times'></i></div>").insertAfter(".mob-nav .scroll-container"),$("<span class='sub-arrow'><i class='fa fa-angle-down'></i></span>").insertAfter(".mob-nav .menu-item-has-children > a"),$(".sub-arrow").click(function(){$(this).toggleClass("active"),$(this).prev("a").toggleClass("active"),$(this).next(".sub-menu").slideToggle(),$(this).children().toggleClass("fa-angle-down").toggleClass("fa-angle-up")}),$("<div class='mob-nav-underlay'></div>").insertAfter(".mob-nav"),$(".menu-btn").click(function(){$(".mob-nav,.mob-nav-underlay").addClass("mob-nav--active"),$("body").addClass("fixed")}),$(".mob-nav-underlay,.mob-nav-close").click(function(){$(".mob-nav,.mob-nav-underlay").removeClass("mob-nav--active"),$("body").removeClass("fixed")}),jQuery(document).on("nfFormReady",function(){nfRadio.channel("forms").on("submit:response",function(form){gtag("event","conversion",{event_category:form.data.settings.title,event_action:"Send Form",event_label:"Successful "+form.data.settings.title+" Enquiry"}),console.log(form.data.settings.title+" successfully submitted")})})})}(jQuery);
//# sourceMappingURL=production-dist.js.map