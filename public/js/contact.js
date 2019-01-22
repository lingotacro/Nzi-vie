(function($) {
	"use strict";
	// Contact form valitation with jquery.validate plugin
	if ($.fn.validate) {
        var contactForm = $('#contact-form'),
            formBtn = contactForm.find('.btn');

        contactForm.validate({
            rules: {
                contactname: 'required',

                contactsubject: 'required',
                contactemail: {
                    required: true,
                    email: true
                },
                contactmessage: {
                    required: true,
                }
            },
            messages: {
                contactname: "Le champ est requis. Veuillez entrer votre nom svp.",
                // contactsubject: "This field is required. Please enter a subject.",
                contactemail: {
                    required: "Le champ est requis. Veuillez entrez votre Email.",
                    email: "Veuillez entrer un Email valide."
                },
                contactmessage: {
                    required: "Le champ est requis. Veuillez entrer votre messge svp ."
                }
            },
            submitHandler: function (form) {
                $(document).ajaxStart(function() {
                    formBtn.button('loading');
                }).ajaxStop(function() {
                    formBtn.button('reset');
                });
                /* Ajax handler */
                $.ajax({
					type: 'post',
					url: 'assets/php/mail.php',
					data: $(form).serialize(),
				}).done(function( data ) {
					if ( data == 'success') {
						alert('Email has been sent successfully!')
					} else if ( data == 'already') {
						alert('You already sent a message. Please try again later');
					} else {
						alert('There is an error please try again later!');
					}
				}).error(function() {
					alert( 'There is an error please try again later!' );
				});
                return false;
            }
        });
    }
})(jQuery);
