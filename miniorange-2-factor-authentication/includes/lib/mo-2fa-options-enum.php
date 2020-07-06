<?php
include "Mo2FABasicEnum.php";

class mo_saml_options_enum_pointersMo2FA extends Mo2FABasicEnum{
    public static
        $DEFAULT = array(
        'custom_admin_pointers4_8_52_default-miniorange-sp-metadata-url',
        'custom_admin_pointers4_8_52_default-miniorange-2fa-select-authentication',
 
        'custom_admin_pointers4_8_52_default-miniorange-2fa-configure',
        'custom_admin_pointers4_8_52_default-miniorange-2fa-choose_app',
        'custom_admin_pointers4_8_52_default-miniorange-2fa-download_app',
        'custom_admin_pointers4_8_52_default-miniorange-2fa-choose_name_on_app',
        'custom_admin_pointers4_8_52_default-miniorange-2fa-scan-qrcode',
        'custom_admin_pointers4_8_52_default-miniorange-2fa-enter_code_manually',
        'custom_admin_pointers4_8_52_default-miniorange-2fa-enter-otp',
        'custom_admin_pointers4_8_52_default-miniorange-2fa-test',
        'custom_admin_pointers4_8_52_default-miniorange-2fa-customizations',
        'custom_admin_pointers4_8_52_default-miniorange-2fa-integration',
        'custom_admin_pointers4_8_52_default-miniorange-2fa-premium-features',
      
        'custom_admin_pointers4_8_52_default-miniorange-2fa-upgrade',
        'custom_admin_pointers4_8_52_default-miniorange-2fa-support',


        'custom_admin_pointers4_8_52_default-miniorange-firewall-level',
        'custom_admin_pointers4_8_52_default-miniorange-firewall-attacks',
        'custom_admin_pointers4_8_52_default-miniorange-firewall-attack-limit',
        'custom_admin_pointers4_8_52_default-miniorange-firewall-rate-limit',
        'custom_admin_pointers4_8_52_default-miniorange-firewall-check-attacks',
        'custom_admin_pointers4_8_52_default-miniorange-firewall-support',
                

        'custom_admin_pointers4_8_52_default-miniorange-malware-scan-modes',
        'custom_admin_pointers4_8_52_default-miniorange-malware-custom-scan-files',
        'custom_admin_pointers4_8_52_default-miniorange-malware-scan-reports',
        'custom_admin_pointers4_8_52_default-miniorange-malware-scan-dashboard',
        'custom_admin_pointers4_8_52_default-miniorange-malware-support',

        'custom_admin_pointers4_8_52_default-miniorange-advance-blocking-IP-blocking',
        'custom_admin_pointers4_8_52_default-miniorange-advance-blocking-IP-whitelisting',
        'custom_admin_pointers4_8_52_default-miniorange-advance-blocking-IP-lookup',
        'custom_admin_pointers4_8_52_default-miniorange-advance-blocking-IP-range',
        'custom_admin_pointers4_8_52_default-miniorange-advance-blocking-htaccess-blocking',
        'custom_admin_pointers4_8_52_default-miniorange-advance-blocking-browser-blocking',
        'custom_admin_pointers4_8_52_default-miniorange-advance-blocking-country-blocking',
        'custom_admin_pointers4_8_52_default-miniorange-advance-blocking-support',
                        

        'custom_admin_pointers4_8_52_default-miniorange-backup-manual-db',
        'custom_admin_pointers4_8_52_default-miniorange-backup-auto-db',
        'custom_admin_pointers4_8_52_default-miniorange-backup-file',
        'custom_admin_pointers4_8_52_default-miniorange-backup-report',
        'custom_admin_pointers4_8_52_default-miniorange-backup-support',
        
        'custom_admin_pointers4_8_52_default-miniorange-login-spam-bruteforce',
        'custom_admin_pointers4_8_52_default-miniorange-login-spam-recaptcha',
        'custom_admin_pointers4_8_52_default-miniorange-login-spam-strong-pass',
        'custom_admin_pointers4_8_52_default-miniorange-login-spam-fake-registration',
        'custom_admin_pointers4_8_52_default-miniorange-login-spam-content',
        'custom_admin_pointers4_8_52_default-miniorange-login-spam-block-spam',
        'custom_admin_pointers4_8_52_default-miniorange-login-spam-support'
    );
    public static $DEFAULT_SKIP = array(
        'custom_admin_pointers4_8_52_default-miniorange-sp-metadata-url',
        'custom_admin_pointers4_8_52_default-miniorange-select-your-idp',
        'custom_admin_pointers4_8_52_default-miniorange-upload-metadata',
        'custom_admin_pointers4_8_52_default-miniorange-test-configuration',
        'custom_admin_pointers4_8_52_default-miniorange-attribute-mapping',
        'custom_admin_pointers4_8_52_default-miniorange-role-mapping',
        'custom_admin_pointers4_8_52_default-minorange-use-widget',
        'custom_admin_pointers4_8_52_default-miniorange-addons1',
        'custom_admin_pointers4_8_52_default-miniorange-addons2',
        'custom_admin_pointers4_8_52_default-miniorange-addons3',
        'custom_admin_pointers4_8_52_default-miniorange-addons4',
        'custom_admin_pointers4_8_52_default-miniorange-addons5',


         'custom_admin_pointers4_8_52_default-miniorange-create-account',
        'custom_admin_pointers4_8_52_default-miniorange-select-your-idp',
        'custom_admin_pointers4_8_52_default-miniorange-upload-metadata',
        'custom_admin_pointers4_8_52_default-miniorange-test-configuration',
        'custom_admin_pointers4_8_52_default-miniorange-attribute-mapping',
        'custom_admin_pointers4_8_52_default-miniorange-role-mapping',
        'custom_admin_pointers4_8_52_default-minorange-use-widget',
        'custom_admin_pointers4_8_52_default-miniorange-addons1',
        'custom_admin_pointers4_8_52_default-miniorange-addons2',
        'custom_admin_pointers4_8_52_default-miniorange-addons3',
        'custom_admin_pointers4_8_52_default-miniorange-addons4',
        'custom_admin_pointers4_8_52_default-miniorange-addons5',
        'custom_admin_pointers4_8_52_default-miniorange-support-pointer'
    );
	public static $SERVICE_PROVIDER = array(
		'custom_admin_pointers4_8_52_miniorange-select-your-idp',
		'custom_admin_pointers4_8_52_miniorange-upload-metadata',
		'custom_admin_pointers4_8_52_miniorange-test-configuration',
		'custom_admin_pointers4_8_52_miniorange-import-config',
		'custom_admin_pointers4_8_52_export-import-config',
		'custom_admin_pointers4_8_52_configure-service-restart-tour');
	public static $IDENTITY_PROVIDER = array(
		'custom_admin_pointers4_8_52_metadata_manual',
		'custom_admin_pointers4_8_52_miniorange-sp-metadata-url',
		'custom_admin_pointers4_8_52_identity-provider-restart-tour'
		);
	public static $ATTRIBUTE_MAPPING = array(
		'custom_admin_pointers4_8_52_miniorange-attribute-mapping',
		'custom_admin_pointers4_8_52_miniorange-role-mapping',
		'custom_admin_pointers4_8_52_attribute-mapping-restart-tour');
	public static $REDIRECTION_LINK = array(
		'custom_admin_pointers4_8_52_minorange-use-widget',
		'custom_admin_pointers4_8_52_miniorange-auto-redirect',
		'custom_admin_pointers4_8_52_miniorange-auto-redirect-login-page',
		'custom_admin_pointers4_8_52_miniorange-short-code',
		'custom_admin_pointers4_8_52_miniorange-redirection-sso-restart-tour'
		);

}


