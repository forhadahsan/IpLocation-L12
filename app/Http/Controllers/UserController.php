<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Illuminate\View\View;


class UserController extends Controller
{
    public function index(Request $request): View
    {
        $ip = $request->ip(); // Static IP: $ip = '162.159.24.227';
        $currentUserInfo = Location::get($ip);
        return view('user', compact('currentUserInfo'));
    }
}
