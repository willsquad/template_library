$(document).ready(function() {
    $('.progress_row_div_js').on('click', function(){
        
        var self = $(this);
        var id = self.attr('data-formtab');
        
        $('.form1 .progress_row>div').removeClass('active');
        $(this).addClass('active');
        $('.form_row').removeClass('active');
        $('#'+id).addClass('active');
        
        /*if($(this).hasClass('active')) {
            $('.progress_row_div_js').removeClass('active');
            $(this).addClass('active');
        }*/
    });
    
    $(document).on('click', '.toggle_login_register_js', function(e) {
        e.preventDefault();
        $('.login_register_row').toggleClass('login_row register_row');
        
        if ($(this).text() == "I don't have an account")
           $(this).text("I have an account")
        else
           $(this).text("I don't have an account");

    });
    
    
    
    /***** START OF FORM 2 *****/
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
                current_fs.css({
            'transform': 'scale('+scale+')',
            'position': 'absolute'
          });
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
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

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

    $(".submit").click(function(){
        return false;
    })
    /***** END OF FORM 2 *****/
    
    
    /***** START OF FORM 3 *****/
    
    
    	//Ckech mark SVG icon point
	var svg_valid_icon = "21.4,4.7 21.4,4.7 21.4,4.7 18.6,7.5 18.6,7.5 8.7,17.4 3,11.7 0,14.5 5.9,20.2 8.7,23 20.2,11.5 24.2,7.5";
	
	//Arrow SVG icon point
	var svg_arrow_icon = "17.4,8.7 17.4,8.7 8.7,0 5.9,2.8 14.6,11.5 8.7,17.4 8.8,17.3 5.8,20.1 5.9,20.2 8.7,23 20.2,11.5 20.2,11.5";
	
	//Form steps number
	var list_elem_count = $("#steps li").length;
	
	//Steps navigation position
	var navigation_pos;
	
	//Enable/Disable consecutive click/keypress event
	var clickable_btn = true;



	init();

	function init(){
		add_navigation();

		var next_step_btn_width = $("#navigation li.current_nav").outerWidth();

		var navigation_parent_width = $('#navigation').parent().width();

		navigation_pos = (navigation_parent_width/2) - ((next_step_btn_width/2)+5);

		$('#navigation').css({'marginLeft' : navigation_pos+5});

		update_progress(1);

		focus_inupt(0);
	}

	//Click next step btn event
	$('#navigation li').on('click', function(e){		
		execute_event($(this).index());
	});	    

	//Enter keybard press event
	$(document).on('keypress', function(e){
		var keyCode = e.keyCode || e.which
		if(keyCode === 13) {
			var current_step_idx = $('#navigation li.current_nav').index();
			execute_event(current_step_idx);
		}
	});

	//Function to start the animation
	function execute_event(idx){
		if(!clickable_btn || !$('#navigation li').eq(idx).hasClass('current_nav')){
			return false;
		}

		if(!validate_form(idx)){
			show_error(idx);
			return false;
		}else{
			clickable_btn = false;
			clear_error();
			if(idx<list_elem_count-1){
				navigation_pos =  navigation_pos-20;
			}		
			animate_navigation(idx+1, navigation_pos);
		}
	}
	
	
	//Function to animate the clicked button  & the SVG icon
	function animate_navigation(btn_index, new_pos){
		var s = Snap('.current_nav .arrow');

		$('#navigation li').eq(btn_index-1).addClass('animate');
					
		s.stop().animate({'points' : svg_valid_icon}, 150, mina.easeout, function(){			
			if(btn_index<list_elem_count){
				
				$(".arrow").velocity("fadeOut", {delay : 200, duration: 200, complete : function(){
					update_nav_position(btn_index, new_pos);
					$(this).eq(btn_index).css({"opacity" : 1});
					clickable_btn = true;
				}});

			}else if(btn_index==list_elem_count){
				
				update_nav_position(btn_index, new_pos);
				form_ready();

			}			
		});		
	}


	//Update the navigation position
	function update_nav_position(el_index, new_pos){
		$('#navigation').velocity({marginLeft : new_pos}, 200);
		$('#navigation li').eq(el_index).addClass('current_nav').siblings().removeClass('current_nav animate');
		$('#navigation li').eq(el_index-1).addClass('valid');
		
		if(el_index <= list_elem_count-1){
			$('#navigation li').eq(list_elem_count-1).addClass('submit');
			next_step(el_index);
			focus_inupt(el_index);
		}
	}


	//Function to validte the form
	function validate_form(step_index){
		if($('#steps li input').eq(step_index).val() != ''){
			return true;
		}else{
			return false;
		}
	}

	//Function to focus on the form inputs
	function focus_inupt(input_idx){
		if($('#steps li input').length != 0){
			$('#steps li input').eq(input_idx).focus();
		}else{
			return false;
		}
	}


	//Function to add navigation
	function add_navigation(){
		if(list_elem_count==0){
			return false;
		}

		var pag_markup = '<div class="navigation_container"><ul class="clearfix" id="navigation">';
		var icon_markup = '<div class="icon" id="icon_wrapper"><svg x="0px" y="0px" width="24.3px" height="23.2px" viewBox="0 0 24.3 23.2" enable-background="new 0 0 24.3 23.2" xml:space="preserve"><polygon class="arrow" fill="#ffffff" points="'+ svg_arrow_icon +'"></svg></div>';
		
		for (var i = 1; i <= list_elem_count; i++) {
			pag_markup = pag_markup + '<li>'+ icon_markup + '</li>';
		};
		
		$('#steps').after(pag_markup + '</div>');		
		$('#navigation li').eq(0).addClass('current_nav');
	}


	//Function to show the next step
	function next_step(idx){
		$('#steps li').eq(idx-1).removeClass('current_step');
		$('#steps li').eq(idx).addClass('current_step');
		update_progress(idx+1);
	}


	//Function to show errors on the form & navigation
	function show_error(index){
		$('#navigation li').eq(index).addClass('error animate');
		$('#steps li').eq(index).addClass('error');
	}


	//Function to clear the errors on the form & navigation
	function clear_error(){
		$('#navigation li').removeClass('error');
		$('#steps li').removeClass('error');
	}


	//Function to send the form or show a message
	function form_ready(){
		alert('Thanks for filling up the form!');
	}

	//Function to update step number(visible on small size screens)
	function update_progress(idx){
		$('.step_nb').text(idx +'/'+list_elem_count);
	}
    
    /***** END OF FORM 3 *****/
    
    
    /**** START OF FORM 4 ****/
    $(document).on('click', '.account_button_js', function(e) {
        e.preventDefault();
        $('.form_row .step_container').css('display', 'none');
        $('.form_row .step_container:nth-child(2)').css('display', 'block');
        $('.form_progress_line').css('width', '50%');
        $('.form_steps_container>.form_step:nth-child(3) .form_step_icon').addClass('active');
    });
    $(document).on('click', '.personal_button_js', function(e) {
        e.preventDefault();
        $('.form_row .step_container').css('display', 'none');
        $('.form_row .step_container:nth-child(3)').css('display', 'block');
        $('.form_progress_line').css('width', '87.5%');
        $('.form_steps_container>.form_step:nth-child(4) .form_step_icon').addClass('active');
    });
    
     $(document).on('click', '.create_account_button', function(e) {
        e.preventDefault();
        $('.form_progress_line').css('width', '100%');
        setTimeout(function() { alert('Account Created'); }, 1000);
    });
    /**** END OF FORM 4 ****/

});