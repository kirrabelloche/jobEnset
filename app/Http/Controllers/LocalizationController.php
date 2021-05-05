<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    public function lang($locale)
    {
        App::setLocale($locale);
        $cookie = cookie('lang_app', $locale, 525600);
        session()->put('locale', $locale);
        return redirect()->back()->cookie($cookie);
    }
}
