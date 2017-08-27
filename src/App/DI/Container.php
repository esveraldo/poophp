<?php 

namespace App\DI;

use App\Connections\Base;
use App\Project\SelectClients;

class Container
{
	public static function conn()
	{
		$conn = new Base();
		return $conn;
	}

	public static function getSelectClients()
	{
		$selClients = new SelectClients(self::conn());
		return $selClients;
	}
}