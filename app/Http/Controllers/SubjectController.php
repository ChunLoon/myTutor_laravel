<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject;   
use Illuminate\Support\Facades\Auth; //Auth::check


class SubjectController extends Controller
{
    public function saveSubject(Request $request)
    {
        echo json_encode($request->all());
        $newSubject = new subject();
        $newSubject->title= $request->subtitle;
        $newSubject->description = $request->subdes;
        $newSubject->price = $request->subprice;
        $newSubject->hours= $request->subhours;
        $newSubject->save();
        return redirect('mainpage')->with('save', 'Success')->withErrors('error', 'Failed');

      
    }

    public function mainpage()
    {
        if (Auth::check()) {
            return view('mainpage', ['listSubject' => subject::all()]);
        }
        return redirect("login")->withSuccess('You do not have access');
    }
   

    
}
