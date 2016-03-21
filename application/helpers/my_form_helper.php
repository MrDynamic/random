<?php if (! defined('BASEPATH')) exit ('No direct script asscess allowed');

if(!function_exists('create_input')){
	function create_input($labelValue,$attributes){
		$result ='';
		$result .= OPEN_FORM_GROUP;
		$result .= form_label($labelValue[0],$labelValue[1]);
		$result .= form_input($attributes);
		$result .= CLOSE_FORM_GROUP;
		return $result;
	}
}

	function create_dropdown($labelValue,$name,$data,$attributes,$selected=''){
		$result ='';
		$result .= OPEN_FORM_GROUP;
		$result .= form_label($labelValue[0],$labelValue[1]);
		$result .= form_dropdown($name,$data,$selected,$attributes);
		$result .= CLOSE_FORM_GROUP;
		return $result;
	}

	