<?php
$pagetitle = array(
    'title' => 'Mevlo',
);

$header = array(
    'imagesource' => '',
    'imagealt' => '',
	'title' => '',
	'motto' => ''
);

$footer = array(
    'copyright' => 'Copyright '.date("Y.m").'.',
    'firm' => 'Orhan Zenunovski & Omer Ademi'
);

$pages = array(
	'/' => array('file' => 'home', 'text' => 'Home', 'menun' => array(1,1)),
	'contact' => array('file' => 'contact', 'text' => 'Contact', 'menun' => array(1,1)),
    'contactdata' => array('file' => 'contactdata', 'text' => 'Contactdata', 'menun' => array(0,0)),
    'table' => array('file' => 'table', 'text' => 'Table', 'menun' => array(1,1)),
    'images' => array('file' => 'images', 'text' => 'Images', 'menun' => array(1,1)),
    'upload' => array('file' => 'upload', 'text' => 'Upload', 'menun' => array(0,1)),
	'login' => array('file' => 'login', 'text' => 'Login', 'menun' => array(1,0)),
    'logout' => array('file' => 'logout', 'text' => 'Logout', 'menun' => array(0,1)),
	'login2' => array('file' => 'login2', 'text' => '', 'menun' => array(0,0)),
    'registration' => array('file' => 'registration', 'szoveg' => '', 'menun' => array(0,0))
);

$error_page = array ('file' => '404', 'text' => 'Page not found!');
?>
