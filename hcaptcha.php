<?php

// Disallow direct access to this file for security reasons
if(!defined("IN_MYBB"))
{
	die("Direct initialization of this file is not allowed.");
}


function myplugin_info()
{
	return array(
		"name"			=> "hCaptcha",
		"description"	=> "hCaptcha is a drop-in replacement for reCAPTCHA that earns websites money and helps companies get their data labeled.",
		"website"		=> "https://github.com/borekon/hcaptha",
		"author"		=> "Alfonso Vivancos",
		"authorsite"	=> "https://alfonso.vivancos.eu",
		"version"		=> "0.1",
		"guid" 			=> "",
		"codename"		=> "hCaptcha",
		"compatibility" => "18*"
	);
}

function myplugin_install()
{

}

function myplugin_is_installed()
{

}

function myplugin_uninstall()
{

}

function myplugin_activate()
{

}

function myplugin_deactivate()
{

}
?>
