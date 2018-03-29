

		$(document).ready(function(){
			$(".menu-button").click(function(){
				$(".menu-button i").toggleClass("active");
				$(".sidenav").toggleClass("active");
			});

			$('.materialboxed').materialbox();
			$('select').material_select();
			$('open').material_select();

			$(".select-wrapper .caret").addClass("material-icons").html("keyboard_arrow_down");

			$('.modal-trigger').leanModal({
			    dismissible: true, // Modal can be dismissed by clicking outside of the modal
			    opacity: .5, // Opacity of modal background

			    in_duration: 300, // Transition in duration
			    out_duration: 300, // Transition out duration  
			});

			$('.dropdown-button').dropdown({
				inDuration: 300,
				outDuration: 225,
		      constrain_width: false, // Does not change width of dropdown to that of the activator
		      hover: true, // Activate on hover
		      gutter: 0, // Spacing from edge
		      belowOrigin: false, // Displays dropdown below the button
		      alignment: 'left' // Displays dropdown with edge aligned to the left of button
		  });

			$('.slider').slider({full_width: true});


			$("h2")
			.wrapInner("<span>")

			$("h2 br")
			.before("<span class='spacer'>")
			.after("<span class='spacer'>");

		});
 	