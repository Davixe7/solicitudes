<?php

namespace App\Http\Controllers;

use App\Models\Solicitude;
use Illuminate\Http\Request;

class SolicitudeController extends Controller
{
    public function show(Request $request, Solicitude $solicitude){
        $dpi = $solicitude->getFirstMediaUrl('dpi');
        $solicitude->dpi = $dpi;
        return response()->json(['data'=>$solicitude]);
    }

    public function index(Request $request){
        $solicitudes = Solicitude::all();
        return response()->json(['data'=>$solicitudes]);
    }

    public function store(Request $request){
        $solicitud = Solicitude::create( $request->all() );

        if( $request->hasFile('attachment') ){
            $solicitud->addMediaFromRequest('attachment')->toMediaCollection('dpi');
        }

        return response()->json(['data'=>$solicitud]);
    }
}
