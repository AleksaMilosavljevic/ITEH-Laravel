<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResursProizvodjac;
use App\Models\Proizvodjac;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProizvodjacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p = Proizvodjac::all();
        return ResursProizvodjac::collection($p);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proizvodjac  $proizvodjac
     * @return \Illuminate\Http\Response
     */
    public function show(Proizvodjac $proizvodjac)
    {
        return new ResursProizvodjac($proizvodjac);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proizvodjac  $proizvodjac
     * @return \Illuminate\Http\Response
     */
    public function edit(Proizvodjac $proizvodjac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proizvodjac  $proizvodjac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proizvodjac $proizvodjac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proizvodjac  $proizvodjac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proizvodjac $proizvodjac)
    {
        $proizvodjac->delete();
        return response()->json(['Proizvođač obrisan', new ResursProizvodjac($proizvodjac)]);
    }
}
