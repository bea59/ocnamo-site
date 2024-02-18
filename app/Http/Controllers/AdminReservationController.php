<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class AdminReservationController extends Controller
{
    private $heures = [
        // créneau du midi
        '12:00',
        '12:30',
        '13:00',
        '13:30',

        // créneau du soir
        '20:00',
        '20:30',
        '21:00',
        '21:30',
    ];

    //  /admin/reservation 
     public function index()
    {
        //récup la liste des résa
        $reservations = Reservation::all(); 
        // affiche un template
        return view('admin.reservation.index', [
            'reservations' => $reservations,
        ]);
    }
           
    public function show($id)
    {
        //récup la résa
        $reservation = Reservation::find($id);
        // affiche un template
        return view('admin.reservation.show', [
            'reservation' => $reservation,
            'heures' => $this->heures,
        ]); 
    }

    public function edit($id)
    {
        $reservation = Reservation::find($id);

        return view('admin.reservation.edit', [
            'reservation' => $reservation,
            'heures' => $this->heures,
        ]);
    }

    public function update(Request $request)
    {
        $heures = implode(',', $this->heures);

        $validated = $request->validate([
            'nom' => 'required|min:3|max:50',
            'couverts' => 'required|numeric|gte:1|lte:16 ',
            'heures' => "required|in:{$heures}",
            'jours' => 'required|date|date_format:Y-m-d|after_or_equal:today',
            'telephone' => 'required|min:10|max:10',
            'commentaires' => 'nullable|min:10|max:1000',
        ]);

        $reservation = Reservation::find($id);
        $reservation->nom = $validated['nom'];
        $reservation->couverts = $validated['couverts'];
        $reservation->heures = $validated['heures'];
        $reservation->jours = $validated['jours'];
        $reservation->telephone = $validated['telephone'];
        $reservation->commentaires = $validated['commentaires'];

        $reservation->save();

        return redirect()->route('admin.reservation.show', [
            'id' => $reservation->id,
        ]);
    }

    public function delete($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();

        return redirect()->route('admin.reservation.indzex');
    }

    public function create ()
    { 
        return view('admin.reservation.create', [
            'heures' => $this->heures,
        ]);
    }

    public function store(Request $request)
    {
        $heures = implode(',', $this->heures);

        $validated = $request->validate([
            'nom' => 'required|min:3|max:50',
            'couverts' => 'required|numeric|gte:1|lte:16 ',
            'heures' => "required|in:{$heures}",
            'jours' => 'required|date|date_format:Y-m-d|after_or_equal:today',
            'telephone' => 'required|min:10|max:10',
            'commentaires' => 'nullable|min:10|max:1000',
        ]);

        // dd($validated); //dump and die 

        $reservation = new Reservation();
        $reservation->nom = $validated['nom'];
        $reservation->couverts = $validated['couverts'];
        $reservation->heures = $validated['heures'];
        $reservation->jours = $validated['jours'];
        $reservation->telephone = $validated['telephone'];
        $reservation->commentaires = $validated['commentaires'];

        $reservation->save();

        return redirect()->route('admin.reservation.show', ['id' =>
        $reservation->id]);
    }   
}
