<?php


namespace App;


interface ModuleInterface
{
	public function __construct(Core $core);
	public function getEvents();
}