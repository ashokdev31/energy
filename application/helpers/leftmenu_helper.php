<?php

function getLeftmenubar() {
	$CI = get_instance();
	$CI->load->model('Home_model');
	$result = $CI->Home_model->getDashboardContent();
	return $result;

}

?>