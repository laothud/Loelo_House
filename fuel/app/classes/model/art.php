<?php

class Model_Art extends Orm\Model
{
	/**
	 *
	 */
	protected static $_properties = array(
		'id',
		'artcode',
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

    public static function get_one($artid)
    {
    	return static::query()->order_by('created_at', 'desc')->get_one($artid);
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
}