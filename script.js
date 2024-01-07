$(document).ready(function () {
  swiper();

//css Loader Start
  // hide preloader when everthing in the document load
  $('#preloader').fadeOut(1200);
//css Loader End

//Disable right clickstart
$(document).bind("contextmenu",function(e) {
  return false;
});
//Disable right click end

//Tooltip and Popover Initializer
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
$(function () {
  $('[data-toggle="popover"]').popover()
})
$('body').on('click', function (e) {
    $('[data-toggle=popover]').each(function () {
        // hide any open popovers when the anywhere else in the body is clicked
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
            $(this).popover('hide');
        }
    });
});
//Tooltip and Popover Initializer

//This line will add style of bootstrap table in all tables inside class globaltext start
$(".globaltext table").addClass("table table-sm").wrap("<div class=globaltable></div>");
//This line will add style of bootstrap table in all tables inside class globaltext start

stickyNav();

});

$(window).resize(function () {
  swiper();
  stickyNav();
});

//Sticky Navbar
$(window).scroll(function() {
  stickyNav();
});
function stickyNav(){
		   	var navHeight = $("#navheight").height();
			    if ($(window).scrollTop() > navHeight) {
              $('#navbar').addClass('fixed-top');
              // if ($(window).width() < '767') {
              // }
              $(".navbar-toggler").css("height", "71px");
              $("#headimage1").css("height", "30px");
              $(".navbar").css("background","var(--navCol)");
              $(".nav-link").css("color","#fff");
              $(".navbar-nav>li>.dropdown-menu").css("background","var(--navCol)");
              $(".navbar-toggler h4").css("color","white");
              $(".navbar-nav").css("background","transparent");

          }
          else {
              $('#navbar').removeClass('fixed-top');
              if ($(window).width() < '767') {
              }
              else{
              }
              $("#headimage1").css("height", "0px");
              $(".navbar").css("background","transparent");
              $(".nav-link").css("color","#fff");
              $(".navbar-nav>li>.dropdown-menu").css("background","var(--gndpc)")
              $(".navbar-toggler h4").css("color","white");
              $(".navbar-nav").css("background","transparent");
          }
      }
//Sticky Navbar End

//Courosel Text Position Start
var coroselHeight=$(".carousel-inner img").height();
var captionHeight=$(".carousel-caption").height();
var ch=(coroselHeight-captionHeight)/2;
var chperc=ch/coroselHeight*100;
$(".slider-text").css("top",chperc+"%");
$('#imageslider').on('slid.bs.carousel', function () {
var coroselHeight=$(".carousel-inner img").height();
var captionHeight=$(".carousel-caption").height();
var ch=(coroselHeight-captionHeight)/2;
var chperc=ch/coroselHeight*100;
$(".slider-text").css("top",chperc+"%");
})
//Courosel Text Position End

// For Responsive Swiper use for changing divs of swiper
function swiper() {
  $(window).width(function () {
    var width = $(window).width();// check width of screen
    var divs = $(".adddivsforswiper");//div it self
    var divsparent = $(divs).children().hasClass("swiper-container");//div parent
    var size = '558';// 558 size if for mobiles
    if (width >= size && divsparent) {//removes swiper divs when mobile to desktop
      divs.children().children().unwrap();
      divs.children().children().unwrap();
      $('span').remove();
    }
    if (width <= size && !divsparent) {//adds swiper divs when desktop to mobile view
      divs.wrapInner('<div class="swiper-wrapper"></div>');
      divs.append('<div class="swiper-pagination"></div>');
      divs.wrapInner('<div class="swiper-container"></div>');
      activeswiper();
    }
  });
}

// Swiper Activation Start
function activeswiper() {
  var swiper = new Swiper('.swiper-container', {
    pagination: {
      el: '.swiper-pagination',
      grabCursor: true,
      dynamicBullets: true,
      autoplay: {
        delay: 5000,
      },
      keyboard: {
        enabled: true,
      },
    },
  });
}
// Swiper Activation  End

// For Responsive Swiper use for changing divs of swiper End





//For News Headlines
var hoveredAnnouncement = null;
function announcementTicker() {
  $(".announcements")
    //For Hover And stop
    .filter(function (item) {
      return !$(this).is(hoveredAnnouncement);
    })
    //For Hover And stop end
    .each(function () {
      $(this)
        .find("li:first")
        .slideUp(function () {
          var announcement = $(this).closest(".announcements");
          $(this).appendTo(announcement).slideDown();
        });
    });
}
setInterval(announcementTicker, 20000);
$(function () {
  $(".announcements").hover(
    function () {
      hoveredAnnouncement = $(this);
    },
    function () {
      hoveredAnnouncement = null;
    }
  );
});

//For onClick on the news blue heading start
$("#newsbutton").click(function () {
  announcementTicker();
});
//For onClick on the news blue heading end

// For News Headlines End




//Event Hover Random Color Start
var randomLinks = $('#randomColor .colhover');
var original = randomLinks.css('background');
var colors = ['rgba(133,82,204,0.5)', 'rgba(255,142,3,0.5)', 'rgba(122,211,3,0.5)', 'rgba(255,57,54,0.5)', 'rgba(250,50,129,0.5)', 'rgba(0,0,0,0.5)', 'rgba(70,130,180,0.5)'];
randomLinks.hover(function () { //mouseover
  var randomColorNum = Math.floor(Math.random() * colors.length);
  var newcolor = colors[randomColorNum];
  $(this).css('background', newcolor);
  oldColorNum = randomColorNum;
}, function () { //mouseout
  $(this).css('background', original);
});
//Event Hover Random Color End




//Swiper for Testimonials Start
var swiper1 = new Swiper('.swiper-container-testimonials', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  autoplay: {
    delay: 5000,
  },
  keyboard: {
        enabled: true,
      },
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  loop: true,
  coverflowEffect: {
    rotate: 25,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: '.swiper-pagination-testimonials',
  },
});
//Swiper for Testimonials End



//Swiper for Aluminies Start
var swiper2 = new Swiper('.swiper-container-aluminies', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  autoplay: {
    delay: 5000,
  },
  keyboard: {
        enabled: true,
      },
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  loop: true,
  coverflowEffect: {
    rotate: 205,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: '.swiper-pagination-aluminies',
  },
});
//Swiper for Aluminies End




//News Function ADD
function newschange(news) {
  var a = news.innerHTML;
  $("#newspaste").empty();//used to empty the modal content
  $("#newspaste").append(a);//adda clicked news to the modal
}
//News Function ADD End




// All Scroll Functions Start
$(window).scroll(function () {
  //For Scroll Progress Indicator Start
  var scrollPos = $('body').scrollTop() + $(document).scrollTop();
	var thight= $("body").height() -$(window).height();
  var widthperct=(scrollPos/thight)*100;
  $(".progress").css('width',widthperct+'%');
  //For Scroll Progress Indicator End



  // Scroll To Top Button Start
  if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
    $('#return-to-top').fadeIn(200);    // Fade in the arrow
  } else {
    $('#return-to-top').fadeOut(200);   // Else fade out the arrow
  }
  // Scroll To Top Button End


  // Scroll To Bottom Button Start
  var height=$(document).height();
  var scrollPosition = $(window).height() + $(window).scrollTop();
  if ((height - scrollPosition) / height === 0) {  // If page is scrolled more than 50px
    $('#return-to-down').fadeOut(200);    // Fade in the arrow
  } else {
    $('#return-to-down').fadeIn(200);   // Else fade out the arrow
  }
  // Scroll To Bottom Button End
});

// Arrow Up and Down Click Functions Start
$('#return-to-top').click(function () {      // When arrow is clicked
  $('body,html').animate({
    scrollTop: 0                       // Scroll to top of body
  }, 1200);
});
$('#return-to-down').click(function () {      // When arrow is clicked
  $('body,html').animate({
    scrollTop: $(document).height()         // Scroll to top of body
  }, 1200);
});
// Arrow Up and Down Click Functions End

// All Scroll Functions Start





//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//this script code is for dept page

//Swiper for Department page Start
var swiper3 = new Swiper('.swiper-container-deptstaff', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  autoplay: {
    delay: 5000,
    disableOnInteraction: true,
  },
  keyboard: {
        enabled: true,
  },
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  coverflowEffect: {
    rotate: 25,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: false,
  },
  pagination: {
    el: '.swiper-pagination-deptstaff',
  },
});
//Swiper for Department page End




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//this script code is for gallery page

var swiper4 = new Swiper('.swiper-container-gallery', {
    lazy: true,
    freeMode: true,
    slidesPerView: 4,
    slidesPerColumn: 3,
    spaceBetween: 15,
    // init: false,
    autoplay: {
        delay: 3500,
        disableOnInteraction: true,
    },
    keyboard: {
        enabled: true,
      },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      1024: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 2,
      },
      576: {
        slidesPerView: 1,
      },
    }
  });

//Light gallery for gallery page start
lightGallery(document.getElementById('lightgallery'),{
	mode: 'lg-fade',
	thumbnail:true,
	animateThumb: true,
	showThumbByDefault: false,
	counter: true,
    download: false,
    enableSwipe: true,
    enableDrag: true,
    speed: 500
});
//Light gallery for gallery page end

//call light gallery by clicking slider Start
function callLightGallery(){
  $("#lightgallery").children().click();
}
//call light gallery by clicking slider End


//Feedback Validation Start
function disableTooltipFeedback(){
  $('#feedbackName').tooltip('hide');
  $('#feedbackName').tooltip('disable');
  $('#feedbackEmail').tooltip('hide');
  $('#feedbackEmail').tooltip('disable');
  $('#feedbackPhno').tooltip('hide');
  $('#feedbackPhno').tooltip('disable');
  $('#feedbackSubject').tooltip('hide');
  $('#feedbackSubject').tooltip('disable');
  $('#feedbackText').tooltip('hide');
  $('#feedbackText').tooltip('disable');
}
disableTooltipFeedback();
function validFeedback(){
  var name=$('#feedbackName');
  var email=$('#feedbackEmail');
  var phno=$('#feedbackPhno');
  var subject=$('#feedbackSubject');
  var ftext=$('#feedbackText');
  if (name.val()==="") {
    $('#feedbackName').tooltip('enable');
    $('#feedbackName').tooltip('show');
    return false;
  }
  else if (!/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/.test(email.val())) {
    $('#feedbackEmail').tooltip('enable');
    $('#feedbackEmail').tooltip('show');
    return false;
  }
  else if (!/^[6789]\d{9}$/.test(phno.val())) {
    $('#feedbackPhno').tooltip('enable');
    $('#feedbackPhno').tooltip('show');
    return false;
  }
  else if (subject.val()==="") {
    $('#feedbackSubject').tooltip('enable');
    $('#feedbackSubject').tooltip('show');
    return false;
  }
  else if (ftext.val()==="") {
    $('#feedbackText').tooltip('enable');
    $('#feedbackText').tooltip('show');
    return false;
  }
}

//Feedback Validation End
