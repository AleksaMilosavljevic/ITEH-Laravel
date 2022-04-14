<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResursVlasnik;
use App\Models\Vlasnik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VlasnikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $v = Vlasnik::all();
        return ResursVlasnik::collection($v);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'imePrezime' => 'required|string',
            'adresa' => 'required|string',
            'iskustvo' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['Greška', $validator->errors()]);
        }

        $v = Vlasnik::create([
            'imePrezime' => $request->imePrezime,
            'adresa' => $request->adresa,
            'iskustvo' => $request->iskustvo,
        ]);

        return response()->json(['Vlasnik kreiran', new ResursVlasnik($v)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vlasnik  $vlasnik
     * @return \Illuminate\Http\Response
     */
    public function show(Vlasnik $vlasnik)
    {
        return new ResursVlasnik($vlasnik);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vlasnik  $vlasnik
     * @return \Illuminate\Http\Response
     */
    public function edit(Vlasnik $vlasnik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vlasnik  $vlasnik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vlasnik $vlasnik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vlasnik  $vlasnik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vlasnik $vlasnik)
    {
        $vlasnik->delete();
        return response()->json(['Vlasnik obrisan', new ResursVlasnik($vlasnik)]);
    }
}
