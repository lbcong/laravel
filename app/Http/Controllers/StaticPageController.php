<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 4/5/2018
 * Time: 9:00 AM
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class StaticPageController extends Controller
{
    function index(){
        return view('static_page.static_page');
    }

    function help(){
        return view('static_page.help');
    }

    function about(){
        return view('static_page.about');
    }
}