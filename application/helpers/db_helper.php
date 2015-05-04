<?php
/*
* Get Categories
*/

function get_categories_h(){
	$CI = get_instance();
	$categories = $CI->Products_model->get_categories();
	return $categories;
}