/*

  Author: creativeCary
  Template: Flat-Vault
  Version: 1.2
  URL: http://themeforest.net/user/creativecary


*/
	
	
	$(document).ready(function() { // Document ready
	"use strict";
	//$('form')[0].reset();
	if($('input#email').val()!='') {
		$('input#email').next().addClass('floating-label-repos');
	}
	$('input').on('input', function() { 
    	if($(this).val()!='') {
			$(this).next().addClass('floating-label-active');
			$(this).next().removeClass('floating-label-under-active');
			$(this).next().removeClass('floating-label-repos');
		}
		else {
			$(this).next().removeClass('floating-label-active');
			$(this).next().removeClass('floating-label-under-active');
			$(this).next().removeClass('floating-label-repos');
		}
	});

	$('input').keyup(function() {
		if($(this).val()!='') {
			$(this).next().addClass('floating-label-active');
			$(this).next().removeClass('floating-label-repos');

		}
		else {
			$(this).next().removeClass('floating-label-active');
			$(this).next().removeClass('floating-label-repos');
		}
		
	}).focus(function() {
		if($(this).val()!='') {
			$(this).next().addClass('floating-label-under-active');
		}
		else {
			$(this).next().removeClass('floating-label-under-active');
		}

	}).blur(function() {
		if($(this).val()!='') {
			$(this).next().removeClass('floating-label-under-active');
			$(this).next().addClass('floating-label-repos');

		}
		else {
			$(this).next().removeClass('floating-label-active');
			$(this).next().removeClass('floating-label-repos');
			$(this).next().removeClass('floating-label-under-active');
		}
	});

	function testForm() {
		var email = $('input[type=text]').val();
		var pswd = $('input[type=password]').val();
		//validate the length
		if ( pswd.length < 6 ) {
		    $('#length').removeClass('valid').addClass('invalid');
		} else {
		    $('#length').removeClass('invalid').addClass('valid');
		}
				//validate letter
		if ( pswd.match(/[A-z]/) ) {
		    $('#letter').removeClass('invalid').addClass('valid');
		} else {
		    $('#letter').removeClass('valid').addClass('invalid');
		}


		/*//validate capital letter
		if ( pswd.match(/[A-Z]/) ) {
		    $('#capital').removeClass('invalid').addClass('valid');
		} else {
		    $('#capital').removeClass('valid').addClass('invalid');
		}*/

		//validate number
		if ( pswd.match(/\d/) ) {
		    $('#number').removeClass('invalid').addClass('valid');
		} else {
		    $('#number').removeClass('valid').addClass('invalid');
		}

		var pswdb = pswd;
		if(pswdb.toLowerCase().replace(" ", "").indexOf('facturehero') != -1) {alert('Le mot de passe ne peut pas contenir facturehero')}
		if(pswd == email && email.trim() != "") {alert('non plus')}

		// appear last big check !
		/*if( $('#number').hasClass('valid') &&  $('#letter').hasClass('valid') && $('#length').hasClass('valid') ) {*/
		if($('#length').hasClass('valid') && $('#nooccur').hasClass('valid') ) {
			$('#number').hide();
			$('#letter').hide();
			$('#length').hide();
			$('#visualcheckvalidationpwd').addClass('slideInRight animated');
		}
		else {
			$('#number').show();
			$('#letter').show();
			$('#length').show();
			//$('#visualcheckvalidationpwd').hide();
			$('#visualcheckvalidationpwd').removeClass('slideInRight animated');
		}
	}

	$('input[type=password]').on('input', function() { 
		$('#pswd_info').slideDown();
    	testForm();
	});

	$('input[type=password]').keyup(function() {
	    // set password variable
	    var inputElt = $(this);
		var pswd = inputElt.val();
		var lastchar = pswd[pswd.length -1];
		// test occurence < 5
		if(pswd.split(lastchar).length-1 >= 5) {
			//alert('Oups! Trop de caractères identiques.')
			inputElt.addClass('colorw');
			$('#nooccur').addClass('valid');
			$('#errorwhiletyping').html('Oups! <strong>Trop de caractères identiques</strong>').show();
		}
		else {
			inputElt.removeClass('colorw');
		}
	
		//validate the length
		$('.help-block').fadeOut();
		if ( pswd.length < 6 ) {
		    $('#length').removeClass('valid').addClass('invalid');
		} else {
		    $('#length').removeClass('invalid').addClass('valid');
		}
				//validate letter
		if ( pswd.match(/[A-z]/) ) {
		    $('#letter').removeClass('invalid').addClass('valid');
		} else {
		    $('#letter').removeClass('valid').addClass('invalid');
		}

		//validate capital letter
		/*if ( pswd.match(/[A-Z]/) ) {
		    $('#capital').removeClass('invalid').addClass('valid');
		} else {
		    $('#capital').removeClass('valid').addClass('invalid');
		}*/

		//validate number
		if ( pswd.match(/\d/) ) {
		    $('#number').removeClass('invalid').addClass('valid');
		} else {
		    $('#number').removeClass('valid').addClass('invalid');
		}
	}).focus(function() {
	    $('#pswd_info').fadeIn();
	}).blur(function() {
	    $('#pswd_info').fadeOut();
	});
	
	/* ==========================
	   PRE-LOADER
	=============================*/
	
	$(window).load(function() {
		// will fade loading animation
		$("#object").delay(600).fadeOut(300);
		// will fade loading background					
		$("#loading").delay(1000).fadeOut(500);
	});            

	/* ==========================
	   JOIN-US FORM
	=============================*/

$(document).ready(function() {
    $("#submit_btn").click(function() { 
        var proceed = true;
        //simple validation at client's end
        //loop through each field and we simply change border color to red for invalid fields		
		$("#join-us-form input[required=true]").each(function(){
			$(this).css('border-color',''); 
			if(!$.trim($(this).val())){ //if this field is empty 
				$(this).css('border','solid 1px red'); //change border color to red   
				proceed = false; //set do not proceed flag
			}
			//check invalid email
			var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
			if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
				$(this).css('border','solid 1px red'); //change border color to red   
				proceed = false; //set do not proceed flag				
			}	
		});
        if(proceed) //everything looks good! proceed...
        {
			//get input field values data to be sent to server
            var post_data = {
				'first_name'	: $('input[name=first_name]').val(),
                'last_name'		: $('input[name=last_name]').val(),				
				'user_email'	: $('input[name=email]').val(), 
				'phone_number'	: $('input[name=phone]').val(), 
				'website'		: $('input[name=website]').val()
			};
	        //Ajax post data to server
            $.post('join_us.php', post_data, function(response){ 
				if(response.type == 'error'){ //load json data from server and output message     
					var output = '<div class="error">'+response.text+'</div>';
				}else{
				    output = '<div class="success">'+response.text+'</div>';
					//reset values in all input fields
					$("#join-us-form  input[required=true]").val(''); 
				}
				$("#join-us-results").hide().html(output).slideDown();
            }, 'json');
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#join-us-form  input[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
        $("#result").slideUp();
    });
});

	/* =====================================
	   AJAX CHIMP ( NEWSLETTER SUBSCRIPTION )
	========================================*/
	$('#mc-embedded-subscribe-form').ajaxChimp({
		callback: mailchimpCallback,
	    url: 'http://craftxhtml.us11.list-manage.com/subscribe/post?u=cfe258a0cf370d5efaa793bc7&amp;id=fa81ce5caf'
	    // Replace the URL above with your mailchimp URL (put your URL inside '').
	});

	// callback function when the form submitted, show the notification box
	function mailchimpCallback(resp) {
        if (resp.result === 'success') {
			$('#newsletter-error').slideUp();
            $('#newsletter-success').slideDown();
        }
        else if (resp.result === 'error') {
			$('#newsletter-success').slideUp();
            $('#newsletter-error').slideDown();
        }
    }
	
	

	}); // End document ready