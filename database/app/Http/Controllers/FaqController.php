<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function faqe()
    {
    	return view('/faq');
    }
}
