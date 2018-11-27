<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function faq()
    {
        $faqArr = [
            "A que nos dedicamos?" => "Somos una empresa cuya principal misión es ayudar a que perro y humanos se encuentren, ya sean perros perdidos o perros sin hogar.",
            "Como publicar tu perro perdido?" => "Simplemente registrate con tus datos y ya podes publicar.",
            "Es gratis publicar a mi perro perdido?" => "Sí, no tenés ningún costo.",
            "Como se financian?" => "Nos financiamos mediante sponsors y donaciones.",
            "Como puedo ayudar?" => "Podes ayudar compartiendo las publicaciones de los perros perdidos de tu zona o donde conozcas gente, adoptando un perro, darle alojamiento temporario, donando o si sos programador podes ayudarnos con el desarrollo de la página.",
            "Como hago para adoptar un perro?" => "Tenés que llenar el formulario, indicar que estas interesado en adoptar perros, buscas el perro que queres adoptar y te contactamos con la familia temporal del perro.",
            "Si ayudo gano?" => "Sí, gracias a nuestros sponsors, hacemos sorteos entre los miembros mas activos de nuetra comundidad.",
            "Como ayudan a que un perro se enuentre con su humano?" => "Nosotros solo brindamos la solucion tecnologica para que nuestros mejores amigos puedan encontrar un hogar o volver a su hogar. Dependemos de ustedes, la comunidad, para que nos ayuden a compartir las publicaciones, adopten o hagan de hogar transitorio.",
        ];
        return view('faq')->with('faqArr', $faqArr);
    }
}
