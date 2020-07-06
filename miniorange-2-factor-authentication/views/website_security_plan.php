<?php
	$is_customer_registered = $Mo2fdbQueries->get_user_detail( 'user_registration_with_miniorange', $user->ID ) == 'SUCCESS' ? true : false;
?>
<div id="mo_ns_features_only" style="margin-top: 2%;">
	<div class="mo_wpns_upgrade_page_2fa_ns">
		<div style="float: left;">
		<?php
		if (!get_option('mo_wpns_2fa_with_network_security') && ($_GET['page'] == 'mo_2fa_upgrade')) {
			echo '<a class="mo_wpns_button mo_wpns_button1" href="'.$two_fa.'">Back</a>';
		 } 
		 ?>
		</div>
		<h1 class="mo_wpns_upgrade_page_2fa_ns_1"> Website Security Plans</h1></div>
	<div class="mo_wpns_upgrade_security_title"  >
		<div class="mo_wpns_upgrade_page_title_name">
			<h1 style="margin-top: 0%;padding: 10% 0% 0% 0%; color: white;font-size: 200%;">
		WAF</h1><hr class="mo_wpns_upgrade_page_hr"></div>
		<div><center><b>
		<ul>
			<li>Realtime IP Blocking</li>
			<li>Live Traffic and Audit</li>
			<li>IP Blocking and Whitelisting</li>
			<li>OWASP TOP 10 Firewall Rules</li>
			<li>Standard Rate Limiting/ DOS Protection</li>
			<li><a onclick="wpns_pricing()">Know more</a></li>
		</ul>
		</b></center></div>
	<div class="mo_wpns_upgrade_page_ns_background">
			<center>
			<h4 class="mo_wpns_upgrade_page_starting_price">Starting From</h4>
			<h1 class="mo_wpns_upgrade_pade_pricing">$50</h1>
			
				<?php echo mo2f_waf_yearly_standard_pricing(); ?>
				
			</center>
	
	<div style="text-align: center;">
	<?php	if( $is_customer_registered) {
						?>
                            <button
                                        class="mo_wpns_button mo_wpns_button1 mo_wpns_upgrade_page_button"
                                        onclick="mo2f_upgradeform('wp_security_waf_plan')" >Upgrade</button>
		                <?php }else{ ?>
							<button
                                        class="mo_wpns_button mo_wpns_button1 mo_wpns_upgrade_page_button"
                                        onclick="mo2f_register_and_upgradeform('wp_security_waf_plan', 'website_security_plan')" >Upgrade</button>
		                <?php } 
		                ?>
	</div></div>
	</div>
	<div class="mo_wpns_upgrade_page_space_in_div"></div>
	<div class="mo_wpns_upgrade_security_title"  >
		<div class="mo_wpns_upgrade_page_title_name">
			<h1 style="margin-top: 0%;padding: 10% 0% 0% 0%; color: white;font-size: 200%;">
		Login and Spam</h1><hr class="mo_wpns_upgrade_page_hr"></div>
		<div><center><b>
		<ul>
			<li>Limit login Attempts</li>
			<li>CAPTCHA on login</li>
			<li>Blocking time period</li>
			<li>Enforce Strong Password</li>
			<li>SPAM Content and Comment Protection</li>
			<li><a onclick="wpns_pricing()">Know more</a></li>
		</ul>
		</b></center></div>
		<div class="mo_wpns_upgrade_page_ns_background">
			<center>
			<h4 class="mo_wpns_upgrade_page_starting_price">Starting From</h4>
			<h1 class="mo_wpns_upgrade_pade_pricing">$15</h1>
			
				<?php echo mo2f_login_yearly_standard_pricing(); ?>
				
			</center>
			
		<div style="text-align: center;">
		<?php if( $is_customer_registered) {
						?>
                            <button class="mo_wpns_button mo_wpns_button1 mo_wpns_upgrade_page_button" 
                                        onclick="mo2f_upgradeform('wp_security_login_and_spam_plan')" >Upgrade</button>
                        <?php }else{ ?>

                           <button class="mo_wpns_button mo_wpns_button1 mo_wpns_upgrade_page_button"
                                    onclick="mo2f_register_and_upgradeform('wp_security_login_and_spam_plan')" >Upgrade</button>
                        <?php } 
                        ?>
		</div>
		</div>
		
		
	</div>
	<div class="mo_wpns_upgrade_page_space_in_div"></div>
	<div class="mo_wpns_upgrade_security_title"  >
		<div class="mo_wpns_upgrade_page_title_name">
			<h1 style="margin-top: 0%;padding: 10% 0% 0% 0%; color: white;font-size: 200%;">
		Malware Scanner</h1><hr class="mo_wpns_upgrade_page_hr"></div>
		<div><center><b>
		<ul>
			<li>Malware Detection</li>
			<li>Blacklisted Domains</li>
			<li>Action On Malicious Files</li>
			<li>Repository Version Comparison</li>
			<li>Detect any changes in the files</li>
			<li><a onclick="wpns_pricing()">Know more</a></li>
		</ul>
		</b></center></div>
			<div class="mo_wpns_upgrade_page_ns_background">
			<center>
			<h4 class="mo_wpns_upgrade_page_starting_price">Starting From</h4>
			<h1 class="mo_wpns_upgrade_pade_pricing">$15</h1>
			
				<?php echo mo2f_scanner_yearly_standard_pricing(); ?>
				
			</center>
			<div style="text-align: center;">
			<?php if( $is_customer_registered) {
						?>
                            <button
                                        class="mo_wpns_button mo_wpns_button1 mo_wpns_upgrade_page_button"
                                        onclick="mo2f_upgradeform('wp_security_malware_plan')" >Upgrade</button>
		                <?php }else{ ?>

                           <button
                                        class="mo_wpns_button mo_wpns_button1 mo_wpns_upgrade_page_button"
                                        onclick="mo2f_register_and_upgradeform('wp_security_malware_plan')" >Upgrade</button>
		                <?php } 
		                ?>
		</div>
	</div>
	</div>
	<div class="mo_wpns_upgrade_page_space_in_div"></div>
	<div class="mo_wpns_upgrade_security_title"  >
		<div class="mo_wpns_upgrade_page_title_name">
			<h1 style="margin-top: 0%;padding: 10% 0% 0% 0%; color: white;font-size: 200%;">
		Encrypted Backup</h1><hr class="mo_wpns_upgrade_page_hr"></div>
		<div><center><b>
		<ul>
			<li>Schedule Backup</li>
			<li>Encrypted Backup</li>
			<li>Files/Database Backup</li>
			<li>Restore and Migration</li>
			<li>Password Protected Zip files</li>
			<li><a onclick="wpns_pricing()">Know more</a></li>
		</ul>
		</b></center></div>
	<div class="mo_wpns_upgrade_page_ns_background">

		<center>
			<h4 class="mo_wpns_upgrade_page_starting_price">Starting From</h4>
			<h1 class="mo_wpns_upgrade_pade_pricing">$30</h1>
			
				<?php echo mo2f_backup_yearly_standard_pricing(); ?>
				
			</center>
			<div style="text-align: center;">
	<?php	if( $is_customer_registered) {
						?>
                            <button
                                        class="mo_wpns_button mo_wpns_button1 mo_wpns_upgrade_page_button"
                                        onclick="mo2f_upgradeform('wp_security_backup_plan')" >Upgrade</button>
		                <?php }else{ ?>
							<button
                                        class="mo_wpns_button mo_wpns_button1 mo_wpns_upgrade_page_button"
                                        onclick="mo2f_register_and_upgradeform('wp_security_backup_plan')" >Upgrade</button>
		                <?php } 
		                ?>
		
	</div></div></div>
</div>
<form class="mo2f_display_none_forms" id="mo2fa_loginform"
                  action="<?php echo MO_HOST_NAME . '/moas/login'; ?>"
                  target="_blank" method="post">
                <input type="email" name="username" value="<?php echo get_option( 'mo2f_email' ); ?>"/>
                <input type="text" name="redirectUrl"
                       value="<?php echo MO_HOST_NAME . '/moas/initializepayment'; ?>"/>
                <input type="text" name="requestOrigin" id="requestOrigin"/>
            </form>

            <form class="mo2f_display_none_forms" id="mo2fa_register_to_upgrade_form"
                   method="post">
                <input type="hidden" name="requestOrigin" />
                <input type="hidden" name="mo2fa_register_to_upgrade_nonce"
                       value="<?php echo wp_create_nonce( 'miniorange-2-factor-user-reg-to-upgrade-nonce' ); ?>"/>
            </form>
<script type="text/javascript">

function wpns_pricing()
{
	window.open("https://security.miniorange.com/pricing/");
}
		function mo2f_upgradeform(planType) 
		{
            jQuery('#requestOrigin').val(planType);
            jQuery('#mo2fa_loginform').submit();
        }
        function mo2f_register_and_upgradeform(planType, planname) 
        {
                    jQuery('#requestOrigin').val(planType);
                    jQuery('input[name="requestOrigin"]').val(planType);
                    jQuery('#mo2fa_register_to_upgrade_form').submit();
                    var data =  {
								'action'				  : 'wpns_login_security',
								'wpns_loginsecurity_ajax' : 'wpns_all_plans', 
								'planname'				  : planname,
					}
					jQuery.post(ajaxurl, data, function(response) {
					});
        }
</script>
<?php

function mo2f_waf_yearly_standard_pricing() {
	?>
    <p class="mo2f_pricing_text mo_wpns_upgrade_page_starting_price"
       id="mo2f_yearly_sub"><?php echo __( 'Yearly Subscription Fees', 'miniorange-2-factor-authentication' ); ?><br>

        <select id="mo2f_yearly" class="form-control" style="border-radius:5px;width:200px;">
            <option> <?php echo mo2f_lt( '1 site - $50 per year' ); ?> </option>
            <option> <?php echo mo2f_lt( 'Upto 5 sites - $100 per year' ); ?> </option>
            <option> <?php echo mo2f_lt( 'Upto 10 sites - $150 per year' ); ?> </option>
            
        </select>
    </p>
    <div><br></div>
	<?php
}
function mo2f_login_yearly_standard_pricing() {
	?>
    <p class="mo2f_pricing_text mo_wpns_upgrade_page_starting_price"
       id="mo2f_yearly_sub"><?php echo __( 'Yearly Subscription Fees', 'miniorange-2-factor-authentication' ); ?><br>

        <select id="mo2f_yearly" class="form-control" style="border-radius:5px;width:200px;">
            <option> <?php echo mo2f_lt( '1 site - $15 per year' ); ?> </option>
            <option> <?php echo mo2f_lt( 'Upto 5 sites - $35 per year' ); ?> </option>
            <option> <?php echo mo2f_lt( 'Upto 10 sites - $60 per year' ); ?> </option>
            
        </select>
    </p>
    <div><br></div>
	<?php
}
function mo2f_backup_yearly_standard_pricing() {
	?>
    <p class="mo2f_pricing_text mo_wpns_upgrade_page_starting_price"
       id="mo2f_yearly_sub"><?php echo __( 'Yearly Subscription Fees', 'miniorange-2-factor-authentication' ); ?><br>

        <select id="mo2f_yearly" class="form-control" style="border-radius:5px;width:200px;">
            <option> <?php echo mo2f_lt( '1 site - $30 per year' ); ?> </option>
            <option> <?php echo mo2f_lt( 'Upto 5 sites - $50 per year' ); ?> </option>
            <option> <?php echo mo2f_lt( 'Upto 10 sites - $70 per year' ); ?> </option>
            
        </select>
    </p>
    <div><br></div>
	<?php
}
function mo2f_scanner_yearly_standard_pricing() {
	?>
    <p class="mo2f_pricing_text mo_wpns_upgrade_page_starting_price" 
       id="mo2f_yearly_sub"><?php echo __( 'Yearly Subscription Fees', 'miniorange-2-factor-authentication' ); ?><br>

        <select id="mo2f_yearly" class="form-control" style="border-radius:5px;width:200px;">
            <option> <?php echo mo2f_lt( '1 site - $15 per year' ); ?> </option>
            <option> <?php echo mo2f_lt( 'Upto 5 sites - $35 per year' ); ?> </option>
            <option> <?php echo mo2f_lt( 'Upto 10 sites - $60 per year' ); ?> </option>
            
        </select>
    </p>
    <div><br></div>
	<?php
}
?>