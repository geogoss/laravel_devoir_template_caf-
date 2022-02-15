<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function welcome () {
        $surTitreHome1 = 'Fresh Coffee';
        $titreHome1 = 'Worth Drinking';
        $texteHome1 = 'Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!';
        $aHome1 = 'Visit Us Today!';

        $surTitreHome2 = 'Our Promise';
        $titreHome2 ='To You';
        $texteHome2 = 'When you walk into our shop to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make things right!';
        return view('welcome', compact('surTitreHome1', 'surTitreHome2', 'titreHome1', 'titreHome2', 'texteHome1', 'texteHome2', 'aHome1', ));
    }
}
