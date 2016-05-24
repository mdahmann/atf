
// Tugg
// =================
//<![CDATA[
  TUGG_WG_INITIAL_VIEW = 'map'; 								// Set to ‘map’ or ‘list’ as your initial view
  TUGG_WG_EL  = '#tg-title-widget-example';     // dom element to insert Tugg widget content
  API_KEY = 'VHGi4IIqSooo9qk';
  SHOW_HOST_FILM_EVENT_BTN = false;							// show/hide host film event button in the widget
  SHOW_SUBSCRIBE_FOR_UPDATES_BTN = false;				// show/hide subscribe for updates button in the widget
  CAMPAIGN_SLUG = 'at-the-fork';

//]]>
// Smooth Scrolling for Anchors Links
// =================
$(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 750);
                return false;
            }
        }
    });
});

// Show Navbar After Jumbotron
// =================

(function($) {
    $(document).ready(function() {
        // hide .navbar first
        $(".navbar").hide();

        // fade in .navbar
        $(function() {
            $(window).scroll(function() {

                // set distance user needs to scroll before we start fadeIn
                if ($(this).scrollTop() > 300) {
                    $('.navbar').fadeIn();
                } else {
                    $('.navbar').fadeOut();
                }
            });
        });

    });
}(jQuery));


// Hide Overlay Div & Play Youtube Video
// =================

$(document).ready(function() {
  $('#box').on('click', function(ev) {

    $("#box").css("display","none");
    $("#video")[0].src += "&autoplay=1";
    ev.preventDefault();

  });
});

// .modal-backdrop classes
// =================

$(".modal-transparent").on('show.bs.modal', function () {
  setTimeout( function() {
    $(".modal-backdrop").addClass("modal-backdrop-transparent");
  }, 0);
});
$(".modal-transparent").on('hidden.bs.modal', function () {
  $(".modal-backdrop").addClass("modal-backdrop-transparent");
});

$(".modal-fullscreen").on('show.bs.modal', function () {
  setTimeout( function() {
    $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
  }, 0);
});
$(".modal-fullscreen").on('hidden.bs.modal', function () {
  $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
});
