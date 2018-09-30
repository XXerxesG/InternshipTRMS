<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use App\Ticket;
use App\machine;
use app\downtimeform;
use App\Project;
use App\Test;
use Carbon\Carbon;
use App\user;

class exportfilescontroller extends Controller
{
	public function Exportfiles()
	{
	
	$user = user::all();
  	
    
    $user->create($user, ['email', 'name'])->download();
	}
}
