particlesJS("particles-js", {"particles":{"number":{"value":264,"density":{"enable":true,"value_area":2483.9146494875945}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":1,"random":true,"anim":{"enable":true,"speed":1,"opacity_min":0,"sync":false}},"size":{"value":2,"random":true,"anim":{"enable":false,"speed":4,"size_min":0.3,"sync":false}},"line_linked":{"enable":false,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":1,"direction":"bottom","random":true,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":600}}},"interactivity":{"detect_on":"window","events":{"onhover":{"enable":false,"mode":"bubble"},"onclick":{"enable":false,"mode":"repulse"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":250,"size":0,"duration":2,"opacity":0,"speed":3},"repulse":{"distance":400,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});

$(document).ready(function() {
	$("#sad").click(function() {
		alert( "We will miss you!" );
	});


	$(".header3").on("change", ".here", function() {
		//$(".no-attend").css("display", "none");
		if($('.yesgo').is(':checked')) { 
			$(".no-attend").css("display", "inline");
			$(".nojoin").css("display", "none");
		}
		else { 
			$(".no-attend").css("display", "none");
			$(".nojoin").css("display", "inline");
		}
	});

	$('#nec').validate({
		rules: {
			name: {
				required: true
			},
			surname: {
				required: true
			},
			company: {
				required: true
			},
			title: {
				required: true
			},
			email: {
				required: true,
				email: true
			}
		},
		submitHandler: function(form) {
			form.submit();
			alert( "It will be great!" );
		}
	});


});