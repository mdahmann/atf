
// Smooth Scrolling for Anchors Links
// =================
$(".see-the-film").click(function() {
    $('html,body').animate({
        scrollTop: $("#see-the-film").offset().top},
        'slow');
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
$('#imageID').click(function() {
$('#ytapiplayer2').show();
$('#imageID').hide();
});

$(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#video").attr('src');

    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#trailer").on('hide.bs.modal', function(){
        $("#video").attr('src', '');
    });

    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#trailer").on('show.bs.modal', function(){
        $("#video").attr('src', url);
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

// SCREENING PARTNER CAROUSEL (slick carousel)
// =================

$('#partners-carousel').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 6,
  slidesToScroll: 4,
  autoplay: true,
  autoplaySpeed: 5000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 2,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

// Form
// =================
$('#form1_contactform').submit(function(){
  $.ajax({
    type: "POST",
    data: $('#form1_contactform').serialize(),
    dataType: "html",
    timeout: 8000,
    cache: true
  }).done(function(data) {
    if(data.indexOf("SUCCESS") > -1) {
      alert("Hello! I am an alert box!!");

    } else {
      alert("damnit");
    };
  }).fail(function() {
    // code for failure goes here
  });
  return false;
});

$("#example-basic").steps({
headerTag: "h3",
bodyTag: "section",
transitionEffect: "slideLeft",
autoFocus: true
});
