<?php
/**
 * WP Courseware
 *
 * Functions relating to showing the settings page.
 */


/**
 * Shows the settings page for the plugin.
 */
function WPCW_showPage_Settings_load()
{
	$page = new PageBuilder(true);
	$page->showPageHeader(__('Training Courses - Settings', 'wp-courseware'), '75%', WPCW_icon_getPageIconURL());

	// Check for update flag
	if (isset($_POST['update']) && $_POST['update'] == 'tables_force_upgrade')
	{
		$page->showMessage(__('Upgrading WP Courseware Tables...', 'wp-courseware'));
		flush();

		// Use all upgrade routines.
		WPCW_plugin_setup(true);
		$page->showMessage(sprintf(__('%s tables have successfully been upgraded.', 'wp-courseware'), 'WP Courseware') );
	}



	$settingsFields = array(
		'section_access_key' 	=> array(
				'type'	  	=> 'break',
				'html'	   	=> WPCW_forms_createBreakHTML(__('Licence Key Settings', 'wp-courseware')),
			),

		'licence_key' => array(
				'label' 	=> __('Licence Key', 'wp-courseware'),
				'type'  	=> 'text',
				'desc'  	=> __('Your licence key for the WP Courseware plugin.', 'wp-courseware'),
				'validate'	 	=> array(
					'type'		=> 'string',
					'maxlen'	=> 32,
					'minlen'	=> 32,
					'regexp'	=> '/^[A-Za-z0-9]+$/',
					'error'		=> __('Please enter your 32 character licence key, which contains only letters and numbers.', 'wp-courseware'),
				)
			),

		'license_activation' => array(
			'label' 	=> __('Licence Activation', 'wp-courseware'),
			'type'  	=> 'radio',
			'required'	=> 'true',
			'data'		=> array(
				'activate_license' 	=> sprintf('<b>%s</b>', __('Activate', 'wp-courseware')),
				'deactivate_license' 	=> sprintf('<b>%s</b>', __('Deactivate', 'wp-courseware')),
			),
			'desc'  	=> __('If you want to receive updates to this plugin, select "Activate". Otherwise, select "Deactivate" to deactivate license. Selecting "Deactivate" will disable any future updates. Deactivating your license allows you to move your plugin to another site.', 'wp-courseware'),
		),

		// Section that allows user to switch on/off Unit comments
		'section_comments' 	=> array(
			'type'	  	=> 'break',
			'html'	   	=> WPCW_forms_createBreakHTML(__('Unit Comments', 'wp-courseware')),
		),

		'enable_unit_comments' => array(
			'label' 	=> __('Enable comments on units?', 'wp-courseware'),
			'type'  	=> 'radio',
			'required'	=> 'true',
			'data'		=> array(
				'enable_comments' 	=> sprintf('<b>%s</b>', __('Yes', 'wp-courseware')),
				'disable_comments' 	=> sprintf('<b>%s</b>', __('No', 'wp-courseware')),
			),
			'desc'  	=> __("If you enable comments, you will have the ability to disable comments for individual units.", 'wp-courseware'),
		),


		// Section that deals with CSS
		'section_default_css' 	=> array(
				'type'	  	=> 'break',
				'html'	   	=> WPCW_forms_createBreakHTML(__('Style &amp; Design Settings', 'wp-courseware')),
			),


		'use_default_css' => array(
				'label' 	=> __('Use Default CSS?', 'wp-courseware'),
				'type'  	=> 'radio',
				'required'	=> 'true',
				'data'		=> array(
					'show_css' 	=> sprintf('<b>%s</b> - %s', __('Yes', 'wp-courseware'), __('Use default stylesheet for the frontend of the website.', 'wp-courseware')),
					'hide_css' 	=> sprintf('<b>%s</b> - %s', __('No', 'wp-courseware'), __('Don\'t use the default stylesheet for the frontend of the website (you\'ll write your own CSS)', 'wp-courseware')),
				),
				'desc'  	=> __('If you want to style your training course material yourself, you can disable the default stylesheet. If in doubt, select <b>Yes</b>.', 'wp-courseware'),
			),

		'section_cron' 	=> array(
				'type'	  	=> 'break',
				'html'	   	=> WPCW_forms_createBreakHTML(__('Drip Feed Notifications', 'wp-courseware')),
			),


		'cron_time_dripfeed' => array(
				'label' 	=> __('Time Delay Between Checks', 'wp-courseware'),
				'type'  	=> 'select',
				'required'	=> 'true',
				'data'		=> array(
					'never' 		=> __('Never check', 	'wp-courseware'),
					'hourly' 		=> __('Every hour', 	'wp-courseware'),
					'twicedaily' 	=> __('Twice a day', 	'wp-courseware'),
					'daily' 		=> __('Daily', 			'wp-courseware'),
				),
				'desc'  	=> __('How frequently should the system check if there are any notifications to send out to trainees? When a unit that is locked by a drip feed setting becomes available, the system sends them an email. This setting determines how frequently the system should check for possible notifications.', 'wp-courseware'),
			),


		'section_link' 	=> array(
				'type'	  	=> 'break',
				'html'	   	=> WPCW_forms_createBreakHTML(__('Powered By Link', 'wp-courseware')),
			),

		'show_powered_by' => array(
				'label' 	=> __('Show Powered By Link?', 'wp-courseware'),
				'type'  	=> 'radio',
				'required'	=> 'true',
				'data'		=> array(
					'show_link' 	=> sprintf('<b>%s</b> - %s', __('Yes', 'wp-courseware'), __('Show the <em>\'Powered By WP Courseware\'</em> link.', 'wp-courseware')),
					'hide_link' 	=> sprintf('<b>%s</b> - %s', __('No', 'wp-courseware'), __('Don\'t show any powered-by links.', 'wp-courseware')),
				),
				'desc'  	=> __("Do you want to show a 'Powered By WP Courseware' link at the bottom of course outlines?", 'wp-courseware'),
			),

		'affiliate_id' => array(
				'label' 	=> __('Your Affiliate ID', 'wp-courseware'),
				'type'  	=> 'text',
				'desc'  	=> __("(Optional) Earn some money by providing your Affiliate ID, which will turn the <b>Powered By WP Courseware</b> into an affiliate link that earns you a percentage of every sale! If you are not an affiliate, login to the member portal to register and get your ID.", 'wp-courseware'),
				'validate'	 	=> array(
					'type'		=> 'string',
					'maxlen'	=> 15,
					'minlen'	=> 1,
					'regexp'	=> '/^[A-Za-z0-9\-_]+$/',
					'error'		=> __('Please enter your Affiliate ID, which is only a number..', 'wp-courseware'),
				)
			),
		);


	// Remove licence key for child multi-sites
	if (!WPCW_plugin_hasAdminRights())
	{
		unset($settingsFields['section_access_key']);
		unset($settingsFields['licence_key']);
	}

	// This option will only appear when an ecommerce/membership integration is installed
	// Adds option to sync or add courses when integration plugin is in use.
	// if (class_exists('WPCW_Members'))
	// {
	// 	$couresEnrollmentMethod = array(
	// 		'section_course_enrollment_method' 	=> array(
	// 			'type'	  	=> 'break',
	// 			'html'	   	=> WPCW_forms_createBreakHTML(__('Course enrollment method', 'wp-courseware')),
	// 		),

	// 		'course_enrollment_method' => array(
	// 			'label' 	=> __('Course Enrollment Method', 'wp-courseware'),
	// 			'type'  	=> 'radio',
	// 			'required'	=> 'false',
	// 			'data'		=> array(
	// 				'sync' 	=> sprintf('<b>%s</b>%s', __('Sync', 'wp-courseware'), __(' - Limit students to being enrolled only in courses that were purchased.')),
	// 				'add' 	=> sprintf('<b>%s</b>%s', __('Add', 'wp-courseware'), __(' - Allow students to remain enrolled in currently enrolled courses as well as any courses that are purchased.')),
	// 			),
	// 			'desc'  	=> __('This setting is only active when using an integration plugin for membership or ecommerce plugin is activated.', 'wp-courseware'),
	// 		)
	// 	);
	// 	wpcw_array_splice_assoc($settingsFields, 3, 0 , $couresEnrollmentMethod);
	// }

	$settings = new SettingsForm($settingsFields, WPCW_DATABASE_SETTINGS_KEY, 'wpcw_form_settings_general');
	$settings->setSaveButtonLabel(__('Save ALL Settings', 'wp-courseware'));

	// Update messages for translation
	$settings->msg_settingsSaved   	= __('Settings successfully saved.', 'wp-courseware');
	$settings->msg_settingsProblem 	= __('There was a problem saving the settings.', 'wp-courseware');
	$settings->customFormErrorMsg = __('Sorry, but unfortunately there were some errors saving the course details. Please fix the errors and try again.', 'wp-courseware');
	$settings->setAllTranslationStrings(WPCW_forms_getTranslationStrings());

	// Form event handlers - processes the saved settings in some way
	$settings->afterSaveFunction = 'WPCW_showPage_Settings_afterSave';

	$settings->show();


	// Create little form to force upgrading tables if something went wrong during update.
	echo WPCW_forms_createBreakHTML(__("Upgrade Tables", 'wp-courseware'), false, true, 'wpcw_upgrade_tables');
	?>
	<p><?php _e("If you're getting any errors with WP Courseware relating to database tables when you've updated, you can force an upgrade of the database tables using the button below.", 'wp-courseware'); ?></p>
	<?php

	$form = new FormBuilder('tables_force_upgrade');
	$form->setSubmitLabel(__('Force Table Upgrade', 'wp-courseware'));
	echo $form->toString();



	// RHS Support Information
	$page->showPageMiddle('23%');
	WPCW_docs_showSupportInfo($page);
	WPCW_docs_showSupportInfo_News($page);
	WPCW_docs_showSupportInfo_Affiliate($page);

	$page->showPageFooter();
}


/**
 * Function called after settings are saved.
 *
 * @param String $formValuesFiltered The data values actually saved to the database after filtering.
 * @param String $originalFormValues The original data values before filtering.
 * @param Object $formObj The form object thats doing the saving.
 */
function WPCW_showPage_Settings_afterSave($formValuesFiltered, $originalFormValues, $formObj)
{
	// Can't update licence key unless admin for site.
	if (!WPCW_plugin_hasAdminRights()) {
		return false;
	}

	// Activate the licence if needed.
	WPCW_licence_edd_activateLicence();

	// Setup or clear the scheduler for the notifications timers. If the setting is 'never'
	// then clear the scheduler. If it's anything else, then add it.
	$dripfeedSetting = WPCW_arrays_getValue($formValuesFiltered, 'cron_time_dripfeed');
	WPCW_queue_dripfeed::installNotificationHook_dripfeed($dripfeedSetting);
}


/**
 * Shows the settings page for the plugin, shown just for the network page.
 */
function WPCW_showPage_Settings_Network_load()
{
	$page = new PageBuilder(true);
	$page->showPageHeader(__('WP Courseware - Settings', 'wp-courseware'), '75%', WPCW_icon_getPageIconURL());


	$settingsFields = array(
		'section_access_key' 	=> array(
				'type'	  	=> 'break',
				'html'	   	=> WPCW_forms_createBreakHTML(__('Licence Key Settings', 'wp-courseware'), false, true),
			),

		'licence_key' => array(
				'label' 	=> __('Licence Key', 'wp-courseware'),
				'type'  	=> 'text',
				'desc'  	=> __('Your licence key for the WP Courseware plugin.', 'wp-courseware'),
				'validate'	 	=> array(
					'type'		=> 'string',
					'maxlen'	=> 32,
					'minlen'	=> 32,
					'regexp'	=> '/^[A-Za-z0-9]+$/',
					'error'		=> __('Please enter your 32 character licence key, which contains only letters and numbers.', 'wp-courseware'),
				)
			),
		);


	$settings = new SettingsForm($settingsFields, WPCW_DATABASE_SETTINGS_KEY, 'wpcw_form_settings_general');

	// Set strings and messages
	$settings->setAllTranslationStrings(WPCW_forms_getTranslationStrings());
	$settings->setSaveButtonLabel('Save ALL Settings', 'wp-courseware');

	// Form event handlers - processes the saved settings in some way
	$settings->afterSaveFunction = 'WPCW_showPage_Settings_afterSave';

	$settings->show();


	// RHS Support Information
	$page->showPageMiddle('23%');
	WPCW_docs_showSupportInfo($page);
	WPCW_docs_showSupportInfo_News($page);
	WPCW_docs_showSupportInfo_Affiliate($page);

	$page->showPageFooter();
}

?>