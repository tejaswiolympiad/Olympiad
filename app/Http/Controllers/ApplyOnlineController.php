<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApplyOnlineController extends Controller {
   public function __construct(){
   }
   public function index()
   {
	return view('applyonline');
   }
   public function schoolRegistration(){
	return view('schoolregistration');	   
   }
  
}