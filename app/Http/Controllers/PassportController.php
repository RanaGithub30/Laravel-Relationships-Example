<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passport;

class PassportController extends Controller
{
    //

    public function create()
    {
          return view('passport.create');
    }

    public function store(Request $request)
    {
        if($request->user()){
        $check_user = Passport::where('user_id', $request->user()->id)->first();
           if($check_user == null){
                 
                 $passport = new Passport;
                $passport->passport_no = $request->get('passport_no');
                $passport->valid_till = $request->get('valid_till');
                $passport->user()->associate($request->user());

                $passport->save();

                return 'Success';

           }else{
              dd('You Have already add the details'); 
           }
       }else{
           dd('You Have to Login First');
       }
    }

    public function show(Request $request)
    {
           $passport_details = Passport::where('user_id', $request->user()->id)->get();
           return view('passport.index', compact('passport_details'));
    }
}