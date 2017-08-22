/* Your site's JavaScript here. */

jQuery(document).ready(function($){


	// alert('Jquery is working!');

	// Add smooth scrolling between anchor points on same page
    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

          //if (windowWidth <= 800) { 
          	if (target.length) {
	            $('html,body').animate({
	              scrollTop: target.offset().top - 60
	            }, 1000);
	            //return false;
	          }
	       //}

	      //else {
			if (target.length) {
		        $('html,body').animate({
		           scrollTop: target.offset().top - 80
		        }, 1000);
		        //return false;
		       }
		   //}
        }
      });
    });

	//Clear default text in input fields, and restore if it remains empty on blur
	$('input[type="email"]').each(function() {
		  var default_value = this.value;
			$(this).focus(function(){
			   if(this.value == default_value) {this.value = '';}
		    });
	        $(this).blur(function(){
	        if(this.value == '') {this.value = default_value;}
	       });
			});
	


} ); // End EVERTYTHING!!!