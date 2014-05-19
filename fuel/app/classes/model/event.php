<?php

class Model_Event extends Orm\Model
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
	 *add a event to the DB
	 */
	public function newevent($event)
	{
		$newevent = new Model_Event();
		$newevent->title = $event->title;
		$newevent->description = $event->description;
		$newevent->userid = $event->userid;
		$newevent->save();

	}

	/**
	 *delete a event in the DB
	 */
	public function deletevideo($event)
	{
		$deletedEvent = Model_Event::find($event);
		$deletedEvent->delete();
	}

	/**
	 *update a event in the DB
	 */
	public function updateevent($event)
	{
		$updatedEvent = Model_Event::find($event);
		$updatedEvent->title = $event->title;
		$updatedEvent->description = $event->description;
		$newevent->save();
		
	}
}