<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Users;
use App\Models\Room;
use App\Models\Position;
use App\Models\Projects;
use Hash;
use Session;
use Auth;


class HomeController extends Controller
{

    
    public function Home(){
    	$new_product = Projects::paginate(5);
    	return view('client.home.index',compact('new_product'));
    }

    





}
