<div class="mo_wpns_setting_layout">
	<!-- <h3>Select the specific set of authentication methods for your users.</h3>
	<h3><hr>
	<input type="radio" class="option_for_auth" name="mo2f_all_users_method" value="1" checked="checked">For all Users 
	<input type="radio" class="option_for_auth" name="mo2f_all_users_method" value="1" checked="checked">Specific Roles
	</h3>
	<br>
	<table class="mo2f_for_all_users" style="display: table;"><tbody>
				<tr>
                    <td>
                    <input type="checkbox" name="mo2f_authmethods[]" value="OUT OF BAND EMAIL" >Email Verification&nbsp;&nbsp;
                    </td>

				<td>
				<input type="checkbox" name="mo2f_authmethods[]" value="GOOGLE AUTHENTICATOR" >Google Authenticator&nbsp;&nbsp;
				</td>
				<td>
				<input type="checkbox" name="mo2f_authmethods[]" value="AUTHY 2-FACTOR AUTHENTICATION">AUTHY 2-FACTOR AUTHENTICATION&nbsp;&nbsp;
				</td>
                </tr>
                <tr>
				<td>
				<input type="checkbox" name="mo2f_authmethods[]" value="KBA">Security Questions (KBA)&nbsp;&nbsp;
				</td>

                    <td>
                        <input type="checkbox" name="mo2f_authmethods[]" value="OTP_OVER_EMAIL" >OTP Over Email&nbsp;&nbsp;
                    </td>
                </tr>
		</tbody>
				
	</table>
	<span class="mo2f_display_tab mo2f_blue_premium_features" style="border-radius: 6px; padding: 5px 25px; width: 2px !important; display: inline;" id="mo2f_role_administrator" onclick="displayTab('administrator');" value="administrator" hidden=""> Administrator</span>
	<hr> -->
	<?php
		$current_user = wp_get_current_user();

		// $opt=fetch_methods($current_user); 
		$opt='OUT OF BAND EMAIL';
		?>
		<h3><?php echo mo2f_lt('Select the specific set of authentication methods for your users.');?><a href="https://developers.miniorange.com/docs/security/wordpress/wp-security/specific-set-authentication-methods-based-role" target="_blank"><span class="dashicons dashicons-text-page" style="font-size:19px;color:#269eb3;float: right;"></span></a></h3><hr>
		<p>
		<input type="radio" class="option_for_auth" name="mo2f_all_users_method" value="1" checked="checked" />
				 <?php echo __('For all Users','miniorange-2-factor-authentication');?>&nbsp;&nbsp;
				 <input type="radio" class="option_for_auth2" name="mo2f_all_users_method" value="0"  />
				 <?php echo __('Specific Roles','miniorange-2-factor-authentication'); ?>
				</p>
				<table class="mo2f_for_all_users" <?php if(!get_site_option('mo2f_all_users_method')){echo 'hidden';} ?> ><tbody>
				<tr>
				<td>
				<input type='checkbox'  name='mo2f_authmethods[]'  value='OUT OF BAND EMAIL' <?php   if(mo2f_is_customer_registered()){}else{ } ?> />Email Verification&nbsp;&nbsp;
				</td>
				<td>
				<input type='checkbox' name='mo2f_authmethods[]'  value='SMS' <?php  if(mo2f_is_customer_registered()){}else{ } ?> />OTP Over SMS&nbsp;&nbsp;
				</td>
				<td>
				<input type='checkbox' name='mo2f_authmethods[]'  value='PHONE VERIFICATION' <?php   if(mo2f_is_customer_registered()){}else{ } ?> />Phone Call Verification&nbsp;&nbsp;
				</td>
				</tr>
				<tr>
				<td>
				<input type='checkbox' name='mo2f_authmethods[]'  value='SOFT TOKEN' <?php  if(mo2f_is_customer_registered()){}else{ } ?> />Soft Token&nbsp;&nbsp;
				</td>
				<td>
				<input type='checkbox' name='mo2f_authmethods[]'  value='MOBILE AUTHENTICATION' <?php   if(mo2f_is_customer_registered()){}else{ } ?> />QR Code Authentication&nbsp;&nbsp;
				</td>
				<td>
				<input type='checkbox' name='mo2f_authmethods[]'  value='PUSH NOTIFICATIONS' <?php  if(mo2f_is_customer_registered()){}else{ } ?> />Push Notifications&nbsp;&nbsp;
				</td>
				</tr>
				<tr>
				<td>
				<input type='checkbox' name='mo2f_authmethods[]'  value='GOOGLE AUTHENTICATOR' <?php if(mo2f_is_customer_registered()){}else{ } ?> />Google Authenticator&nbsp;&nbsp;
				</td>
				<td>
				<input type='checkbox' name='mo2f_authmethods[]'  value='AUTHY 2-FACTOR AUTHENTICATION' <?php if(mo2f_is_customer_registered()){}else{ } ?> />AUTHY 2-FACTOR AUTHENTICATION&nbsp;&nbsp;
				</td>
				<td>
				<input type='checkbox' name='mo2f_authmethods[]'  value='KBA' <?php if(mo2f_is_customer_registered()){}else{ } ?> />Security Questions (KBA)&nbsp;&nbsp;
				</td>
				</tr>
                <tr>
                    <td>
                        <input type='checkbox' name='mo2f_authmethods[]'  value='SMS AND EMAIL' <?php if(mo2f_is_customer_registered()){}else{ } ?> /><?php echo __('OTP Over SMS And Email','miniorange-2-factor-authentication');?>&nbsp;&nbsp;
                    </td>
                    <td>
                        <input type='checkbox'  name='mo2f_authmethods[]'  value='OTP_OVER_EMAIL' <?php  if(mo2f_is_customer_registered()){}else{ } ?> /><?php echo __('OTP Over Email','miniorange-2-factor-authentication');?>&nbsp;&nbsp;
                    </td>
                </tr>
				</tbody>
				</div>
				</table>
				
		<?php
		$opt = (array) get_site_option('mo2f_auth_methods_for_users');
		$copt=array();
		$newcopt=array();
		global $wp_roles;
		if (!isset($wp_roles))
			$wp_roles = new WP_Roles();
		foreach($wp_roles->role_names as $id => $name)
		{
			$copt[$id]=get_site_option('mo2f_auth_methods_for_'.$id);
			if(empty($copt[$id])){
				$copt[$id]=array("No Two Factor Selected");
		}?>
			 <span class="mo2f_display_tab mo2f_btn_premium_features" style="border-radius:6px;padding: 7px 25px;"	 ID="mo2f_role_<?php echo $id ?>" onclick="displayTab('<?php echo $id ?>');" value="<?php echo $id ?>" <?php if(get_site_option('mo2f_all_users_method')){echo 'hidden';}?>> <?php echo $name ?></span>

			 <?php
		}
		?> <br><br><?php
		global $wp_roles;
		if (!isset($wp_roles))
			$wp_roles = new WP_Roles();
		print '<div> ';
		foreach($wp_roles->role_names as $id => $name) {	
				$setting = get_site_option('mo2fa_'.$id);
				$newcopt=$copt[$id];
				?>
				<table class="mo2f_for_all_roles" id="mo2f_for_all_<?php echo $id ?>" hidden><tbody>
				<tr>
				<td>
				<input type='checkbox' name="<?php echo $id ?>[]"  value='OUT OF BAND EMAIL' <?php echo (in_array("OUT OF BAND EMAIL", $newcopt)) ? 'checked="checked"' : '';  if(mo2f_is_customer_registered()){}else{ } ?> /><?php echo __('Email Verification','miniorange-2-factor-authentication');?>&nbsp;&nbsp;
				</td>
				<td>
				<input type='checkbox' name="<?php echo $id ?>[]"  value='SMS' <?php echo (in_array("SMS", $newcopt)) ? 'checked="checked"' : '';  if(mo2f_is_customer_registered()){}else{ } ?> /><?php echo __('OTP Over SMS','miniorange-2-factor-authentication');?>&nbsp;&nbsp;
				</td>
				<td>
				<input type='checkbox' name="<?php echo $id ?>[]"  value='PHONE VERIFICATION' <?php echo (in_array("PHONE VERIFICATION", $newcopt)) ? 'checked="checked"' : '';  if(mo2f_is_customer_registered()){}else{ } ?> /><?php echo __('Phone Call Verification','miniorange-2-factor-authentication');?>&nbsp;&nbsp;
				</td>
				</tr>
				<tr>
				<td>
				<input type='checkbox' name="<?php echo $id ?>[]"  value='SOFT TOKEN' <?php echo (in_array("SOFT TOKEN", $newcopt)) ? 'checked="checked"' : '';  if(mo2f_is_customer_registered()){}else{ } ?> /><?php echo __('Soft Token','miniorange-2-factor-authentication');?>&nbsp;&nbsp;
				</td>
				<td>
				<input type='checkbox' name="<?php echo $id ?>[]"  value='MOBILE AUTHENTICATION' <?php echo (in_array("MOBILE AUTHENTICATION", $newcopt)) ? 'checked="checked"' : '';  if(mo2f_is_customer_registered()){}else{ } ?> /><?php echo __('QR Code Authentication','miniorange-2-factor-authentication');?>&nbsp;&nbsp;
				</td>
				<td>
				<input type='checkbox' name="<?php echo $id ?>[]"  value='PUSH NOTIFICATIONS' <?php echo (in_array("PUSH NOTIFICATIONS", $newcopt)) ? 'checked="checked"' : '';  if(mo2f_is_customer_registered()){}else{ } ?> /><?php echo __('Push Notifications','miniorange-2-factor-authentication');?>&nbsp;&nbsp;
				</td>
				</tr>
				<tr>
				<td>
				<input type='checkbox' name="<?php echo $id ?>[]"  value='GOOGLE AUTHENTICATOR' <?php echo (in_array("GOOGLE AUTHENTICATOR", $newcopt)) ? 'checked="checked"' : '';  if(mo2f_is_customer_registered()){}else{ } ?> /><?php echo __('Google Authenticator','miniorange-2-factor-authentication');?>&nbsp;&nbsp;
				</td>
				<td>
				<input type='checkbox' name="<?php echo $id ?>[]"  value='AUTHY 2-FACTOR AUTHENTICATION' <?php echo (in_array("AUTHY 2-FACTOR AUTHENTICATION", $newcopt)) ? 'checked="checked"' : '';  if(mo2f_is_customer_registered()){}else{ } ?> /><?php echo __('AUTHY 2-FACTOR AUTHENTICATION','miniorange-2-factor-authentication');?>&nbsp;&nbsp;
				</td>
				<td>
				<input type='checkbox' name="<?php echo $id ?>[]"  value='KBA' <?php echo (in_array("KBA", $newcopt)) ? 'checked="checked"' : '';  if(mo2f_is_customer_registered()){}else{ } ?> /><?php echo __('Security Questions (KBA)','miniorange-2-factor-authentication');?>&nbsp;&nbsp;
				</td>
				</tr>
				<tr>
				<td>
				<input type='checkbox' name="<?php echo $id ?>[]"  value='SMS AND EMAIL' <?php echo (in_array("SMS AND EMAIL", $newcopt)) ? 'checked="checked"' : '';  if(mo2f_is_customer_registered()){}else{ } ?> /><?php echo __('OTP Over SMS And Email','miniorange-2-factor-authentication');?>&nbsp;&nbsp;
				</td>
				<td>
				<input type='checkbox' name="<?php echo $id ?>[]"  value='OTP_OVER_EMAIL' <?php echo (in_array("OTP_OVER_EMAIL", $newcopt)) ? 'checked="checked"' : '';  if(mo2f_is_customer_registered()){}else{ } ?> /><?php echo __('OTP Over Email','miniorange-2-factor-authentication');?>&nbsp;&nbsp;
				</td>
				</tr>
				</tbody>
				</div>
				</table>
		<?php			
		}
		print '</div>';

	?>
	<div class="mo2f_advanced_options_note" style="background-color: #bfe5e9;padding:12px"><b>Note:</b> You can select which Two Factor methods you want to enable for your users. By default all Two Factor methods are enabled for all users of the role you have selected above.</div>
	<script>
	jQuery('.mo2f_display_tab').hide();
		jQuery('.mo2f_for_all_roles').hide();
		jQuery('.mo2f_for_all_users').show();
	function displayTab(role){
		jQuery('.mo2f_display_tab').removeClass("mo2f_blue_premium_features");
		jQuery('.mo2f_display_tab').addClass("mo2f_btn_premium_features");
		jQuery('#mo2f_role_'+role).removeClass("mo2f_btn_premium_features");
		jQuery('#mo2f_role_'+role).addClass("mo2f_blue_premium_features");
		jQuery('.mo2f_for_all_roles').hide();
		jQuery('#mo2f_for_all_'+role).show();
	}
	jQuery(".option_for_auth").click(function(){
		jQuery('.mo2f_display_tab').hide();
		jQuery('.mo2f_for_all_roles').hide();
		jQuery('.mo2f_for_all_users').show();
	})
	jQuery(".option_for_auth2").click(function(){
		jQuery('.mo2f_display_tab').show();
		jQuery('.mo2f_for_all_users').hide();
	}
	)
	</script>
	<?php
	?>
</div>
<div class="mo_wpns_setting_layout">	
	<h3>Invoke Inline Registration to setup 2nd factor for users.<a href="https://developers.miniorange.com/docs/security/wordpress/wp-security/enforce-2fa-users" target="_blank">
			         	<span class="dashicons dashicons-text-page" style="font-size:19px;color:#269eb3;float: right;"></span>
 	</a></h3><hr>
	<p>
	<input type="radio" class="option_for_auth" name="mo2f_all_users_method" value="1" checked="checked">Enforce 2 Factor registration for users at login time. 
	<input type="radio" class="option_for_auth" name="mo2f_all_users_method" value="1" checked="checked">Skip 2 Factor registration at login.
	</p>
	<div class="mo2f_advanced_options_note" style="background-color: #bfe5e9;padding:12px"><b>Note:</b> If this option is enabled then users have to setup their two-factor account forcefully during their login. By selecting second option, you will provide your users to skip their two-factor setup during login.</div>
	<br>
</div>

<div class="mo_wpns_setting_layout">	
	<h3>Skip Option for Users During Inline Registration</h3><hr>
	<p>
	<input type="checkbox" class="option_for_auth" name=" Skip Option for users." value="1" checked="checked"> Skip Option for users. 
	</p>
	<div class="mo2f_advanced_options_note" style="background-color: #bfe5e9;padding:12px"><b>Note:</b>  If this option is enabled then users will have an option to skip inline Registration.</div>
	<br>
</div>

<div class="mo_wpns_setting_layout">	
	<h3>Email verification of Users during Inline Registration<a href="https://developers.miniorange.com/docs/security/wordpress/wp-security/enforce-email-verification" target="_blank">
			         	<span class="dashicons dashicons-text-page" style="font-size:19px;color:#269eb3;float: right;"></span>
	</a></h3><hr>
	<p>
	<input type="radio" class="option_for_auth" name="mo2f_all_users_method" value="1" checked="checked"> Enable users to edit their email address for registration with miniOrange.<br><br> 
	<input type="radio" class="option_for_auth" name="mo2f_all_users_method" value="1" checked="checked">Skip e-mail verification by user.
	</p>
	<div class="mo2f_advanced_options_note" style="background-color: #bfe5e9;padding:12px"><b>Note:</b> If this option is enabled then users can edit their email during inline registration with miniOrange, and they will be prompted for e-mail verification. By selecting second option, the user will be silently registered with miniOrange without the need of e-mail verification.</div>
	<br>
</div>

<div class="mo_wpns_setting_layout">	
	<h3>Select Login Screen Options<a href="https://developers.miniorange.com/docs/security/wordpress/wp-security/passwordless-login" target="_blank">
			         	<span class="dashicons dashicons-text-page" style="font-size:19px;color:#269eb3;float: right;"></span>
	</a></h3><hr>
	<p>
		<input type="radio" class="option_for_auth" name="mo2f_all_users_method" value="1" checked="checked"> Login with password + 2nd Factor <span style="color: red">(Recommended)</span> 
	</p>

	<div class="mo2f_advanced_options_note" style="background-color: #bfe5e9;padding:12px"><b>Note:</b> By default 2nd Factor is enabled after password authentication. If you do not want to remember passwords anymore and just login with 2nd Factor, please select 2nd option.</div><br>
	<p>
		<input type="radio" class="option_for_auth" name="mo2f_all_users_method" value="0" >
		 Login with 2nd Factor only <span style="color: red">(No password required)<a onclick="mo2f_login_with_username_only()">&nbsp;&nbsp;See Preview</a></span>
	</p>
	<div id="mo2f_login_with_username_only" style="display: none;">
		<?php 
		echo '<div style="text-align:center;"><img  style="margin-top:5px;" src="'.$login_with_usename_only_url.'"></div><br>';?>
	</div>
	<div class="mo2f_advanced_options_note" style="background-color: #bfe5e9;padding:12px"><b>Note:</b> Checking this option will add login with your phone button below default login form. Click above link to see the preview.</div>

	<br>
	<p>
	<input type="checkbox" class="option_for_auth" value="0" >I want to hide default login form.<a onclick="mo2f_hide_login_form()">&nbsp;&nbsp;See Preview</a>
</p>
	<div id="mo2f_hide_login_form" style="display: none;">
		<?php 
		echo '<div style="text-align:center;"><img  style="margin-top:5px;" src="'.$hide_login_form_url.'"></div><br>';?>
	</div>

	<div class="mo2f_advanced_options_note" style="background-color: #bfe5e9;padding:12px"><b>Note:</b> Checking this option will hide default login form and just show login with your phone. Click above link to see the preview.</div>

</div>

<div class="mo_wpns_setting_layout">
	<h3>What happens if my phone is lost, discharged or not with me<a href="https://developers.miniorange.com/docs/security/wordpress/wp-security/want-configure-backup-methods-users-can-configure-case-locked-site-not-able-log" target="_blank">
                        <span class="dashicons dashicons-text-page" style="font-size:19px;color:#269eb3;float: right;"></span>
                        
                        </a></h3><hr>
	<p>
	<input type="checkbox" class="option_for_auth" name="mo2f_all_users_method" value="1" checked="checked">Enable Forgot Phone.
	<p>Select the alternate login method in case your phone is lost, discharged or not with you.</p> 
	<input type="checkbox" class="option_for_auth" name="mo2f_all_users_method" value="1" checked="checked">KBA&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="checkbox" class="option_for_auth" name="mo2f_all_users_method" value="1" checked="checked">OTP over EMAIL
	</p>
	<div class="mo2f_advanced_options_note" style="background-color: #bfe5e9;padding:12px"><b>Note:</b> This option will provide you alternate way of login in case your phone is lost, discharged or not with you.</div>
	<hr>
	<center>
    	<input type="submit" name="submit"   style="margin-left:2%; background-color: #20b2aa; color: white; box-shadow: none;" value="Save Settings" class="mo_wpns_button mo_wpns_button1" <?php 
			 echo 'disabled' ;  ?> />
	</center>
</div>
<script type="text/javascript">
	function mo2f_login_with_username_only()
	{
		jQuery('#mo2f_login_with_username_only').toggle();
	}
	function mo2f_hide_login_form()
	{
		jQuery('#mo2f_hide_login_form').toggle();
	}
</script>
