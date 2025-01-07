<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizersController extends Controller
{
    public function organizers(){

        return view('frontend.organizers');
    }
}
