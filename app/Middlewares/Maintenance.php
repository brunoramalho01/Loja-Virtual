<?php
namespace App\Middlewares;

use App\Models\System;

class Maintenance{
	public function redirectTo(){
		$system = System::first();

		if($system && $system->maintenance){
			echo view('site.maintenance');
			die();
		}
	}
}