<?php

$aliases['staging'] = array(
	'uri'=> 'ckcs.ccistaging.com',
	'root' => '/home/staging/subdomains/ckcs/public_html',
	'remote-host'=> 'host.ccistudios.com',
	'remote-user'=> 'staging',
	'path-aliases'=> array(
		'%files'=> 'sites/default/files',
	),
	'ssh-options'=> '-p 37241'
);
