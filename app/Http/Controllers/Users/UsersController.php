<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prop\AllRequest;
use App\Models\Prop\Property;
use App\Models\Prop\SavedProp;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{


    public function allRequests()
{
    if (auth()->user()) {
        $allRequests = AllRequest::where('user_id', auth()->id())->get();

        $relations = [];

        foreach ($allRequests as $request) {
            $prodId = $request->prop_id; // Ajusta según el nombre real del campo

            // Buscar la propiedad por $prodId y obtener el campo 'title'
            $property = Property::find($prodId);

            if ($property) {
                $relations[] = [
                    'id' => $prodId,
                    'title' => $property->title,
                  ];
            } else {
                // Manejar la situación donde no se encuentra la propiedad
                Log::error("No se encontró la propiedad para prop_id: $prodId");
            }
        }

        // Devolver la vista con los datos correctamente estructurados
        return view('users.displayrequests', [
            'allRequests' => $allRequests,
            'relations' => $relations,
        ]);
    } else {
        return abort(404);
    }
}



    public function allSavedProps()
    {
        if (auth()->user()) {
            $allSavedProps = SavedProp::where('user_id', Auth::user()->id)->get();

            return view('users.displaysavedprops', compact('allSavedProps'));
        } else {
            return abort('404');
        }
    }
}
