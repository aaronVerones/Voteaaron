<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endorsement;

class generalController extends Controller
{
    public function home() {
        $endorsements = Endorsement::all();
        return view('home')->with(compact('endorsements'));
    }
    public function vote() {
        return redirect('https://amsvoting.as.it.ubc.ca/auth.php');
    }
}
