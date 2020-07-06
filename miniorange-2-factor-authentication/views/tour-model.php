<!-- The Modal -->
<form name="f" method="post" id="show_pointers">
	<?php wp_nonce_field("clear_pointers");?>
	<input type="hidden" name="option" value="clear_pointers"/>
	<input type="hidden" name="button_name" id="button_name" />
</form>

<form name="f" method="post" id="restart-plugin-tour">
	<?php wp_nonce_field("restart_plugin_tour");?>
	<input type="hidden" name="option" value="restart_plugin_tour"/>
	<input type="hidden" name="page" value="mo_2fa_two_fa" id="page">
</form>

<form name="f" method="post" id="skip-plugin-tour">
	<?php wp_nonce_field("skip_plugin_tour");?>
	<input type="hidden" name="option" value="skip_plugin_tour"/>
</form>

<div id="getting-started" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
    <!--    <span class="close">&times;</span>  -->
        <div class="modal-header">
            <h3 class="modal-title" style="text-align: center; font-size: 30px; color: #2980b9">Let's Get Started</h3><span id="tour-model" class="modal-span-close">X</span>
        </div>
        <div class="modal-body" style="height: 310px;">
  			<?php
  				echo $tour_body;
  			?>
        </div>
        <div class="modal-footer">
            <button type="button" class="mo_wpns_button mo_wpns_button1 modal-button" id="start-plugin-tour">Start tour
            </button>
            <button type="button" class="mo_wpns_button mo_wpns_button1 modal-button" id="skip-plugin-tour" onclick="skip_plugin_tour()" >Skip tour</button>

        </div>
    </div>
</div>
<div class='overlay' id="overlay" hidden></div>
<script type="text/javascript">
		var current_pointer = 0;
		var site_type = '';
		var site_elmt = '';
		//var waf_pointer = <?php echo json_encode($main_pointer); ?>;
		var display = '<?php echo $display; ?>';
		var getting_started_modal = document.getElementById("getting-started");

		jQuery('#getting-started').css('display', display);
		// jQuery('.modal-title').html('<u>'+waf_pointer['Main'][0]+'</u>');
		// jQuery('.modal-body').html(waf_pointer['Main'][1]);
		jQuery('#start-plugin-tour').html('Start a tour');
		jQuery('.modal-footer a').css('display', 'inline-block');
		
		jQuery('#2fa').css("border", "5px solid #20b2aa");

		jQuery('input[type=radio][name=mo2f_two_factor]').click(function(){
			var ele = document.getElementsByName("mo2f_two_factor");
			var selected = '';
			
			for(i = 0; i < ele.length; i++) { 
             	if(ele[i].checked) 	
                {
                	selected = ele[i].value;
            	}
            }

            jQuery('#2fa').css("border", "1px solid black");
            jQuery('#waf').css("border", "1px solid black");
            jQuery('#malware').css("border", "1px solid black");
            jQuery('#backup').css("border", "1px solid black");
            jQuery('#login').css("border", "1px solid black");

			jQuery('#'+selected).css("border", "5px solid #20b2aa");

		});
		
		jQuery('#start-plugin-tour').click(function(){

			var ele = document.getElementsByName("mo2f_two_factor");
			var selected = '';
			
			for(i = 0; i < ele.length; i++) { 
             	if(ele[i].checked) 	
                {
                	selected = ele[i].value;
            	}
            }
            

            var pageurl = '';
            switch(selected){
            	case '2fa':
            		pageurl = 'mo_2fa_two_fa';
            		break;
            	case 'waf':
            		pageurl = 'mo_2fa_waf';
            		break;
            	case 'malware':
            		pageurl = 'mo_2fa_malwarescan';
            		break;
            	case 'login':
            		pageurl = 'mo_2fa_login_and_spam';
            		break;
            	case 'backup':
            		pageurl = 'mo_2fa_backup';
            		break;

            }
            document.getElementById('page').value = pageurl;
			var data = {
		        'action'	: 'mo_wpns_tour',
			    'call_type'	: 'entire_plugin_tour_started',
		    };
		    jQuery.post(ajaxurl, data, function(response) {
		        getting_started_modal.style.display = "none";
		    });

			var url = '<?php echo $_REQUEST["page"]; ?>';	
			switch(url){
				case 'mo_2fa_two_fa':
					document.getElementById("setup_2fa").click();	
					break;

				case 'mo_2fa_waf':
					document.getElementById("settingsTab").click();	
					break;

				case 'mo_2fa_login_and_spam':
					document.getElementById("login_sec").click();	
					break;

				case 'mo_2fa_malwarescan':
					document.getElementById("malware_view").click();	
					break;

				case 'mo_2fa_backup':
					document.getElementById("backup_set").click();
					break;
			}
			jQuery('#restart-plugin-tour').submit();

		});
		// jQuery('.modal-title').html('<u>Do you want to enable Cloud version</u>');
		// jQuery('.modal-body').html('<h2 style="text-align: center">Enable Cloud version <label class="mo_wpns_switch_small"><input type="checkbox" class="mo_wpns_slider_body_large" name="mo_wpns_enable_htaccess_blocking" checked=""><span class="mo_wpns_slider_small mo_wpns_round_small"></span>				</label></h2>');
			// jQuery('#getting-started').css('display', display);
			// jQuery('.modal-title').html('<u>'+waf_pointer['Main'][0]+'</u>');
			// jQuery('.modal-body').html(waf_pointer['Main'][1]);
			// jQuery('.modal-footer a').css('display', 'inline-block');
		// jQuery('.modal-footer a').css('display', 'none')
		// jQuery('.modal-content').css('width', '40%');
		// jQuery('#start-plugin-tour').text('Save');
		function skip_plugin_tour(){

		    var data = {
		        'action'	: 'mo_wpns_tour',
			    'call_type'	: 'skip_entire_plugin_tour',
		    };
		    jQuery.post(ajaxurl, data, function(response) {
		        getting_started_modal.style.display = "none";
		    });
		}



		
		jQuery('#restart-tour').click(function(){
			var data={
				'action': 'mo_wpns_tour',
				'call_type': 'wpns_enable_tour'
			};
			jQuery.post(ajaxurl, data, function(response){
				
				current_pointer = 0;
				// jQuery('.modal-title').html('<u>'+waf_pointer['Main'][0]+'</u>');
				// jQuery('.modal-body').html(waf_pointer['Main'][1]);
				jQuery('#start-plugin-tour').html('Start tour');
				jQuery('.modal-footer a').css('display', 'inline-block');
				jQuery('#getting-started').css('display', 'block');
			});
		});

		jQuery('.modal-footer a').click(function(){
			close_modal();
		});
		jQuery('#tour-model').click(function(){
			close_modal();
		});
		function close_modal(){
			var data = {
		        'action'	: 'mo_wpns_tour',
			    'call_type'	: 'skip_entire_plugin_tour',
		    };
		    jQuery.post(ajaxurl, data, function(response) {
		        getting_started_modal.style.display = "none";
		    });
		}

		function open_hide(gettag){
			if(gettag.text == '+'){
				gettag.text='-';
				jQuery('#div-'+gettag.id).css({'overflow': '', 'height': ''});
			} else {
				gettag.text='+';
				jQuery('#div-'+gettag.id).css({'overflow': 'hidden', 'height': '50px'});
			}
		}

		// function change_span_css(elmt){
		// 	if(jQuery('#'+elmt.id).css('background-color') == 'rgb(255, 255, 255)'){
		// 		jQuery('.modal-span').css({'color': '#0073aa', 'background-color': '#ffffff'});
		// 		jQuery('#'+elmt.id).css({'color': '#ffffff', 'background-color': '#0073aa'});
		// 		site_type = jQuery('#'+elmt.id).html();
		// 		jQuery('#body-para-instr').css('color', 'black');
		// 		site_elmt = elmt.id;
		// 		jQuery('.modal-title').html('Step '+(current_pointer+1)+'-'+(waf_pointer[site_type].length+1)+': <u>'+waf_pointer['Main'][0]+'</u>');
		// 	} else {
		// 		jQuery('#'+elmt.id).css({'color': '#0073aa', 'background-color': '#ffffff'});
		// 		site_elmt = '';
		// 		site_type = '';
		// 		jQuery('.modal-title').html('<u>'+waf_pointer['Main'][0]+'</u>');
		// 	}
		// }

		// jQuery('#start-plugin-tour').click(function(){
		
		// 	if(jQuery('#start-plugin-tour').text() == 'Save'){
		// 		jQuery('.modal-title').html('<u>'+waf_pointer['Main'][0]+'</u>');
		// 		jQuery('.modal-body').html(waf_pointer['Main'][1]);
		// 		jQuery('#start-plugin-tour').html('Start a tour');
		// 		jQuery('.modal-footer a').css('display', 'inline-block');
		// 	}
		// 	else if(site_type != ''){
		// 		if (jQuery('#start-plugin-tour').text() == 'Close') {
		// 			close_modal();
		// 		}
		// 		if(current_pointer<=waf_pointer[site_type].length+1){
		// 			if(current_pointer == waf_pointer[site_type].length-1){
		// 				jQuery('#start-plugin-tour').html('Close');
		// 			}else if(current_pointer == waf_pointer[site_type].length){
		// 				current_pointer = current_pointer-1;
		// 			}else{
		// 				jQuery('#skip-plugin-tour').html('Previous');
		// 				jQuery('#start-plugin-tour').html('Next');
		// 			}
		// 			current_pointer = current_pointer+1;
		// 			scrolled = jQuery('.modal-body').scrollTop(0);
		// 			jQuery('.modal-footer a').css('display', 'none');
		// 			jQuery('.modal-footer button:first-of-type').css('display', 'inline-block');
		// 			jQuery('.modal-title').html('Step '+(current_pointer+1)+'/'+(waf_pointer[site_type].length+1)+': <u>'+waf_pointer[site_type][current_pointer-1][0]+'</u>');
		// 			jQuery('.modal-body').html(waf_pointer[site_type][current_pointer-1][1]);
		// 		}
		// 	}else{
		// 		jQuery('#body-para-instr').css('color', 'red');
		// 	}
		// })
</script>
