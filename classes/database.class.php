<?php

class Database
{
	protected $constructed = false;

	protected static $instance = null;

	public function __construct()
	{
		$this->constructed = true;
	}

	public function isConstructed()
	{
		return (bool)$this->constructed;
	}

	public static function getInstance()
	{
		if (self::$instance === null)
		{
			self::$instance = new self();
		}

		return self::$instance;
	}
}