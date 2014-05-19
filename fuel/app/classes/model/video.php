<?php

class Model_Video extends Orm\Model
{
	/**
	 *
	 */
	protected static $_properties = array(
		'id',
		'videocode',
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

    public static function get_one()
    {
    	return static::query()->order_by('created_at', 'desc')->get_one();
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