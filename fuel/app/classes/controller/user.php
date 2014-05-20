<?php
class Controller_User extends Controller_App
{

	public function action_index()
	{
		$this->template->content = View::forge('site/user_dash');
		$this->template->content->posts = Model_Post::get_by_username(Session::get('username'));
	}

	/**
	 *add a art to the DB
	 */
	public function newart($art)
	{
		$newartwork = new Model_Art();
		$newartwork->artcode = $art->artcode;
		$newartwork->userid = $art->userid;
		$newartwork->username = $art->username;
		$newartwork->save();

	}

	/**
	 *delete a art in the DB
	 */
	public function deleteart($art)
	{
		$deletedArt = Model_Art::find($art);
		$deletedArt->delete();
	}

	/**
	 *add a post to the DB
	 */
	public function newpost($post)
	{
		$newpost = new Model_Post();
		$newpost->title = $post->title;
		$newpost->description = $post->description;
		$newpost->userid = $post->userid;
		$newpost->username = $post->username;
		$newpost->save();	
	}

	/**
	 *delete a post in the DB
	 */
	public function deletepost($post)
	{
		$deletedPost = Model_Post::find($post);
		$deletedPost->delete();
	}

	/**
	 *update a post in the DB
	 */
	public function updatepost($post)
	{
		$updatedPost = Model_Post::find($post);
		$updatedPost->title = $post->title;
		$updatedPost->description = $post->description;
		$updatedPost->save();
	}

	/**
	 *add a video to the DB
	 */
	public function newvideo($video)
	{
		$newvideo = new Model_Video();
		$newvideo->videocode = $video->videocode;
		$newvideo->userid = $video->userid;
		$newvideo->username = $video->username;
		$newvideo->save();
	}

	/**
	 *delete a video in the DB
	 */
	public function deletevideo($video)
	{
		$deletedVideo = Model_Video::find($video);
		$deletedVideo->delete();
	}
	
}