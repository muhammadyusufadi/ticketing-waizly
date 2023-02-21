<?php

class Template
{
	var $template_data = array();

	function set($name, $value)
	{
		$this->template_data[$name] = $value;
	}

	function load($template = '', $view = '', $view_data = array(), $return = FALSE)
	{
		$this->CI = &get_instance();

		$this->set('contents', $this->CI->load->view($view, $view_data, TRUE));

		return $this->CI->load->view($template, $this->template_data, $return);
	}
}
	// function load($view = '', $view_data = array(), $return = FALSE)
	// {
	// 	$CI = &get_instance();

	// 	$data['meta'] = $CI->load->view('back/template/meta', '', TRUE);
	// 	$data['header'] = $CI->load->view('back/template/header', '', TRUE);
	// 	$data['sidebar'] = $CI->load->view('back/template/sidebar', '', TRUE);
	// 	$data['contents'] = $CI->load->view($view, $view_data, TRUE);
	// 	$data['footer'] = $CI->load->view('back/template/footer', '', TRUE);
	// 	$data['script'] = $CI->load->view('back/template/script', '', TRUE);

	// 	return $CI->load->view('back/template', $data, $return);
	// }