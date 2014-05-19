<?php

class Model_Post extends Orm\Model
{
	/**
	 *
	 */
    protected static $_properties = array(
		'id',
		'title',
		'description',
		'userid',
		'created_at',
		'username',
    );


    protected static $_observers = array(
	    'Orm\\Observer_CreatedAt' => array(
	        'events' => array('before_insert'),
	        'mysql_timestamp' => true,
	    ),
	);


    public static function get_results()
    {
		return static::query()->order_by('created_at', 'desc')->get();
    }

    public static function get_one($postid)
    {
    	return static::query()->where('id',$postid)->get_one();
    }

    public static function get_by_username($username)
    {
    	return static::query()->where('username', '=', $username)->order_by('created_at', 'desc')->get();
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

}