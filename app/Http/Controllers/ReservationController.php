<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller
{
    //
    public function store($user_id, $product_id)
{               
    $checkReservation = Reservation::where('user_id', $user_id)->where('product_id', $product_id)->first();

    if (empty($checkReservation)) {
        $reservation = new Reservation();
        $reservation->user_id = $user_id;
        $reservation->product_id = $product_id;
        $reservation->save();

        return response()->json($reservation, 201); 
    }

    return response()->json(['error' => 'Vous avez déjà réservé ce produit'], 409); 
}




    public function delete($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();
        return back()->with('success' , 'reservation  supprimé');
    }

    public function show()
    {
        $reservations = Reservation::where('user_id', session()->get('user_id'))->get();
        return response()->json($reservations, 200);

    }

    
}
