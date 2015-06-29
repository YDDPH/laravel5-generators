<?php

namespace Yddph\Generators\Commands;

class MakeMigrationCommand {

	/**
	 * Module name
	 * 
	 * @var string
	 */
	private $module;

	/**
	 * Table name
	 * 
	 * @var string
	 */
	private $table;

	function __construct($module, $table)
	{
		$this->module = $module;	
		$this->table = $table;
	}

	private function makeMigration()
	{
		
	}
}