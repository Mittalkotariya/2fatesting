<div id="wpns_message" style=" padding-top:8px"></div>
<div class="mo_wpns_divided_layout_tab">
<div class="mo_wpns_tab">
  <button class="tablinks" onclick="waf_function(event, 'waf_dash')" id="defaultOpen">Firewall Dashboard</button>
  <button class="tablinks" onclick="waf_function(event, 'settings')" id="settingsTab">Settings</button>
  <button class="tablinks" onclick="waf_function(event, 'real_time')" id="RealTimeTab">Real Time Blocking</button>
  <button class="tablinks" onclick="waf_function(event, 'rate_limiting')" id="RateLimitTab">Rate Limiting</button>
</div>
</div>
<br>
<div id="waf_dash" class="tabcontent">
  <div class="mo_wpns_divided_layout">
  	<div class="mo_wpns_divided_layout_tab" id ="mo2f_firewall_attack_dash">
		<div class="mo_wpns_small_2_layout">
			<div class ="mo_wpns_sub_dashboards_layout">Attacks Blocked<hr class="line"><p class="wpns_font_shown" ><?php echo $totalAttacks; ?></p></div>
			<div class="mo_wpns_small_3_layout">
				<div class ="mo_wpns_sub_sub_dashboard_layout">Injections<hr class="line"><?php echo $sqlC; ?></></div>
				<div class ="mo_wpns_sub_sub_dashboard_layout">RCE<hr class="line"><?php echo $rceC; ?></div>
				<div class ="mo_wpns_sub_sub_dashboard_layout">RFI/LFI<hr class="line"><?php echo $rfiC + $lfiC; ?></div>
				<div class ="mo_wpns_sub_sub_dashboard_layout">XSS<hr class="line"><?php echo $xssC; ?></div>
			</div>
		</div>
		<div class="mo_wpns_small_2_layout">
			
			<div class ="mo_wpns_sub_dashboards_layout">Blocked IPs<hr class="line"><p class="wpns_font_shown"><?php echo $totalIPBlocked; ?></p></div>
			<div class="mo_wpns_small_3_layout">
				<div class ="mo_wpns_sub_sub_dashboard_layout">Manual<hr class="line"><?php echo $manualBlocks; ?></div>
				<div class ="mo_wpns_sub_sub_dashboard_layout">Real Time<hr class="line"><?php echo $realTime; ?></div>
				<div class ="mo_wpns_sub_sub_dashboard_layout">Country Blocked<hr class="line"><?php echo $countryBlocked; ?></div>
				<div class ="mo_wpns_sub_sub_dashboard_layout">IP Blocked by WAF<hr class="line"><?php echo $IPblockedByWAF ?></div>
			</div>
		</div>
		</div>
				<div class="mo_wpns_small_layout">
					<h3>Settings</h3>
					<p><i class="mo_wpns_not_bold">
					This contains settings of your <b>Website Application Firewall</b> with settings of <b>SQL Injecton, Cross Site Scripting, Local File Inclusion, Remote File Inclusion, Remote Code Inclusion,</b> etc.<br><br><br><br>
					</i></p>
					<input type="button" name="SettingPage" id="SettingPage" value="Settings" class="mo_wpsn_button mo_wpsn_button1" />
				
				</div>
				<div class="mo_wpns_small_layout">
					<h3>Real Time Blocking</h3>
					<p><i class="mo_wpns_not_bold">
					Real Time Blocking is <b>blocking IPs in real time</b> by miniOrange IP dataset. If any IP is found malicious then that IP will be added to the <b>miniOrange IP dataset</b> which is <b>maintained in real time.</b> By enabling this feature, if any IP is found malicious on <b>any miniOrange customer's site</b> then that IP will be <b>automatically blocked from your site as well.</b> <br><br>
					</i></p>
					<input type="button" name="RTBPage" id="RTBPage" value="Real Time Blocking" class="mo_wpsn_button mo_wpsn_button1" />
					
				</div>
				<div class="mo_wpns_small_layout">
					<h3>Rate limiting</h3>
					<p><i class="mo_wpns_not_bold">
					Rate Limiting is used for <b>controlling the amount of incoming requests</b> from a <b>specific IP</b> to a service(Website). In this feature you can decide the <b>number of requests</b> a user can make to your website. If this is not enabled, an attacker can send <b>any number of requests</b> to a service that can lead to a <b>denial of service</b> by which legitimate users of the website will not be able to access the website.
					</i></p>
					<input type="button" name="RLPage" id="RLPage" value="Rate limiting" class="mo_wpsn_button mo_wpsn_button1" />
					

				</div>
		
	</div>
	


</div>


<div id="real_time" class="tabcontent">
	<div class="mo_wpns_divided_layout">
		<div class="mo_wpns_setting_layout">

		<table style="width:100%">
		<tr><th align="left">
		<h3>Real Time IP Blocking  <strong style="color: red"><a href="admin.php?page=mo_2fa_upgrade"> [Premium Feature] </a></strong>:
			<br>
			<p><i class="mo_wpns_not_bold">Blocking those malicious IPs Which has been detected by miniOrange WAF. This feature contains a list of malicious IPs which is mantained in real time. By enabling this option if any attack has been detected on miniOrange WAF on others wbsite then that IP will be blocked from your site also.</i></p>
  		</th><th align="right">
  		<label class='mo_wpns_switch'>
		 <input type=checkbox id='RealTimeIP' name='RealTimeIP' disabled/>
		 <span class='mo_wpns_slider mo_wpns_round'></span>
		</label>
		</tr></th>
		 </h3>
		 </table>
		</div>
	</div>
</div>

<div id="rate_limiting" class="tabcontent">
   <div class="mo_wpns_divided_layout">
     <div class="mo_wpns_setting_layout" id='mo2f_ratelimiting'>
		<div id="RL" name="RL">
	    	<table style="width:100%">
			<tr>
			<th align="left">
			<h3>Rate Limiting : <a href="https://developers.miniorange.com/docs/security/wordpress/wp-security/web-firewall#dos-proctection" target="_blank"><span class="	dashicons dashicons-text-page" style="font-size:23px;color:#269eb3;"></span></a>
				<br>
				<p><i class="mo_wpns_not_bold">This will protect your Website from Dos attack and block request after a limit exceed.</i></p>
	  		</th>
	  		<th align="right">
		  		<label class='mo_wpns_switch'>
				 <input type=checkbox id='rateL' name='rateL' />
				 <span class='mo_wpns_slider mo_wpns_round'></span>
				</label>
			</th>
		
			</h3>
			</tr>
			</table>
		</div>
		
		<div name = 'rateLFD' id ='rateLFD'>
		<table style="width: 100%"> 
		</h3>
		<tr><th align="left">
		<h3>Block user after:</th>
		<th align="center"><input type="number" name="req" id="req" required min="1" style="width: 400px" />
			<i class="mo_wpns_not_bold">Requests/min</i></h3>
		</th>

		<th align="right">
		<h3>action
		<select id="action">
		  <option value="ThrottleIP">Throttle IP</option>
		  <option value="BlockIP">Block IP</option>
		</select>
		</h3>
		</th></tr>
		<tr><th></th>
		<th align="center">
			<br><input type="button" name="saveRateL" id="saveRateL" value="Save" class="mo_wpsn_button mo_wpsn_button1">
			</th>
		</tr>
		</table>
		</form>
		
		</div>
	</div>
	
		 	<div class="mo_wpns_setting_layout">
		  	<table style="width:100%">
			<tr><th align="left">
			<h3>Rate Limiting for Crawlers<strong style="color: red"><a href="admin.php?page=mo_2fa_upgrade"> [Premium Feature] </a></strong>: 
				<br>
				<p><i class="mo_wpns_not_bold">Web crawlers crawl your Webstie for increasing ranking in the search engine. But sometimes they can make so many request to the server that the service can get damage.By enabling this feature you can provide limit at which a crawler can visit your site.</i></p>
	  		</th><th align="right">
	  		<label class='mo_wpns_switch'>
			 <input type=checkbox id='RateLimitCrawler' name='RateLimitCrawler' disabled />
			 <span class='mo_wpns_slider mo_wpns_round'></span>
			</label>
			</tr></th>
			 </h3>
			 </table>
			 <div name = 'rateLCrawler' id ='rateLCrawler'>
				<table style="width: 100%"> 
				</h3>
				<tr><th align="left">
				<h3>Block Crawler after:</th>
				<th align="center"><input type="number" name="reqCrawler" id="reqCrawler" required min="1" style="width: 400px" />
					<i class="mo_wpns_not_bold">Requests/min</i></h3>
				</th>

				<th align="right">
				<h3>action
				<select id="actionCwawler">
				  <option value="ThrottleIP">Throttle IP</option>
				  <option value="BlockIP">Block IP</option>
				</select>
				</h3>
				</th></tr>
				<tr><th></th>
				<th align="center">
					<br><input type="button" name="saveRateLCrawler" id="saveRateLCrawler" value="Save" class="mo_wpsn_button mo_wpsn_button1">
					</th>
				</tr>
				</table>
				</form>
		
			</div>
		  </div>

		  <div class="mo_wpns_setting_layout">
		  	<table style="width:100%">
			<tr><th align="left">
			<h3>Fake Web Crawler Protection<strong style="color: red"><a href="admin.php?page=mo_2fa_upgrade"> [Premium Feature] </a></strong>: 
				<br>
				<p><i class="mo_wpns_not_bold">Web Crawlers are used for scaning the Website and indexing it. Google, Bing, etc. are the top crwalers which increase your site's indexing in the seach engine. There are several fake crawlers which can damage your site. By enabling this feature all fake google and bing crawlers will be blocked.  </i></p>
	  		</th><th align="right">
	  		<label class='mo_wpns_switch'>
			 <input type=checkbox id='FakeCrawler' name='FakeCrawler' disabled />
			 <span class='mo_wpns_slider mo_wpns_round'></span>
			</label>
			</tr></th>
			 </h3>
			</th>
			<?php $enable = get_site_option('mo2f_enable_fake_Crawler_protection') ? '' : 'disabled';?>
			<th align="left">
			<h3>Block Fake GoogleBot<strong style="color: red"></strong>: 
				
	  		</th><th align="right">
	  		<label class='mo_wpns_switch' >

			 <input type=checkbox id='FakegoogleC' name='FakegoogleC' disabled/>
			 <span class='mo_wpns_slider mo_wpns_round'></span>
			</label>
			</tr></th>

			<th align="left">
			<h3>Block Fake Facebook Crawler<strong style="color: red"></strong>: 
				
	  		</th><th align="right">
	  		<label class='mo_wpns_switch' >
			 <input type=checkbox id='FakeFBC' name='FakeFBC' disabled />
			 <span class='mo_wpns_slider mo_wpns_round'></span>
			</label>
			</tr></th>

			<th align="left">
			<h3>Block Fake Bing Bot<strong style="color: red"></strong>: 
				
	  		</th><th align="right">
	  		<label class='mo_wpns_switch' >
			 <input type=checkbox id='FakeBingC' name='FakeBingC' disabled />
			 <span class='mo_wpns_slider mo_wpns_round'></span>
			</label>
			</tr></th>

			<th align="left">
			<h3>Block Fake StatusCake<strong style="color: red"></strong>: 
				
	  		</th><th align="right">
	  		<label class='mo_wpns_switch' >
			 <input type=checkbox id='FakeStatusCake' name='FakeStatusCake' disabled />
			 <span class='mo_wpns_slider mo_wpns_round'></span>
			</label>
			</tr></th>

			 </h3>
			</th>

		</tr> </table>
		  </div>

		   <div class="mo_wpns_setting_layout">
		  	<table style="width:100%">
			<tr><th align="left">
			<h3>Whitelist Crawler<strong style="color: red"><a> [Premium Feature] </a></strong>: 
				<br>
				<p><i class="mo_wpns_not_bold">You can whitelist the top crawlers which increase indexing of your website in the search engine. By enabling this feature the whitelisted crawlers will not throttle/block by rate limiting. </i></p>
	  		</th><th align="right">
	  		<label class='mo_wpns_switch'>
			 <input type=checkbox id='WhitelistCrawler' name='WhitelistCrawler' disabled/>
			 <span class='mo_wpns_slider mo_wpns_round'></span>
			</label>
			</tr></th>

			 </h3>
			</th>
			<?php $enable = get_site_option('mo2f_enable_whitelist_crawler') ? '' : 'disabled';?>
			<th align="left">
			<h3>WhiteList GoogleBot<strong style="color: red"></strong>: 
				
	  		</th><th align="right">
	  		<label class='mo_wpns_switch' >

			 <input type=checkbox id='whitelistegoogleC' name='whitelistegoogleC'disabled/>
			 <span class='mo_wpns_slider mo_wpns_round'></span>
			</label>
			</tr></th>

			<th align="left">
			<h3>WhiteList Facebook Crawler<strong style="color: red"></strong>: 
				
	  		</th><th align="right">
	  		<label class='mo_wpns_switch' >
			 <input type=checkbox id='whitelistFBC' name='whitelistFBC' disabled />
			 <span class='mo_wpns_slider mo_wpns_round'></span>
			</label>
			</tr></th>

			<th align="left">
			<h3>WhiteList Bing Bot<strong style="color: red"></strong>: 
				
	  		</th><th align="right">
	  		<label class='mo_wpns_switch' >
			 <input type=checkbox id='whitelistBingC' name='whitelistBingC' disabled/>
			 <span class='mo_wpns_slider mo_wpns_round'></span>
			</label>
			</tr></th>

			<th align="left">
			<h3>WhiteList StatusCake<strong style="color: red"></strong>: 
				
	  		</th><th align="right">
	  		<label class='mo_wpns_switch' >
			 <input type=checkbox id='whitelistStatusCake' name='whitelistStatusCake' disabled />
			 <span class='mo_wpns_slider mo_wpns_round'></span>
			</label>
			</tr></th>


			 </h3>
			</th>

		</tr> </table>
		  </div>
		

		  <div class="mo_wpns_setting_layout">
		  	<table style="width:100%">
			<tr><th align="left">
			<h3>BotNet Protection<strong style="color: red"><a href="admin.php?page=mo_2fa_upgrade"> [Premium Feature] </a></strong>:
				<br>
				<p><i class="mo_wpns_not_bold"> BotNet is a network of robots or army of robots. The BotNet is used for Distributed denial of service attack. The attacker sends too many requests from multiple IPs to a service so that the legitimate traffic can not get the service. By enabling this your Website will be protected from such kind of attacks.  </i>
					</p>
					
				 
	  		</th><th align="right">
	  		<label class='mo_wpns_switch'>
			 <input type=checkbox id='BotNetProtection' name='BotNetProtection' disabled />
			 <span class='mo_wpns_slider mo_wpns_round'></span>
			</label>
			</tr>

		</th>

			 </h3>
			 </table>
		  </div>

		 

	</div>
	
	

</div>

<div id="settings" class="tabcontent">


<?php
	
	$admin_url = admin_url();
	$url = explode('/wp-admin/', $admin_url);
	$url = $url[0].'/htaccess';

	$nameDownload = "Backup.htaccess";

?>
<div class="mo_wpns_divided_layout">
	<div class="mo_wpns_setting_layout" id= 'mo_waf_options_tour'>
	<table style="width:100%">
		<tr><th align="left">
		<h3>Website Firewall on Plugin Level : <a href="https://developers.miniorange.com/docs/security/wordpress/wp-security/web-firewall/#firewall-level" target="_blank">
  			<span class="	dashicons dashicons-text-page" style="font-size:23px;color:#269eb3;"></span></a>
			<br>
			<p><i class="mo_wpns_not_bold">This will activate WAF after the WordPress load. This will block illegitimate requests after making connection to WordPress. This will check Every Request in plugin itself.</i></p>
  		</th><th align="right">
  		<label class='mo_wpns_switch'>
		 <input type=checkbox id='pluginWAF' name='pluginWAF' />
		 <span class='mo_wpns_slider mo_wpns_round'></span>
		</label>
		</tr></th>
		 </h3>
		 <tr><th align="left">
	<h3>Website Firewall on .htaccess Level <strong style="color: #20b2aa">[Recommended] </strong>: <a href="https://developers.miniorange.com/docs/security/wordpress/wp-security/web-firewall/#firewall-level" target="_blank">
  			<span class="dashicons dashicons-text-page" style="font-size:23px;color:#269eb3;"></span></a>
			<p><i class="mo_wpns_not_bold">This will activate WAF before the WordPress load. This will block illegitimate request before any connection to WordPress. This level doesnot allow illegal requests to before any page gets loaded.</i></p>
		</th><th align="right">
		<label class='mo_wpns_switch'>
		 <input type=checkbox id='htaccessWAF' name='htaccessWAF' />
		 <span class='mo_wpns_slider mo_wpns_round'></span>
		</label>
		 </h3></th></tr>
		 </table>
		 <div id ='htaccessChange' name ='htaccessChange'>
		 <p><i class="mo_wpns_not_bold"> This feature will make changes to .htaccess file, Please confirm before the changes<br>
		 	if you have any issue after this change please use the downloaded version as backup.
		 	Rename the file as '.htaccess' [without name just extension] and use it as backup.  
		 	</i></p> 
<?php
echo	 "<a href='". $url."' download='".$nameDownload."'>";?>
		 <input type='button' name='CDhtaccess' id='CDhtaccess' value='Confirm & Download' class="mo_wpsn_button mo_wpsn_button1" />
		 </a>
		 
		 <input type='button' name='cnclDH' id='cnclDH' value='Cancel' class="mo_wpsn_button mo_wpsn_button1"/>
	</div>
	</div>	
	<div name = 'AttackTypes' id ='AttackTypes'>
	<div class="mo_wpns_setting_layout" id ='mo2f_AttackTypes'>
	
		<table style="width:100%">
			<tr>
				<th align="left"> <h1>Vulnerabilities</h1></th>

				<th align="right"><h1>Enable/disable</h1></th>
				
			</tr>
		</table>
		<hr color = "#20b2aa"/>
	<table style="width:100%">
	<tr>

		<th align="left"><h2>	SQL Injection Protection <strong style="color: #20b2aa">[Basic Level Protection] </strong>:: 
			
			<p><i class="mo_wpns_not_bold">SQL Injection attacks are used for attack on database. This option will block all illegal requests which tries to access your database. <a href="admin.php?page=mo_2fa_upgrade"><strong style="color: #20b2aa">Advance Signatures</strong></a></i></p>
		</th>  
		<th align="right">
			<label class='mo_wpns_switch'>
			<input type="checkbox" name="SQL" id="SQL"/>
		 	<span class='mo_wpns_slider mo_wpns_round'></span>
			</label>
		</th>

		</h2>

	</tr>
		<tr>
		<th align="left"><h2>	Cross Site scripting Protection <strong style="color: #20b2aa">[Basic Level Protection] </strong>:: 
			<br>
			<p><i class="mo_wpns_not_bold">cross site scripting is used for script attacks. This will block illegal scripting on website. <a href="admin.php?page=mo_2fa_upgrade"><strong style="color: #20b2aa">Advance Signatures</strong></a></i></p>
		</th>
		<th align="right">
			<label class='mo_wpns_switch'>
			<input type="checkbox" name="XSS" id="XSS"/>
		 	<span class='mo_wpns_slider mo_wpns_round'></span>
			</label>
			</th>
		</h2></tr>
			<tr>
		<th align="left"><h2>	Local File Inclusion Protection <strong style="color: #20b2aa">[Basic Level Protection] </strong>::  
				<br>
			<p><i class="mo_wpns_not_bold">Local File inclusion is used for making changes to the local files of the server. This option will block Local File Inclusion. <a href="admin.php?page=mo_2fa_upgrade"><strong style="color: #20b2aa">Advance Signatures</strong></a></i></p>
		</th>
		<th align="right">
			<label class='mo_wpns_switch'>
			<input type="checkbox" name="LFI" id="LFI"/>
		 	<span class='mo_wpns_slider mo_wpns_round'></span>
			</label>
		</th>
		</h2></tr>
	
		<tr>
		<th align="left"><h2>	Remote File Inclusion Protection <strong style="color: red"><a href="admin.php?page=mo_2fa_upgrade"> [Premium Feature] </a></strong>::  
			<br>
			<p><i class="mo_wpns_not_bold">Remote File Inclusion is used by attackers for adding malicious files from remote server to your server.This option will block Remote File Inclusion Attacks.</i></p>
		</th>
		<th align="right">
			<label class='mo_wpns_switch'>
			<input type="checkbox" name="RFI" id="RFI" disabled />
		 	<span class='mo_wpns_slider mo_wpns_round'></span>
			</label>
		</th>
		</h2></tr>
		
		<tr>
		<th align="left"><h2>	Remote Code Execution Protection <strong style="color: red"><a href="admin.php?page=mo_2fa_upgrade"> [Premium Feature] </a></strong>::
			<br>
			<p><i class="mo_wpns_not_bold">Remote Code Execution is used for executing malicious commands or files in your server.This option will block Remote File Inclusion </i></p>
		</th>  
		<th align="right">
			<label class='mo_wpns_switch'>
			<input type="checkbox" name="RCE" id="RCE" disabled/>
		 	<span class='mo_wpns_slider mo_wpns_round'></span>
			</label>
		</th>
		</h2>
	</tr>
	<tr>
		<th align="left"><h2>	SQL Injection Protection <strong style="color: #20b2aa">[Advance Level Protection]</strong> <strong style="color: red"><a href="admin.php?page=mo_2fa_upgrade"> [Premium Feature] </a></strong>::
			<br>
			<p><i class="mo_wpns_not_bold">Advance Level Protection includes advance signatures to detect SQL injection. It is the recommended protection for all websites. </i></p>
		</th>  
		<th align="right">
			<label class='mo_wpns_switch'>
			<input type="checkbox" name="SQLAdvance" id="SQLAdvance" disabled/>
		 	<span class='mo_wpns_slider mo_wpns_round'></span>
			</label>
		</th>
		</h2>
	</tr>
	<tr>
		<th align="left"><h2>	Cross Site scripting Protection<strong style="color: #20b2aa"> [Advance Level Protection]</strong> <strong style="color: red"><a href="admin.php?page=mo_2fa_upgrade"> [Premium Feature] </a></strong>::
			<br>
			<p><i class="mo_wpns_not_bold">Advance Level Protection includes advance signatures to detect Cross Site Scripting attacks.</i></p>
		</th>  
		<th align="right">
			<label class='mo_wpns_switch'>
			<input type="checkbox" name="XSSAdvance" id="XSSAdvance" disabled/>
		 	<span class='mo_wpns_slider mo_wpns_round'></span>
			</label>
		</th>
		</h2>
	</tr>
	<tr>
		<th align="left"><h2>	Local File Inclusion Protection Protection<strong style="color: #20b2aa"> [Advance Level Protection]</strong> <strong style="color: red"><a href="admin.php?page=mo_2fa_upgrade"> [Premium Feature] </a></strong>::
			<br>
			<p><i class="mo_wpns_not_bold">Advance Level Protection includes advance signatures to detect LFI attacks on your website. Advance protection covers all files of your server to get protected from any kind of LFI attack.</i></p>
		</th>  
		<th align="right">
			<label class='mo_wpns_switch'>
			<input type="checkbox" name="LFIAdvance" id="LFIAdvance" disabled/>
		 	<span class='mo_wpns_slider mo_wpns_round'></span>
			</label>
		</th>
		</h2>
	</tr>
	
		</table>
		
	</div>
	<div class="mo_wpns_setting_layout" id="mo2f_waf_block_after">
		<table style="width: 100%">
		<tr>
		<th align="left"><h2>Block After <strong style="color: #20b2aa">[Recommended : 10] </strong>:
			<p><i class="mo_wpns_not_bold">Option for blocking the IP if the limit of the attacks has been exceeds.</i></p>
		</th>  
		<th align="right"><input type ="number" name ="limitAttack" id = "limitAttack" required min="5"/></th>
		<th><h2 align="left"> attacks</h2></th>
		<th align="right"><input type="button" name="saveLimitAttacks" id="saveLimitAttacks" value="Save" class="mo_wpsn_button mo_wpsn_button1" /></th>
		</h2>
		</tr>
		</table>
	</div>
	</div>
	</div>	
	
	
	</div>



<script type="text/javascript">
		document.getElementById('htaccessChange').style.display="none";	
		document.getElementById('rateLFD').style.display="none";
		document.getElementById('rateLCrawler').style.display 		= 'none';
		jQuery('#resultsIPLookup').empty();
				

		var Rate_request 	= "<?php echo get_option('Rate_request');?>";
		var Rate_limiting 	= "<?php echo get_option('Rate_limiting');?>";
		var actionValue		= "<?php echo get_option('actionRateL');?>";
		var WAFEnabled 		= "<?php echo get_option('WAFEnabled');?>";
		if(WAFEnabled == '1')
		{
			if(Rate_limiting == '1')
			{

				jQuery('#rateL').prop("checked",true);
				jQuery('#req').val(Rate_request);
				if(actionValue == 0)
				{
					jQuery('#action').val('ThrottleIP');
				}
				else
				{
					jQuery('#action').val('BlockIP');
				}
				document.getElementById('rateLFD').style.display="block";
					
			}
		}
		jQuery('#rateL').click(function(){
			var rateL 	= 	jQuery("input[name='rateL']:checked").val();
			
				document.getElementById('rateLFD').style.display="none";
				
			var Rate_request 	= "<?php echo get_option('Rate_request');?>";
			var nonce = '<?php echo wp_create_nonce("RateLimitingNonce");?>';
			var actionValue		= "<?php echo get_option('actionRateL');?>";

			jQuery('#req').val(Rate_request);
			if(actionValue == 0)
			{
				jQuery('#action').val('ThrottleIP');
			}
			else
			{
				jQuery('#action').val('BlockIP');
			}

			
			if(Rate_request !='')
			{	

				var data = {
				'action'					: 'wpns_login_security',
				'wpns_loginsecurity_ajax' 	: 'wpns_waf_rate_limiting_form',
				'Requests'					:  Rate_request,
				'nonce'						:  nonce,
				'rateCheck'					:  rateL,
				'actionOnLimitE'			:  actionValue
				};
				jQuery.post(ajaxurl, data, function(response) {
					var response = response.replace(/\s+/g,' ').trim();
					if(response == 'RateEnabled')
					{
						jQuery('#wpns_message').empty();
						document.getElementById('rateLFD').style.display="block";
						jQuery('#wpns_message').append("<div id='notice_div' class='overlay_success'><div class='popup_text'>&nbsp; &nbsp; Rate Limiting is Enabled.</div></div>");
						window.onload = nav_popup();
					}
					else if(response == 'Ratedisabled')
					{
						jQuery('#wpns_message').empty();
						jQuery('#wpns_message').append("<div id='notice_div' class='overlay_success'><div class='popup_text'>&nbsp; &nbsp; Rate Limiting is disabled.</div></div>");
						window.onload = nav_popup();
					}
					else if(response == 'WAFNotEnabled')
					{
						jQuery('#wpns_message').empty();
						jQuery('#wpns_message').append("<div id='notice_div' class='overlay_error'><div class='popup_text'>&nbsp; &nbsp; Enable WAF to use Rate Limiting</div></div>");
						window.onload = nav_popup();
						
					
						jQuery('#rateL').prop('checked',false);
						document.getElementById('rateLFD').style.display="none";
					}
					else if(response == 'NonceDidNotMatch')
					{
						jQuery('#wpns_message').empty();
						jQuery('#wpns_message').append("<div id='notice_div' class='overlay_error'><div class='popup_text'>&nbsp; &nbsp; Nonce verification failed.</div></div>");
						window.onload = nav_popup();
						document.getElementById('rateLFD').style.display="none";
					}
					else
					{
						jQuery('#wpns_message').empty();
						jQuery('#wpns_message').append("<div id='notice_div' class='overlay_error'><div class='popup_text'>&nbsp; &nbsp; <b>ERROR</b> : An unknown error has occured</div></div>");
						window.onload = nav_popup();
					}
		
				});
			}
			
			
		});
		jQuery('#saveRateL').click(function(){

			var req  	= 	jQuery('#req').val();
			var rateL 	= 	jQuery("input[name='rateL']:checked").val();
			var Action 	= 	jQuery("#action").val();
			var nonce = '<?php echo wp_create_nonce("RateLimitingNonce");?>';


			if(req !='' && rateL !='' && Action !='')
			{
				var data = {
				'action'					: 'wpns_login_security',
				'wpns_loginsecurity_ajax' 	: 'wpns_waf_rate_limiting_form',
				'Requests'					:  req,
				'nonce'						:  nonce,
				'rateCheck'					:  rateL,
				'actionOnLimitE'			:  Action
				};
				jQuery.post(ajaxurl, data, function(response) {
					var response = response.replace(/\s+/g,' ').trim();
					if(response == 'RateEnabled')
					{
						jQuery('#wpns_message').empty();
						jQuery('#wpns_message').append("<div id='notice_div' class='overlay_success'><div class='popup_text'>&nbsp; &nbsp;Rate Limiting is Saved</div></div>");
						window.onload = nav_popup();

					}
					else if(response == 'Ratedisabled')
					{
						jQuery('#wpns_message').empty();
						jQuery('#wpns_message').append("<div id='notice_div' class='overlay_success'><div class='popup_text'>&nbsp; &nbsp;Rate Limiting is disabled.</div></div>");
						window.onload = nav_popup();

					}
					else
					{
						jQuery('#wpns_message').empty();
						jQuery('#wpns_message').append("<div id='notice_div' class='overlay_error'><div class='popup_text'>&nbsp; &nbsp; Limit of attacks should be more than 1.</div></div>");
						window.onload = nav_popup();

					}
		
				});
			}
		
		});	

		var WAF 			= "<?php echo get_option('WAF');?>";
		var wafE 			= "<?php echo get_option('WAFEnabled');?>";
		var SQL 			= "<?php echo get_option('SQLInjection');?>";
		var XSS 			= "<?php echo get_option('XSSAttack');?>";
		var LFI 			= "<?php echo get_option('LFIAttack');?>";
		var RFI 			= "<?php echo get_option('RFIAttack');?>";
		var RCE 			= "<?php echo get_option('RCEAttack');?>";
		var limitAttack 	= "<?php echo get_option('limitAttack');?>"



		if(wafE=='1')
		{	
			
			if(WAF == 'PluginLevel')
			{
				jQuery('#pluginWAF').prop("checked",true);
			}
			else if(WAF == 'HtaccessLevel')
			{
				jQuery('#htaccessWAF').prop("checked",true);
			}
			if(SQL == '1')
			{
				jQuery('#SQL').prop("checked",true);	
			}
			if(XSS == '1')
			{
				jQuery('#XSS').prop("checked",true);	
			}
			if(LFI == '1')
			{
				jQuery('#LFI').prop("checked",true);	
			}
			if(RFI == '1')
			{
				jQuery('#RFI').prop("checked",true);	
			}
			if(RCE == '1')
			{
				jQuery('#RCE').prop("checked",true);
			}
			if(limitAttack >1)
			{
				jQuery('#limitAttack').val(limitAttack);
			}
		}
		
		jQuery('#SQL').click(function(){
			var SQL = jQuery("input[name='SQL']:checked").val();
			
			var nonce = '<?php echo wp_create_nonce("WAFsettingNonce");?>';
			if(SQL != '')
			{
				var data = {
				'action'					: 'wpns_login_security',
				'wpns_loginsecurity_ajax' 	: 'wpns_waf_settings_form',
				'optionValue' 				: 'SQL',
				'SQL'						:  SQL,
				'nonce'						:  nonce
				};
				jQuery.post(ajaxurl, data, function(response) {
						var response = response.replace(/\s+/g,' ').trim();
						if(response == 'SQLenable')
						{
							jQuery('#wpns_message').empty();
							jQuery('#wpns_message').append("<div id='notice_div' class='overlay_success'><div class='popup_text'>&nbsp; &nbsp; SQL Injection protection is enabled</div></div>");
							window.onload = nav_popup();
						}
						else
						{
							jQuery('#wpns_message').empty();
							jQuery('#wpns_message').append("<div id='notice_div' class='overlay_success'><div class='popup_text'>&nbsp; &nbsp; SQL Injection protection is disabled.</div></div>");
							window.onload = nav_popup();
						}
			
				});
							
			}


		});


		jQuery('#saveLimitAttacks').click(function(){
			var limitAttack = jQuery("#limitAttack").val();
			var nonce = '<?php echo wp_create_nonce("WAFsettingNonce");?>';
			if(limitAttack != '')
			{
				var data = {
				'action'					: 'wpns_login_security',
				'wpns_loginsecurity_ajax' 	: 'wpns_waf_settings_form',
				'optionValue' 				: 'limitAttack',
				'limitAttack'				:  limitAttack,
				'nonce'						:  nonce
				};
				jQuery.post(ajaxurl, data, function(response) {
						var response = response.replace(/\s+/g,' ').trim();
						if(response == 'limitSaved')
						{
							jQuery('#wpns_message').empty();
							jQuery('#wpns_message').append("<div id='notice_div' class='overlay_success'><div class='popup_text'>&nbsp; &nbsp; Limit of attacks has been saved.</div></div>");
							window.onload = nav_popup();
						}
						else
						{
							jQuery('#wpns_message').empty();
							jQuery('#wpns_message').append("<div id='notice_div' class='overlay_error'><div class='popup_text'>&nbsp; &nbsp; Limit of attacks should be more that 1</div></div>");
							window.onload = nav_popup();						}
			
				});
						
			}


		});

		

		jQuery('#XSS').click(function(){
			var XSS = jQuery("input[name='XSS']:checked").val();
			var nonce = '<?php echo wp_create_nonce("WAFsettingNonce");?>';
			if(XSS != '')
			{
				var data = {
				'action'					: 'wpns_login_security',
				'wpns_loginsecurity_ajax' 	: 'wpns_waf_settings_form',
				'optionValue' 				: 'XSS',
				'XSS'						:  XSS,
				'nonce'						:  nonce
				};
				jQuery.post(ajaxurl, data, function(response) {
						var response = response.replace(/\s+/g,' ').trim();
						if(response == 'XSSenable')
						{
							jQuery('#wpns_message').empty();
							jQuery('#wpns_message').append("<div id='notice_div' class='overlay_success'><div class='popup_text'>&nbsp; &nbsp; XSS detection is enabled</div></div>");
							window.onload = nav_popup();
						}
						else
						{
							jQuery('#wpns_message').empty();
							jQuery('#wpns_message').append("<div id='notice_div' class='overlay_success'><div class='popup_text'>&nbsp; &nbsp; XSS detection is disabled.</div></div>");
							window.onload = nav_popup();
						}
			
				});
							
			}
			

		});
		jQuery('#LFI').click(function(){
			var LFI = jQuery("input[name='LFI']:checked").val();
			var nonce = '<?php echo wp_create_nonce("WAFsettingNonce");?>';
			if(LFI != '')
			{
				var data = {
				'action'					: 'wpns_login_security',
				'wpns_loginsecurity_ajax' 	: 'wpns_waf_settings_form',
				'optionValue' 				: 'LFI',
				'LFI'						:  LFI,
				'nonce'						:  nonce
				};
				jQuery.post(ajaxurl, data, function(response) {
						var response = response.replace(/\s+/g,' ').trim();
						if(response == 'LFIenable')
						{
							jQuery('#wpns_message').empty();
							jQuery('#wpns_message').append("<div id='notice_div' class='overlay_success'><div class='popup_text'>&nbsp; &nbsp; LFI detection is enabled</div></div>");
							window.onload = nav_popup();
						}
						else
						{
							jQuery('#wpns_message').empty();
							jQuery('#wpns_message').append("<div id='notice_div' class='overlay_success'><div class='popup_text'>&nbsp; &nbsp; LFI detection is disabled.</div></div>");
							window.onload = nav_popup();
						}
			
				});
							
			}
			
			


		
		});
		
		
		jQuery('#pluginWAF').click(function(){
			pluginWAF = jQuery("input[name='pluginWAF']:checked").val();
			var htaccessWAF = jQuery("input[name='htaccessWAF']:checked").val();
			var nonce = '<?php echo wp_create_nonce("WAFsettingNonce");?>';
			if(pluginWAF != '')
			{

				var data = {
				'action'					: 'wpns_login_security',
				'wpns_loginsecurity_ajax' 	: 'wpns_waf_settings_form',
				'optionValue' 				: 'WAF',
				'pluginWAF'					:  pluginWAF,
				'nonce'						:  nonce
				};

				jQuery.post(ajaxurl, data, function(response) {
						var response = response.replace(/\s+/g,' ').trim();
						
						if(response == "PWAFenabled")
						{
							var SQL ="<?php echo get_option('SQLInjection');?>";
							var XSS ="<?php echo get_option('XSSAttack');?>";
							var LFI ="<?php echo get_option('LFIAttack');?>";
							var RFI ="<?php echo get_option('RFIAttack');?>";
							var RCE ="<?php echo get_option('RCEAttack');?>";
							var limitAttack 	= "<?php echo get_option('limitAttack');?>"

							if(SQL == '1')
							{
								jQuery('#SQL').prop("checked",true);	
							}
							if(XSS == '1')
							{
								jQuery('#XSS').prop("checked",true);	
							}
							if(LFI == '1')
							{
								jQuery('#LFI').prop("checked",true);	
							}
							if(RFI == '1')
							{
								jQuery('#RFI').prop("checked",true);	
							}
							if(RCE == '1')
							{
								jQuery('#RCE').prop("checked",true);	
							}
							if(limitAttack >1)
							{	
								jQuery('#limitAttack').val(limitAttack);
							}
							jQuery('#wpns_message').empty();
							jQuery('#wpns_message').append("<div class= 'notice notice-success is-dismissible' style='height : 25px;padding-top: 10px;  ' >WAF  is enabled on Plugin level</div>");
							window.scrollTo({ top: 0, behavior: 'smooth' });
							

						}
						else
						{
							jQuery('#wpns_message').empty();
							jQuery('#SQL').prop("checked",false);	
							jQuery('#LFI').prop("checked",false);	
							jQuery('#XSS').prop("checked",false);	
						
							jQuery('#wpns_message').append("<div class= 'notice notice-error is-dismissible' style='height : 25px;padding-top: 10px;  ' >WAF is disabled on plugin level.</div>");
							window.scrollTo({ top: 0, behavior: 'smooth' });
						}
			
				});
							
			}

			if(htaccessWAF=='on' && pluginWAF=='on')
			{
				jQuery('#htaccessWAF').prop("checked",false);
				document.getElementById("htaccessWAF").disabled = false;
				document.getElementById("htaccessChange").style.display = "none";
				
				var nonce = '<?php echo wp_create_nonce("WAFsettingNonce");?>';
				var data = {
				'action'					: 'wpns_login_security',
				'wpns_loginsecurity_ajax' 	: 'wpns_waf_settings_form',
				'optionValue' 				: 'HWAF',
				'nonce'						:  nonce,
				'pluginWAF'					: 'on'
				};
				jQuery.post(ajaxurl, data, function(response) {
						var response = response.replace(/\s+/g,' ').trim();
						if(response == 'HWAFdisabled')
						{
						}
						else
						{
						}
						
			
				});

			}

		});
		jQuery('#htaccessWAF').click(function(){

			var pluginWAF = jQuery("input[name='pluginWAF']:checked").val();
			var htaccessWAF = jQuery("input[name='htaccessWAF']:checked").val();
			if(htaccessWAF =='on')
			{
				document.getElementById("htaccessChange").style.display ="block";
				document.getElementById("htaccessWAF").disabled = true;
			}
			else
			{
				document.getElementById("htaccessChange").style.display ="none";	
			}

						

			if(htaccessWAF != 'on')
			{
				var nonce = '<?php echo wp_create_nonce("WAFsettingNonce");?>';
				var data = {
				'action'					: 'wpns_login_security',
				'wpns_loginsecurity_ajax' 	: 'wpns_waf_settings_form',
				'optionValue' 				: 'HWAF',
				'htaccessWAF'				:  htaccessWAF,
				'nonce'						:  nonce
				};
				jQuery.post(ajaxurl, data, function(response) {
						var response = response.replace(/\s+/g,' ').trim();
						if(response == 'HWAFdisabled')
						{
							jQuery('#SQL').prop("checked",false);	
							jQuery('#LFI').prop("checked",false);	
							jQuery('#XSS').prop("checked",false);	
						
							jQuery('#wpns_message').empty();
							jQuery('#wpns_message').append("<div class= 'notice notice-success is-dismissible' style='height : 25px;padding-top: 10px;  ' >WAF is disabled</div>");
							window.scrollTo({ top: 0, behavior: 'smooth' });
						}
						else
						{
							jQuery('#wpns_message').empty();
							jQuery('#wpns_message').append("<div class= 'notice notice-error is-dismissible' style='height : 25px;padding-top: 10px;  ' >An error has occured while deactivating WAF.</div>");
							window.scrollTo({ top: 0, behavior: 'smooth' });
						}
					
				});
				
			}
			else
			{
				var nonce = '<?php echo wp_create_nonce("WAFsettingNonce");?>';
				var data = {
				'action'					: 'wpns_login_security',
				'wpns_loginsecurity_ajax' 	: 'wpns_waf_settings_form',
				'optionValue' 				: 'backupHtaccess',
				'htaccessWAF'				:  htaccessWAF,
				'nonce'						:  nonce
				};
				jQuery.post(ajaxurl, data, function(response) {
						var response = response.replace(/\s+/g,' ').trim();
						if(response == 'HWAFEnabled')
						{
							jQuery('#wpns_message').empty();
							jQuery('#wpns_message').append("<div class= 'notice notice-success is-dismissible' style='height : 25px;padding-top: 10px;  ' >WAF is enabled on htaccess level</div>");
							window.scrollTo({ top: 0, behavior: 'smooth' });
						}
						else if(response =='HWAFEnabledFailed')
						{
							jQuery('#wpns_message').empty();
							jQuery('#wpns_message').append("<div class= 'notice notice-error is-dismissible' style='height : 25px;padding-top: 10px;  ' >An error has occured while activating WAF.</div>");
							window.scrollTo({ top: 0, behavior: 'smooth' });
						}
						else
						{
							window.scrollTo({ top: 0, behavior: 'smooth' });
						}
					
				});


			}
			
		});
		jQuery('#cnclDH').click(function(){
			var pluginWAF = jQuery("input[name='pluginWAF']:checked").val();
			document.getElementById("htaccessChange").style.display = "none";
			if(pluginWAF == 'on')
			{
				jQuery('#pluginWAF').prop("checked",true);
			}
			jQuery('#htaccessWAF').prop("checked",false);
			document.getElementById("htaccessWAF").disabled = false;
			
			jQuery('#wpns_message').empty();
			jQuery('#wpns_message').append("<div class= 'notice notice-success is-dismissible' style='height : 25px;padding-top: 10px;  ' >WAF activation canceled</div>");
			window.scrollTo({ top: 0, behavior: 'smooth' });

		});
		jQuery('#CDhtaccess').click(function(){

			var pluginWAF = jQuery("input[name='pluginWAF']:checked").val();
			var htaccessWAF = jQuery("input[name='htaccessWAF']:checked").val();

			var nonce = '<?php echo wp_create_nonce("WAFsettingNonce");?>';
				var data = {
				'action'					: 'wpns_login_security',
				'wpns_loginsecurity_ajax' 	: 'wpns_waf_settings_form',
				'optionValue' 				: 'HWAF',
				'htaccessWAF'				:  htaccessWAF,
				'nonce'						:  nonce
				};
				jQuery.post(ajaxurl, data, function(response) {
						var response = response.replace(/\s+/g,' ').trim();
						if(response == 'HWAFEnabled')
						{
							if(htaccessWAF=='on')
							{	
								var SQL ="<?php echo get_option('SQLInjection');?>";
								var XSS ="<?php echo get_option('XSSAttack');?>";
								var LFI ="<?php echo get_option('LFIAttack');?>";
								var RFI ="<?php echo get_option('RFIAttack');?>";
								var RCE ="<?php echo get_option('RCEAttack');?>";
								var limitAttack 	= "<?php echo get_option('limitAttack');?>"

								if(SQL == '1')
								{
									jQuery('#SQL').prop("checked",true);	
								}
								if(XSS == '1')
								{
									jQuery('#XSS').prop("checked",true);	
								}
								if(LFI == '1')
								{
									jQuery('#LFI').prop("checked",true);	
								}
								if(RFI == '1')
								{
									jQuery('#RFI').prop("checked",true);	
								}
								if(RCE == '1')
								{
									jQuery('#RCE').prop("checked",true);	
								}
								if(limitAttack >1)
								{	
									jQuery('#limitAttack').val(limitAttack);
								}
								jQuery('#wpns_message').empty();
								jQuery('#wpns_message').append("<div class= 'notice notice-success is-dismissible' style='height : 25px;padding-top: 10px;  ' >WAF is enabled on htaccess Level</div>");
								window.scrollTo({ top: 0, behavior: 'smooth' });
							}
						}
						else if(response == 'HWAFEnabledFailed')
						{
							jQuery('#wpns_message').empty();
							jQuery('#wpns_message').append("<div class= 'notice notice-error is-dismissible' style='height : 25px;padding-top: 10px;  ' >An error occured while activating WAF</div>");
							window.scrollTo({ top: 0, behavior: 'smooth' });
								
						}
						else if(response == 'HWAFdisabledFailed')
						{
							jQuery('#wpns_message').empty();
							jQuery('#wpns_message').append("<div class= 'notice notice-error is-dismissible' style='height : 25px;padding-top: 10px;  ' >&nbsp; &nbsp; An error occured while deactivating WAF</div>");
							window.scrollTo({ top: 0, behavior: 'smooth'});
							
						}
						else if(response == 'HWAFdisabled')
						{
							jQuery('#wpns_message').empty();
							jQuery('#SQL').prop("checked",false);	
							jQuery('#LFI').prop("checked",false);	
							jQuery('#XSS').prop("checked",false);	
						
							jQuery('#wpns_message').append("<div class= 'notice notice-error is-dismissible' style='height : 25px;padding-top: 10px;  ' >WAF is disabled on htaccess Level.</div>");
							window.scrollTo({ top: 0, behavior: 'smooth' });
						}
						else
						{	
							jQuery('#wpns_message').empty();
							jQuery('#wpns_message').append("<div class= 'notice notice-error is-dismissible' style='height : 25px;padding-top: 10px;  ' >An error has occured.There might be another WAF exists.</div>");
							window.scrollTo({ top: 0, behavior: 'smooth' });
						}
						
				});
		
			if(htaccessWAF=='on' && pluginWAF=='on')
			{
				jQuery('#pluginWAF').prop("checked",false);
					
			}
			document.getElementById("htaccessChange").style.display = "none";
			document.getElementById("htaccessWAF").disabled = false;

		});

		

jQuery('#RLPage').click(function(){
	document.getElementById("RateLimitTab").click();
});

jQuery('#SettingPage').click(function(){
	document.getElementById("settingsTab").click();
});

jQuery('#RTBPage').click(function(){
	document.getElementById("RealTimeTab").click();
});
	
function waf_function(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";

  localStorage.setItem("last_tab",cityName);
  evt.currentTarget.className += " active";
  if(cityName == "settings")
  {
  	jQuery("#settingsTab").addClass(" active");
  }
  document.getElementById(cityName).style.display = "block";

}

	
	var tour 			= '<?php echo get_option("mo2f_tour_firewall");?>';
	
	if(tour != 1)
		var tab 	= localStorage.getItem("last_tab");
	else
		var tab = '<?php echo get_option("mo2f_tour_tab");?>';
	

	if(tab == "waf_dash")
	{
		document.getElementById("defaultOpen").click();
	}
	else if(tab == "settings")
	{
		document.getElementById("settingsTab").click();	
	}


	else if(tab == "real_time")
	{
		document.getElementById("RealTimeTab").click();	
	}
	
	else if(tab == "rate_limiting")
	{
		document.getElementById("RateLimitTab").click();	
	}
	else 
	{
		document.getElementById("settingsTab").click();	
	}
	

function nav_popup() {
  document.getElementById("notice_div").style.width = "40%";
  setTimeout(function(){ $('#notice_div').fadeOut('slow'); }, 3000);
}
</script>

	

