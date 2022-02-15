<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    function store () {
        $surTitreStore1 = 'Come On In';
        $titreStore1 = 'We\'re Open';
        $day = array(
            (object)['day'=> 'Sunday', 'hour' => 'closed'],
            (object)['day'=> 'Monday', 'hour' => '7:00 AM to 8:00 PM'],
            (object)['day'=> 'Tuesday', 'hour' => '7:00 AM to 8:00 PM'],
            (object)['day'=> 'Wednesday', 'hour' => '7:00 AM to 8:00 PM'],
            (object)['day'=> 'Thursday', 'hour' => '7:00 AM to 8:00 PM'],
            (object)['day'=> 'Friday', 'hour' => '7:00 AM to 8:00 PM'],
            (object)['day'=> 'Saterday', 'hour' => '7:00 AM to 8:00 PM'],
        );

        $sousSection1Store = array(
            (object)['sousSection1' => '1116 Orchard Street', 'sousSection2' => 'Golden Valley, Minnesota', 'sousSection3' => 'Call Anytime', 'sousSection4' => '(317) 585-8468'  ]
        );

        $section2Store = array(

            (object)[
            'surTitre' => 'Strong Coffee, Strong Roots', 
            'titre'    => 'About Our Cafe', 
            'texte1'   => 'Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.', 
            'texte2'  => 'We guarantee that you will fall in <em>lust</em> with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.']
        );



        return view('pages.store', compact( 'surTitreStore1', 'titreStore1', 'day', 'sousSection1Store', 'section2Store'));

    }
}
