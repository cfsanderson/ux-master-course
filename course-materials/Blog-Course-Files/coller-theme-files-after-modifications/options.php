<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 */

function optionsframework_options() {

	$options = array();
	
	//Basic Settings
	
	$options[] = array(
		'name' => __('Basic Settings', 'coller'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Site Logo', 'coller'),
		'desc' => __('Size of Logo should be Exactly 360x125px For Best Results. Leave Blank to use text Heading.', 'coller'),
		'id' => 'logo',
		'class' => '',
		'type' => 'upload');		
		
	$options[] = array(
		'desc' => __('To have more customization options including Favicon, Responsive Navigation Settings, Custom Scripts, etc. <a href="http://rohitink.com/product/coller-pro" target="_blank">Upgrade to Pro</a> at Just $24.95. Pro Version also supports customization of theme into unlimited colors. With Coller pro, you can design your own unique theme.'),
		'std' => '',
		'type' => 'info');		
		
	$options[] = array(
		'name' => __('Copyright Text', 'coller'),
		'desc' => __('Some Text regarding copyright of your site, you would like to display in the footer.', 'coller'),
		'id' => 'footertext2',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Custom CSS', 'coller'),
		'desc' => __('Some Custom CSS for your site.', 'coller'),
		'id' => 'customcss1',
		'std' => '',
		'type' => 'textarea');	
	
	//SLIDER SETTINGS

	$options[] = array(
		'name' => __('Slider Settings', 'coller'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Enable Slider', 'coller'),
		'desc' => __('Check this to Enable Slider.', 'coller'),
		'id' => 'slider_enabled',
		'type' => 'checkbox',
		'std' => '0' );
	
	$options[] = array(
		'desc' => __('To Customize the the slider with more settings like Transition Effect, Transition Duration, Adaptive Heights, Touch Enable on Touch Screen Devices, etc. <a href="http://rohitink.com/product/coller-pro" target="_blank">Upgrade to Pro</a> at Just $24.95'),
		'std' => '',
		'type' => 'info');
	
	$options[] = array(
		'name' => __('Using the Slider', 'coller'),
		'desc' => __('This Slider supports upto 5 Images. To show only 3 Slides in the slider, upload only 3 images. Leave the rest Blank. For best results, upload images of width more than 1100px', 'coller'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Slider Image 1', 'coller'),
		'desc' => __('First Slide', 'coller'),
		'id' => 'slide1',
		'class' => '',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Title', 'coller'),
		'id' => 'slidetitle1',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Url', 'coller'),
		'id' => 'slideurl1',
		'std' => '',
		'type' => 'text');		
	
	$options[] = array(
		'name' => __('Slider Image 2', 'coller'),
		'desc' => __('Second Slide', 'coller'),
		'class' => '',
		'id' => 'slide2',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Title', 'coller'),
		'id' => 'slidetitle2',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Url', 'coller'),
		'id' => 'slideurl2',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Slider Image 3', 'coller'),
		'desc' => __('Third Slide', 'coller'),
		'id' => 'slide3',
		'class' => '',
		'type' => 'upload');	
	
	$options[] = array(
		'desc' => __('Title', 'coller'),
		'id' => 'slidetitle3',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Url', 'coller'),
		'id' => 'slideurl3',
		'std' => '',
		'type' => 'text');		
	
	$options[] = array(
		'name' => __('Slider Image 4', 'coller'),
		'desc' => __('Fourth Slide', 'coller'),
		'id' => 'slide4',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'coller'),
		'id' => 'slidetitle4',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Url', 'coller'),
		'id' => 'slideurl4',
		'std' => '',
		'type' => 'text');		
	
	$options[] = array(
		'name' => __('Slider Image 5', 'coller'),
		'desc' => __('Fifth Slide', 'coller'),
		'id' => 'slide5',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'coller'),
		'id' => 'slidetitle5',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Url', 'coller'),
		'id' => 'slideurl5',
		'std' => '',
		'type' => 'text');	
			
	//Social Settings
	
	$options[] = array(
	'name' => __('Social Settings', 'coller'),
	'type' => 'heading');

	$options[] = array(
		'name' => __('Facebook', 'coller'),
		'desc' => __('Facebook Profile or Page URL i.e. http://facebook.com/username/ ', 'coller'),
		'id' => 'facebook',
		'std' => '',
		'class' => 'mini',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('Twitter', 'coller'),
		'desc' => __('Twitter Username', 'coller'),
		'id' => 'twitter',
		'std' => '',
		'class' => 'mini',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('Google Plus', 'coller'),
		'desc' => __('Google Plus profile url, including "http://"', 'coller'),
		'id' => 'google',
		'std' => '',
		'class' => 'mini',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Pinterest', 'coller'),
		'desc' => __('Pinterest profile url, including "http://"', 'coller'),
		'id' => 'pinterest',
		'std' => '',
		'class' => 'mini',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Linked In', 'coller'),
		'desc' => __('Linkedin profile url, including "http://"', 'coller'),
		'id' => 'linkedin',
		'std' => '',
		'class' => 'mini',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Instagram', 'coller'),
		'desc' => __('Instagram profile url, including "http://"', 'coller'),
		'id' => 'instagram',
		'std' => '',
		'class' => 'mini',
		'type' => 'text');		
		
	$options[] = array(
		'name' => __('YouTube', 'coller'),
		'desc' => __('YouTube Channel url, including "http://"', 'coller'),
		'id' => 'youtube',
		'std' => '',
		'class' => 'mini',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Feeburner', 'coller'),
		'desc' => __('URL for your RSS Feeds', 'coller'),
		'id' => 'feedburner',
		'std' => '',
		'class' => 'mini',
		'type' => 'text');		
	
	$options[] = array(
		'desc' => __('For More Social Icons. <a href="http://rohitink.com/product/coller-pro" target="_blank">Upgrade to Pro</a> at Just $24.95'),
		'std' => '',
		'type' => 'info');
		
	$options[] = array(
	'name' => __('Support', 'coller'),
	'type' => 'heading');
	
	$options[] = array(
		'desc' => __('Coller WordPress theme has been Designed and Created by <a href="http://rohitink.com" target="_blank">Rohit Tripathi</a>. For any Queries or help related to the theme you can <a href="http://wordpress.org/support/theme/coller/" target="_blank">Visit Support Forums.</a>.', 'coller'),
		'type' => 'info');	
			
	$options[] = array(
		'desc' => __('I offer Dedicated Personal e-mail support to all the Pro Version Customers. <a href="http://rohitink.com/product/coller-pro" target="_blank">Upgrade to Pro</a> at Just $24.95'),
		'std' => '',
		'type' => 'info');
		
	 $options[] = array(
		'desc' => __('<a href="http://twitter.com/rohitinked" target="_blank">Follow Me on Twitter</a> to know about my upcoming themes.', 'coller'),
		'type' => 'info');	
	
	$options[] = array(
		'name' => __('Theme Credits', 'coller'),
		'desc' => __('Check this if you want to you do not want to give us credit in your site footer.', 'coller'),
		'id' => 'credit1',
		'std' => '0',
		'type' => 'checkbox');
    
    $options[] = array(
	'name' => __('Upgrade to Pro', 'coller'),
	'type' => 'heading');
	
		
	return $options;
}