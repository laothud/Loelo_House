<?php

class Model_User extends Auth\Model\Auth_User
{
	/**
	 *
	 */
	public function quote()
	{
		return isset($this->quote) ? $this->quote : null;
	}

    public static function get_results()
    {
		return static::query()->order_by('username')->get();
    }

    public static function get_by_id($id)
    {
    	return static::query()->where('id', $id)->get_one();
    }

    public static function get_one($username)
    {
    	return static::query()->where('username',$username)->get_one();
    }
}