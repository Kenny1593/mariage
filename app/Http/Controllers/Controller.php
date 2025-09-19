<?php

namespace App\Http\Controllers;

use App\Models\Invite;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function auto(){
        $user=Invite::limit(1)->first();
        session(['user' => $user]);
        return view('welcome');
    }

    
}
