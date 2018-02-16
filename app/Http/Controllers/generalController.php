<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endorsement;
use Auth;

class generalController extends Controller
{
    public function home() {
        $endorsements = Endorsement::where('status','approved')->get();
        return view('home')->with(compact('endorsements'));
    }
    public function vote() {
        return redirect('https://amsvoting.as.it.ubc.ca/auth.php');
    }
    public function admin() {
        if (Auth::user() && Auth::user()->id == 1) {
            $endorsements = Endorsement::all();
            return view('admin')->with(compact(
                'endorsements'
            ));
        }
        else
            return redirect(url('/'));
    }
    public function updateEndorsement(Request $request) {
        Endorsement::find($request['e_id'])->update(['status'=>$request['status']]);
    }

}
