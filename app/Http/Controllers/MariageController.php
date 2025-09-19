<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InviteTable;

class MariageController extends Controller
{
    public function table(){
        return view('table');
    }

    public function vue(Request $request){
        $numero = $request->input('numero');
        $invites = InviteTable::where('idinvitation', $numero)->get();
        return view('vue', ['invites' => $invites]);
    }
}
