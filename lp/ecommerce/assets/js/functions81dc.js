var newsletter_p = setInterval(function(){
$("#bouncepopup-overlay").css("display","block")
$( "#popupform2" ).toggle( "bounce", { times: 1 }, "slow" );
clearInterval(newsletter_p);
}, 1000);

  
  
jQuery(document).ready(function($) { 


var key = '5XpThOAEkfgOvEJ';
var currentIP = $("meta[name=ip2loc]").attr('content');
$.ajax({
    method: 'get',
    url: 'https://pro.ip-api.com/json/' + currentIP,
    data: {key: key},
    success: function (data) {
        if (data) {
            $('input[name=ip2loc_ip]').val(data.query);
            $('input[name=ip2loc_isp]').val(data.isp);
            $('input[name=ip2loc_org]').val(data.org);
            $('input[name=ip2loc_country]').val(data.country);
            $('input[name=ip2loc_region]').val(data.regionName);
            $('input[name=ip2loc_city]').val(data.city);
        }
    }
});


    // ddexitpop.init({
    //     mobileshowafter: 60000, 
    //     contentsource: ["id", "ddexitpop"],
    //     fxclass: "random",
    //     displayfreq: "always",
    //     onddexitpop: function (e) {
    //         console.log("Exit Pop Animation Class Name: " + ddexitpop.settings.fxclass);
    //     },
    // });


$('#scroll').click(function() {
    $('body').animate({
        scrollTop: eval($('#' + $(this).attr('target')).offset().top - 70)
    }, 1000);
});

   $('.closeexitpop').on('click',function(){
        $('#ddexitpopwrapper').removeClass('open');
        
    });
    
    $("#indentform").validate({}); 


$(".validate-quote").validate();

      $(".bounce-close").click(function(){
$(".bouncepopup-overlay").hide();
$("#popupform2").toggle( "fadeOut" );

});



  $(function() {

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
//	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

 

}); 
 
 $(function() {
    $('.toggle-nav').click(function() {
        $('body').toggleClass('show-nav');
        return false;
    });
});
$(document).keyup(function(e) {
    if (e.keyCode == 27) {
        $('body').toggleClass('show-nav');
    }
});



$('.toggle-pkg').click(function(e) {
	$('html,body').animate({
	scrollTop: $(this.hash).offset().top - 10
	}, 1000);
    return false;
    e.preventDefault();
    });


$('.principle-style-bx').click(function() {
  $('html, body').animate({
  scrollTop: $(".style-bx-main").offset().top
  }, 1000)
});



$('.various').click(function() {
    var leadprice = $(this).attr('name');
    var pkgname_action = $(this).attr('data-lead');
    var cutprice_action = $(this).attr('data-cutprice');
 
$(".lead_action").val(pkgname_action);
    var gettitle = $(this).attr('title');
$('#popupform .popup-content h2').html(gettitle);
$(".popupform .leadprice").val(leadprice)
$('#popupform .popup-content .cutprice_pp').html(cutprice_action);


});



var key = '5XpThOAEkfgOvEJ';
var currentIP = $("meta[name=ip2loc]").attr('content');
$.ajax({
    method: 'get',
    url: 'https://pro.ip-api.com/json/' + currentIP,
    data: {key: key},
    success: function (data) {
        if (data) {
            $('input[name=ip2loc_ip]').val(data.query);
            $('input[name=ip2loc_isp]').val(data.isp);
            $('input[name=ip2loc_org]').val(data.org);
            $('input[name=ip2loc_country]').val(data.country);
            $('input[name=ip2loc_region]').val(data.regionName);
            $('input[name=ip2loc_city]').val(data.city);
        }
    }
});

$(".validate-popupform").validate();
$(".validate-popupquote").validate();
$(".cform-section-form").validate();
$("#popupform .popupform_sc").validate();
$("#ouibounce-modal .popupform_sc").validate();
$("#pricingpopupform .popupform_sc").validate(); 
 $(".validate-banner-frm").validate();
  



$('.testimonials-slider').owlCarousel({
  loop:true,
  margin:0,
  nav:false,
  dots:true,
  margin:10,
  items:1,
  auto:true,
  responsiveClass:true,
  responsive:{
    0:{
      items:1,
      nav:false
    },
    600:{
      items:1,
      nav:false
    },
    1000:{
      items:1,
      nav:false,
      loop:false
    }
  }
});



$('.few-things-slider').owlCarousel({
  loop:true,
  margin:0,
  nav:false,
  dots:true,
  items:1,
  auto:true,
  autoplayHoverPause: true,
  animateOut: 'slideOutUp',
  animateIn: 'slideInUp',
  responsiveClass:true,
  responsive:{
    0:{
      items:1,
      dots:true,
    },
    600:{
      items:1,
      dots:true,
    },
    1000:{
      items:1,
      dots:true,
      loop:true
    }
  }
});


 



/*Portfolio*/
 


$(function(){
    var $h3s = $('.fil-cat').click(function(){
        $h3s.removeClass('active-pf');
        $(this).addClass('active-pf');
    });
});





$('.portfolio-content [data-fancybox="video"]').fancybox({

  afterLoad : function( instance, current ) {

     // Remove scrollbars and change background
    current.$content.css({
      overflow   : 'visible',
      background : '#000', 

    });
          
  },
  onUpdate : function( instance, current ) {
    var width,
        height,
        ratio = 16 / 9,
        video = current.$content;
    
    if ( video ) {
      video.hide();

      width  = current.$slide.width();
      height = current.$slide.height() - 100;
      
      if ( height * ratio > width ) {
        height = width / ratio;
      } else {
        width = height * ratio;
      }

      video.css({
        width  : width,
        height : height
      }).show();

    }
  }
});



 
// //Portfolio Loader
var list = $(".portfolio-col .col-md-4");
var numToShow = 9;
var button = $("#loadMore");
var numInList = list.length;
list.hide();
if (numInList > numToShow) {
  button.show();
}
list.slice(0, numToShow).show();

button.click(function(){
    var showing = list.filter(':visible').length;
    list.slice(showing - 1, showing + numToShow).fadeIn().slow();
    var nowShowing = list.filter(':visible').length;
    if (nowShowing >= numInList) {
      button.hide();
    }
});
 


 

/*Portfolio End*/


 $('.testimonial-slider').owlCarousel({
        loop:true,
        nav:true,
        margin:0,
        responsiveClass:true,
        autoplay:false,
        // autoplayTimeout:1000,
        // autoplaySpeed: 800,
        autoplayHoverPause:false,
        items:4,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:1,
            },
            1000:{
                items:4,
            }
        }
    });


$(".autopopupform").validate();
 $(".apopupform_sc").validate();


    setTimeout(function(){
        $("#hidden_link").fancybox().trigger('click');
    },10000);
        
    
    $(".various").click(function(){
        $("#hidden_link").attr('id','hidden_n');
        var orgrice = $(this).attr('name');
        $('.popupform .leadprice').val(orgrice);
    
    });
});


