<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class utazasController extends Controller
{
    public function index()
    {
        $utazasok = \App\Utazas::orderBy('datum', 'ASC')
            ->get();


        return view('welcome', ['utazas' => $utazasok]);
    }

    public function show($id)
    {
        $utazasok = \App\Utazas::where('id', $id)->first();
        $utazo = \App\User::where('utazasid', $id)->count('id');
        return view('utazas', compact('utazasok'), ['utazo' => $utazo]);
    }

    public function ujShow()
    {
        return view('uj');
    }

    public function store(Request $request)
    {
        $request->validate([
            'megnevezes' => 'required|min:3',
            'ar' => 'required',
            'datum' => 'required|date',
            'dateig' => 'required|date',
            'rovidleiras' => 'required',
            'hosszuleiras' => 'required',
            'helyszin' => 'required',
            'maxletszam' => 'required',
        ]);

        $utazasok = new \App\Utazas();
        $utazasok->megnevezes = $request->get('megnevezes');
        $utazasok->ar = $request->get('ar');
        $utazasok->datum = $request->get('datum');
        $utazasok->dateig = $request->get('dateig');
        $utazasok->rovidleiras = $request->get('rovidleiras');
        $utazasok->hosszuleiras = $request->get('hosszuleiras');
        $utazasok->helyszin = $request->get('helyszin');
        $utazasok->maxletszam = $request->get('maxletszam');

        $utazasok->save();

        return redirect('/');
    }

    public function joinTravel($id)
    {
        $utazik = \App\Utazas::findOrFail($id);
        $utazo = Auth::user();

        $utazo['utazasid'] = $utazik->id;

        $utazo->save();
        session()->flash('success', 'Sikeresen jelentkezett az utazásra!');

        return redirect('/');
    }

    public function utazastLemond($id)
    {
        $utazik = \App\Utazas::findOrFail($id);
        $utazo = Auth::user();

        $utazo['utazasid'] = 0;
        $utazo->save();
        session()->flash('cancel', 'Sikeresen leiratkozott az utazásról.');

        return redirect('/');

    }
}
