<?php
return array(
	'_root_'  => 'home',  // The default route
	'video' => 'video',
	'art' => 'art',
	'events' => 'events',
	'login' => 'auth/login',
	'logout' => 'auth/logout',
	'admin' => 'admin',
	'admin_user' => 'admin/user',
	'admin_user_update' => 'admin/userupdate',
	'admin_user_delete/:user' => 'admin/userdelete',
	'admin_art' => 'admin/art',
	'admin_video' => 'admin/video',
	'admin_events' => 'admin/events',
	'user' => 'user',
	'_404_'   => 'welcome/404',    // The main 404 route
);