<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endorsement;

class endorsementController extends Controller
{
    public function endorse()
    {
        $endorsements = Endorsement::all();
        return view('endorse')->with('endorsements', $endorsements);
    }


    public function submit(Request $request)
    {
        Endorsement::create($request->all());
        return redirect('/');
    }
}
