<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function loadDefaultData() {
    $CI = &get_instance();
	$data['mails'] = $CI->back_m->get_all('mails');
	$data['user'] = $CI->back_m->get_one('users', $_SESSION['id']);
	$data['media'] = $CI->back_m->get_all('media');
	$data['settings'] = $CI->back_m->get_one('settings', 1);
	$data['contact'] = $CI->back_m->get_one('contact_settings', 1);
	$data['api_gallery'] = apiGalleryRows();
	
    return $data;
}

function loadDefaultDataFront() {
	$CI = &get_instance();
	// $data['title'] = "tytuł";
	// $data['subtitle'] = "podtytuł";
	$data['menu_icons'] = $CI->back_m->get_all('menu_icons');
	$data['settings'] = $CI->back_m->get_one('settings', 1);
	$data['contact_settings'] = $CI->back_m->get_one('contact_settings', 1);
	$data['subpages'] = $CI->back_m->get_all('subpages');
	$data['contact_descriptions'] = $CI->back_m->get_one('contact_descriptions', 1);
	
    return $data;
}