<?php
	
	$email_registered = 1;
	global $Mo2fdbQueries;
	//$email = get_user_meta(get_current_user_id(),'email',true);
	$email =$Mo2fdbQueries->get_user_detail( 'mo2f_user_email', get_current_user_id() );
	if(isset($email))
		$email_registered = 1;
	else
		$email_registered = 0;

	$upgrade_url	= add_query_arg(array('page' => 'mo_2fa_upgrade'				), $_SERVER['REQUEST_URI']);

	if(current_user_can( 'manage_options' ) && isset($_POST['option']))
	{
		switch($_POST['option'])
		{
			case "mo2f_enable_2FA_on_login_page_option":
				wpns_handle_enable_2fa_login_prompt($_POST);						break;			
		}
	}

	include $mo2f_dirName . 'views'.DIRECTORY_SEPARATOR.'twofa'.DIRECTORY_SEPARATOR.'setup_twofa.php';

	function wpns_handle_enable_2fa_login_prompt($postvalue)
	{	
		if( get_option( 'mo2f_enable_2fa_prompt_on_login_page' ) == 1 )
			do_action('wpns_show_message',MoWpnsMessages::showMessage('TWO_FA_ON_LOGIN_PROMPT_ENABLED'),'SUCCESS');
		else{
			if(isset($postvalue['mo2f_enable_2fa_prompt_on_login_page'])){
				do_action('wpns_show_message',MoWpnsMessages::showMessage('TWO_FA_PROMPT_LOGIN_PAGE'),'ERROR');
			}else{
				do_action('wpns_show_message',MoWpnsMessages::showMessage('TWO_FA_ON_LOGIN_PROMPT_DISABLED'),'ERROR');
			}
		}
	}
