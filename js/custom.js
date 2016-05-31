// Smooth Scrolling for Anchors Links
// =================
$('a[href*=#]').on('click', function(event) {
    event.preventDefault();
    $('html,body').animate({
        scrollTop: $(this.hash).offset().top - 100
    }, 700);
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

$(document).ready(function() {
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#video").attr('src');

    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#trailer").on('hide.bs.modal', function() {
        $("#video").attr('src', '');
    });

    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#trailer").on('show.bs.modal', function() {
        $("#video").attr('src', url);
    });
});

// .modal-backdrop classes
// =================

$(".modal-transparent").on('show.bs.modal', function() {
    setTimeout(function() {
        $(".modal-backdrop").addClass("modal-backdrop-transparent");
    }, 0);
});
$(".modal-transparent").on('hidden.bs.modal', function() {
    $(".modal-backdrop").addClass("modal-backdrop-transparent");
});

$(".modal-fullscreen").on('show.bs.modal', function() {
    setTimeout(function() {
        $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
    }, 0);
});
$(".modal-fullscreen").on('hidden.bs.modal', function() {
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
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 2,
                infinite: true,
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        }, {
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

// Organize Form
// =================
// $('#form1_organizeform').submit(function() {
//     $.ajax({
//         type: "POST",
//         data: $('#form1_organizeform').serialize(),
//         dataType: "html",
//         timeout: 8000,
//         cache: true
//     }).done(function(data) {
//         if (data.indexOf("SUCCESS") > -1) {
//           $( "#form1_organizeform" ).fadeOut(500);
//           $( "#success-message" ).fadeIn(500);
//
//         } else {
//             // code for failure goes here
//         };
//     }).fail(function() {
//         // code for failure goes here
//     });
//     return false;
// });
//
//
//
// // FORM VALIDATION
// $('#form1_organizeform')
//     .steps({
//         headerTag: 'h3',
//         bodyTag: 'section',
//         onStepChanged: function(e, currentIndex, priorIndex) {
//         },
//         // Triggered when clicking the Previous/Next buttons
//         onStepChanging: function(e, currentIndex, newIndex) {
//             var fv = $('#form1_organizeform').data('formValidation'), // FormValidation instance
//                 // The current step container
//                 $container = $('#form1_organizeform').find('section[data-step="' + currentIndex + '"]');
//
//             // Validate the container
//             fv.validateContainer($container);
//
//             var isValidStep = fv.isValidContainer($container);
//             if (isValidStep === false || isValidStep === null) {
//                 // Do not jump to the next step
//                 return false;
//             }
//
//             return true;
//         },
//         // Triggered when clicking the Finish button
//         onFinishing: function(e, currentIndex) {
//             var fv = $('#form1_organizeform').data('formValidation'),
//                 $container = $('#form1_organizeform').find('section[data-step="' + currentIndex + '"]');
//
//             // Validate the last step container
//             fv.validateContainer($container);
//
//             var isValidStep = fv.isValidContainer($container);
//             if (isValidStep === false || isValidStep === null) {
//                 return false;
//             }
//
//             return true;
//         },
//         onFinished: function(e, currentIndex) {
//             $('#form1_organizeform').formValidation('defaultSubmit');
//
//         }
//     })
//     .formValidation({
//         framework: 'bootstrap',
//         icon: {
//             valid: 'glyphicon glyphicon-ok',
//             invalid: 'glyphicon glyphicon-remove',
//             validating: 'glyphicon glyphicon-refresh'
//         },
//         // This option will not ignore invisible fields which belong to inactive panels
//         excluded: ':disabled',
//         fields: {
//
//             email: {
//                 validators: {
//                     notEmpty: {
//                         message: 'The email address is required'
//                     },
//                     emailAddress: {
//                         message: 'The input is not a valid email address'
//                     }
//                 }
//             },
//
//             firstName: {
//                 row: '.col-xs-4',
//                 validators: {
//                     notEmpty: {
//                         message: 'The first name is required'
//                     },
//                     regexp: {
//                         regexp: /^[a-zA-Z\s]+$/,
//                         message: 'The first name can only consist of alphabetical and space'
//                     }
//                 }
//             },
//             lastName: {
//                 row: '.col-xs-4',
//                 validators: {
//                     notEmpty: {
//                         message: 'The last name is required'
//                     },
//                     regexp: {
//                         regexp: /^[a-zA-Z\s]+$/,
//                         message: 'The last name can only consist of alphabetical and space'
//                     }
//                 }
//             }
//
//
//         }
//     });


    $(document).ready(function(){
        ajaxMailChimpForm($("#organize-form"), $("#success-message"));
        // Turn the given MailChimp form into an ajax version of it.
        // If resultElement is given, the subscribe result is set as html to
        // that element.
        function ajaxMailChimpForm($form, $resultElement){
            // Hijack the submission. We'll submit the form manually.
            $form.submit(function(e) {
                e.preventDefault();
                if (!isValidEmail($form)) {
                    var error =  "A valid email address must be provided.";
                    $resultElement.html(error);
                    $resultElement.css("color", "red");
                } else {
                    $resultElement.css("color", "black");
                    $resultElement.html("Subscribing...");
                    submitSubscribeForm($form, $resultElement);
                }
            });
        }
        // Validate the email address in the form
        function isValidEmail($form) {
            // If email is empty, show error message.
            // contains just one @
            var email = $form.find("input[type='email']").val();
            if (!email || !email.length) {
                return false;
            } else if (email.indexOf("@") == -1) {
                return false;
            }
            return true;
        }
        // Submit the form with an ajax/jsonp request.
        // Based on http://stackoverflow.com/a/15120409/215821
        function submitSubscribeForm($form, $resultElement) {
            $.ajax({
                type: "GET",
                url: $form.attr("action"),
                data: $form.serialize(),
                cache: false,
                dataType: "jsonp",
                jsonp: "c", // trigger MailChimp to return a JSONP response
                contentType: "application/json; charset=utf-8",
                error: function(error){
                    // According to jquery docs, this is never called for cross-domain JSONP requests
                },
                success: function(data){
                    if (data.result != "success") {
                        var message = data.msg || "Sorry. Unable to subscribe. Please try again later.";
                        $resultElement.css("color", "red");
                        if (data.msg && data.msg.indexOf("already subscribed") >= 0) {
                            message = "You're already subscribed. Thank you.";
                            $resultElement.css("color", "black");
                        }
                        $resultElement.html(message);
                    } else {
                        $resultElement.css("color", "black");
                        $resultElement.html("Thank you!<br>You must confirm the subscription in your inbox.");
                    }
                }
            });
        }
    });
