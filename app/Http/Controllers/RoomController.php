<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;


class RoomController extends Controller
{

    public function login(Request $request)
{
    $credentials = $request->only('room_number', 'password');

    // Recupera la stanza corrispondente al numero della stanza fornito
    $room = Room::where('room_number', $credentials['room_number'])->first();

    if ($room && password_verify($credentials['password'], $room->password)) {
   
        // Memorizza il numero della stanza nella sessione
        session(['room_number' => $credentials['room_number']]);
        
        return redirect()->route('homeservice');

    } else {
        // Credenziali non valide
        session()->flash('error_message', 'Le credenziali inserite non sono valide');
        return redirect()->route('home');
        // return response()->json(['message' => 'Le credenziali inserite non sono valide'], 401);
    }
}

    
}
