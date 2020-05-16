<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Configuration;
use App\Temoignage;
use App\Team;

class HomeController extends Controller
{
    public function index(){
    	$NosConfig = configuration::all();
    	$NosServices = service::all();
    	$temoins = temoignage::all();
    	return view('site.index',compact('NosConfig','NosServices','temoins'));
    }


    public function about(){
    	$NosConfig = configuration::all();
    	$temoins = temoignage::all();
    	$team = team::all();
    	return view('site.about',compact('NosConfig','temoins','team'));
    }
}
