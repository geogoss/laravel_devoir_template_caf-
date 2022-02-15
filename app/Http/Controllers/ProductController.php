<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function product () {

        $surTitreProduct1 = 'Blended to Perfection';
        $titreProduct1 = 'Coffees &amp; Teas';
        $srcProduct1 = 'img/products-01.jpg';
        $texteProduct1 ='We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it\'s our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more.';

        $surTitreProduct2 = 'Delicious Treats, Good Eats';
        $titreProduct2 = 'Bakery &amp; Kitchen';
        $srcProduct2 = 'img/products-02.jpg';
        $texteProduct2 ='Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.';

        $surTitreProduct3 = 'From Around the World';
        $titreProduct3 = 'Bulk Speciality Blends';
        $srcProduct3 = 'img/products-03.jpg';
        $texteProduct3 ='Travelling the world for the very best quality coffee is something take pride in. When you visit us, you \'ll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details.';


        return view('pages.product', compact('surTitreProduct1', 'titreProduct1', 'texteProduct1', 'srcProduct1','surTitreProduct2', 'titreProduct2', 'texteProduct2', 'srcProduct2', 'surTitreProduct3', 'titreProduct3', 'texteProduct3', 'srcProduct3'));
    }
}
