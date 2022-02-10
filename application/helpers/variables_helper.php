<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function subtitle() {
    return  'Mały panel do robienia wielkich rzeczy';
}

function isOnWebp() {
    return  true;
}

function checkFilter($filter_id, $realizations_filters) {
	$status = false;
	foreach ($realizations_filters as $filter) {
		if($filter->filter_id == $filter_id) $status = true;
	}
	return $status;
}

function getFilters($realization, $realizations_filters) {
	$CI =& get_instance();
	$classes = '';
	foreach($realizations_filters as $filter) {
		if($filter->realization_id == $realization->id) {
			$classes .= ' '. strtolower(str_replace(' ', '-', $CI->back_m->get_one('filters', $filter->filter_id)->title));
		}
	}
	return $classes;
}