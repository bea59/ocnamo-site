<?php

namespace App\Http\Controllers;

use App\Models\Actu;
use App\Models\Categorie;
use App\Models\Plat;
use App\Models\Reservation;
use Illuminate\Http\Request;

class MainController extends Controller
{
    private $heures = [
            // créneau du midi
            "12:00:00" => '12:00',
            "12:30:00" => '12:30',
            "13:00:00" => '13:00',
            "13:30:00" => '13:30',

            // créneau du soir
            "20:00:00" => '20:00',
            "20:30:00" => '20:30',
            "21:00:00" => '21:00',
            "21:30:00" => '21:30',
        ];

    public function accueil()
    {
        $actus = Actu::all();
        return view('accueil',[
            'actus' => $actus,
        ]);
    }

    public function menu()
    {
        $categories = Categorie::all();

        return view('menu',[
        //variables qui peuvent étre utilisés dans le template
        'categories' => $categories]);
    }

    public function plat(int $id)
    {
        $plat = Plat::find($id);

        return view ('plat', ['plat' => $plat, 
    ]); 
    }

    public function reservation()
    { 
        return view('reservation', [
            'heures' => $this->heures,
        ]);
    }

    public function reservationStore(Request $request)
    {
        $heures = implode(',', $this->heures);

        $validated = $request->validate([
            'nom' => 'required|min:3|max:50',
            'couvert' => 'required|numeric|gte:1|lte:16 ',
            'heure' => "required|in:{$heures}",
            'jour' => 'required|date|date_format:Y-m-d|after_or_equal:today',
            'telephone' => 'required|min:10|max:10',
            'commentaires' => 'nullable|min:10|max:1000',
        ]);

        // dd($validated); //dump and die 

        $reservation = new Reservation();
        $reservation->nom = $validated['nom'];
        $reservation->couverts = $validated['couvert'];
        $reservation->heures = $validated['heure'];
        $reservation->jours = $validated['jour'];
        $reservation->telephone = $validated['telephone'];
        $reservation->commentaires = $validated['commentaires'];

        $reservation->save();

        return view('reservationStore', ['reservation' => $reservation,
        ]);
    }
    
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
