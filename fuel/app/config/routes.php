<?php
return array(
	// The default route
	'_root_'  => 'home',
	//LINKS TO NON-USER AREAS  
	'video' => 'video',
	'art' => 'art',
	'events' => 'events',
	//LOGIN AND LOGOUT
	'login' => 'auth/login',
	'logout' => 'auth/logout',
	//ADMIN AND CRUD
	'admin' => 'admin',
	'admin_post_newpost' => 'admin/newpost',
	'admin_post_update'=>'admin/updatepost',
	'admin_post_delete/:post' => 'admin/deletepost',
	//ADMIN USER
	'admin_user' => 'admin/user',
	'admin_user_update' => 'admin/userupdate',
	'admin_user_delete/:user' => 'admin/userdelete',
	//ADMIN ART
	'admin_art_newart' => 'admin/newart',
	'admin_art_delete/:art' => 'admin/deleteart',
	'admin_art' => 'admin/art',
	//ADMIN VIDEO
	'admin_video_newvideo' => 'admin/newvideo',
	'admin_video_delete/:video' => 'admin/deletevideo',
	'admin_video' => 'admin/video',
	//ADMIN Event
	'admin_event_newevent' => 'admin/newevent',
	'admin_event_update'=>'admin/updateevent',
	'admin_event_delete/:event' => 'admin/deleteevent',
	'admin_events' => 'admin/events',
	//USER AND CRUD
	'user' => 'user',
	//USER ART
	'user_art_newart' => 'user/newart',
	'user_art_delete/:art' => 'user/deleteart',
	//USER VIDEO
	'user_video_newvideo' => 'user/newvideo',
	'user_video_delete/:video' => 'user/deletevideo',
	//USER POST
	'user_post_newpost' => 'user/newpost',
	'user_post_update'=>'user/updatepost',
	'user_post_delete/:post' => 'user/deletepost',
	//404 page not found
	'_404_'   => 'welcome/404',    // The main 404 route
);