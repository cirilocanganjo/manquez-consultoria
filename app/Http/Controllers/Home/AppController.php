<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Depoimento;
use App\Models\Evento;
use App\Models\Gallery;

class AppController extends Controller
{

    public function startApp()
    {
        $depoimentos = Depoimento::all();
        $photos = \DB::table("galleries")->limit(8)->get();
        $events = Evento::orderBY("id", "DESC")->limit(1)->get();

        return view("index", ["depoimentos" =>$depoimentos,"events" =>$events, "photos" =>$photos,


    ]);

    }


}
