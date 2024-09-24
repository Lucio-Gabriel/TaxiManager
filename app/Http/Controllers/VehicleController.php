<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    //
   public function vehicle()
   {
        return view('register.vehicle_register');
   }

   public function vehicle_action(Request $request)
   {
        $data = $request->only(
            'numeroPlaca',
            'marca',
            'modelo',
            'ano_fabricacao'
        );

        $data['user_id'] = 1;

        $dbVehicles = Vehicle::create($data);

        return redirect(route('home'));
   }
}
