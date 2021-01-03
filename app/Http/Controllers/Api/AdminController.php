<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth:api');
    }
    public function index(){
        return response()->json(['success'=>true, 'message'=>"You are the admin."], 200);
    }
}
