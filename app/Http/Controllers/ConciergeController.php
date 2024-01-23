<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Mail\RichiestaInformazioni;
use Illuminate\Support\Facades\Mail;

class ConciergeController extends Controller
{
    public function chiediConcierge(Request $request)
    {
        $subcategories = Subcategory::all();
        $roomNumber = session('room_number');
        // $selectedSubcategory = $request->query('selected_subcategory');
    
        return view('chiediconcierge', compact('subcategories', 'roomNumber'));
    }
    

    public function inviaRichiesta(Request $request)
    {
        // Validazione dei dati
        $validatedData = $request->validate([
            'room_number' => 'required|',
            'message' => 'required',
            'subcategory' => 'required',
        ]);
    
        // Ottieni il nome della sottocategoria dalla tabella Subcategory
        $selectedSubcategory = Subcategory::find($validatedData['subcategory'])->name;
    
        //MAIL
    
        // Dati da passare
        $details = [
            'room_number' => $validatedData['room_number'],
            'message' => $validatedData['message'],
            'subcategory' => $selectedSubcategory, // Passa il nome invece dell'ID
        ];
    
        // Invia l'email
        Mail::to('info@concierge.com')->send(new RichiestaInformazioni($details));
    
        // Redirect con il valore della sottocategoria selezionata
        return redirect()->route('chiediconcierge')->with([
            'success' => 'Richiesta inviata con successo! Il nostro concierge ti contatterà al più presto.',
            'selected_subcategory' => $selectedSubcategory,
        ]);
    }
    
}

        