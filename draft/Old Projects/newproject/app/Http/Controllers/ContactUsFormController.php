<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsFormController extends Controller
{
    public function createForm(Request $request){
        return view('contact');
    }

    public function ContactUsForm(Request $request){

        //form Validation
        $this->validate()
    }
}
